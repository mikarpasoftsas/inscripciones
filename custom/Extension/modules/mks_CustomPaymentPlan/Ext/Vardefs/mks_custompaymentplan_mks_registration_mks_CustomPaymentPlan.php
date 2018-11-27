<?php
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
