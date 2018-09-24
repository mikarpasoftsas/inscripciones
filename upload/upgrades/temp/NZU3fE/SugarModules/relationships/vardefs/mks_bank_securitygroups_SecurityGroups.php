<?php
// created: 2018-09-18 22:09:10
$dictionary["SecurityGroup"]["fields"]["mks_bank_securitygroups"] = array (
  'name' => 'mks_bank_securitygroups',
  'type' => 'link',
  'relationship' => 'mks_bank_securitygroups',
  'source' => 'non-db',
  'module' => 'mks_Bank',
  'bean_name' => 'mks_Bank',
  'vname' => 'LBL_MKS_BANK_SECURITYGROUPS_FROM_MKS_BANK_TITLE',
  'id_name' => 'mks_bank_securitygroupsmks_bank_ida',
);
$dictionary["SecurityGroup"]["fields"]["mks_bank_securitygroups_name"] = array (
  'name' => 'mks_bank_securitygroups_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_BANK_SECURITYGROUPS_FROM_MKS_BANK_TITLE',
  'save' => true,
  'id_name' => 'mks_bank_securitygroupsmks_bank_ida',
  'link' => 'mks_bank_securitygroups',
  'table' => 'mks_bank',
  'module' => 'mks_Bank',
  'rname' => 'name',
);
$dictionary["SecurityGroup"]["fields"]["mks_bank_securitygroupsmks_bank_ida"] = array (
  'name' => 'mks_bank_securitygroupsmks_bank_ida',
  'type' => 'link',
  'relationship' => 'mks_bank_securitygroups',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_BANK_SECURITYGROUPS_FROM_SECURITYGROUPS_TITLE',
);
