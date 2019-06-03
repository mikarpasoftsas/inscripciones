<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-10-22 21:39:35
$dictionary["mks_AcademicGroups"]["fields"]["mks_academicgroups_securitygroups"] = array (
  'name' => 'mks_academicgroups_securitygroups',
  'type' => 'link',
  'relationship' => 'mks_academicgroups_securitygroups',
  'source' => 'non-db',
  'module' => 'SecurityGroups',
  'bean_name' => 'SecurityGroup',
  'vname' => 'LBL_MKS_ACADEMICGROUPS_SECURITYGROUPS_FROM_SECURITYGROUPS_TITLE',
);


// created: 2018-10-22 21:39:35
$dictionary["mks_AcademicGroups"]["fields"]["mks_academicgroups_mks_groupschedule"] = array (
  'name' => 'mks_academicgroups_mks_groupschedule',
  'type' => 'link',
  'relationship' => 'mks_academicgroups_mks_groupschedule',
  'source' => 'non-db',
  'module' => 'mks_GroupSchedule',
  'bean_name' => 'mks_GroupSchedule',
  'side' => 'right',
  'vname' => 'LBL_MKS_ACADEMICGROUPS_MKS_GROUPSCHEDULE_FROM_MKS_GROUPSCHEDULE_TITLE',
);


// created: 2018-10-22 21:39:35
$dictionary["mks_AcademicGroups"]["fields"]["mks_academicgroups_users"] = array (
  'name' => 'mks_academicgroups_users',
  'type' => 'link',
  'relationship' => 'mks_academicgroups_users',
  'source' => 'non-db',
  'module' => 'Users',
  'bean_name' => 'User',
  'side' => 'right',
  'vname' => 'LBL_MKS_ACADEMICGROUPS_USERS_FROM_USERS_TITLE',
);


// created: 2018-10-25 14:07:23
$dictionary["mks_AcademicGroups"]["fields"]["mks_academicgroups_mks_groupmatters_1"] = array (
  'name' => 'mks_academicgroups_mks_groupmatters_1',
  'type' => 'link',
  'relationship' => 'mks_academicgroups_mks_groupmatters_1',
  'source' => 'non-db',
  'module' => 'mks_GroupMatters',
  'bean_name' => 'mks_GroupMatters',
  'side' => 'right',
  'vname' => 'LBL_MKS_ACADEMICGROUPS_MKS_GROUPMATTERS_1_FROM_MKS_GROUPMATTERS_TITLE',
);


// created: 2018-10-25 15:02:33
$dictionary["mks_AcademicGroups"]["fields"]["mks_academicgroups_mks_teacher_1"] = array (
  'name' => 'mks_academicgroups_mks_teacher_1',
  'type' => 'link',
  'relationship' => 'mks_academicgroups_mks_teacher_1',
  'source' => 'non-db',
  'module' => 'mks_Teacher',
  'bean_name' => 'mks_Teacher',
  'vname' => 'LBL_MKS_ACADEMICGROUPS_MKS_TEACHER_1_FROM_MKS_TEACHER_TITLE',
);


 // created: 2018-10-26 20:53:50
$dictionary['mks_AcademicGroups']['fields']['type']['required']=true;

 

 // created: 2018-12-20 15:38:25
$dictionary['mks_AcademicGroups']['fields']['vacancies_available_c']['inline_edit']='';
$dictionary['mks_AcademicGroups']['fields']['vacancies_available_c']['labelValue']='Vacantes Disponibles';

 

 // created: 2019-04-28 14:55:31
$dictionary['mks_AcademicGroups']['fields']['occupation_html_c']['inline_edit']='';
$dictionary['mks_AcademicGroups']['fields']['occupation_html_c']['labelValue']='Ocupación de Aulas';

 

// created: 2019-04-29 22:45:54
$dictionary["mks_AcademicGroups"]["fields"]["mks_academicgroups_mks_assists_1"] = array (
  'name' => 'mks_academicgroups_mks_assists_1',
  'type' => 'link',
  'relationship' => 'mks_academicgroups_mks_assists_1',
  'source' => 'non-db',
  'module' => 'mks_Assists',
  'bean_name' => 'mks_Assists',
  'side' => 'right',
  'vname' => 'LBL_MKS_ACADEMICGROUPS_MKS_ASSISTS_1_FROM_MKS_ASSISTS_TITLE',
);

?>