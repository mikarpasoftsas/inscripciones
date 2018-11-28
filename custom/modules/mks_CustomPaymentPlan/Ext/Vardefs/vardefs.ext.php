<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-11-01 22:42:13
$dictionary["mks_CustomPaymentPlan"]["fields"]["mks_custompaymentplan_mks_registration"] = array (
  'name' => 'mks_custompaymentplan_mks_registration',
  'type' => 'link',
  'relationship' => 'mks_custompaymentplan_mks_registration',
  'source' => 'non-db',
  'module' => 'mks_Registration',
  'bean_name' => 'mks_Registration',
  'vname' => 'LBL_MKS_CUSTOMPAYMENTPLAN_MKS_REGISTRATION_FROM_MKS_REGISTRATION_TITLE',
  'id_name' => 'mks_custompaymentplan_mks_registrationmks_registration_ida',
);
$dictionary["mks_CustomPaymentPlan"]["fields"]["mks_custompaymentplan_mks_registration_name"] = array (
  'name' => 'mks_custompaymentplan_mks_registration_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_CUSTOMPAYMENTPLAN_MKS_REGISTRATION_FROM_MKS_REGISTRATION_TITLE',
  'save' => true,
  'id_name' => 'mks_custompaymentplan_mks_registrationmks_registration_ida',
  'link' => 'mks_custompaymentplan_mks_registration',
  'table' => 'mks_registration',
  'module' => 'mks_Registration',
  'rname' => 'document_name',
);
$dictionary["mks_CustomPaymentPlan"]["fields"]["mks_custompaymentplan_mks_registrationmks_registration_ida"] = array (
  'name' => 'mks_custompaymentplan_mks_registrationmks_registration_ida',
  'type' => 'link',
  'relationship' => 'mks_custompaymentplan_mks_registration',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_CUSTOMPAYMENTPLAN_MKS_REGISTRATION_FROM_MKS_CUSTOMPAYMENTPLAN_TITLE',
);


// created: 2018-11-01 22:42:13
$dictionary["mks_CustomPaymentPlan"]["fields"]["mks_custompaymentplan_mks_customplanfees"] = array (
  'name' => 'mks_custompaymentplan_mks_customplanfees',
  'type' => 'link',
  'relationship' => 'mks_custompaymentplan_mks_customplanfees',
  'source' => 'non-db',
  'module' => 'mks_CustomPlanFees',
  'bean_name' => 'mks_CustomPlanFees',
  'side' => 'right',
  'vname' => 'LBL_MKS_CUSTOMPAYMENTPLAN_MKS_CUSTOMPLANFEES_FROM_MKS_CUSTOMPLANFEES_TITLE',
);


// created: 2018-11-01 22:42:26
$dictionary["mks_CustomPaymentPlan"]["fields"]["mks_customdiscountrules_mks_custompaymentplan"] = array (
  'name' => 'mks_customdiscountrules_mks_custompaymentplan',
  'type' => 'link',
  'relationship' => 'mks_customdiscountrules_mks_custompaymentplan',
  'source' => 'non-db',
  'module' => 'mks_CustomDiscountRules',
  'bean_name' => 'mks_CustomDiscountRules',
  'side' => 'right',
  'vname' => 'LBL_MKS_CUSTOMDISCOUNTRULES_MKS_CUSTOMPAYMENTPLAN_FROM_MKS_CUSTOMDISCOUNTRULES_TITLE',
);


 // created: 2018-11-09 15:29:13
$dictionary['mks_CustomPaymentPlan']['fields']['id_autoincrement']['format']='{PPP}{-}{y}{-}{00000}{}{}';

 

 // created: 2018-11-16 22:32:21
$dictionary['mks_CustomPaymentPlan']['fields']['status_c']['inline_edit']='1';
$dictionary['mks_CustomPaymentPlan']['fields']['status_c']['labelValue']='Estado';

 
?>