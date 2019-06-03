<?php 
 //WARNING: The contents of this file are auto-generated


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


 // created: 2019-04-29 22:45:54
$layout_defs["mks_AcademicGroups"]["subpanel_setup"]['mks_academicgroups_mks_assists_1'] = array (
  'order' => 100,
  'module' => 'mks_Assists',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_ACADEMICGROUPS_MKS_ASSISTS_1_FROM_MKS_ASSISTS_TITLE',
  'get_subpanel_data' => 'mks_academicgroups_mks_assists_1',
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



$layout_defs['mks_AcademicGroups']['subpanel_setup']['securitygroups_mks_academicgroups'] = array(
	'top_buttons' => array(
						array(
						
							'widget_class' => 'SubPanelTopSelectButton', 
							'popup_module' => 'SecurityGroups', 
							'mode' => 'MultiSelect'
						),
	),
	'order' => 900,
	'sort_by' => 'name',
	'sort_order' => 'asc',
	'module' => 'SecurityGroups',
	'refresh_page' => 1,
	'subpanel_name' => 'default',
	'get_subpanel_data' => 'SecurityGroups',
	'add_subpanel_data' => 'securitygroup_id',
	'title_key' => 'LBL_FILIAL_SUBPANEL_TITLE',	
 );


//auto-generated file DO NOT EDIT
$layout_defs['mks_AcademicGroups']['subpanel_setup']['mks_academicgroups_mks_groupmatters_1']['override_subpanel_name'] = 'mks_AcademicGroups_subpanel_mks_academicgroups_mks_groupmatters_1';


//auto-generated file DO NOT EDIT
$layout_defs['mks_AcademicGroups']['subpanel_setup']['mks_academicgroups_mks_groupschedule']['override_subpanel_name'] = 'mks_AcademicGroups_subpanel_mks_academicgroups_mks_groupschedule';


//auto-generated file DO NOT EDIT
$layout_defs['mks_AcademicGroups']['subpanel_setup']['mks_academicgroups_mks_assists_1']['override_subpanel_name'] = 'mks_AcademicGroups_subpanel_mks_academicgroups_mks_assists_1';

?>