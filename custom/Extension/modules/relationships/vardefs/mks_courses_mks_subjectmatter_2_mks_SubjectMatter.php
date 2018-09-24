<?php
// created: 2018-09-21 19:54:35
$dictionary["mks_SubjectMatter"]["fields"]["mks_courses_mks_subjectmatter_2"] = array (
  'name' => 'mks_courses_mks_subjectmatter_2',
  'type' => 'link',
  'relationship' => 'mks_courses_mks_subjectmatter_2',
  'source' => 'non-db',
  'module' => 'mks_Courses',
  'bean_name' => 'mks_Courses',
  'vname' => 'LBL_MKS_COURSES_MKS_SUBJECTMATTER_2_FROM_MKS_COURSES_TITLE',
  'id_name' => 'mks_courses_mks_subjectmatter_2mks_courses_ida',
);
$dictionary["mks_SubjectMatter"]["fields"]["mks_courses_mks_subjectmatter_2_name"] = array (
  'name' => 'mks_courses_mks_subjectmatter_2_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_COURSES_MKS_SUBJECTMATTER_2_FROM_MKS_COURSES_TITLE',
  'save' => true,
  'id_name' => 'mks_courses_mks_subjectmatter_2mks_courses_ida',
  'link' => 'mks_courses_mks_subjectmatter_2',
  'table' => 'mks_courses',
  'module' => 'mks_Courses',
  'rname' => 'name',
);
$dictionary["mks_SubjectMatter"]["fields"]["mks_courses_mks_subjectmatter_2mks_courses_ida"] = array (
  'name' => 'mks_courses_mks_subjectmatter_2mks_courses_ida',
  'type' => 'link',
  'relationship' => 'mks_courses_mks_subjectmatter_2',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_COURSES_MKS_SUBJECTMATTER_2_FROM_MKS_SUBJECTMATTER_TITLE',
);
