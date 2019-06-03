<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-11-01 22:42:13
$layout_defs["mks_Registration"]["subpanel_setup"]['mks_custompaymentplan_mks_registration'] = array (
  'order' => 100,
  'module' => 'mks_CustomPaymentPlan',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_CUSTOMPAYMENTPLAN_MKS_REGISTRATION_FROM_MKS_CUSTOMPAYMENTPLAN_TITLE',
  'get_subpanel_data' => 'mks_custompaymentplan_mks_registration',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),   
  ),
);


 // created: 2018-11-13 17:39:44
$layout_defs["mks_Registration"]["subpanel_setup"]['mks_registration_securitygroups_1'] = array (
  'order' => 100,
  'module' => 'SecurityGroups',
  'subpanel_name' => 'admin',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_REGISTRATION_SECURITYGROUPS_1_FROM_SECURITYGROUPS_TITLE',
  'get_subpanel_data' => 'mks_registration_securitygroups_1',
  'top_buttons' => 
  array (
    /*
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
	*/
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
	
  ),
);


 // created: 2018-11-14 20:55:03
$layout_defs["mks_Registration"]["subpanel_setup"]['mks_refinances_mks_registration'] = array (
  'order' => 100,
  'module' => 'mks_Refinances',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_REFINANCES_MKS_REGISTRATION_FROM_MKS_REFINANCES_TITLE',
  'get_subpanel_data' => 'mks_refinances_mks_registration',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
	/*
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
	*/
  ),
);


 // created: 2019-02-25 16:59:06
$layout_defs["mks_Registration"]["subpanel_setup"]['mks_registration_mks_registrationreceipts_1'] = array (
  'order' => 100,
  'module' => 'mks_RegistrationReceipts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_REGISTRATION_MKS_REGISTRATIONRECEIPTS_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
  'get_subpanel_data' => 'mks_registration_mks_registrationreceipts_1',
  'top_buttons' => 
  array (

  ),
);


 // created: 2019-03-14 15:31:29
$layout_defs["mks_Registration"]["subpanel_setup"]['mks_registration_mks_management_1'] = array (
  'order' => 100,
  'module' => 'mks_Management',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_REGISTRATION_MKS_MANAGEMENT_1_FROM_MKS_MANAGEMENT_TITLE',
  'get_subpanel_data' => 'mks_registration_mks_management_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


//auto-generated file DO NOT EDIT
$layout_defs['mks_Registration']['subpanel_setup']['mks_custompaymentplan_mks_registration']['override_subpanel_name'] = 'mks_Registration_subpanel_mks_custompaymentplan_mks_registration';


//auto-generated file DO NOT EDIT
$layout_defs['mks_Registration']['subpanel_setup']['mks_registration_mks_registrationreceipts_1']['override_subpanel_name'] = 'mks_Registration_subpanel_mks_registration_mks_registrationreceipts_1';


//auto-generated file DO NOT EDIT
$layout_defs['mks_Registration']['subpanel_setup']['mks_registration_mks_management_1']['override_subpanel_name'] = 'mks_Registration_subpanel_mks_registration_mks_management_1';

?>