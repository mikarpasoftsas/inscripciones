<?php
// created: 2018-09-18 17:32:56
$dictionary["mks_CoursesDetail"]["fields"]["mks_courses_mks_coursesdetail"] = array (
  'name' => 'mks_courses_mks_coursesdetail',
  'type' => 'link',
  'relationship' => 'mks_courses_mks_coursesdetail',
  'source' => 'non-db',
  'module' => 'mks_Courses',
  'bean_name' => 'mks_Courses',
  'vname' => 'LBL_MKS_COURSES_MKS_COURSESDETAIL_FROM_MKS_COURSES_TITLE',
  'id_name' => 'mks_courses_mks_coursesdetailmks_courses_ida',
);
$dictionary["mks_CoursesDetail"]["fields"]["mks_courses_mks_coursesdetail_name"] = array (
  'name' => 'mks_courses_mks_coursesdetail_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_COURSES_MKS_COURSESDETAIL_FROM_MKS_COURSES_TITLE',
  'save' => true,
  'id_name' => 'mks_courses_mks_coursesdetailmks_courses_ida',
  'link' => 'mks_courses_mks_coursesdetail',
  'table' => 'mks_courses',
  'module' => 'mks_Courses',
  'rname' => 'name',
);
$dictionary["mks_CoursesDetail"]["fields"]["mks_courses_mks_coursesdetailmks_courses_ida"] = array (
  'name' => 'mks_courses_mks_coursesdetailmks_courses_ida',
  'type' => 'link',
  'relationship' => 'mks_courses_mks_coursesdetail',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_COURSES_MKS_COURSESDETAIL_FROM_MKS_COURSESDETAIL_TITLE',
);
