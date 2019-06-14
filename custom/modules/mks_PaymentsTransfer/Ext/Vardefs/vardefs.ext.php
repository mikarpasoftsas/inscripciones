<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2019-02-25 17:03:23
$dictionary["mks_PaymentsTransfer"]["fields"]["mks_registrationreceipts_mks_paymentstransfer_1"] = array (
  'name' => 'mks_registrationreceipts_mks_paymentstransfer_1',
  'type' => 'link',
  'relationship' => 'mks_registrationreceipts_mks_paymentstransfer_1',
  'source' => 'non-db',
  'module' => 'mks_RegistrationReceipts',
  'bean_name' => 'mks_RegistrationReceipts',
  'vname' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSTRANSFER_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
  'id_name' => 'mks_regist09e2eceipts_ida',
);
$dictionary["mks_PaymentsTransfer"]["fields"]["mks_registrationreceipts_mks_paymentstransfer_1_name"] = array (
  'name' => 'mks_registrationreceipts_mks_paymentstransfer_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSTRANSFER_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
  'save' => true,
  'id_name' => 'mks_regist09e2eceipts_ida',
  'link' => 'mks_registrationreceipts_mks_paymentstransfer_1',
  'table' => 'mks_registrationreceipts',
  'module' => 'mks_RegistrationReceipts',
  'rname' => 'name',
);
$dictionary["mks_PaymentsTransfer"]["fields"]["mks_regist09e2eceipts_ida"] = array (
  'name' => 'mks_regist09e2eceipts_ida',
  'type' => 'link',
  'relationship' => 'mks_registrationreceipts_mks_paymentstransfer_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSTRANSFER_1_FROM_MKS_PAYMENTSTRANSFER_TITLE',
);


// created: 2019-02-26 19:54:39
$dictionary["mks_PaymentsTransfer"]["fields"]["mks_box_mks_paymentstransfer_1"] = array (
  'name' => 'mks_box_mks_paymentstransfer_1',
  'type' => 'link',
  'relationship' => 'mks_box_mks_paymentstransfer_1',
  'source' => 'non-db',
  'module' => 'mks_Box',
  'bean_name' => 'mks_Box',
  'vname' => 'LBL_MKS_BOX_MKS_PAYMENTSTRANSFER_1_FROM_MKS_BOX_TITLE',
  'id_name' => 'mks_box_mks_paymentstransfer_1mks_box_ida',
);
$dictionary["mks_PaymentsTransfer"]["fields"]["mks_box_mks_paymentstransfer_1_name"] = array (
  'name' => 'mks_box_mks_paymentstransfer_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_BOX_MKS_PAYMENTSTRANSFER_1_FROM_MKS_BOX_TITLE',
  'save' => true,
  'id_name' => 'mks_box_mks_paymentstransfer_1mks_box_ida',
  'link' => 'mks_box_mks_paymentstransfer_1',
  'table' => 'mks_box',
  'module' => 'mks_Box',
  'rname' => 'name',
);
$dictionary["mks_PaymentsTransfer"]["fields"]["mks_box_mks_paymentstransfer_1mks_box_ida"] = array (
  'name' => 'mks_box_mks_paymentstransfer_1mks_box_ida',
  'type' => 'link',
  'relationship' => 'mks_box_mks_paymentstransfer_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_BOX_MKS_PAYMENTSTRANSFER_1_FROM_MKS_PAYMENTSTRANSFER_TITLE',
);


 // created: 2019-03-14 16:42:42
$dictionary['mks_PaymentsTransfer']['fields']['currency_c']['inline_edit']='1';
$dictionary['mks_PaymentsTransfer']['fields']['currency_c']['labelValue']='Moneda';

 

 // created: 2019-05-18 14:41:04
$dictionary['mks_PaymentsTransfer']['fields']['exchange_rate_c']['inline_edit']='1';
$dictionary['mks_PaymentsTransfer']['fields']['exchange_rate_c']['labelValue']='T.C';

 

 // created: 2019-05-18 14:40:55
$dictionary['mks_PaymentsTransfer']['fields']['amount_c']['inline_edit']='1';
$dictionary['mks_PaymentsTransfer']['fields']['amount_c']['labelValue']='Importe';

 

// created: 2019-05-18 15:12:19
$dictionary["mks_PaymentsTransfer"]["fields"]["mks_dailyboxmovements_mks_paymentstransfer_1"] = array (
  'name' => 'mks_dailyboxmovements_mks_paymentstransfer_1',
  'type' => 'link',
  'relationship' => 'mks_dailyboxmovements_mks_paymentstransfer_1',
  'source' => 'non-db',
  'module' => 'mks_DailyBoxMovements',
  'bean_name' => 'mks_DailyBoxMovements',
  'vname' => 'LBL_MKS_DAILYBOXMOVEMENTS_MKS_PAYMENTSTRANSFER_1_FROM_MKS_DAILYBOXMOVEMENTS_TITLE',
  'id_name' => 'mks_dailyb1213vements_ida',
);
$dictionary["mks_PaymentsTransfer"]["fields"]["mks_dailyboxmovements_mks_paymentstransfer_1_name"] = array (
  'name' => 'mks_dailyboxmovements_mks_paymentstransfer_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_DAILYBOXMOVEMENTS_MKS_PAYMENTSTRANSFER_1_FROM_MKS_DAILYBOXMOVEMENTS_TITLE',
  'save' => true,
  'id_name' => 'mks_dailyb1213vements_ida',
  'link' => 'mks_dailyboxmovements_mks_paymentstransfer_1',
  'table' => 'mks_dailyboxmovements',
  'module' => 'mks_DailyBoxMovements',
  'rname' => 'name',
);
$dictionary["mks_PaymentsTransfer"]["fields"]["mks_dailyb1213vements_ida"] = array (
  'name' => 'mks_dailyb1213vements_ida',
  'type' => 'link',
  'relationship' => 'mks_dailyboxmovements_mks_paymentstransfer_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_DAILYBOXMOVEMENTS_MKS_PAYMENTSTRANSFER_1_FROM_MKS_PAYMENTSTRANSFER_TITLE',
);

<<<<<<< HEAD

=======

>>>>>>> d368532854a4e9301ed814ff37b5ca7aed9c9989
$dictionary['mks_PaymentsTransfer']['fields']['mks_box_mks_paymentstransfer_1_name']['required']=true;
?>