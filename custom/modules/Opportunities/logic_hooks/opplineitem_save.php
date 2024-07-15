<?php
class OppLineItemSave
{
    /**
    * A function to save Opportunity Line Item
    * 
    * @param Object $bean
    * @param Array $event
    * @param Array $argument
    */
    public function OppLineItemSave($bean,$event,$argument) { 
        require_once('modules/AOS_Products_Quotes/AOS_Utils.php');
        perform_aos_save($bean);
        require_once('modules/AOS_Line_Item_Groups/AOS_Line_Item_Groups.php');
        $productQuoteGroup = new AOS_Line_Item_Groups();
        $productQuoteGroup->save_groups($_POST, $bean, 'group_');
        //Copy over total amount to Opportunity amount
        if(!empty($bean->total_amount)) {
            $bean->amount = $bean->total_amount;
        }
    }
    
}

?>
