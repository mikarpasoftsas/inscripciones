<?php
 // created: 2018-09-24 16:21:43
$layout_defs["SecurityGroups"]["subpanel_setup"]['mks_classroom_securitygroups'] = array (
  'order' => 100,
  'module' => 'mks_Classroom',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_CLASSROOM_SECURITYGROUPS_FROM_MKS_CLASSROOM_TITLE',
  'get_subpanel_data' => 'mks_classroom_securitygroups',
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
