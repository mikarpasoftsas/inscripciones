<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2019-02-25 16:59:06
$dictionary["mks_RegistrationReceipts"]["fields"]["mks_registration_mks_registrationreceipts_1"] = array (
  'name' => 'mks_registration_mks_registrationreceipts_1',
  'type' => 'link',
  'relationship' => 'mks_registration_mks_registrationreceipts_1',
  'source' => 'non-db',
  'module' => 'mks_Registration',
  'bean_name' => 'mks_Registration',
  'vname' => 'LBL_MKS_REGISTRATION_MKS_REGISTRATIONRECEIPTS_1_FROM_MKS_REGISTRATION_TITLE',
  'id_name' => 'mks_registration_mks_registrationreceipts_1mks_registration_ida',
);
$dictionary["mks_RegistrationReceipts"]["fields"]["mks_registration_mks_registrationreceipts_1_name"] = array (
  'name' => 'mks_registration_mks_registrationreceipts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_REGISTRATION_MKS_REGISTRATIONRECEIPTS_1_FROM_MKS_REGISTRATION_TITLE',
  'save' => true,
  'id_name' => 'mks_registration_mks_registrationreceipts_1mks_registration_ida',
  'link' => 'mks_registration_mks_registrationreceipts_1',
  'table' => 'mks_registration',
  'module' => 'mks_Registration',
  'rname' => 'document_name',
);
$dictionary["mks_RegistrationReceipts"]["fields"]["mks_registration_mks_registrationreceipts_1mks_registration_ida"] = array (
  'name' => 'mks_registration_mks_registrationreceipts_1mks_registration_ida',
  'type' => 'link',
  'relationship' => 'mks_registration_mks_registrationreceipts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_REGISTRATION_MKS_REGISTRATIONRECEIPTS_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
);


// created: 2019-02-25 17:03:03
$dictionary["mks_RegistrationReceipts"]["fields"]["mks_registrationreceipts_mks_paymentscash_1"] = array (
  'name' => 'mks_registrationreceipts_mks_paymentscash_1',
  'type' => 'link',
  'relationship' => 'mks_registrationreceipts_mks_paymentscash_1',
  'source' => 'non-db',
  'module' => 'mks_PaymentsCash',
  'bean_name' => 'mks_PaymentsCash',
  'side' => 'right',
  'vname' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSCASH_1_FROM_MKS_PAYMENTSCASH_TITLE',
);


// created: 2019-02-25 17:03:23
$dictionary["mks_RegistrationReceipts"]["fields"]["mks_registrationreceipts_mks_paymentstransfer_1"] = array (
  'name' => 'mks_registrationreceipts_mks_paymentstransfer_1',
  'type' => 'link',
  'relationship' => 'mks_registrationreceipts_mks_paymentstransfer_1',
  'source' => 'non-db',
  'module' => 'mks_PaymentsTransfer',
  'bean_name' => 'mks_PaymentsTransfer',
  'side' => 'right',
  'vname' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSTRANSFER_1_FROM_MKS_PAYMENTSTRANSFER_TITLE',
);


// created: 2019-02-25 17:03:35
$dictionary["mks_RegistrationReceipts"]["fields"]["mks_registrationreceipts_mks_paymentscheck_1"] = array (
  'name' => 'mks_registrationreceipts_mks_paymentscheck_1',
  'type' => 'link',
  'relationship' => 'mks_registrationreceipts_mks_paymentscheck_1',
  'source' => 'non-db',
  'module' => 'mks_PaymentsCheck',
  'bean_name' => 'mks_PaymentsCheck',
  'side' => 'right',
  'vname' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSCHECK_1_FROM_MKS_PAYMENTSCHECK_TITLE',
);


// created: 2019-02-25 17:03:52
$dictionary["mks_RegistrationReceipts"]["fields"]["mks_registrationreceipts_mks_paymentscard_1"] = array (
  'name' => 'mks_registrationreceipts_mks_paymentscard_1',
  'type' => 'link',
  'relationship' => 'mks_registrationreceipts_mks_paymentscard_1',
  'source' => 'non-db',
  'module' => 'mks_PaymentsCard',
  'bean_name' => 'mks_PaymentsCard',
  'side' => 'right',
  'vname' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSCARD_1_FROM_MKS_PAYMENTSCARD_TITLE',
);


// created: 2019-02-25 17:06:08
$dictionary["mks_RegistrationReceipts"]["fields"]["mks_registrationreceipts_mks_collectionconcepts_1"] = array (
  'name' => 'mks_registrationreceipts_mks_collectionconcepts_1',
  'type' => 'link',
  'relationship' => 'mks_registrationreceipts_mks_collectionconcepts_1',
  'source' => 'non-db',
  'module' => 'mks_CollectionConcepts',
  'bean_name' => 'mks_CollectionConcepts',
  'side' => 'right',
  'vname' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_COLLECTIONCONCEPTS_1_FROM_MKS_COLLECTIONCONCEPTS_TITLE',
);


// created: 2019-02-25 17:08:16
$dictionary["mks_RegistrationReceipts"]["fields"]["mks_custompaymentplan_mks_registrationreceipts_1"] = array (
  'name' => 'mks_custompaymentplan_mks_registrationreceipts_1',
  'type' => 'link',
  'relationship' => 'mks_custompaymentplan_mks_registrationreceipts_1',
  'source' => 'non-db',
  'module' => 'mks_CustomPaymentPlan',
  'bean_name' => 'mks_CustomPaymentPlan',
  'vname' => 'LBL_MKS_CUSTOMPAYMENTPLAN_MKS_REGISTRATIONRECEIPTS_1_FROM_MKS_CUSTOMPAYMENTPLAN_TITLE',
  'id_name' => 'mks_custom8555entplan_ida',
);
$dictionary["mks_RegistrationReceipts"]["fields"]["mks_custompaymentplan_mks_registrationreceipts_1_name"] = array (
  'name' => 'mks_custompaymentplan_mks_registrationreceipts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_CUSTOMPAYMENTPLAN_MKS_REGISTRATIONRECEIPTS_1_FROM_MKS_CUSTOMPAYMENTPLAN_TITLE',
  'save' => true,
  'id_name' => 'mks_custom8555entplan_ida',
  'link' => 'mks_custompaymentplan_mks_registrationreceipts_1',
  'table' => 'mks_custompaymentplan',
  'module' => 'mks_CustomPaymentPlan',
  'rname' => 'name',
);
$dictionary["mks_RegistrationReceipts"]["fields"]["mks_custom8555entplan_ida"] = array (
  'name' => 'mks_custom8555entplan_ida',
  'type' => 'link',
  'relationship' => 'mks_custompaymentplan_mks_registrationreceipts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_CUSTOMPAYMENTPLAN_MKS_REGISTRATIONRECEIPTS_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
);


 // created: 2019-02-25 17:13:29
$dictionary['mks_RegistrationReceipts']['fields']['id_autoincrement_c']['inline_edit']='1';
$dictionary['mks_RegistrationReceipts']['fields']['id_autoincrement_c']['labelValue']='Número';

 

 // created: 2019-02-26 20:29:53
$dictionary['mks_RegistrationReceipts']['fields']['total_effective_c']['inline_edit']='1';
$dictionary['mks_RegistrationReceipts']['fields']['total_effective_c']['labelValue']='Total en Efectivo';

 

 // created: 2019-02-26 20:30:02
$dictionary['mks_RegistrationReceipts']['fields']['total_transfers_c']['inline_edit']='1';
$dictionary['mks_RegistrationReceipts']['fields']['total_transfers_c']['labelValue']='Total en Transferencias';

 

 // created: 2019-02-26 20:30:51
$dictionary['mks_RegistrationReceipts']['fields']['total_checks_c']['inline_edit']='1';
$dictionary['mks_RegistrationReceipts']['fields']['total_checks_c']['labelValue']='Total en Cheques';

 

 // created: 2019-02-26 20:31:15
$dictionary['mks_RegistrationReceipts']['fields']['total_cards_c']['inline_edit']='1';
$dictionary['mks_RegistrationReceipts']['fields']['total_cards_c']['labelValue']='Total en Tarjetas';

 

 // created: 2019-02-26 20:33:33
$dictionary['mks_RegistrationReceipts']['fields']['total_charge_c']['inline_edit']='1';
$dictionary['mks_RegistrationReceipts']['fields']['total_charge_c']['labelValue']='TOTAL A COBRAR';

 

 // created: 2019-02-26 20:43:02
$dictionary['mks_RegistrationReceipts']['fields']['total_amount_c']['inline_edit']='1';
$dictionary['mks_RegistrationReceipts']['fields']['total_amount_c']['labelValue']='Total Importe';

 

 // created: 2019-02-27 17:15:39
$dictionary['mks_RegistrationReceipts']['fields']['status_registration_receipts_c']['inline_edit']='1';
$dictionary['mks_RegistrationReceipts']['fields']['status_registration_receipts_c']['labelValue']='Estado';

 

 // created: 2019-02-27 20:10:20
$dictionary['mks_RegistrationReceipts']['fields']['tmp_reg_c']['inline_edit']='1';
$dictionary['mks_RegistrationReceipts']['fields']['tmp_reg_c']['labelValue']='ID Tmp';

 

 // created: 2019-02-28 15:51:07
$dictionary['mks_RegistrationReceipts']['fields']['balance_c']['inline_edit']='1';
$dictionary['mks_RegistrationReceipts']['fields']['balance_c']['labelValue']='Balance';

 

 // created: 2019-02-28 17:20:56
$dictionary['mks_RegistrationReceipts']['fields']['date_receipts_c']['inline_edit']='1';
$dictionary['mks_RegistrationReceipts']['fields']['date_receipts_c']['labelValue']='Fecha';

 

 // created: 2019-03-21 21:09:06
$dictionary['mks_RegistrationReceipts']['fields']['payment_date_c']['inline_edit']='1';
$dictionary['mks_RegistrationReceipts']['fields']['payment_date_c']['labelValue']='Fecha de Pago';

 

 // created: 2019-04-27 15:07:07
$dictionary['mks_RegistrationReceipts']['fields']['total_discount_c']['inline_edit']='1';
$dictionary['mks_RegistrationReceipts']['fields']['total_discount_c']['labelValue']='Total Descuento(Cobranza)';

 

 // created: 2019-05-09 02:16:48
$dictionary['mks_RegistrationReceipts']['fields']['type_rr_c']['inline_edit']='';
$dictionary['mks_RegistrationReceipts']['fields']['type_rr_c']['labelValue']='Tipo';

 

 // created: 2019-05-04 15:31:46
$dictionary['mks_RegistrationReceipts']['fields']['address_contact_c']['inline_edit']='1';
$dictionary['mks_RegistrationReceipts']['fields']['address_contact_c']['labelValue']='Domicilio del Alumno';

 

 // created: 2019-05-04 15:32:16
$dictionary['mks_RegistrationReceipts']['fields']['telephone_contact_c']['inline_edit']='1';
$dictionary['mks_RegistrationReceipts']['fields']['telephone_contact_c']['labelValue']='Tel Alumno.';

 

 // created: 2019-05-04 15:32:51
$dictionary['mks_RegistrationReceipts']['fields']['next_expiration_c']['inline_edit']='1';
$dictionary['mks_RegistrationReceipts']['fields']['next_expiration_c']['labelValue']='Prox Venc.';

 

 // created: 2019-05-04 15:33:36
$dictionary['mks_RegistrationReceipts']['fields']['amount_in_letters_c']['inline_edit']='1';
$dictionary['mks_RegistrationReceipts']['fields']['amount_in_letters_c']['labelValue']='Monto en Letras';

 

 // created: 2019-05-04 15:34:36
$dictionary['mks_RegistrationReceipts']['fields']['consolidated_concepts_c']['inline_edit']='1';
$dictionary['mks_RegistrationReceipts']['fields']['consolidated_concepts_c']['labelValue']='Consolidado de Conceptos';

 

 // created: 2019-05-08 03:03:31
$dictionary['mks_RegistrationReceipts']['fields']['id_autoincrement_moron_a_c']['inline_edit']='1';
$dictionary['mks_RegistrationReceipts']['fields']['id_autoincrement_moron_a_c']['labelValue']='id autoincrement moron a';

 

 // created: 2019-05-08 03:04:16
$dictionary['mks_RegistrationReceipts']['fields']['id_autoincrement_moron_x_c']['inline_edit']='1';
$dictionary['mks_RegistrationReceipts']['fields']['id_autoincrement_moron_x_c']['labelValue']='id autoincrement moron x';

 

 // created: 2019-05-08 03:05:25
$dictionary['mks_RegistrationReceipts']['fields']['id_autoincrement_congreso_a_c']['inline_edit']='1';
$dictionary['mks_RegistrationReceipts']['fields']['id_autoincrement_congreso_a_c']['labelValue']='id autoincrement congreso a';

 

 // created: 2019-05-08 03:06:07
$dictionary['mks_RegistrationReceipts']['fields']['id_autoincrement_congreso_x_c']['inline_edit']='1';
$dictionary['mks_RegistrationReceipts']['fields']['id_autoincrement_congreso_x_c']['labelValue']='id autoincrement congreso x';

 

 // created: 2019-05-12 02:41:19
$dictionary['mks_RegistrationReceipts']['fields']['total_letters_c']['inline_edit']='1';
$dictionary['mks_RegistrationReceipts']['fields']['total_letters_c']['labelValue']='Total en letras';

 

 // created: 2019-05-12 14:48:21
$dictionary['mks_RegistrationReceipts']['fields']['consolided_concept_values_c']['inline_edit']='1';
$dictionary['mks_RegistrationReceipts']['fields']['consolided_concept_values_c']['labelValue']='Consolidado Valores';

 

 // created: 2019-05-29 19:52:25
$dictionary['mks_RegistrationReceipts']['fields']['mks_receiptype_id_c']['inline_edit']=1;

 

 // created: 2019-05-29 19:52:25
$dictionary['mks_RegistrationReceipts']['fields']['receip_type_c']['inline_edit']='1';
$dictionary['mks_RegistrationReceipts']['fields']['receip_type_c']['labelValue']='Tipo de Recibo';

 

 // created: 2019-06-01 17:19:36
$dictionary['mks_RegistrationReceipts']['fields']['photo_description_c']['inline_edit']='1';
$dictionary['mks_RegistrationReceipts']['fields']['photo_description_c']['labelValue']='foto resumen deuda';

 

 // created: 2019-06-01 17:21:40
$dictionary['mks_RegistrationReceipts']['fields']['description_to_pdf_c']['inline_edit']='1';
$dictionary['mks_RegistrationReceipts']['fields']['description_to_pdf_c']['labelValue']='Resumen deuda para pdf';

 

// created: 2019-06-01 17:47:30
$dictionary["mks_RegistrationReceipts"]["fields"]["mks_registrationreceipts_mks_customplanfees_1"] = array (
  'name' => 'mks_registrationreceipts_mks_customplanfees_1',
  'type' => 'link',
  'relationship' => 'mks_registrationreceipts_mks_customplanfees_1',
  'source' => 'non-db',
  'module' => 'mks_CustomPlanFees',
  'bean_name' => 'mks_CustomPlanFees',
  'vname' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_CUSTOMPLANFEES_1_FROM_MKS_CUSTOMPLANFEES_TITLE',
);


 // created: 2019-06-01 18:18:09
$dictionary['mks_RegistrationReceipts']['fields']['total_paid_fees_c']['inline_edit']='1';
$dictionary['mks_RegistrationReceipts']['fields']['total_paid_fees_c']['labelValue']='Total Pagado Cuotas';

 
?>