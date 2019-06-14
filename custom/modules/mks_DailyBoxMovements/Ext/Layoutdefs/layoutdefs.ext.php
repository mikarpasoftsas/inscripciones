<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2019-05-18 15:11:59
$layout_defs["mks_DailyBoxMovements"]["subpanel_setup"]['mks_dailyboxmovements_mks_paymentscash_1'] = array (
  'order' => 100,
  'module' => 'mks_PaymentsCash',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_DAILYBOXMOVEMENTS_MKS_PAYMENTSCASH_1_FROM_MKS_PAYMENTSCASH_TITLE',
  'get_subpanel_data' => 'mks_dailyboxmovements_mks_paymentscash_1',
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


 // created: 2019-05-18 15:12:19
$layout_defs["mks_DailyBoxMovements"]["subpanel_setup"]['mks_dailyboxmovements_mks_paymentstransfer_1'] = array (
  'order' => 100,
  'module' => 'mks_PaymentsTransfer',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_DAILYBOXMOVEMENTS_MKS_PAYMENTSTRANSFER_1_FROM_MKS_PAYMENTSTRANSFER_TITLE',
  'get_subpanel_data' => 'mks_dailyboxmovements_mks_paymentstransfer_1',
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

<<<<<<< HEAD


$layout_defs['mks_DailyBoxMovements']['subpanel_setup']['securitygroups_mks_dailyboxmovements'] = array(
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


$layout_defs['mks_DailyBoxMovements']['subpanel_setup']['securitygroups_mks_dailyboxmovements'] = array(
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


 // created: 2019-05-18 17:45:38
$layout_defs["mks_DailyBoxMovements"]["subpanel_setup"]['mks_dailyboxmovements_mks_movement_1'] = array (
  'order' => 100,
  'module' => 'mks_Movement',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_DAILYBOXMOVEMENTS_MKS_MOVEMENT_1_FROM_MKS_MOVEMENT_TITLE',
  'get_subpanel_data' => 'mks_dailyboxmovements_mks_movement_1',
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
$layout_defs['mks_DailyBoxMovements']['subpanel_setup']['mks_dailyboxmovements_mks_paymentscash_1']['override_subpanel_name'] = 'mks_DailyBoxMovements_subpanel_mks_dailyboxmovements_mks_paymentscash_1';


//auto-generated file DO NOT EDIT
$layout_defs['mks_DailyBoxMovements']['subpanel_setup']['mks_dailyboxmovements_mks_paymentstransfer_1']['override_subpanel_name'] = 'mks_DailyBoxMovements_subpanel_mks_dailyboxmovements_mks_paymentstransfer_1';


//auto-generated file DO NOT EDIT
$layout_defs['mks_DailyBoxMovements']['subpanel_setup']['mks_dailyboxmovements_mks_paymentscheck_1']['override_subpanel_name'] = 'mks_DailyBoxMovements_subpanel_mks_dailyboxmovements_mks_paymentscheck_1';


//auto-generated file DO NOT EDIT
$layout_defs['mks_DailyBoxMovements']['subpanel_setup']['mks_dailyboxmovements_mks_paymentscard_1']['override_subpanel_name'] = 'mks_DailyBoxMovements_subpanel_mks_dailyboxmovements_mks_paymentscard_1';


//auto-generated file DO NOT EDIT
$layout_defs['mks_DailyBoxMovements']['subpanel_setup']['mks_dailyboxmovements_mks_movement_1']['override_subpanel_name'] = 'mks_DailyBoxMovements_subpanel_mks_dailyboxmovements_mks_movement_1';

?>