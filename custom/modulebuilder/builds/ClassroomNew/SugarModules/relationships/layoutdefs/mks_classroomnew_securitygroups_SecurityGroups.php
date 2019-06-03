<?php
 // created: 2019-04-29 18:28:10
$layout_defs["SecurityGroups"]["subpanel_setup"]['mks_classroomnew_securitygroups'] = array (
  'order' => 100,
  'module' => 'mks_ClassroomNew',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_CLASSROOMNEW_SECURITYGROUPS_FROM_MKS_CLASSROOMNEW_TITLE',
  'get_subpanel_data' => 'mks_classroomnew_securitygroups',
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
