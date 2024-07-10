<?php
// created: 2024-07-02 13:52:06
$dictionary["ut_installation_project_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'ut_installation_project_1' => 
    array (
      'lhs_module' => 'UT_Installation',
      'lhs_table' => 'ut_installation',
      'lhs_key' => 'id',
      'rhs_module' => 'Project',
      'rhs_table' => 'project',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ut_installation_project_1_c',
      'join_key_lhs' => 'ut_installation_project_1ut_installation_ida',
      'join_key_rhs' => 'ut_installation_project_1project_idb',
    ),
  ),
  'table' => 'ut_installation_project_1_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'ut_installation_project_1ut_installation_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ut_installation_project_1project_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ut_installation_project_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ut_installation_project_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ut_installation_project_1ut_installation_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ut_installation_project_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ut_installation_project_1project_idb',
      ),
    ),
  ),
);