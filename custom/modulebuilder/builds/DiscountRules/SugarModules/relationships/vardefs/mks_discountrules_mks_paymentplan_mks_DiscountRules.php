<?php
// created: 2018-10-31 23:05:29
$dictionary["mks_DiscountRules"]["fields"]["mks_discountrules_mks_paymentplan"] = array (
  'name' => 'mks_discountrules_mks_paymentplan',
  'type' => 'link',
  'relationship' => 'mks_discountrules_mks_paymentplan',
  'source' => 'non-db',
  'module' => 'mks_PaymentPlan',
  'bean_name' => 'mks_PaymentPlan',
  'vname' => 'LBL_MKS_DISCOUNTRULES_MKS_PAYMENTPLAN_FROM_MKS_PAYMENTPLAN_TITLE',
  'id_name' => 'mks_discountrules_mks_paymentplanmks_paymentplan_ida',
);
$dictionary["mks_DiscountRules"]["fields"]["mks_discountrules_mks_paymentplan_name"] = array (
  'name' => 'mks_discountrules_mks_paymentplan_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_DISCOUNTRULES_MKS_PAYMENTPLAN_FROM_MKS_PAYMENTPLAN_TITLE',
  'save' => true,
  'id_name' => 'mks_discountrules_mks_paymentplanmks_paymentplan_ida',
  'link' => 'mks_discountrules_mks_paymentplan',
  'table' => 'mks_paymentplan',
  'module' => 'mks_PaymentPlan',
  'rname' => 'name',
);
$dictionary["mks_DiscountRules"]["fields"]["mks_discountrules_mks_paymentplanmks_paymentplan_ida"] = array (
  'name' => 'mks_discountrules_mks_paymentplanmks_paymentplan_ida',
  'type' => 'link',
  'relationship' => 'mks_discountrules_mks_paymentplan',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_DISCOUNTRULES_MKS_PAYMENTPLAN_FROM_MKS_DISCOUNTRULES_TITLE',
);
