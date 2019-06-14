<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-11-01 22:32:57
$layout_defs["mks_PaymentPlan"]["subpanel_setup"]['mks_paymentplan_mks_discountrules'] = array (
  'order' => 110,
  'module' => 'mks_DiscountRules',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_PAYMENTPLAN_MKS_DISCOUNTRULES_FROM_MKS_DISCOUNTRULES_TITLE',
  'get_subpanel_data' => 'mks_paymentplan_mks_discountrules',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),   
  ),
);


 // created: 2018-11-01 22:32:57
$layout_defs["mks_PaymentPlan"]["subpanel_setup"]['mks_paymentplan_mks_planfees'] = array (
  'order' => 100,
  'module' => 'mks_PlanFees',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_PAYMENTPLAN_MKS_PLANFEES_FROM_MKS_PLANFEES_TITLE',
  'get_subpanel_data' => 'mks_paymentplan_mks_planfees',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),    
  ),
);


 // created: 2018-11-28 23:31:51
$layout_defs["mks_PaymentPlan"]["subpanel_setup"]['mks_paymentplan_securitygroups_1'] = array (
  'order' => 100,
  'module' => 'SecurityGroups',
  'subpanel_name' => 'admin',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_PAYMENTPLAN_SECURITYGROUPS_1_FROM_SECURITYGROUPS_TITLE',
  'get_subpanel_data' => 'mks_paymentplan_securitygroups_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);

?>