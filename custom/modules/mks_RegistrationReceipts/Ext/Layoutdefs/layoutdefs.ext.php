<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2019-02-25 17:03:03
$layout_defs["mks_RegistrationReceipts"]["subpanel_setup"]['mks_registrationreceipts_mks_paymentscash_1'] = array (
  'order' => 100,
  'module' => 'mks_PaymentsCash',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSCASH_1_FROM_MKS_PAYMENTSCASH_TITLE',
  'get_subpanel_data' => 'mks_registrationreceipts_mks_paymentscash_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    /*1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
   */
  ),
);


 // created: 2019-02-25 17:03:23
$layout_defs["mks_RegistrationReceipts"]["subpanel_setup"]['mks_registrationreceipts_mks_paymentstransfer_1'] = array (
  'order' => 100,
  'module' => 'mks_PaymentsTransfer',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSTRANSFER_1_FROM_MKS_PAYMENTSTRANSFER_TITLE',
  'get_subpanel_data' => 'mks_registrationreceipts_mks_paymentstransfer_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    /*1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
    */
  ),
);


 // created: 2019-02-25 17:03:35
$layout_defs["mks_RegistrationReceipts"]["subpanel_setup"]['mks_registrationreceipts_mks_paymentscheck_1'] = array (
  'order' => 100,
  'module' => 'mks_PaymentsCheck',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSCHECK_1_FROM_MKS_PAYMENTSCHECK_TITLE',
  'get_subpanel_data' => 'mks_registrationreceipts_mks_paymentscheck_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    /*1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
   */
  ),
);


 // created: 2019-02-25 17:03:52
$layout_defs["mks_RegistrationReceipts"]["subpanel_setup"]['mks_registrationreceipts_mks_paymentscard_1'] = array (
  'order' => 100,
  'module' => 'mks_PaymentsCard',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSCARD_1_FROM_MKS_PAYMENTSCARD_TITLE',
  'get_subpanel_data' => 'mks_registrationreceipts_mks_paymentscard_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    /*1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
   */
  ),
);


 // created: 2019-02-25 17:06:08
$layout_defs["mks_RegistrationReceipts"]["subpanel_setup"]['mks_registrationreceipts_mks_collectionconcepts_1'] = array (
  'order' => 100,
  'module' => 'mks_CollectionConcepts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_COLLECTIONCONCEPTS_1_FROM_MKS_COLLECTIONCONCEPTS_TITLE',
  'get_subpanel_data' => 'mks_registrationreceipts_mks_collectionconcepts_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    /*1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
    */
  ),
);

<<<<<<< HEAD


$layout_defs['mks_RegistrationReceipts']['subpanel_setup']['securitygroups_mks_registrationreceipts'] = array(
	'top_buttons' => array(
						array(
						
							'widget_class' => 'SubPanelTopSelectButton', 
							'popup_module' => 'SecurityGroups', 
							'mode' => 'MultiSelect'
						),
	),
	'order' => 900,
	'sort_by' => 'name',
	'sort_order' => 'asc',
	'module' => 'SecurityGroups',
	'refresh_page' => 1,
	'subpanel_name' => 'default',
	'get_subpanel_data' => 'SecurityGroups',
	'add_subpanel_data' => 'securitygroup_id',
	'title_key' => 'LBL_FILIAL_SUBPANEL_TITLE',	
 );
=======


$layout_defs['mks_RegistrationReceipts']['subpanel_setup']['securitygroups_mks_registrationreceipts'] = array(
	'top_buttons' => array(
						array(
						
							'widget_class' => 'SubPanelTopSelectButton', 
							'popup_module' => 'SecurityGroups', 
							'mode' => 'MultiSelect'
						),
	),
	'order' => 900,
	'sort_by' => 'name',
	'sort_order' => 'asc',
	'module' => 'SecurityGroups',
	'refresh_page' => 1,
	'subpanel_name' => 'default',
	'get_subpanel_data' => 'SecurityGroups',
	'add_subpanel_data' => 'securitygroup_id',
	'title_key' => 'LBL_FILIAL_SUBPANEL_TITLE',	
 );
>>>>>>> d368532854a4e9301ed814ff37b5ca7aed9c9989


 // created: 2019-06-01 17:47:30
$layout_defs["mks_RegistrationReceipts"]["subpanel_setup"]['mks_registrationreceipts_mks_customplanfees_1'] = array (
  'order' => 100,
  'module' => 'mks_CustomPlanFees',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_CUSTOMPLANFEES_1_FROM_MKS_CUSTOMPLANFEES_TITLE',
  'get_subpanel_data' => 'mks_registrationreceipts_mks_customplanfees_1',
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
$layout_defs['mks_RegistrationReceipts']['subpanel_setup']['mks_registrationreceipts_mks_paymentscash_1']['override_subpanel_name'] = 'mks_RegistrationReceipts_subpanel_mks_registrationreceipts_mks_paymentscash_1';


//auto-generated file DO NOT EDIT
$layout_defs['mks_RegistrationReceipts']['subpanel_setup']['mks_registrationreceipts_mks_paymentstransfer_1']['override_subpanel_name'] = 'mks_RegistrationReceipts_subpanel_mks_registrationreceipts_mks_paymentstransfer_1';


//auto-generated file DO NOT EDIT
$layout_defs['mks_RegistrationReceipts']['subpanel_setup']['mks_registrationreceipts_mks_paymentscheck_1']['override_subpanel_name'] = 'mks_RegistrationReceipts_subpanel_mks_registrationreceipts_mks_paymentscheck_1';


//auto-generated file DO NOT EDIT
$layout_defs['mks_RegistrationReceipts']['subpanel_setup']['mks_registrationreceipts_mks_paymentscard_1']['override_subpanel_name'] = 'mks_RegistrationReceipts_subpanel_mks_registrationreceipts_mks_paymentscard_1';


//auto-generated file DO NOT EDIT
$layout_defs['mks_RegistrationReceipts']['subpanel_setup']['mks_registrationreceipts_mks_collectionconcepts_1']['override_subpanel_name'] = 'mks_RegistrationReceipts_subpanel_mks_registrationreceipts_mks_collectionconcepts_1';


//auto-generated file DO NOT EDIT
$layout_defs['mks_RegistrationReceipts']['subpanel_setup']['mks_registrationreceipts_mks_customplanfees_1']['override_subpanel_name'] = 'mks_RegistrationReceipts_subpanel_mks_registrationreceipts_mks_customplanfees_1';

?>