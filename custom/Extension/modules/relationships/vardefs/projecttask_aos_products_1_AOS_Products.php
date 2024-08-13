<?php
// created: 2024-08-08 12:40:23
$dictionary["AOS_Products"]["fields"]["projecttask_aos_products_1"] = array (
  'name' => 'projecttask_aos_products_1',
  'type' => 'link',
  'relationship' => 'projecttask_aos_products_1',
  'source' => 'non-db',
  'module' => 'ProjectTask',
  'bean_name' => 'ProjectTask',
  'vname' => 'LBL_PROJECTTASK_AOS_PRODUCTS_1_FROM_PROJECTTASK_TITLE',
  'id_name' => 'projecttask_aos_products_1projecttask_ida',
);
$dictionary["AOS_Products"]["fields"]["projecttask_aos_products_1_name"] = array (
  'name' => 'projecttask_aos_products_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROJECTTASK_AOS_PRODUCTS_1_FROM_PROJECTTASK_TITLE',
  'save' => true,
  'id_name' => 'projecttask_aos_products_1projecttask_ida',
  'link' => 'projecttask_aos_products_1',
  'table' => 'project_task',
  'module' => 'ProjectTask',
  'rname' => 'name',
);
$dictionary["AOS_Products"]["fields"]["projecttask_aos_products_1projecttask_ida"] = array (
  'name' => 'projecttask_aos_products_1projecttask_ida',
  'type' => 'link',
  'relationship' => 'projecttask_aos_products_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PROJECTTASK_AOS_PRODUCTS_1_FROM_AOS_PRODUCTS_TITLE',
);
