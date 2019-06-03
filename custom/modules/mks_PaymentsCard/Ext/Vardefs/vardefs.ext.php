<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2019-02-25 17:03:52
$dictionary["mks_PaymentsCard"]["fields"]["mks_registrationreceipts_mks_paymentscard_1"] = array (
  'name' => 'mks_registrationreceipts_mks_paymentscard_1',
  'type' => 'link',
  'relationship' => 'mks_registrationreceipts_mks_paymentscard_1',
  'source' => 'non-db',
  'module' => 'mks_RegistrationReceipts',
  'bean_name' => 'mks_RegistrationReceipts',
  'vname' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSCARD_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
  'id_name' => 'mks_registfefbeceipts_ida',
);
$dictionary["mks_PaymentsCard"]["fields"]["mks_registrationreceipts_mks_paymentscard_1_name"] = array (
  'name' => 'mks_registrationreceipts_mks_paymentscard_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSCARD_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
  'save' => true,
  'id_name' => 'mks_registfefbeceipts_ida',
  'link' => 'mks_registrationreceipts_mks_paymentscard_1',
  'table' => 'mks_registrationreceipts',
  'module' => 'mks_RegistrationReceipts',
  'rname' => 'name',
);
$dictionary["mks_PaymentsCard"]["fields"]["mks_registfefbeceipts_ida"] = array (
  'name' => 'mks_registfefbeceipts_ida',
  'type' => 'link',
  'relationship' => 'mks_registrationreceipts_mks_paymentscard_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSCARD_1_FROM_MKS_PAYMENTSCARD_TITLE',
);


 // created: 2019-02-26 20:10:26
$dictionary['mks_PaymentsCard']['fields']['type_c']['inline_edit']='1';
$dictionary['mks_PaymentsCard']['fields']['type_c']['labelValue']='Tipo';

 

 // created: 2019-02-26 20:11:02
$dictionary['mks_PaymentsCard']['fields']['card_c']['inline_edit']='1';
$dictionary['mks_PaymentsCard']['fields']['card_c']['labelValue']='Tarjeta';

 

 // created: 2019-02-26 20:14:15
$dictionary['mks_PaymentsCard']['fields']['fees_c']['inline_edit']='1';
$dictionary['mks_PaymentsCard']['fields']['fees_c']['labelValue']='Cuotas';

 

 // created: 2019-02-26 20:15:55
$dictionary['mks_PaymentsCard']['fields']['last_4_digits_c']['inline_edit']='1';
$dictionary['mks_PaymentsCard']['fields']['last_4_digits_c']['labelValue']='Últimos 4 dígitos';

 

 // created: 2019-02-26 20:16:28
$dictionary['mks_PaymentsCard']['fields']['authorization_code_c']['inline_edit']='1';
$dictionary['mks_PaymentsCard']['fields']['authorization_code_c']['labelValue']='Cod. Autorización';

 

 // created: 2019-03-14 17:58:22
$dictionary['mks_PaymentsCard']['fields']['currency_c']['inline_edit']='1';
$dictionary['mks_PaymentsCard']['fields']['currency_c']['labelValue']='Moneda';

 

 // created: 2019-05-18 14:41:47
$dictionary['mks_PaymentsCard']['fields']['exchange_rate_c']['inline_edit']='1';
$dictionary['mks_PaymentsCard']['fields']['exchange_rate_c']['labelValue']='T.C';

 

 // created: 2019-05-18 14:41:53
$dictionary['mks_PaymentsCard']['fields']['amount_c']['inline_edit']='1';
$dictionary['mks_PaymentsCard']['fields']['amount_c']['labelValue']='Importe';

 
?>