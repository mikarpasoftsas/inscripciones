<?php
// created: 2018-10-22 21:39:35
$dictionary["mks_GroupMatters"]["fields"]["mks_academicgroups_mks_groupmatters"] = array (
  'name' => 'mks_academicgroups_mks_groupmatters',
  'type' => 'link',
  'relationship' => 'mks_academicgroups_mks_groupmatters',
  'source' => 'non-db',
  'module' => 'mks_AcademicGroups',
  'bean_name' => 'mks_AcademicGroups',
  'vname' => 'LBL_MKS_ACADEMICGROUPS_MKS_GROUPMATTERS_FROM_MKS_ACADEMICGROUPS_TITLE',
  'id_name' => 'mks_academicgroups_mks_groupmattersmks_academicgroups_ida',
);
$dictionary["mks_GroupMatters"]["fields"]["mks_academicgroups_mks_groupmatters_name"] = array (
  'name' => 'mks_academicgroups_mks_groupmatters_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_ACADEMICGROUPS_MKS_GROUPMATTERS_FROM_MKS_ACADEMICGROUPS_TITLE',
  'save' => true,
  'id_name' => 'mks_academicgroups_mks_groupmattersmks_academicgroups_ida',
  'link' => 'mks_academicgroups_mks_groupmatters',
  'table' => 'mks_academicgroups',
  'module' => 'mks_AcademicGroups',
  'rname' => 'name',
);
$dictionary["mks_GroupMatters"]["fields"]["mks_academicgroups_mks_groupmattersmks_academicgroups_ida"] = array (
  'name' => 'mks_academicgroups_mks_groupmattersmks_academicgroups_ida',
  'type' => 'link',
  'relationship' => 'mks_academicgroups_mks_groupmatters',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_ACADEMICGROUPS_MKS_GROUPMATTERS_FROM_MKS_GROUPMATTERS_TITLE',
);
