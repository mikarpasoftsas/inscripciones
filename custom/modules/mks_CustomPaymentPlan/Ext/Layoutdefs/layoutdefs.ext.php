<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-11-01 22:42:13
$layout_defs["mks_CustomPaymentPlan"]["subpanel_setup"]['mks_custompaymentplan_mks_customplanfees'] = array (
  'order' => 100,
  'module' => 'mks_CustomPlanFees',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'n_fee_c,expiration',
  'title_key' => 'LBL_MKS_CUSTOMPAYMENTPLAN_MKS_CUSTOMPLANFEES_FROM_MKS_CUSTOMPLANFEES_TITLE',
  'get_subpanel_data' => 'mks_custompaymentplan_mks_customplanfees',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),    
  ),
);


 // created: 2018-11-01 22:42:26
$layout_defs["mks_CustomPaymentPlan"]["subpanel_setup"]['mks_customdiscountrules_mks_custompaymentplan'] = array (
  'order' => 100,
  'module' => 'mks_CustomDiscountRules',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_CUSTOMDISCOUNTRULES_MKS_CUSTOMPAYMENTPLAN_FROM_MKS_CUSTOMDISCOUNTRULES_TITLE',
  'get_subpanel_data' => 'mks_customdiscountrules_mks_custompaymentplan',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
  ),
);


 // created: 2019-02-25 17:08:16
$layout_defs["mks_CustomPaymentPlan"]["subpanel_setup"]['mks_custompaymentplan_mks_registrationreceipts_1'] = array (
  'order' => 100,
  'module' => 'mks_RegistrationReceipts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_CUSTOMPAYMENTPLAN_MKS_REGISTRATIONRECEIPTS_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
  'get_subpanel_data' => 'mks_custompaymentplan_mks_registrationreceipts_1',
  'top_buttons' => 
  array (
  ),
);


//auto-generated file DO NOT EDIT
$layout_defs['mks_CustomPaymentPlan']['subpanel_setup']['mks_custompaymentplan_mks_customplanfees']['override_subpanel_name'] = 'mks_CustomPaymentPlan_subpanel_mks_custompaymentplan_mks_customplanfees';

?>