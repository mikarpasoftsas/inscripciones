<?php 
 //WARNING: The contents of this file are auto-generated


$layout_defs["mks_SubsidiaryUsers"]["subpanel_setup"]['mks_subsidiaryusers_aclroles'] = array (
  'order' => 100,
  'module' => 'ACLRoles',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_SUBSIDIARYUSERS_ACLROLES_FROM_ACLROLES_TITLE',
  'get_subpanel_data' => 'mks_subsidiaryusers_aclroles',
  'top_buttons' => 
  array (
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);

 // created: 2018-09-26 21:01:46
$layout_defs["mks_SubsidiaryUsers"]["subpanel_setup"]['mks_subsidiaryusers_securitygroups'] = array (
  'order' => 100,
  'module' => 'SecurityGroups',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_SUBSIDIARYUSERS_SECURITYGROUPS_FROM_SECURITYGROUPS_TITLE',
  'get_subpanel_data' => 'mks_subsidiaryusers_securitygroups',
  'top_buttons' => 
  array (
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);

?>