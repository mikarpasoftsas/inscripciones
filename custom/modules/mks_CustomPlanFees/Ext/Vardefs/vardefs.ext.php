<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-11-01 22:42:13
$dictionary["mks_CustomPlanFees"]["fields"]["mks_custompaymentplan_mks_customplanfees"] = array (
  'name' => 'mks_custompaymentplan_mks_customplanfees',
  'type' => 'link',
  'relationship' => 'mks_custompaymentplan_mks_customplanfees',
  'source' => 'non-db',
  'module' => 'mks_CustomPaymentPlan',
  'bean_name' => 'mks_CustomPaymentPlan',
  'vname' => 'LBL_MKS_CUSTOMPAYMENTPLAN_MKS_CUSTOMPLANFEES_FROM_MKS_CUSTOMPAYMENTPLAN_TITLE',
  'id_name' => 'mks_customed0dentplan_ida',
);
$dictionary["mks_CustomPlanFees"]["fields"]["mks_custompaymentplan_mks_customplanfees_name"] = array (
  'name' => 'mks_custompaymentplan_mks_customplanfees_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_CUSTOMPAYMENTPLAN_MKS_CUSTOMPLANFEES_FROM_MKS_CUSTOMPAYMENTPLAN_TITLE',
  'save' => true,
  'id_name' => 'mks_customed0dentplan_ida',
  'link' => 'mks_custompaymentplan_mks_customplanfees',
  'table' => 'mks_custompaymentplan',
  'module' => 'mks_CustomPaymentPlan',
  'rname' => 'name',
);
$dictionary["mks_CustomPlanFees"]["fields"]["mks_customed0dentplan_ida"] = array (
  'name' => 'mks_customed0dentplan_ida',
  'type' => 'link',
  'relationship' => 'mks_custompaymentplan_mks_customplanfees',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_CUSTOMPAYMENTPLAN_MKS_CUSTOMPLANFEES_FROM_MKS_CUSTOMPLANFEES_TITLE',
);


 // created: 2018-11-09 15:35:28
$dictionary['mks_CustomPlanFees']['fields']['name']['full_text_search']=array (
);

 

 // created: 2018-11-09 15:36:02
$dictionary['mks_CustomPlanFees']['fields']['n_fee_c']['inline_edit']='';
$dictionary['mks_CustomPlanFees']['fields']['n_fee_c']['labelValue']='Cuota N°';

 

 // created: 2019-02-26 16:49:58
$dictionary['mks_CustomPlanFees']['fields']['payment_status_c']['inline_edit']='1';
$dictionary['mks_CustomPlanFees']['fields']['payment_status_c']['labelValue']='Estado del Pago';

 

// created: 2019-02-27 16:49:15
$dictionary["mks_CustomPlanFees"]["fields"]["mks_collectionconcepts_mks_customplanfees_1"] = array (
  'name' => 'mks_collectionconcepts_mks_customplanfees_1',
  'type' => 'link',
  'relationship' => 'mks_collectionconcepts_mks_customplanfees_1',
  'source' => 'non-db',
  'module' => 'mks_CollectionConcepts',
  'bean_name' => 'mks_CollectionConcepts',
  'vname' => 'LBL_MKS_COLLECTIONCONCEPTS_MKS_CUSTOMPLANFEES_1_FROM_MKS_COLLECTIONCONCEPTS_TITLE',
  'id_name' => 'mks_collec035foncepts_ida',
);
$dictionary["mks_CustomPlanFees"]["fields"]["mks_collectionconcepts_mks_customplanfees_1_name"] = array (
  'name' => 'mks_collectionconcepts_mks_customplanfees_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_COLLECTIONCONCEPTS_MKS_CUSTOMPLANFEES_1_FROM_MKS_COLLECTIONCONCEPTS_TITLE',
  'save' => true,
  'id_name' => 'mks_collec035foncepts_ida',
  'link' => 'mks_collectionconcepts_mks_customplanfees_1',
  'table' => 'mks_collectionconcepts',
  'module' => 'mks_CollectionConcepts',
  'rname' => 'name',
);
$dictionary["mks_CustomPlanFees"]["fields"]["mks_collec035foncepts_ida"] = array (
  'name' => 'mks_collec035foncepts_ida',
  'type' => 'link',
  'relationship' => 'mks_collectionconcepts_mks_customplanfees_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'left',
  'vname' => 'LBL_MKS_COLLECTIONCONCEPTS_MKS_CUSTOMPLANFEES_1_FROM_MKS_COLLECTIONCONCEPTS_TITLE',
);


 // created: 2019-04-27 20:51:57
$dictionary['mks_CustomPlanFees']['fields']['partial_mount_c']['inline_edit']='1';
$dictionary['mks_CustomPlanFees']['fields']['partial_mount_c']['labelValue']='Importe Parcial';

 

 // created: 2019-04-27 19:55:19
$dictionary['mks_CustomPlanFees']['fields']['amount']['audited']=true;

 

 // created: 2019-05-28 23:38:10
$dictionary['mks_CustomPlanFees']['fields']['amount_interest_c']['inline_edit']='1';
$dictionary['mks_CustomPlanFees']['fields']['amount_interest_c']['labelValue']='Intereses';

 

// created: 2019-06-01 17:47:30
$dictionary["mks_CustomPlanFees"]["fields"]["mks_registrationreceipts_mks_customplanfees_1"] = array (
  'name' => 'mks_registrationreceipts_mks_customplanfees_1',
  'type' => 'link',
  'relationship' => 'mks_registrationreceipts_mks_customplanfees_1',
  'source' => 'non-db',
  'module' => 'mks_RegistrationReceipts',
  'bean_name' => 'mks_RegistrationReceipts',
  'vname' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_CUSTOMPLANFEES_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
);

?>