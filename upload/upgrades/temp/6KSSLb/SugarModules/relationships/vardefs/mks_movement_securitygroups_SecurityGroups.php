<?php
// created: 2018-09-18 21:52:51
$dictionary["SecurityGroup"]["fields"]["mks_movement_securitygroups"] = array (
  'name' => 'mks_movement_securitygroups',
  'type' => 'link',
  'relationship' => 'mks_movement_securitygroups',
  'source' => 'non-db',
  'module' => 'mks_Movement',
  'bean_name' => 'mks_Movement',
  'vname' => 'LBL_MKS_MOVEMENT_SECURITYGROUPS_FROM_MKS_MOVEMENT_TITLE',
  'id_name' => 'mks_movement_securitygroupsmks_movement_ida',
);
$dictionary["SecurityGroup"]["fields"]["mks_movement_securitygroups_name"] = array (
  'name' => 'mks_movement_securitygroups_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_MOVEMENT_SECURITYGROUPS_FROM_MKS_MOVEMENT_TITLE',
  'save' => true,
  'id_name' => 'mks_movement_securitygroupsmks_movement_ida',
  'link' => 'mks_movement_securitygroups',
  'table' => 'mks_movement',
  'module' => 'mks_Movement',
  'rname' => 'name',
);
$dictionary["SecurityGroup"]["fields"]["mks_movement_securitygroupsmks_movement_ida"] = array (
  'name' => 'mks_movement_securitygroupsmks_movement_ida',
  'type' => 'link',
  'relationship' => 'mks_movement_securitygroups',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_MOVEMENT_SECURITYGROUPS_FROM_SECURITYGROUPS_TITLE',
);
