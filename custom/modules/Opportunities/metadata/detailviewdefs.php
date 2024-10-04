<?php
$viewdefs ['Opportunities'] =
array (
  'DetailView' =>
  array (
    'templateMeta' =>
    array (
      'form' =>
      array (
        'buttons' =>
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
          4 =>
          array (
            'customCode' => '<input type="submit" class="button" onClick="this.form.action.value=\'convertToQuote\';" value="{$MOD.LBL_CONVERT_TO_QUOTE}">',
            'sugar_html' =>
            array (
              'type' => 'submit',
              'value' => '{$MOD.LBL_CONVERT_TO_QUOTE}',
              'htmlOptions' =>
              array (
                'class' => 'button',
                'id' => 'convert_to_quote_button',
                'title' => '{$MOD.LBL_CONVERT_TO_QUOTE}',
                'onclick' => 'this.form.action.value=\'convertToQuote\';',
                'name' => 'Convert to Quote',
              ),
            ),
          ),
            5 =>
                array(
                    'customCode' => '<input type="button" class="button" onClick="showPopup(\'pdf\');" value="Print As PDF">',
                ),
        ),
      ),
      'maxColumns' => '2',
      'widths' =>
      array (
        0 =>
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 =>
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => true,
      'tabDefs' =>
      array (
        'DEFAULT' =>
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ASSIGNMENT' =>
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_LINE_ITEMS' =>
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' =>
    array (
      'default' =>
      array (
        0 =>
        array (
          0 => 'name',
          1 => 'account_name',
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'amount',
            'label' => '{$MOD.LBL_AMOUNT} ({$CURRENCY})',
          ),
          1 => 'date_closed',
        ),
        2 =>
        array (
          0 => 'sales_stage',
          1 => 'opportunity_type',
        ),
        3 =>
        array (
          0 => 'probability',
          1 => 'lead_source',
        ),
        4 =>
        array (
          0 => 'next_step',
          1 => 'campaign_name',
        ),
        5 =>
        array (
          0 =>
          array (
            'name' => 'description',
            'nl2br' => true,
          ),
        ),
        6 =>
        array (
          0 =>
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
          1 =>
          array (
            'name' => 'projecttask_opportunities_1_name',
          ),
        ),
      ),
      'lbl_line_items' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'currency_id',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
          1 => '',
        ),
        1 =>
        array (
          0 =>
          array (
            'name' => 'line_items',
            'label' => 'LBL_LINE_ITEMS',
          ),
        ),
        2 =>
        array (
          0 => '',
        ),
        3 =>
        array (
          0 =>
          array (
            'name' => 'total_amt',
            'label' => 'LBL_TOTAL_AMT',
          ),
        ),
        4 =>
        array (
          0 =>
          array (
            'name' => 'discount_amount',
            'label' => 'LBL_DISCOUNT_AMOUNT',
          ),
        ),
        5 =>
        array (
          0 =>
          array (
            'name' => 'subtotal_amount',
            'label' => 'LBL_SUBTOTAL_AMOUNT',
          ),
        ),
        6 =>
        array (
          0 =>
          array (
            'name' => 'shipping_amount',
            'label' => 'LBL_SHIPPING_AMOUNT',
          ),
        ),
        7 =>
        array (
          0 =>
          array (
            'name' => 'shipping_tax_amt',
            'label' => 'LBL_SHIPPING_TAX_AMT',
          ),
        ),
        8 =>
        array (
          0 =>
          array (
            'name' => 'tax_amount',
            'label' => 'LBL_TAX_AMOUNT',
          ),
        ),
        9 =>
        array (
          0 =>
          array (
            'name' => 'total_amount',
            'label' => 'LBL_GRAND_TOTAL',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' =>
      array (
        0 =>
        array (
          0 =>
          array (
            'name' => 'date_modified',
            'label' => 'LBL_DATE_MODIFIED',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
          ),
          1 =>
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
          ),
        ),
      ),
    ),
  ),
);
;
?>
