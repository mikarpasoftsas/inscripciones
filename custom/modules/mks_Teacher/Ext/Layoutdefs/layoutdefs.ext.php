<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-10-25 15:02:33
$layout_defs["mks_Teacher"]["subpanel_setup"]['mks_academicgroups_mks_teacher_1'] = array (
  'order' => 100,
  'module' => 'mks_AcademicGroups',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_ACADEMICGROUPS_MKS_TEACHER_1_FROM_MKS_ACADEMICGROUPS_TITLE',
  'get_subpanel_data' => 'mks_academicgroups_mks_teacher_1',
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


 // created: 2018-10-25 14:16:55
$layout_defs["mks_Teacher"]["subpanel_setup"]['mks_teacher_mks_groupmatterteachers_1'] = array (
  'order' => 100,
  'module' => 'mks_GroupMatterTeachers',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_TEACHER_MKS_GROUPMATTERTEACHERS_1_FROM_MKS_GROUPMATTERTEACHERS_TITLE',
  'get_subpanel_data' => 'mks_teacher_mks_groupmatterteachers_1',
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


 // created: 2018-09-24 16:22:53
$layout_defs["mks_Teacher"]["subpanel_setup"]['mks_teacher_securitygroups'] = array (
  'order' => 100,
  'module' => 'SecurityGroups',
  'subpanel_name' => 'admin',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_TEACHER_SECURITYGROUPS_FROM_SECURITYGROUPS_TITLE',
  'get_subpanel_data' => 'mks_teacher_securitygroups',
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

?>