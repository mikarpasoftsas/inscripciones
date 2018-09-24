<?php
// created: 2018-09-18 21:52:06
$dictionary["SecurityGroup"]["fields"]["mks_classroom_securitygroups"] = array (
  'name' => 'mks_classroom_securitygroups',
  'type' => 'link',
  'relationship' => 'mks_classroom_securitygroups',
  'source' => 'non-db',
  'module' => 'mks_Classroom',
  'bean_name' => 'mks_Classroom',
  'vname' => 'LBL_MKS_CLASSROOM_SECURITYGROUPS_FROM_MKS_CLASSROOM_TITLE',
  'id_name' => 'mks_classroom_securitygroupsmks_classroom_ida',
);
$dictionary["SecurityGroup"]["fields"]["mks_classroom_securitygroups_name"] = array (
  'name' => 'mks_classroom_securitygroups_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_CLASSROOM_SECURITYGROUPS_FROM_MKS_CLASSROOM_TITLE',
  'save' => true,
  'id_name' => 'mks_classroom_securitygroupsmks_classroom_ida',
  'link' => 'mks_classroom_securitygroups',
  'table' => 'mks_classroom',
  'module' => 'mks_Classroom',
  'rname' => 'name',
);
$dictionary["SecurityGroup"]["fields"]["mks_classroom_securitygroupsmks_classroom_ida"] = array (
  'name' => 'mks_classroom_securitygroupsmks_classroom_ida',
  'type' => 'link',
  'relationship' => 'mks_classroom_securitygroups',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_CLASSROOM_SECURITYGROUPS_FROM_SECURITYGROUPS_TITLE',
);
