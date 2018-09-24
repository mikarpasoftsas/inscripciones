<?php
 // created: 2018-09-18 21:52:24
$layout_defs["mks_Courses"]["subpanel_setup"]['mks_courses_mks_coursesdetail'] = array (
  'order' => 100,
  'module' => 'mks_CoursesDetail',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_COURSES_MKS_COURSESDETAIL_FROM_MKS_COURSESDETAIL_TITLE',
  'get_subpanel_data' => 'mks_courses_mks_coursesdetail',
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
