<?php
// created: 2024-07-09 16:58:16
$dictionary["Case"]["fields"]["projecttask_cases_1"] = array (
  'name' => 'projecttask_cases_1',
  'type' => 'link',
  'relationship' => 'projecttask_cases_1',
  'source' => 'non-db',
  'module' => 'ProjectTask',
  'bean_name' => 'ProjectTask',
  'vname' => 'LBL_PROJECTTASK_CASES_1_FROM_PROJECTTASK_TITLE',
  'id_name' => 'projecttask_cases_1projecttask_ida',
);
$dictionary["Case"]["fields"]["projecttask_cases_1_name"] = array (
  'name' => 'projecttask_cases_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PROJECTTASK_CASES_1_FROM_PROJECTTASK_TITLE',
  'save' => true,
  'id_name' => 'projecttask_cases_1projecttask_ida',
  'link' => 'projecttask_cases_1',
  'table' => 'project_task',
  'module' => 'ProjectTask',
  'rname' => 'name',
);
$dictionary["Case"]["fields"]["projecttask_cases_1projecttask_ida"] = array (
  'name' => 'projecttask_cases_1projecttask_ida',
  'type' => 'link',
  'relationship' => 'projecttask_cases_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PROJECTTASK_CASES_1_FROM_CASES_TITLE',
);
