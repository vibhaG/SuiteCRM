<?php    
if (!(ACLController::checkAccess('AOS_Quotes', 'edit', true))) {
    ACLController::displayNoAccess();
    die;
}

require_once('modules/AOS_Quotes/AOS_Quotes.php');
require_once('modules/AOS_Products_Quotes/AOS_Products_Quotes.php');

global $timedate,$db;
//Setting values in Quotes
$oOpportunity = BeanFactory::getBean("Opportunities",$_REQUEST['record']);

//Setting Invoice Values
$oQuote = BeanFactory::getBean("AOS_Quotes");
$rawRow = $oOpportunity->fetched_row;
$rawRow['id'] = '';
$rawRow['template_ddown_c'] = ' ';
$rawRow['quote_number'] = $rawRow['number'];
$rawRow['number'] = '';
$dt = explode(' ', $rawRow['date_entered']);
$rawRow['quote_date'] = $dt[0];
$rawRow['expiration'] = $rawRow['date_closed'];
$rawRow['total_amt'] = format_number($rawRow['total_amt']);
$rawRow['discount_amount'] = format_number($rawRow['discount_amount']);
$rawRow['subtotal_amount'] = format_number($rawRow['subtotal_amount']);
$rawRow['tax_amount'] = format_number($rawRow['tax_amount']);
$rawRow['date_entered'] = '';
$rawRow['date_modified'] = '';
if ($rawRow['shipping_amount'] != null) {
    $rawRow['shipping_amount'] = format_number($rawRow['shipping_amount']);
}
$rawRow['total_amount'] = format_number($rawRow['total_amount']);
$oQuote->populateFromRow($rawRow);

//Relate Account & copy over Billing Address by default
if(!empty($oOpportunity->account_id)) {
    $oAccount = BeanFactory::getBean("Accounts",$oOpportunity->account_id);
    $oQuote->billing_account_id = $oAccount->id;
    $oQuote->billing_address_street = $oAccount->billing_address_street;
    $oQuote->billing_address_city = $oAccount->billing_address_city;
    $oQuote->billing_address_state = $oAccount->billing_address_state;
    $oQuote->billing_address_postalcode = $oAccount->billing_address_postalcode;
    $oQuote->billing_address_country = $oAccount->billing_address_country;
}
$oQuote->opportunity_id = $oOpportunity->id; 
$oQuote->process_save_dates =false;
$oQuote->save();
//Setting Group Line Items
$result = $db->query("SELECT * FROM aos_line_item_groups WHERE parent_type = 'Opportunity' AND parent_id = '".$oOpportunity->id."' AND deleted = 0",true);
$OppToQuoteGroupIds = array();
while ($row = $db->fetchByAssoc($result)) {
    $quoteGroupId = $row['id'];
    $row['id'] = '';
    $row['parent_id'] = $oQuote->id;
    $row['parent_type'] = 'AOS_Quotes';
    if ($row['total_amt'] != null) {
        $row['total_amt'] = format_number($row['total_amt']);
    }
    if ($row['discount_amount'] != null) {
        $row['discount_amount'] = format_number($row['discount_amount']);
    }
    if ($row['subtotal_amount'] != null) {
        $row['subtotal_amount'] = format_number($row['subtotal_amount']);
    }
    if ($row['tax_amount'] != null) {
        $row['tax_amount'] = format_number($row['tax_amount']);
    }
    if ($row['subtotal_tax_amount'] != null) {
        $row['subtotal_tax_amount'] = format_number($row['subtotal_tax_amount']);
    }
    if ($row['total_amount'] != null) {
        $row['total_amount'] = format_number($row['total_amount']);
    }
    $group_invoice = new AOS_Line_Item_Groups();
    $group_invoice->populateFromRow($row);
    $group_invoice->save();
    $OppToQuoteGroupIds[$quoteGroupId] = $group_invoice->id;
}

//Setting Line Items
$result = $db->query("SELECT * FROM aos_products_quotes WHERE parent_type = 'Opportunity' AND parent_id = '".$oOpportunity->id."' AND deleted = 0",true);
while ($row = $db->fetchByAssoc($result)) {
    $row['id'] = '';
    $row['parent_id'] = $oQuote->id;
    $row['parent_type'] = 'AOS_Quotes';
    $row['group_id'] = $OppToQuoteGroupIds[$row['group_id']];
    if ($row['product_cost_price'] != null) {
        $row['product_cost_price'] = format_number($row['product_cost_price']);
    }
    $row['product_list_price'] = format_number($row['product_list_price']);
    if ($row['product_discount'] != null) {
        $row['product_discount'] = format_number($row['product_discount']);
        $row['product_discount_amount'] = format_number($row['product_discount_amount']);
    }
    $row['product_unit_price'] = format_number($row['product_unit_price']);
    $row['vat_amt'] = format_number($row['vat_amt']);
    $row['product_total_price'] = format_number($row['product_total_price']);
    $row['product_qty'] = format_number($row['product_qty']);
    $prod_invoice = new AOS_Products_Quotes();
    $prod_invoice->populateFromRow($row);
    $prod_invoice->save();
}
ob_clean();
header('Location: index.php?module=AOS_Quotes&action=EditView&record='.$oQuote->id);

