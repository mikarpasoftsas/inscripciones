<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-09-24 15:56:18
$dictionary["mks_Box"]["fields"]["mks_box_securitygroups"] = array (
  'name' => 'mks_box_securitygroups',
  'type' => 'link',
  'relationship' => 'mks_box_securitygroups',
  'source' => 'non-db',
  'module' => 'SecurityGroups',
  'bean_name' => 'SecurityGroup',
  'vname' => 'LBL_MKS_BOX_SECURITYGROUPS_FROM_SECURITYGROUPS_TITLE',
);


// created: 2019-02-26 19:46:08
$dictionary["mks_Box"]["fields"]["mks_box_mks_paymentscash_1"] = array (
  'name' => 'mks_box_mks_paymentscash_1',
  'type' => 'link',
  'relationship' => 'mks_box_mks_paymentscash_1',
  'source' => 'non-db',
  'module' => 'mks_PaymentsCash',
  'bean_name' => 'mks_PaymentsCash',
  'side' => 'right',
  'vname' => 'LBL_MKS_BOX_MKS_PAYMENTSCASH_1_FROM_MKS_PAYMENTSCASH_TITLE',
  'required' => true,
);


// created: 2019-02-26 19:54:39
$dictionary["mks_Box"]["fields"]["mks_box_mks_paymentstransfer_1"] = array (
  'name' => 'mks_box_mks_paymentstransfer_1',
  'type' => 'link',
  'relationship' => 'mks_box_mks_paymentstransfer_1',
  'source' => 'non-db',
  'module' => 'mks_PaymentsTransfer',
  'bean_name' => 'mks_PaymentsTransfer',
  'side' => 'right',
  'vname' => 'LBL_MKS_BOX_MKS_PAYMENTSTRANSFER_1_FROM_MKS_PAYMENTSTRANSFER_TITLE',
  'required' => true,
);


 // created: 2019-06-07 21:54:49
$dictionary['mks_Box']['fields']['balance_c']['inline_edit']='1';
$dictionary['mks_Box']['fields']['balance_c']['labelValue']='Saldo';

 

 // created: 2019-06-07 21:54:49
$dictionary['mks_Box']['fields']['currency_id']['inline_edit']=1;

 

// created: 2019-06-11 23:36:33
$dictionary["mks_Box"]["fields"]["mks_box_mks_authoriginbox_1"] = array (
  'name' => 'mks_box_mks_authoriginbox_1',
  'type' => 'link',
  'relationship' => 'mks_box_mks_authoriginbox_1',
  'source' => 'non-db',
  'module' => 'mks_AuthOriginBox',
  'bean_name' => 'mks_AuthOriginBox',
  'side' => 'right',
  'vname' => 'LBL_MKS_BOX_MKS_AUTHORIGINBOX_1_FROM_MKS_AUTHORIGINBOX_TITLE',
);


// created: 2019-06-11 23:36:52
$dictionary["mks_Box"]["fields"]["mks_box_mks_authdestinationbox_1"] = array (
  'name' => 'mks_box_mks_authdestinationbox_1',
  'type' => 'link',
  'relationship' => 'mks_box_mks_authdestinationbox_1',
  'source' => 'non-db',
  'module' => 'mks_AuthDestinationBox',
  'bean_name' => 'mks_AuthDestinationBox',
  'side' => 'right',
  'vname' => 'LBL_MKS_BOX_MKS_AUTHDESTINATIONBOX_1_FROM_MKS_AUTHDESTINATIONBOX_TITLE',
);

?>