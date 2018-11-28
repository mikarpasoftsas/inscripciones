<?php
 // created: 2018-10-31 23:05:29
$layout_defs["mks_PaymentPlan"]["subpanel_setup"]['mks_discountrules_mks_paymentplan'] = array (
  'order' => 100,
  'module' => 'mks_DiscountRules',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_DISCOUNTRULES_MKS_PAYMENTPLAN_FROM_MKS_DISCOUNTRULES_TITLE',
  'get_subpanel_data' => 'mks_discountrules_mks_paymentplan',
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
