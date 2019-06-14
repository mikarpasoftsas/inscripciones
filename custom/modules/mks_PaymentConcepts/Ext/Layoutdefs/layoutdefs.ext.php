<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2019-02-27 16:47:57
$layout_defs["mks_PaymentConcepts"]["subpanel_setup"]['mks_paymentconcepts_mks_collectionconcepts_1'] = array (
  'order' => 100,
  'module' => 'mks_CollectionConcepts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_PAYMENTCONCEPTS_MKS_COLLECTIONCONCEPTS_1_FROM_MKS_COLLECTIONCONCEPTS_TITLE',
  'get_subpanel_data' => 'mks_paymentconcepts_mks_collectionconcepts_1',
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

$layout_defs['mks_PaymentConcepts']['subpanel_setup']['securitygroups_mks_paymentconcepts'] = array(
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
	'title_key' => 'LBL_SECURITYGROUPS',	
 );
=======

$layout_defs['mks_PaymentConcepts']['subpanel_setup']['securitygroups_mks_paymentconcepts'] = array(
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
	'title_key' => 'LBL_SECURITYGROUPS',	
 );
>>>>>>> d368532854a4e9301ed814ff37b5ca7aed9c9989

?>