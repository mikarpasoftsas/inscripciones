<?php 
 //WARNING: The contents of this file are auto-generated


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


// created: 2018-09-18 21:55:03
$dictionary["SecurityGroup"]["fields"]["mks_subjectmatter_securitygroups"] = array (
  'name' => 'mks_subjectmatter_securitygroups',
  'type' => 'link',
  'relationship' => 'mks_subjectmatter_securitygroups',
  'source' => 'non-db',
  'module' => 'mks_SubjectMatter',
  'bean_name' => 'mks_SubjectMatter',
  'vname' => 'LBL_MKS_SUBJECTMATTER_SECURITYGROUPS_FROM_MKS_SUBJECTMATTER_TITLE',
);


// created: 2018-09-18 22:05:05
$dictionary["SecurityGroup"]["fields"]["mks_nonworkingdays_securitygroups"] = array (
  'name' => 'mks_nonworkingdays_securitygroups',
  'type' => 'link',
  'relationship' => 'mks_nonworkingdays_securitygroups',
  'source' => 'non-db',
  'module' => 'mks_NonworkingDays',
  'bean_name' => 'mks_NonworkingDays',
  'vname' => 'LBL_MKS_NONWORKINGDAYS_SECURITYGROUPS_FROM_MKS_NONWORKINGDAYS_TITLE',
  'id_name' => 'mks_nonworkingdays_securitygroupsmks_nonworkingdays_ida',
);
$dictionary["SecurityGroup"]["fields"]["mks_nonworkingdays_securitygroups_name"] = array (
  'name' => 'mks_nonworkingdays_securitygroups_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_NONWORKINGDAYS_SECURITYGROUPS_FROM_MKS_NONWORKINGDAYS_TITLE',
  'save' => true,
  'id_name' => 'mks_nonworkingdays_securitygroupsmks_nonworkingdays_ida',
  'link' => 'mks_nonworkingdays_securitygroups',
  'table' => 'mks_nonworkingdays',
  'module' => 'mks_NonworkingDays',
  'rname' => 'name',
);
$dictionary["SecurityGroup"]["fields"]["mks_nonworkingdays_securitygroupsmks_nonworkingdays_ida"] = array (
  'name' => 'mks_nonworkingdays_securitygroupsmks_nonworkingdays_ida',
  'type' => 'link',
  'relationship' => 'mks_nonworkingdays_securitygroups',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_NONWORKINGDAYS_SECURITYGROUPS_FROM_SECURITYGROUPS_TITLE',
);


// created: 2018-09-20 20:16:35
$dictionary["SecurityGroup"]["fields"]["mks_waitinglist_securitygroups"] = array (
  'name' => 'mks_waitinglist_securitygroups',
  'type' => 'link',
  'relationship' => 'mks_waitinglist_securitygroups',
  'source' => 'non-db',
  'module' => 'mks_WaitingList',
  'bean_name' => false,
  'vname' => 'LBL_MKS_WAITINGLIST_SECURITYGROUPS_FROM_MKS_WAITINGLIST_TITLE',
  'id_name' => 'mks_waitinglist_securitygroupsmks_waitinglist_ida',
);
$dictionary["SecurityGroup"]["fields"]["mks_waitinglist_securitygroups_name"] = array (
  'name' => 'mks_waitinglist_securitygroups_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_WAITINGLIST_SECURITYGROUPS_FROM_MKS_WAITINGLIST_TITLE',
  'save' => true,
  'id_name' => 'mks_waitinglist_securitygroupsmks_waitinglist_ida',
  'link' => 'mks_waitinglist_securitygroups',
  'table' => 'mks_waitinglist',
  'module' => 'mks_WaitingList',
  'rname' => 'name',
);
$dictionary["SecurityGroup"]["fields"]["mks_waitinglist_securitygroupsmks_waitinglist_ida"] = array (
  'name' => 'mks_waitinglist_securitygroupsmks_waitinglist_ida',
  'type' => 'link',
  'relationship' => 'mks_waitinglist_securitygroups',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_WAITINGLIST_SECURITYGROUPS_FROM_SECURITYGROUPS_TITLE',
);


// created: 2018-09-24 15:56:18
$dictionary["SecurityGroup"]["fields"]["mks_movementtype_securitygroups"] = array (
  'name' => 'mks_movementtype_securitygroups',
  'type' => 'link',
  'relationship' => 'mks_movementtype_securitygroups',
  'source' => 'non-db',
  'module' => 'mks_MovementType',
  'bean_name' => 'mks_MovementType',
  'vname' => 'LBL_MKS_MOVEMENTTYPE_SECURITYGROUPS_FROM_MKS_MOVEMENTTYPE_TITLE',
);


// created: 2018-09-24 15:56:18
$dictionary["SecurityGroup"]["fields"]["mks_movement_securitygroups"] = array (
  'name' => 'mks_movement_securitygroups',
  'type' => 'link',
  'relationship' => 'mks_movement_securitygroups',
  'source' => 'non-db',
  'module' => 'mks_Movement',
  'bean_name' => 'mks_Movement',
  'vname' => 'LBL_MKS_MOVEMENT_SECURITYGROUPS_FROM_MKS_MOVEMENT_TITLE',
);


// created: 2018-09-24 15:56:18
$dictionary["SecurityGroup"]["fields"]["mks_box_securitygroups"] = array (
  'name' => 'mks_box_securitygroups',
  'type' => 'link',
  'relationship' => 'mks_box_securitygroups',
  'source' => 'non-db',
  'module' => 'mks_Box',
  'bean_name' => 'mks_Box',
  'vname' => 'LBL_MKS_BOX_SECURITYGROUPS_FROM_MKS_BOX_TITLE',
);


// created: 2018-09-24 16:21:43
$dictionary["SecurityGroup"]["fields"]["mks_classroom_securitygroups"] = array (
  'name' => 'mks_classroom_securitygroups',
  'type' => 'link',
  'relationship' => 'mks_classroom_securitygroups',
  'source' => 'non-db',
  'module' => 'mks_Classroom',
  'bean_name' => 'mks_Classroom',
  'vname' => 'LBL_MKS_CLASSROOM_SECURITYGROUPS_FROM_MKS_CLASSROOM_TITLE',
);


// created: 2018-09-24 16:22:53
$dictionary["SecurityGroup"]["fields"]["mks_teacher_securitygroups"] = array (
  'name' => 'mks_teacher_securitygroups',
  'type' => 'link',
  'relationship' => 'mks_teacher_securitygroups',
  'source' => 'non-db',
  'module' => 'mks_Teacher',
  'bean_name' => 'mks_Teacher',
  'vname' => 'LBL_MKS_TEACHER_SECURITYGROUPS_FROM_MKS_TEACHER_TITLE',
);


// created: 2018-09-24 16:25:50
$dictionary["SecurityGroup"]["fields"]["mks_bank_securitygroups"] = array (
  'name' => 'mks_bank_securitygroups',
  'type' => 'link',
  'relationship' => 'mks_bank_securitygroups',
  'source' => 'non-db',
  'module' => 'mks_Bank',
  'bean_name' => 'mks_Bank',
  'vname' => 'LBL_MKS_BANK_SECURITYGROUPS_FROM_MKS_BANK_TITLE',
);


// created: 2018-09-24 16:52:32
$dictionary["SecurityGroup"]["fields"]["mks_courses_securitygroups_1"] = array (
  'name' => 'mks_courses_securitygroups_1',
  'type' => 'link',
  'relationship' => 'mks_courses_securitygroups_1',
  'source' => 'non-db',
  'module' => 'mks_Courses',
  'bean_name' => 'mks_Courses',
  'vname' => 'LBL_MKS_COURSES_SECURITYGROUPS_1_FROM_MKS_COURSES_TITLE',
);

?>