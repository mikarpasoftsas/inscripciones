<?php
// created: 2018-10-22 21:09:26
$dictionary["mks_Teacher"]["fields"]["mks_groupmatters_mks_teacher"] = array (
  'name' => 'mks_groupmatters_mks_teacher',
  'type' => 'link',
  'relationship' => 'mks_groupmatters_mks_teacher',
  'source' => 'non-db',
  'module' => 'mks_GroupMatters',
  'bean_name' => 'mks_GroupMatters',
  'vname' => 'LBL_MKS_GROUPMATTERS_MKS_TEACHER_FROM_MKS_GROUPMATTERS_TITLE',
  'id_name' => 'mks_groupmatters_mks_teachermks_groupmatters_ida',
);
$dictionary["mks_Teacher"]["fields"]["mks_groupmatters_mks_teacher_name"] = array (
  'name' => 'mks_groupmatters_mks_teacher_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_GROUPMATTERS_MKS_TEACHER_FROM_MKS_GROUPMATTERS_TITLE',
  'save' => true,
  'id_name' => 'mks_groupmatters_mks_teachermks_groupmatters_ida',
  'link' => 'mks_groupmatters_mks_teacher',
  'table' => 'mks_groupmatters',
  'module' => 'mks_GroupMatters',
  'rname' => 'name',
);
$dictionary["mks_Teacher"]["fields"]["mks_groupmatters_mks_teachermks_groupmatters_ida"] = array (
  'name' => 'mks_groupmatters_mks_teachermks_groupmatters_ida',
  'type' => 'link',
  'relationship' => 'mks_groupmatters_mks_teacher',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_GROUPMATTERS_MKS_TEACHER_FROM_MKS_TEACHER_TITLE',
);
