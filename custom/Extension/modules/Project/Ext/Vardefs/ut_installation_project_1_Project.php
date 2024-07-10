<?php
// created: 2024-07-02 13:52:06
$dictionary["Project"]["fields"]["ut_installation_project_1"] = array (
  'name' => 'ut_installation_project_1',
  'type' => 'link',
  'relationship' => 'ut_installation_project_1',
  'source' => 'non-db',
  'module' => 'UT_Installation',
  'bean_name' => 'UT_Installation',
  'vname' => 'LBL_UT_INSTALLATION_PROJECT_1_FROM_UT_INSTALLATION_TITLE',
  'id_name' => 'ut_installation_project_1ut_installation_ida',
);
$dictionary["Project"]["fields"]["ut_installation_project_1_name"] = array (
  'name' => 'ut_installation_project_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_UT_INSTALLATION_PROJECT_1_FROM_UT_INSTALLATION_TITLE',
  'save' => true,
  'id_name' => 'ut_installation_project_1ut_installation_ida',
  'link' => 'ut_installation_project_1',
  'table' => 'ut_installation',
  'module' => 'UT_Installation',
  'rname' => 'name',
);
$dictionary["Project"]["fields"]["ut_installation_project_1ut_installation_ida"] = array (
  'name' => 'ut_installation_project_1ut_installation_ida',
  'type' => 'link',
  'relationship' => 'ut_installation_project_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_UT_INSTALLATION_PROJECT_1_FROM_PROJECT_TITLE',
);
