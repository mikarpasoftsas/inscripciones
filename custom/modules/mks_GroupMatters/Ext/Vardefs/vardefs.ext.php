<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-10-25 14:04:47
$dictionary["mks_GroupMatters"]["fields"]["mks_groupmatters_mks_groupmatterteachers"] = array (
  'name' => 'mks_groupmatters_mks_groupmatterteachers',
  'type' => 'link',
  'relationship' => 'mks_groupmatters_mks_groupmatterteachers',
  'source' => 'non-db',
  'module' => 'mks_GroupMatterTeachers',
  'bean_name' => 'mks_GroupMatterTeachers',
  'side' => 'right',
  'vname' => 'LBL_MKS_GROUPMATTERS_MKS_GROUPMATTERTEACHERS_FROM_MKS_GROUPMATTERTEACHERS_TITLE',
);


// created: 2018-10-25 14:07:23
$dictionary["mks_GroupMatters"]["fields"]["mks_academicgroups_mks_groupmatters_1"] = array (
  'name' => 'mks_academicgroups_mks_groupmatters_1',
  'type' => 'link',
  'relationship' => 'mks_academicgroups_mks_groupmatters_1',
  'source' => 'non-db',
  'module' => 'mks_AcademicGroups',
  'bean_name' => 'mks_AcademicGroups',
  'vname' => 'LBL_MKS_ACADEMICGROUPS_MKS_GROUPMATTERS_1_FROM_MKS_ACADEMICGROUPS_TITLE',
  'id_name' => 'mks_academicgroups_mks_groupmatters_1mks_academicgroups_ida',
);
$dictionary["mks_GroupMatters"]["fields"]["mks_academicgroups_mks_groupmatters_1_name"] = array (
  'name' => 'mks_academicgroups_mks_groupmatters_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_ACADEMICGROUPS_MKS_GROUPMATTERS_1_FROM_MKS_ACADEMICGROUPS_TITLE',
  'save' => true,
  'id_name' => 'mks_academicgroups_mks_groupmatters_1mks_academicgroups_ida',
  'link' => 'mks_academicgroups_mks_groupmatters_1',
  'table' => 'mks_academicgroups',
  'module' => 'mks_AcademicGroups',
  'rname' => 'name',
);
$dictionary["mks_GroupMatters"]["fields"]["mks_academicgroups_mks_groupmatters_1mks_academicgroups_ida"] = array (
  'name' => 'mks_academicgroups_mks_groupmatters_1mks_academicgroups_ida',
  'type' => 'link',
  'relationship' => 'mks_academicgroups_mks_groupmatters_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_ACADEMICGROUPS_MKS_GROUPMATTERS_1_FROM_MKS_GROUPMATTERS_TITLE',
);

?>