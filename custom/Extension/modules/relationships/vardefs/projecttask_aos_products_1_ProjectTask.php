<?php
// created: 2024-08-08 12:40:23
$dictionary["ProjectTask"]["fields"]["projecttask_aos_products_1"] = array (
  'name' => 'projecttask_aos_products_1',
  'type' => 'link',
  'relationship' => 'projecttask_aos_products_1',
  'source' => 'non-db',
  'module' => 'AOS_Products',
  'bean_name' => 'AOS_Products',
  'side' => 'right',
  'vname' => 'LBL_PROJECTTASK_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
);
$dictionary["ProjectTask"]["fields"]["projecttask_aos_products_1_name"] = array (
    'name' => 'projecttask_aos_products_1_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_PROJECTTASK_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
    'save' => true,
    'id_name' => 'projecttask_aos_products_1projecttask_ida',
    'link' => 'projecttask_aos_products_1',
    'table' => 'AOS_Products',
    'module' => 'AOS_Products',
    'rname' => 'name',
);
$dictionary["ProjectTask"]["fields"]["projecttask_aos_products_1projecttask_ida"] = array (
    'name' => 'projecttask_aos_products_1projecttask_ida',
    'type' => 'link',
    'relationship' => 'projecttask_aos_products_1',
    'source' => 'non-db',
    'reportable' => false,
    'side' => 'right',
    'vname' => 'LBL_PROJECTTASK_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
);
