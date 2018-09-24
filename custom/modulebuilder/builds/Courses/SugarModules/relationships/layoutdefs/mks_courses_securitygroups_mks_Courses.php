<?php
 // created: 2018-09-24 16:16:47
$layout_defs["mks_Courses"]["subpanel_setup"]['mks_courses_securitygroups'] = array (
  'order' => 100,
  'module' => 'SecurityGroups',
  'subpanel_name' => 'admin',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_COURSES_SECURITYGROUPS_FROM_SECURITYGROUPS_TITLE',
  'get_subpanel_data' => 'mks_courses_securitygroups',
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
