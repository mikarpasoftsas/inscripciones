<?php
 // created: 2018-09-24 16:16:47
$layout_defs["mks_Courses"]["subpanel_setup"]['mks_courses_mks_subjectmatter'] = array (
  'order' => 100,
  'module' => 'mks_SubjectMatter',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_COURSES_MKS_SUBJECTMATTER_FROM_MKS_SUBJECTMATTER_TITLE',
  'get_subpanel_data' => 'mks_courses_mks_subjectmatter',
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
