<?php
 // created: 2024-07-04 16:33:53
$layout_defs["ProjectTask"]["subpanel_setup"]['projecttask_aos_quotes_1'] = array (
  'order' => 100,
  'module' => 'AOS_Quotes',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_PROJECTTASK_AOS_QUOTES_1_FROM_AOS_QUOTES_TITLE',
  'get_subpanel_data' => 'projecttask_aos_quotes_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
