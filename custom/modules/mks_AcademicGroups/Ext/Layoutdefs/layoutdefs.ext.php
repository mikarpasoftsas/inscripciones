<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-10-25 14:07:23
$layout_defs["mks_AcademicGroups"]["subpanel_setup"]['mks_academicgroups_mks_groupmatters_1'] = array (
  'order' => 100,
  'module' => 'mks_GroupMatters',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_ACADEMICGROUPS_MKS_GROUPMATTERS_1_FROM_MKS_GROUPMATTERS_TITLE',
  'get_subpanel_data' => 'mks_academicgroups_mks_groupmatters_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
  ),
);


 // created: 2018-10-22 21:39:35
$layout_defs["mks_AcademicGroups"]["subpanel_setup"]['mks_academicgroups_mks_groupschedule'] = array (
  'order' => 100,
  'module' => 'mks_GroupSchedule',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_ACADEMICGROUPS_MKS_GROUPSCHEDULE_FROM_MKS_GROUPSCHEDULE_TITLE',
  'get_subpanel_data' => 'mks_academicgroups_mks_groupschedule',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 =>
    array(
      'widget_class' => 'SubPanelSeeOccupationButton',
    ),
  ),
);


 // created: 2018-10-25 15:02:33
$layout_defs["mks_AcademicGroups"]["subpanel_setup"]['mks_academicgroups_mks_teacher_1'] = array (
  'order' => 100,
  'module' => 'mks_Teacher',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_ACADEMICGROUPS_MKS_TEACHER_1_FROM_MKS_TEACHER_TITLE',
  'get_subpanel_data' => 'mks_academicgroups_mks_teacher_1',
  'top_buttons' => 
  array (
    0=> 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2018-10-22 21:39:35
$layout_defs["mks_AcademicGroups"]["subpanel_setup"]['mks_academicgroups_securitygroups'] = array (
  'order' => 100,
  'module' => 'SecurityGroups',
  'subpanel_name' => 'admin',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_ACADEMICGROUPS_SECURITYGROUPS_FROM_SECURITYGROUPS_TITLE',
  'get_subpanel_data' => 'mks_academicgroups_securitygroups',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2018-10-22 21:39:35
$layout_defs["mks_AcademicGroups"]["subpanel_setup"]['mks_academicgroups_users'] = array (
  'order' => 100,
  'module' => 'Users',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_ACADEMICGROUPS_USERS_FROM_USERS_TITLE',
  'get_subpanel_data' => 'mks_academicgroups_users',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


//auto-generated file DO NOT EDIT
$layout_defs['mks_AcademicGroups']['subpanel_setup']['mks_academicgroups_mks_groupmatters_1']['override_subpanel_name'] = 'mks_AcademicGroups_subpanel_mks_academicgroups_mks_groupmatters_1';

?>