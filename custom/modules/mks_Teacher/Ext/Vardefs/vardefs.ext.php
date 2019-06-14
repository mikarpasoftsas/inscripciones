<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-09-24 16:22:53
$dictionary["mks_Teacher"]["fields"]["mks_teacher_securitygroups"] = array (
  'name' => 'mks_teacher_securitygroups',
  'type' => 'link',
  'relationship' => 'mks_teacher_securitygroups',
  'source' => 'non-db',
  'module' => 'SecurityGroups',
  'bean_name' => 'SecurityGroup',
  'vname' => 'LBL_MKS_TEACHER_SECURITYGROUPS_FROM_SECURITYGROUPS_TITLE',
);


 // created: 2018-10-24 13:48:34
$dictionary['mks_Teacher']['fields']['amount_theory_c']['inline_edit']='1';
$dictionary['mks_Teacher']['fields']['amount_theory_c']['labelValue']='Monto Teoría.';

 

 // created: 2018-10-24 13:48:35
$dictionary['mks_Teacher']['fields']['currency_id']['inline_edit']=1;

 

 // created: 2018-10-24 13:48:50
$dictionary['mks_Teacher']['fields']['amount_practice_c']['inline_edit']='1';
$dictionary['mks_Teacher']['fields']['amount_practice_c']['labelValue']='Monto Practica';

 

// created: 2018-10-25 14:16:55
$dictionary["mks_Teacher"]["fields"]["mks_teacher_mks_groupmatterteachers_1"] = array (
  'name' => 'mks_teacher_mks_groupmatterteachers_1',
  'type' => 'link',
  'relationship' => 'mks_teacher_mks_groupmatterteachers_1',
  'source' => 'non-db',
  'module' => 'mks_GroupMatterTeachers',
  'bean_name' => 'mks_GroupMatterTeachers',
  'side' => 'right',
  'vname' => 'LBL_MKS_TEACHER_MKS_GROUPMATTERTEACHERS_1_FROM_MKS_GROUPMATTERTEACHERS_TITLE',
);


// created: 2018-10-25 15:02:33
$dictionary["mks_Teacher"]["fields"]["mks_academicgroups_mks_teacher_1"] = array (
  'name' => 'mks_academicgroups_mks_teacher_1',
  'type' => 'link',
  'relationship' => 'mks_academicgroups_mks_teacher_1',
  'source' => 'non-db',
  'module' => 'mks_AcademicGroups',
  'bean_name' => 'mks_AcademicGroups',
  'vname' => 'LBL_MKS_ACADEMICGROUPS_MKS_TEACHER_1_FROM_MKS_ACADEMICGROUPS_TITLE',
);


 // created: 2019-06-14 03:19:48
$dictionary['mks_Teacher']['fields']['currency_c']['inline_edit']='1';
$dictionary['mks_Teacher']['fields']['currency_c']['labelValue']='Moneda';

 

 // created: 2019-06-14 03:21:11
$dictionary['mks_Teacher']['fields']['exchange_rate_c']['inline_edit']='1';
$dictionary['mks_Teacher']['fields']['exchange_rate_c']['labelValue']='T.C';

 
?>