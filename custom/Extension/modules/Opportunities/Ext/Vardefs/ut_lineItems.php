<?php
$dictionary['Opportunity']['fields']['line_items'] =
array(
    'required' => false,
    'name' => 'line_items',
    'vname' => 'LBL_LINE_ITEMS',
    'type' => 'function',
    'source' => 'non-db',
    'massupdate' => 0,
    'importable' => 'false',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => 0,
    'audited' => false,
    'reportable' => false,
    'inline_edit' => false,
    'function' =>
    array(
        'name' => 'display_lines',
        'returns' => 'html',
        'include' => 'modules/AOS_Products_Quotes/Line_Items.php'
    ),
);
$dictionary['Opportunity']['fields']['total_amt_usdollar'] =
array(
    'name' => 'total_amt_usdollar',
    'vname' => 'LBL_TOTAL_AMT_USDOLLAR',
    'type' => 'currency',
    'group' => 'total_amt',
    'disable_num_format' => true,
    'duplicate_merge' => '0',
    'audited' => true,
    'inline_edit' => false,
    'comment' => '',
    'studio' => array(
        'editview' => false,
        'detailview' => false,
        'quickcreate' => false,
    ),
    'len' => '26,6',
);
$dictionary['Opportunity']['fields']['total_amt'] =
array(
    'name' => 'total_amt',
    'vname' => 'LBL_TOTAL_AMT',
    'type' => 'currency',
    'group' => 'total_amt',
    'disable_num_format' => true,
    'duplicate_merge' => '0',
    'audited' => true,
    'inline_edit' => false,
    'comment' => '',
    'studio' => array(
        'editview' => false,
        'detailview' => false,
        'quickcreate' => false,
    ),
    'len' => '26,6',
);
$dictionary['Opportunity']['fields']['subtotal_amount_usdollar'] =
array(
    'name' => 'subtotal_amount_usdollar',
    'vname' => 'LBL_SUBTOTAL_AMOUNT_USDOLLAR',
    'type' => 'currency',
    'group' => 'subtotal_amount',
    'disable_num_format' => true,
    'duplicate_merge' => '0',
    'audited' => true,
    'inline_edit' => false,
    'comment' => 'Formatted amount of the opportunity',
    'studio' => array(
        'editview' => false,
        'detailview' => false,
        'quickcreate' => false,
    ),
    'len' => '26,6',
);
$dictionary['Opportunity']['fields']['subtotal_amount'] =
array(
    'required' => false,
    'name' => 'subtotal_amount',
    'vname' => 'LBL_SUBTOTAL_AMOUNT',
    'type' => 'currency',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'inline_edit' => false,
    'reportable' => true,
    'len' => '26,6',
);
$dictionary['Opportunity']['fields']['discount_amount'] =
array(
    'required' => false,
    'name' => 'discount_amount',
    'vname' => 'LBL_DISCOUNT_AMOUNT',
    'type' => 'currency',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'inline_edit' => false,
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => true,
    'len' => '26,6',
);
$dictionary['Opportunity']['fields']['discount_amount_usdollar'] =
array(
    'name' => 'discount_amount_usdollar',
    'vname' => 'LBL_DISCOUNT_AMOUNT_USDOLLAR',
    'type' => 'currency',
    'group' => 'discount_amount',
    'disable_num_format' => true,
    'duplicate_merge' => '0',
    'audited' => true,
    'inline_edit' => false,
    'comment' => '',
    'studio' => array(
        'editview' => false,
        'detailview' => false,
        'quickcreate' => false,
    ),
    'len' => '26,6',
);
$dictionary['Opportunity']['fields']['tax_amount'] =
array(
    'required' => false,
    'name' => 'tax_amount',
    'vname' => 'LBL_TAX_AMOUNT',
    'type' => 'currency',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'inline_edit' => false,
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 1,
    'reportable' => true,
    'len' => '26,6',
);
$dictionary['Opportunity']['fields']['tax_amount_usdollar'] =
array(
    'name' => 'tax_amount_usdollar',
    'vname' => 'LBL_TAX_AMOUNT_USDOLLAR',
    'type' => 'currency',
    'group' => 'tax_amount',
    'disable_num_format' => true,
    'duplicate_merge' => '0',
    'inline_edit' => false,
    'audited' => true,
    'comment' => '',
    'studio' => array(
        'editview' => false,
        'detailview' => false,
        'quickcreate' => false,
    ),
    'len' => '26,6',
);
$dictionary['Opportunity']['fields']['shipping_amount'] =
array(
    'required' => false,
    'name' => 'shipping_amount',
    'vname' => 'LBL_SHIPPING_AMOUNT',
    'type' => 'currency',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'inline_edit' => false,
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => true,
    'len' => '26,6',
);
$dictionary['Opportunity']['fields']['shipping_amount_usdollar'] =
array(
    'name' => 'shipping_amount_usdollar',
    'vname' => 'LBL_SHIPPING_AMOUNT_USDOLLAR',
    'type' => 'currency',
    'group' => 'shipping_amount',
    'disable_num_format' => true,
    'duplicate_merge' => '0',
    'audited' => true,
    'inline_edit' => false,
    'comment' => '',
    'studio' => array(
        'editview' => false,
        'detailview' => false,
        'quickcreate' => false,
    ),
    'len' => '26,6',
);
$dictionary['Opportunity']['fields']['shipping_tax'] =
array(
    'required' => false,
    'name' => 'shipping_tax',
    'vname' => 'LBL_SHIPPING_TAX',
    'type' => 'enum',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => true,
    'inline_edit' => false,
    'len' => 100,
    'options' => 'vat_list',
    'studio' => 'visible',
);
$dictionary['Opportunity']['fields']['shipping_tax_amt'] =
array(
    'required' => false,
    'name' => 'shipping_tax_amt',
    'vname' => 'LBL_SHIPPING_TAX_AMT',
    'type' => 'currency',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'duplicate_merge_dom_value' => '0',
    'audited' => 0,
    'reportable' => true,
    'inline_edit' => false,
    'len' => '26,6',
    'size' => '10',
    'enable_range_search' => false,
    'function' =>
    array(
        'name' => 'display_shipping_vat',
        'returns' => 'html',
        'include' => 'modules/AOS_Products_Quotes/Line_Items.php'
    ),
);
$dictionary['Opportunity']['fields']['shipping_tax_amt_usdollar']=
array(
    'name' => 'shipping_tax_amt_usdollar',
    'vname' => 'LBL_SHIPPING_TAX_AMT_USDOLLAR',
    'type' => 'currency',
    'group' => 'shipping_tax_amt',
    'disable_num_format' => true,
    'duplicate_merge' => '0',
    'inline_edit' => false,
    'audited' => true,
    'comment' => '',
    'studio' => array(
        'editview' => false,
        'detailview' => false,
        'quickcreate' => false,
    ),
    'len' => '26,6',
);
$dictionary['Opportunity']['fields']['total_amount'] =
array(
    'required' => false,
    'name' => 'total_amount',
    'vname' => 'LBL_GRAND_TOTAL',
    'type' => 'currency',
    'massupdate' => 0,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'disabled',
    'inline_edit' => false,
    'duplicate_merge_dom_value' => '0',
    'audited' => false,
    'reportable' => true,
    'len' => '26,6',
    'enable_range_search' => true,
    'options' => 'numeric_range_search_dom',
);
$dictionary['Opportunity']['fields']['total_amount_usdollar'] =
array(
    'name' => 'total_amount_usdollar',
    'vname' => 'LBL_GRAND_TOTAL_USDOLLAR',
    'type' => 'currency',
    'group' => 'total_amount',
    'inline_edit' => false,
    'disable_num_format' => true,
    'duplicate_merge' => '0',
    'audited' => true,
    'comment' => '',
    'studio' => array(
        'editview' => false,
        'detailview' => false,
        'quickcreate' => false,
    ),
    'len' => '26,6',
);
$dictionary['Opportunity']['fields']['aos_products_quotes'] =
array(
    'name' => 'aos_products_quotes',
    'vname' => 'LBL_AOS_PRODUCT_QUOTES',
    'type' => 'link',
    'relationship' => 'opportunities_aos_products_quotes_1',
    'module' => 'AOS_Products_Quotes',
    'bean_name' => 'AOS_Products_Quotes',
    'source' => 'non-db',
);

$dictionary['Opportunity']['fields']['aos_line_item_groups'] =
array(
    'name' => 'aos_line_item_groups',
    'vname' => 'LBL_AOS_LINE_ITEM_GROUPS',
    'type' => 'link',
    'relationship' => 'opportunities_aos_line_item_groups',
    'module' => 'AOS_Line_Item_Groups',
    'bean_name' => 'AOS_Line_Item_Groups',
    'source' => 'non-db',
);

$dictionary['Opportunity']['relationships']['aos_product_quotes_1'] =
array(
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Products_Quotes',
    'rhs_table' => 'aos_products_quotes',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
);
$dictionary['Opportunity']['relationships']['opportunities_aos_line_item_groups'] =
array(
    'lhs_module' => 'Opportunities',
    'lhs_table' => 'opportunities',
    'lhs_key' => 'id',
    'rhs_module' => 'AOS_Line_Item_Groups',
    'rhs_table' => 'aos_line_item_groups',
    'rhs_key' => 'parent_id',
    'relationship_type' => 'one-to-many',
);
