<?php 
 //WARNING: The contents of this file are auto-generated


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


// created: 2018-09-26 21:01:46
$dictionary["SecurityGroup"]["fields"]["mks_subsidiaryusers_securitygroups"] = array (
  'name' => 'mks_subsidiaryusers_securitygroups',
  'type' => 'link',
  'relationship' => 'mks_subsidiaryusers_securitygroups',
  'source' => 'non-db',
  'module' => 'mks_SubsidiaryUsers',
  'bean_name' => 'mks_SubsidiaryUsers',
  'vname' => 'LBL_MKS_SUBSIDIARYUSERS_SECURITYGROUPS_FROM_MKS_SUBSIDIARYUSERS_TITLE',
);


// created: 2018-10-22 21:39:35
$dictionary["SecurityGroup"]["fields"]["mks_academicgroups_securitygroups"] = array (
  'name' => 'mks_academicgroups_securitygroups',
  'type' => 'link',
  'relationship' => 'mks_academicgroups_securitygroups',
  'source' => 'non-db',
  'module' => 'mks_AcademicGroups',
  'bean_name' => 'mks_AcademicGroups',
  'vname' => 'LBL_MKS_ACADEMICGROUPS_SECURITYGROUPS_FROM_MKS_ACADEMICGROUPS_TITLE',
);


// created: 2018-11-13 17:39:44
$dictionary["SecurityGroup"]["fields"]["mks_registration_securitygroups_1"] = array (
  'name' => 'mks_registration_securitygroups_1',
  'type' => 'link',
  'relationship' => 'mks_registration_securitygroups_1',
  'source' => 'non-db',
  'module' => 'mks_Registration',
  'bean_name' => 'mks_Registration',
  'vname' => 'LBL_MKS_REGISTRATION_SECURITYGROUPS_1_FROM_MKS_REGISTRATION_TITLE',
);


 // created: 2018-11-23 21:25:24
$dictionary['SecurityGroup']['fields']['fb_page_access_token_c']['inline_edit']='1';
$dictionary['SecurityGroup']['fields']['fb_page_access_token_c']['labelValue']='FB Token';

 

// created: 2018-11-24 15:24:05
$dictionary["SecurityGroup"]["fields"]["mks_messagesfb_securitygroups_1"] = array (
  'name' => 'mks_messagesfb_securitygroups_1',
  'type' => 'link',
  'relationship' => 'mks_messagesfb_securitygroups_1',
  'source' => 'non-db',
  'module' => 'mks_MessagesFb',
  'bean_name' => 'mks_MessagesFb',
  'vname' => 'LBL_MKS_MESSAGESFB_SECURITYGROUPS_1_FROM_MKS_MESSAGESFB_TITLE',
);


// created: 2018-11-28 23:31:51
$dictionary["SecurityGroup"]["fields"]["mks_paymentplan_securitygroups_1"] = array (
  'name' => 'mks_paymentplan_securitygroups_1',
  'type' => 'link',
  'relationship' => 'mks_paymentplan_securitygroups_1',
  'source' => 'non-db',
  'module' => 'mks_PaymentPlan',
  'bean_name' => 'mks_PaymentPlan',
  'vname' => 'LBL_MKS_PAYMENTPLAN_SECURITYGROUPS_1_FROM_MKS_PAYMENTPLAN_TITLE',
);


 // created: 2018-11-29 19:57:20
$dictionary['SecurityGroup']['fields']['page_id_c']['inline_edit']='1';
$dictionary['SecurityGroup']['fields']['page_id_c']['labelValue']='Page ID';

 

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


 // created: 2019-05-03 23:29:27
$dictionary['SecurityGroup']['fields']['key_autoincrement_c']['inline_edit']='1';
$dictionary['SecurityGroup']['fields']['key_autoincrement_c']['labelValue']='Llave(Consecutivo)';

 
?>