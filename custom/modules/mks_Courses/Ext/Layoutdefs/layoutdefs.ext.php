<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2018-09-24 16:52:32
$layout_defs["mks_Courses"]["subpanel_setup"]['mks_courses_securitygroups_1'] = array (
  'order' => 100,
  'module' => 'SecurityGroups',
  'subpanel_name' => 'admin',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_COURSES_SECURITYGROUPS_1_FROM_SECURITYGROUPS_TITLE',
  'get_subpanel_data' => 'mks_courses_securitygroups_1',
  'top_buttons' => 
  array (
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2018-09-24 16:52:03
$layout_defs["mks_Courses"]["subpanel_setup"]['mks_courses_mks_subjectmatter_1'] = array (
  'order' => 100,
  'module' => 'mks_SubjectMatter',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_MKS_COURSES_MKS_SUBJECTMATTER_1_FROM_MKS_SUBJECTMATTER_TITLE',
  'get_subpanel_data' => 'mks_courses_mks_subjectmatter_1',
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

?>