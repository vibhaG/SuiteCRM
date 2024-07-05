<?php
$viewdefs ['ProjectTask'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/ProjectTask/ProjectTask.js',
        ),
      ),
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
        ),
        'hideAudit' => true,
      ),
      'useTabs' => true,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_TIMELINE' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'status',
        ),
        1 => 
        array (
          0 => '',
          1 => 
          array (
            'name' => 'visit_type_c',
            'studio' => 'visible',
            'label' => 'LBL_VISIT_TYPE',
          ),
        ),
        2 => 
        array (
          0 => '',
          1 => 'date_start',
        ),
        3 => 
        array (
          0 => 'date_finish',
          1 => 'priority',
        ),
        4 => 
        array (
          0 => 'percent_complete',
          1 => 
          array (
            'name' => 'project_name',
            'customCode' => '<a href="index.php?module=Project&action=DetailView&record={$fields.project_id.value}">{$fields.project_name.value}&nbsp;</a>',
            'label' => 'LBL_PARENT_ID',
          ),
        ),
        5 => 
        array (
          0 => 'task_number',
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_USER_ID',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'description',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'ut_installation_projecttask_1_name',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'job_description',
            'label' => 'LBL_JOB_DESCRIPTION',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'pending_problem',
            'label' => 'LBL_PENDING_PROBLEM',
          ),
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'spares_used',
            'label' => 'LBL_SPARES_USED',
          ),
        ),
      ),
      'LBL_PANEL_TIMELINE' => 
      array (
        0 => 
        array (
          0 => 'estimated_effort',
          1 => 
          array (
            'name' => 'actual_effort',
            'label' => 'LBL_ACTUAL_EFFORT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'predecessors',
            'label' => 'LBL_PREDECESSORS',
          ),
          1 => 
          array (
            'name' => 'relationship_type',
            'studio' => 'visible',
            'label' => 'LBL_RELATIONSHIP_TYPE',
          ),
        ),
        2 => 
        array (
          0 => 'order_number',
          1 => 
          array (
            'name' => 'milestone_flag',
            'label' => 'LBL_MILESTONE_FLAG',
          ),
        ),
        3 => 
        array (
          0 => 'utilization',
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'duration',
            'label' => 'LBL_DURATION',
          ),
          1 => 
          array (
            'name' => 'duration_unit',
            'label' => 'LBL_DURATION_UNIT',
          ),
        ),
      ),
    ),
  ),
);
;
?>
