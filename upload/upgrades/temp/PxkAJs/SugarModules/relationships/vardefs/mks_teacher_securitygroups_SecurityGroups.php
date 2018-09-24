<?php
// created: 2018-09-18 22:10:43
$dictionary["SecurityGroup"]["fields"]["mks_teacher_securitygroups"] = array (
  'name' => 'mks_teacher_securitygroups',
  'type' => 'link',
  'relationship' => 'mks_teacher_securitygroups',
  'source' => 'non-db',
  'module' => 'mks_Teacher',
  'bean_name' => 'mks_Teacher',
  'vname' => 'LBL_MKS_TEACHER_SECURITYGROUPS_FROM_MKS_TEACHER_TITLE',
  'id_name' => 'mks_teacher_securitygroupsmks_teacher_ida',
);
$dictionary["SecurityGroup"]["fields"]["mks_teacher_securitygroups_name"] = array (
  'name' => 'mks_teacher_securitygroups_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_TEACHER_SECURITYGROUPS_FROM_MKS_TEACHER_TITLE',
  'save' => true,
  'id_name' => 'mks_teacher_securitygroupsmks_teacher_ida',
  'link' => 'mks_teacher_securitygroups',
  'table' => 'mks_teacher',
  'module' => 'mks_Teacher',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["SecurityGroup"]["fields"]["mks_teacher_securitygroupsmks_teacher_ida"] = array (
  'name' => 'mks_teacher_securitygroupsmks_teacher_ida',
  'type' => 'link',
  'relationship' => 'mks_teacher_securitygroups',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_TEACHER_SECURITYGROUPS_FROM_SECURITYGROUPS_TITLE',
);
