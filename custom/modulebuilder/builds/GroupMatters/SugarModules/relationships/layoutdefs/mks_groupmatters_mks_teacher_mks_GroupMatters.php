<?php
 // created: 2018-10-22 21:09:26
$layout_defs["mks_GroupMatters"]["subpanel_setup"]['mks_groupmatters_mks_teacher'] = array (
  'order' => 100,
  'module' => 'mks_Teacher',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_GROUPMATTERS_MKS_TEACHER_FROM_MKS_TEACHER_TITLE',
  'get_subpanel_data' => 'mks_groupmatters_mks_teacher',
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
