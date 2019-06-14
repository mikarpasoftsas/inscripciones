<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2019-02-25 17:03:35
$dictionary["mks_PaymentsCheck"]["fields"]["mks_registrationreceipts_mks_paymentscheck_1"] = array (
  'name' => 'mks_registrationreceipts_mks_paymentscheck_1',
  'type' => 'link',
  'relationship' => 'mks_registrationreceipts_mks_paymentscheck_1',
  'source' => 'non-db',
  'module' => 'mks_RegistrationReceipts',
  'bean_name' => 'mks_RegistrationReceipts',
  'vname' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSCHECK_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
  'id_name' => 'mks_regista5a7eceipts_ida',
);
$dictionary["mks_PaymentsCheck"]["fields"]["mks_registrationreceipts_mks_paymentscheck_1_name"] = array (
  'name' => 'mks_registrationreceipts_mks_paymentscheck_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSCHECK_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
  'save' => true,
  'id_name' => 'mks_regista5a7eceipts_ida',
  'link' => 'mks_registrationreceipts_mks_paymentscheck_1',
  'table' => 'mks_registrationreceipts',
  'module' => 'mks_RegistrationReceipts',
  'rname' => 'name',
);
$dictionary["mks_PaymentsCheck"]["fields"]["mks_regista5a7eceipts_ida"] = array (
  'name' => 'mks_regista5a7eceipts_ida',
  'type' => 'link',
  'relationship' => 'mks_registrationreceipts_mks_paymentscheck_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSCHECK_1_FROM_MKS_PAYMENTSCHECK_TITLE',
);


 // created: 2019-02-26 19:59:12
$dictionary['mks_PaymentsCheck']['fields']['check_number_c']['inline_edit']='1';
$dictionary['mks_PaymentsCheck']['fields']['check_number_c']['labelValue']='Número de Cheque';

 

// created: 2019-02-26 20:00:43
$dictionary["mks_PaymentsCheck"]["fields"]["mks_bank_mks_paymentscheck_1"] = array (
  'name' => 'mks_bank_mks_paymentscheck_1',
  'type' => 'link',
  'relationship' => 'mks_bank_mks_paymentscheck_1',
  'source' => 'non-db',
  'module' => 'mks_Bank',
  'bean_name' => 'mks_Bank',
  'vname' => 'LBL_MKS_BANK_MKS_PAYMENTSCHECK_1_FROM_MKS_BANK_TITLE',
  'id_name' => 'mks_bank_mks_paymentscheck_1mks_bank_ida',
);
$dictionary["mks_PaymentsCheck"]["fields"]["mks_bank_mks_paymentscheck_1_name"] = array (
  'name' => 'mks_bank_mks_paymentscheck_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_BANK_MKS_PAYMENTSCHECK_1_FROM_MKS_BANK_TITLE',
  'save' => true,
  'id_name' => 'mks_bank_mks_paymentscheck_1mks_bank_ida',
  'link' => 'mks_bank_mks_paymentscheck_1',
  'table' => 'mks_bank',
  'module' => 'mks_Bank',
  'rname' => 'name',
);
$dictionary["mks_PaymentsCheck"]["fields"]["mks_bank_mks_paymentscheck_1mks_bank_ida"] = array (
  'name' => 'mks_bank_mks_paymentscheck_1mks_bank_ida',
  'type' => 'link',
  'relationship' => 'mks_bank_mks_paymentscheck_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_BANK_MKS_PAYMENTSCHECK_1_FROM_MKS_PAYMENTSCHECK_TITLE',
);


 // created: 2019-02-26 20:01:35
$dictionary['mks_PaymentsCheck']['fields']['payment_date_c']['inline_edit']='1';
$dictionary['mks_PaymentsCheck']['fields']['payment_date_c']['labelValue']='Fecha de Pago';

 

 // created: 2019-03-14 17:38:45
$dictionary['mks_PaymentsCheck']['fields']['currency_c']['inline_edit']='1';
$dictionary['mks_PaymentsCheck']['fields']['currency_c']['labelValue']='Moneda';

 

 // created: 2019-05-18 14:41:17
$dictionary['mks_PaymentsCheck']['fields']['amount_c']['inline_edit']='1';
$dictionary['mks_PaymentsCheck']['fields']['amount_c']['labelValue']='Importe';

 

 // created: 2019-05-18 14:41:24
$dictionary['mks_PaymentsCheck']['fields']['exchange_rate_c']['inline_edit']='1';
$dictionary['mks_PaymentsCheck']['fields']['exchange_rate_c']['labelValue']='T.C';

 
?>