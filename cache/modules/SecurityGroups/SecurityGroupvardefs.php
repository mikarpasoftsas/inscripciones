<?php 
 $GLOBALS["dictionary"]["SecurityGroup"]=array (
  'table' => 'securitygroups',
  'audited' => true,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
      'comment' => 'Unique identifier',
      'inline_edit' => false,
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'link' => true,
      'dbType' => 'varchar',
      'len' => 255,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'required' => true,
      'importable' => 'required',
      'duplicate_merge' => 'enabled',
      'merge_filter' => 'selected',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'user_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'user_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => 6,
      'cols' => 80,
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'securitygroups_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'securitygroups_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'reportable' => true,
      'isnull' => 'false',
      'dbType' => 'id',
      'audited' => true,
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'rname' => 'user_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'securitygroups_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
    ),
    'noninheritable' => 
    array (
      'name' => 'noninheritable',
      'vname' => 'LBL_NONINHERITABLE',
      'type' => 'bool',
      'reportable' => false,
      'comment' => 'Indicator for whether a group can be inherited by a record',
    ),
    'users' => 
    array (
      'name' => 'users',
      'type' => 'link',
      'relationship' => 'securitygroups_users',
      'source' => 'non-db',
      'vname' => 'LBL_USERS',
    ),
    'aclroles' => 
    array (
      'name' => 'aclroles',
      'type' => 'link',
      'relationship' => 'securitygroups_acl_roles',
      'source' => 'non-db',
      'vname' => 'LBL_ROLES',
    ),
    'securitygroup_noninher_fields' => 
    array (
      'name' => 'securitygroup_noninher_fields',
      'rname' => 'id',
      'relationship_fields' => 
      array (
        'id' => 'securitygroup_noninherit_id',
        'noninheritable' => 'securitygroup_noninheritable',
        'primary_group' => 'securitygroup_primary_group',
      ),
      'vname' => 'LBL_USER_NAME',
      'type' => 'relate',
      'link' => 'users',
      'link_type' => 'relationship_info',
      'source' => 'non-db',
      'Importable' => false,
      'duplicate_merge' => 'disabled',
    ),
    'securitygroup_noninherit_id' => 
    array (
      'name' => 'securitygroup_noninherit_id',
      'type' => 'varchar',
      'source' => 'non-db',
      'vname' => 'LBL_securitygroup_noninherit_id',
    ),
    'securitygroup_noninheritable' => 
    array (
      'name' => 'securitygroup_noninheritable',
      'type' => 'bool',
      'source' => 'non-db',
      'vname' => 'LBL_SECURITYGROUP_NONINHERITABLE',
    ),
    'securitygroup_primary_group' => 
    array (
      'name' => 'securitygroup_primary_group',
      'type' => 'bool',
      'source' => 'non-db',
      'vname' => 'LBL_PRIMARY_GROUP',
    ),
    'mks_courses_securitygroups' => 
    array (
      'name' => 'mks_courses_securitygroups',
      'type' => 'link',
      'relationship' => 'mks_courses_securitygroups',
      'source' => 'non-db',
      'module' => 'mks_Courses',
      'bean_name' => 'mks_Courses',
      'vname' => 'LBL_MKS_COURSES_SECURITYGROUPS_FROM_MKS_COURSES_TITLE',
      'id_name' => 'mks_courses_securitygroupsmks_courses_ida',
    ),
    'mks_courses_securitygroups_name' => 
    array (
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
    ),
    'mks_courses_securitygroupsmks_courses_ida' => 
    array (
      'name' => 'mks_courses_securitygroupsmks_courses_ida',
      'type' => 'link',
      'relationship' => 'mks_courses_securitygroups',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_MKS_COURSES_SECURITYGROUPS_FROM_SECURITYGROUPS_TITLE',
    ),
    'mks_subjectmatter_securitygroups' => 
    array (
      'name' => 'mks_subjectmatter_securitygroups',
      'type' => 'link',
      'relationship' => 'mks_subjectmatter_securitygroups',
      'source' => 'non-db',
      'module' => 'mks_SubjectMatter',
      'bean_name' => 'mks_SubjectMatter',
      'vname' => 'LBL_MKS_SUBJECTMATTER_SECURITYGROUPS_FROM_MKS_SUBJECTMATTER_TITLE',
    ),
    'mks_nonworkingdays_securitygroups' => 
    array (
      'name' => 'mks_nonworkingdays_securitygroups',
      'type' => 'link',
      'relationship' => 'mks_nonworkingdays_securitygroups',
      'source' => 'non-db',
      'module' => 'mks_NonworkingDays',
      'bean_name' => 'mks_NonworkingDays',
      'vname' => 'LBL_MKS_NONWORKINGDAYS_SECURITYGROUPS_FROM_MKS_NONWORKINGDAYS_TITLE',
      'id_name' => 'mks_nonworkingdays_securitygroupsmks_nonworkingdays_ida',
    ),
    'mks_nonworkingdays_securitygroups_name' => 
    array (
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
    ),
    'mks_nonworkingdays_securitygroupsmks_nonworkingdays_ida' => 
    array (
      'name' => 'mks_nonworkingdays_securitygroupsmks_nonworkingdays_ida',
      'type' => 'link',
      'relationship' => 'mks_nonworkingdays_securitygroups',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_MKS_NONWORKINGDAYS_SECURITYGROUPS_FROM_SECURITYGROUPS_TITLE',
    ),
    'mks_waitinglist_securitygroups' => 
    array (
      'name' => 'mks_waitinglist_securitygroups',
      'type' => 'link',
      'relationship' => 'mks_waitinglist_securitygroups',
      'source' => 'non-db',
      'module' => 'mks_WaitingList',
      'bean_name' => false,
      'vname' => 'LBL_MKS_WAITINGLIST_SECURITYGROUPS_FROM_MKS_WAITINGLIST_TITLE',
      'id_name' => 'mks_waitinglist_securitygroupsmks_waitinglist_ida',
    ),
    'mks_waitinglist_securitygroups_name' => 
    array (
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
    ),
    'mks_waitinglist_securitygroupsmks_waitinglist_ida' => 
    array (
      'name' => 'mks_waitinglist_securitygroupsmks_waitinglist_ida',
      'type' => 'link',
      'relationship' => 'mks_waitinglist_securitygroups',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_MKS_WAITINGLIST_SECURITYGROUPS_FROM_SECURITYGROUPS_TITLE',
    ),
    'mks_movementtype_securitygroups' => 
    array (
      'name' => 'mks_movementtype_securitygroups',
      'type' => 'link',
      'relationship' => 'mks_movementtype_securitygroups',
      'source' => 'non-db',
      'module' => 'mks_MovementType',
      'bean_name' => 'mks_MovementType',
      'vname' => 'LBL_MKS_MOVEMENTTYPE_SECURITYGROUPS_FROM_MKS_MOVEMENTTYPE_TITLE',
    ),
    'mks_movement_securitygroups' => 
    array (
      'name' => 'mks_movement_securitygroups',
      'type' => 'link',
      'relationship' => 'mks_movement_securitygroups',
      'source' => 'non-db',
      'module' => 'mks_Movement',
      'bean_name' => 'mks_Movement',
      'vname' => 'LBL_MKS_MOVEMENT_SECURITYGROUPS_FROM_MKS_MOVEMENT_TITLE',
    ),
    'mks_box_securitygroups' => 
    array (
      'name' => 'mks_box_securitygroups',
      'type' => 'link',
      'relationship' => 'mks_box_securitygroups',
      'source' => 'non-db',
      'module' => 'mks_Box',
      'bean_name' => 'mks_Box',
      'vname' => 'LBL_MKS_BOX_SECURITYGROUPS_FROM_MKS_BOX_TITLE',
    ),
    'mks_classroom_securitygroups' => 
    array (
      'name' => 'mks_classroom_securitygroups',
      'type' => 'link',
      'relationship' => 'mks_classroom_securitygroups',
      'source' => 'non-db',
      'module' => 'mks_Classroom',
      'bean_name' => 'mks_Classroom',
      'vname' => 'LBL_MKS_CLASSROOM_SECURITYGROUPS_FROM_MKS_CLASSROOM_TITLE',
    ),
    'mks_teacher_securitygroups' => 
    array (
      'name' => 'mks_teacher_securitygroups',
      'type' => 'link',
      'relationship' => 'mks_teacher_securitygroups',
      'source' => 'non-db',
      'module' => 'mks_Teacher',
      'bean_name' => 'mks_Teacher',
      'vname' => 'LBL_MKS_TEACHER_SECURITYGROUPS_FROM_MKS_TEACHER_TITLE',
    ),
    'mks_bank_securitygroups' => 
    array (
      'name' => 'mks_bank_securitygroups',
      'type' => 'link',
      'relationship' => 'mks_bank_securitygroups',
      'source' => 'non-db',
      'module' => 'mks_Bank',
      'bean_name' => 'mks_Bank',
      'vname' => 'LBL_MKS_BANK_SECURITYGROUPS_FROM_MKS_BANK_TITLE',
    ),
    'mks_courses_securitygroups_1' => 
    array (
      'name' => 'mks_courses_securitygroups_1',
      'type' => 'link',
      'relationship' => 'mks_courses_securitygroups_1',
      'source' => 'non-db',
      'module' => 'mks_Courses',
      'bean_name' => 'mks_Courses',
      'vname' => 'LBL_MKS_COURSES_SECURITYGROUPS_1_FROM_MKS_COURSES_TITLE',
    ),
  ),
  'relationships' => 
  array (
    'securitygroups_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'SecurityGroups',
      'rhs_table' => 'securitygroups',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'securitygroups_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'SecurityGroups',
      'rhs_table' => 'securitygroups',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'securitygroups_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'SecurityGroups',
      'rhs_table' => 'securitygroups',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'optimistic_lock' => true,
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'securitygroupspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'templates' => 
  array (
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);