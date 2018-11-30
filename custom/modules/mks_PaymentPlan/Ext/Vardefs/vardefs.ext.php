<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-11-01 22:32:57
$dictionary["mks_PaymentPlan"]["fields"]["mks_paymentplan_mks_courses"] = array (
  'name' => 'mks_paymentplan_mks_courses',
  'type' => 'link',
  'relationship' => 'mks_paymentplan_mks_courses',
  'source' => 'non-db',
  'module' => 'mks_Courses',
  'bean_name' => 'mks_Courses',
  'vname' => 'LBL_MKS_PAYMENTPLAN_MKS_COURSES_FROM_MKS_COURSES_TITLE',
  'id_name' => 'mks_paymentplan_mks_coursesmks_courses_ida',
);
$dictionary["mks_PaymentPlan"]["fields"]["mks_paymentplan_mks_courses_name"] = array (
  'name' => 'mks_paymentplan_mks_courses_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_PAYMENTPLAN_MKS_COURSES_FROM_MKS_COURSES_TITLE',
  'save' => true,
  'id_name' => 'mks_paymentplan_mks_coursesmks_courses_ida',
  'link' => 'mks_paymentplan_mks_courses',
  'table' => 'mks_courses',
  'module' => 'mks_Courses',
  'rname' => 'name',
);
$dictionary["mks_PaymentPlan"]["fields"]["mks_paymentplan_mks_coursesmks_courses_ida"] = array (
  'name' => 'mks_paymentplan_mks_coursesmks_courses_ida',
  'type' => 'link',
  'relationship' => 'mks_paymentplan_mks_courses',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_PAYMENTPLAN_MKS_COURSES_FROM_MKS_PAYMENTPLAN_TITLE',
);


// created: 2018-11-01 22:32:57
$dictionary["mks_PaymentPlan"]["fields"]["mks_paymentplan_mks_discountrules"] = array (
  'name' => 'mks_paymentplan_mks_discountrules',
  'type' => 'link',
  'relationship' => 'mks_paymentplan_mks_discountrules',
  'source' => 'non-db',
  'module' => 'mks_DiscountRules',
  'bean_name' => 'mks_DiscountRules',
  'side' => 'right',
  'vname' => 'LBL_MKS_PAYMENTPLAN_MKS_DISCOUNTRULES_FROM_MKS_DISCOUNTRULES_TITLE',
);


// created: 2018-11-01 22:32:57
$dictionary["mks_PaymentPlan"]["fields"]["mks_paymentplan_mks_planfees"] = array (
  'name' => 'mks_paymentplan_mks_planfees',
  'type' => 'link',
  'relationship' => 'mks_paymentplan_mks_planfees',
  'source' => 'non-db',
  'module' => 'mks_PlanFees',
  'bean_name' => 'mks_PlanFees',
  'side' => 'right',
  'vname' => 'LBL_MKS_PAYMENTPLAN_MKS_PLANFEES_FROM_MKS_PLANFEES_TITLE',
);


// created: 2018-11-28 23:31:51
$dictionary["mks_PaymentPlan"]["fields"]["mks_paymentplan_securitygroups_1"] = array (
  'name' => 'mks_paymentplan_securitygroups_1',
  'type' => 'link',
  'relationship' => 'mks_paymentplan_securitygroups_1',
  'source' => 'non-db',
  'module' => 'SecurityGroups',
  'bean_name' => 'SecurityGroup',
  'vname' => 'LBL_MKS_PAYMENTPLAN_SECURITYGROUPS_1_FROM_SECURITYGROUPS_TITLE',
);


 // created: 2018-11-08 17:33:58
$dictionary['mks_PaymentPlan']['fields']['amount']['len']='10';

 
?>