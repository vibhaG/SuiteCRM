<?php
// created: 2024-08-08 12:41:09
$dictionary["AOS_Products"]["fields"]["projecttask_aos_products_2"] = array (
  'name' => 'projecttask_aos_products_2',
  'type' => 'link',
  'relationship' => 'projecttask_aos_products_2',
  'source' => 'non-db',
  'module' => 'ProjectTask',
  'bean_name' => 'ProjectTask',
  'vname' => 'LBL_PROJECTTASK_AOS_PRODUCTS_2_FROM_PROJECTTASK_TITLE',
  'id_name' => 'projecttask_aos_products_2projecttask_ida',
);
$dictionary["AOS_Products"]["fields"]["projecttask_aos_products_2_name"] = array (
  'name' => 'projecttask_aos_products_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROJECTTASK_AOS_PRODUCTS_2_FROM_PROJECTTASK_TITLE',
  'save' => true,
  'id_name' => 'projecttask_aos_products_2projecttask_ida',
  'link' => 'projecttask_aos_products_2',
  'table' => 'project_task',
  'module' => 'ProjectTask',
  'rname' => 'name',
);
$dictionary["AOS_Products"]["fields"]["projecttask_aos_products_2projecttask_ida"] = array (
  'name' => 'projecttask_aos_products_2projecttask_ida',
  'type' => 'link',
  'relationship' => 'projecttask_aos_products_2',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PROJECTTASK_AOS_PRODUCTS_2_FROM_AOS_PRODUCTS_TITLE',
);
