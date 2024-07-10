<?php
// created: 2024-07-02 13:59:43
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'serial_number' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_SERIAL_NUMBER',
    'width' => '10%',
    'default' => true,
  ),
  'product' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_PRODUCT',
    'id' => 'AOS_PRODUCTS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'AOS_Products',
    'target_record_key' => 'aos_products_id_c',
  ),
  'supplier' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'vname' => 'LBL_SUPPLIER',
    'id' => 'SPL_SUPPLIERS_ID_C',
    'link' => true,
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'SPL_Suppliers',
    'target_record_key' => 'spl_suppliers_id_c',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'UT_Sub_Installation',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'UT_Sub_Installation',
    'width' => '5%',
    'default' => true,
  ),
);