<?php
// created: 2024-07-04 16:33:53
$dictionary["projecttask_aos_quotes_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'projecttask_aos_quotes_1' => 
    array (
      'lhs_module' => 'ProjectTask',
      'lhs_table' => 'project_task',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Quotes',
      'rhs_table' => 'aos_quotes',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'projecttask_aos_quotes_1_c',
      'join_key_lhs' => 'projecttask_aos_quotes_1projecttask_ida',
      'join_key_rhs' => 'projecttask_aos_quotes_1aos_quotes_idb',
    ),
  ),
  'table' => 'projecttask_aos_quotes_1_c',
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
      'name' => 'projecttask_aos_quotes_1projecttask_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'projecttask_aos_quotes_1aos_quotes_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'projecttask_aos_quotes_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'projecttask_aos_quotes_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'projecttask_aos_quotes_1projecttask_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'projecttask_aos_quotes_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'projecttask_aos_quotes_1aos_quotes_idb',
      ),
    ),
  ),
);