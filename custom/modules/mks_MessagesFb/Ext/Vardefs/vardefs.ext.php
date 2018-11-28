<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-11-24 14:34:24
$dictionary["mks_MessagesFb"]["fields"]["accounts_mks_messagesfb_1"] = array (
  'name' => 'accounts_mks_messagesfb_1',
  'type' => 'link',
  'relationship' => 'accounts_mks_messagesfb_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_MKS_MESSAGESFB_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_mks_messagesfb_1accounts_ida',
);
$dictionary["mks_MessagesFb"]["fields"]["accounts_mks_messagesfb_1_name"] = array (
  'name' => 'accounts_mks_messagesfb_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_MKS_MESSAGESFB_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_mks_messagesfb_1accounts_ida',
  'link' => 'accounts_mks_messagesfb_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["mks_MessagesFb"]["fields"]["accounts_mks_messagesfb_1accounts_ida"] = array (
  'name' => 'accounts_mks_messagesfb_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_mks_messagesfb_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_MKS_MESSAGESFB_1_FROM_MKS_MESSAGESFB_TITLE',
);


// created: 2018-11-23 21:23:47
$dictionary["mks_MessagesFb"]["fields"]["mks_messagesfb_opportunities"] = array (
  'name' => 'mks_messagesfb_opportunities',
  'type' => 'link',
  'relationship' => 'mks_messagesfb_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_MKS_MESSAGESFB_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'mks_messagesfb_opportunitiesopportunities_ida',
);
$dictionary["mks_MessagesFb"]["fields"]["mks_messagesfb_opportunities_name"] = array (
  'name' => 'mks_messagesfb_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_MESSAGESFB_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'mks_messagesfb_opportunitiesopportunities_ida',
  'link' => 'mks_messagesfb_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["mks_MessagesFb"]["fields"]["mks_messagesfb_opportunitiesopportunities_ida"] = array (
  'name' => 'mks_messagesfb_opportunitiesopportunities_ida',
  'type' => 'link',
  'relationship' => 'mks_messagesfb_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_MESSAGESFB_OPPORTUNITIES_FROM_MKS_MESSAGESFB_TITLE',
);


// created: 2018-11-24 15:24:05
$dictionary["mks_MessagesFb"]["fields"]["mks_messagesfb_securitygroups_1"] = array (
  'name' => 'mks_messagesfb_securitygroups_1',
  'type' => 'link',
  'relationship' => 'mks_messagesfb_securitygroups_1',
  'source' => 'non-db',
  'module' => 'SecurityGroups',
  'bean_name' => 'SecurityGroup',
  'vname' => 'LBL_MKS_MESSAGESFB_SECURITYGROUPS_1_FROM_SECURITYGROUPS_TITLE',
);

?>