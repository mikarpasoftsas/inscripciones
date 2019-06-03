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

?>