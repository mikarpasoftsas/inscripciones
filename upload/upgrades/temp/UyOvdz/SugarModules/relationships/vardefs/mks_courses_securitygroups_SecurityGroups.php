<?php
// created: 2018-09-18 21:55:03
$dictionary["SecurityGroup"]["fields"]["mks_courses_securitygroups"] = array (
  'name' => 'mks_courses_securitygroups',
  'type' => 'link',
  'relationship' => 'mks_courses_securitygroups',
  'source' => 'non-db',
  'module' => 'mks_Courses',
  'bean_name' => 'mks_Courses',
  'vname' => 'LBL_MKS_COURSES_SECURITYGROUPS_FROM_MKS_COURSES_TITLE',
  'id_name' => 'mks_courses_securitygroupsmks_courses_ida',
);
$dictionary["SecurityGroup"]["fields"]["mks_courses_securitygroups_name"] = array (
  'name' => 'mks_courses_securitygroups_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_COURSES_SECURITYGROUPS_FROM_MKS_COURSES_TITLE',
  'save' => true,
  'id_name' => 'mks_courses_securitygroupsmks_courses_ida',
  'link' => 'mks_courses_securitygroups',
  'table' => 'mks_courses',
  'module' => 'mks_Courses',
  'rname' => 'name',
);
$dictionary["SecurityGroup"]["fields"]["mks_courses_securitygroupsmks_courses_ida"] = array (
  'name' => 'mks_courses_securitygroupsmks_courses_ida',
  'type' => 'link',
  'relationship' => 'mks_courses_securitygroups',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_COURSES_SECURITYGROUPS_FROM_SECURITYGROUPS_TITLE',
);
