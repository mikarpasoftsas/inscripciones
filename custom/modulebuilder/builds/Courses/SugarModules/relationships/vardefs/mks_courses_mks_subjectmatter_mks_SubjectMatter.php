<?php
// created: 2018-09-24 16:16:47
$dictionary["mks_SubjectMatter"]["fields"]["mks_courses_mks_subjectmatter"] = array (
  'name' => 'mks_courses_mks_subjectmatter',
  'type' => 'link',
  'relationship' => 'mks_courses_mks_subjectmatter',
  'source' => 'non-db',
  'module' => 'mks_Courses',
  'bean_name' => 'mks_Courses',
  'vname' => 'LBL_MKS_COURSES_MKS_SUBJECTMATTER_FROM_MKS_COURSES_TITLE',
  'id_name' => 'mks_courses_mks_subjectmattermks_courses_ida',
);
$dictionary["mks_SubjectMatter"]["fields"]["mks_courses_mks_subjectmatter_name"] = array (
  'name' => 'mks_courses_mks_subjectmatter_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_COURSES_MKS_SUBJECTMATTER_FROM_MKS_COURSES_TITLE',
  'save' => true,
  'id_name' => 'mks_courses_mks_subjectmattermks_courses_ida',
  'link' => 'mks_courses_mks_subjectmatter',
  'table' => 'mks_courses',
  'module' => 'mks_Courses',
  'rname' => 'name',
);
$dictionary["mks_SubjectMatter"]["fields"]["mks_courses_mks_subjectmattermks_courses_ida"] = array (
  'name' => 'mks_courses_mks_subjectmattermks_courses_ida',
  'type' => 'link',
  'relationship' => 'mks_courses_mks_subjectmatter',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_COURSES_MKS_SUBJECTMATTER_FROM_MKS_SUBJECTMATTER_TITLE',
);
