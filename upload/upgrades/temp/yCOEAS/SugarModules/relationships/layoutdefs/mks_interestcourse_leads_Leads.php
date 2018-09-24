<?php
 // created: 2018-09-19 20:59:29
$layout_defs["Leads"]["subpanel_setup"]['mks_interestcourse_leads'] = array (
  'order' => 100,
  'module' => 'mks_InterestCourse',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_INTERESTCOURSE_LEADS_FROM_MKS_INTERESTCOURSE_TITLE',
  'get_subpanel_data' => 'mks_interestcourse_leads',
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
