<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2019-04-29 22:42:48
$dictionary["mks_Assists"]["fields"]["mks_assists_mks_assistants_1"] = array (
  'name' => 'mks_assists_mks_assistants_1',
  'type' => 'link',
  'relationship' => 'mks_assists_mks_assistants_1',
  'source' => 'non-db',
  'module' => 'mks_Assistants',
  'bean_name' => 'mks_Assistants',
  'side' => 'right',
  'vname' => 'LBL_MKS_ASSISTS_MKS_ASSISTANTS_1_FROM_MKS_ASSISTANTS_TITLE',
);


// created: 2019-04-29 22:45:54
$dictionary["mks_Assists"]["fields"]["mks_academicgroups_mks_assists_1"] = array (
  'name' => 'mks_academicgroups_mks_assists_1',
  'type' => 'link',
  'relationship' => 'mks_academicgroups_mks_assists_1',
  'source' => 'non-db',
  'module' => 'mks_AcademicGroups',
  'bean_name' => 'mks_AcademicGroups',
  'vname' => 'LBL_MKS_ACADEMICGROUPS_MKS_ASSISTS_1_FROM_MKS_ACADEMICGROUPS_TITLE',
  'id_name' => 'mks_academicgroups_mks_assists_1mks_academicgroups_ida',
);
$dictionary["mks_Assists"]["fields"]["mks_academicgroups_mks_assists_1_name"] = array (
  'name' => 'mks_academicgroups_mks_assists_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_ACADEMICGROUPS_MKS_ASSISTS_1_FROM_MKS_ACADEMICGROUPS_TITLE',
  'save' => true,
  'id_name' => 'mks_academicgroups_mks_assists_1mks_academicgroups_ida',
  'link' => 'mks_academicgroups_mks_assists_1',
  'table' => 'mks_academicgroups',
  'module' => 'mks_AcademicGroups',
  'rname' => 'name',
);
$dictionary["mks_Assists"]["fields"]["mks_academicgroups_mks_assists_1mks_academicgroups_ida"] = array (
  'name' => 'mks_academicgroups_mks_assists_1mks_academicgroups_ida',
  'type' => 'link',
  'relationship' => 'mks_academicgroups_mks_assists_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_ACADEMICGROUPS_MKS_ASSISTS_1_FROM_MKS_ASSISTS_TITLE',
);


 // created: 2019-04-29 22:48:15
$dictionary['mks_Assists']['fields']['mks_teacher_id_c']['inline_edit']=1;

 

 // created: 2019-04-29 22:48:15
$dictionary['mks_Assists']['fields']['teacher_c']['inline_edit']='1';
$dictionary['mks_Assists']['fields']['teacher_c']['labelValue']='Docente';

 

 // created: 2019-04-29 22:53:24
$dictionary['mks_Assists']['fields']['assis_date_c']['inline_edit']='1';
$dictionary['mks_Assists']['fields']['assis_date_c']['labelValue']='Fecha';

 
?>