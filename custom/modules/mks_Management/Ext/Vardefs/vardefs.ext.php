<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2019-03-14 15:31:29
$dictionary["mks_Management"]["fields"]["mks_registration_mks_management_1"] = array (
  'name' => 'mks_registration_mks_management_1',
  'type' => 'link',
  'relationship' => 'mks_registration_mks_management_1',
  'source' => 'non-db',
  'module' => 'mks_Registration',
  'bean_name' => 'mks_Registration',
  'vname' => 'LBL_MKS_REGISTRATION_MKS_MANAGEMENT_1_FROM_MKS_REGISTRATION_TITLE',
  'id_name' => 'mks_registration_mks_management_1mks_registration_ida',
);
$dictionary["mks_Management"]["fields"]["mks_registration_mks_management_1_name"] = array (
  'name' => 'mks_registration_mks_management_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_REGISTRATION_MKS_MANAGEMENT_1_FROM_MKS_REGISTRATION_TITLE',
  'save' => true,
  'id_name' => 'mks_registration_mks_management_1mks_registration_ida',
  'link' => 'mks_registration_mks_management_1',
  'table' => 'mks_registration',
  'module' => 'mks_Registration',
  'rname' => 'document_name',
);
$dictionary["mks_Management"]["fields"]["mks_registration_mks_management_1mks_registration_ida"] = array (
  'name' => 'mks_registration_mks_management_1mks_registration_ida',
  'type' => 'link',
  'relationship' => 'mks_registration_mks_management_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_REGISTRATION_MKS_MANAGEMENT_1_FROM_MKS_MANAGEMENT_TITLE',
);


// created: 2019-03-14 15:32:06
$dictionary["mks_Management"]["fields"]["accounts_mks_management_1"] = array (
  'name' => 'accounts_mks_management_1',
  'type' => 'link',
  'relationship' => 'accounts_mks_management_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_MKS_MANAGEMENT_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_mks_management_1accounts_ida',
);
$dictionary["mks_Management"]["fields"]["accounts_mks_management_1_name"] = array (
  'name' => 'accounts_mks_management_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_MKS_MANAGEMENT_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_mks_management_1accounts_ida',
  'link' => 'accounts_mks_management_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["mks_Management"]["fields"]["accounts_mks_management_1accounts_ida"] = array (
  'name' => 'accounts_mks_management_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_mks_management_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_MKS_MANAGEMENT_1_FROM_MKS_MANAGEMENT_TITLE',
);


 // created: 2019-03-14 15:37:49
$dictionary['mks_Management']['fields']['status_managment_c']['inline_edit']='1';
$dictionary['mks_Management']['fields']['status_managment_c']['labelValue']='Estado';

 

 // created: 2019-03-14 15:39:28
$dictionary['mks_Management']['fields']['type_managment_c']['inline_edit']='1';
$dictionary['mks_Management']['fields']['type_managment_c']['labelValue']='Tipo';

 

 // created: 2019-03-14 15:40:38
$dictionary['mks_Management']['fields']['id_autoincrement_c']['inline_edit']='1';
$dictionary['mks_Management']['fields']['id_autoincrement_c']['labelValue']='#';

 
?>