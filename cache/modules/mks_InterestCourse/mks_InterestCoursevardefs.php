<?php 
 $GLOBALS["dictionary"]["mks_InterestCourse"]=array (
  'table' => 'mks_interestcourse',
  'audited' => true,
  'inline_edit' => true,
  'duplicate_merge' => true,
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
      'unified_search' => false,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'required' => true,
      'importable' => 'required',
      'duplicate_merge' => 'disabled',
      'merge_filter' => 'disabled',
      'default' => '-',
      'inline_edit' => true,
      'duplicate_merge_dom_value' => '0',
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
      'relationship' => 'mks_interestcourse_created_by',
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
      'relationship' => 'mks_interestcourse_modified_user',
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
      'relationship' => 'mks_interestcourse_assigned_user',
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
    'SecurityGroups' => 
    array (
      'name' => 'SecurityGroups',
      'type' => 'link',
      'relationship' => 'securitygroups_mks_interestcourse',
      'module' => 'SecurityGroups',
      'bean_name' => 'SecurityGroup',
      'source' => 'non-db',
      'vname' => 'LBL_SECURITYGROUPS',
    ),
    'day_available' => 
    array (
      'required' => true,
      'name' => 'day_available',
      'vname' => 'LBL_DAY_AVAILABLE',
      'type' => 'enum',
      'massupdate' => '1',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'day_available_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'turn' => 
    array (
      'required' => false,
      'name' => 'turn',
      'vname' => 'LBL_TURN',
      'type' => 'enum',
      'massupdate' => '1',
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 100,
      'size' => '20',
      'options' => 'turn_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'mks_courses_id_c' => 
    array (
      'required' => false,
      'name' => 'mks_courses_id_c',
      'vname' => 'LBL_COURSE_MKS_COURSES_ID',
      'type' => 'id',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'inline_edit' => true,
      'reportable' => false,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 36,
      'size' => '20',
    ),
    'course' => 
    array (
      'required' => true,
      'source' => 'non-db',
      'name' => 'course',
      'vname' => 'LBL_COURSE',
      'type' => 'relate',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => '255',
      'size' => '20',
      'id_name' => 'mks_courses_id_c',
      'ext2' => 'mks_Courses',
      'module' => 'mks_Courses',
      'rname' => 'name',
      'quicksearch' => 'enabled',
      'studio' => 'visible',
    ),
    'mks_interestcourse_opportunities' => 
    array (
      'name' => 'mks_interestcourse_opportunities',
      'type' => 'link',
      'relationship' => 'mks_interestcourse_opportunities',
      'source' => 'non-db',
      'module' => 'Opportunities',
      'bean_name' => 'Opportunity',
      'vname' => 'LBL_MKS_INTERESTCOURSE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
      'id_name' => 'mks_interestcourse_opportunitiesopportunities_ida',
    ),
    'mks_interestcourse_opportunities_name' => 
    array (
      'name' => 'mks_interestcourse_opportunities_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_MKS_INTERESTCOURSE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
      'save' => true,
      'id_name' => 'mks_interestcourse_opportunitiesopportunities_ida',
      'link' => 'mks_interestcourse_opportunities',
      'table' => 'opportunities',
      'module' => 'Opportunities',
      'rname' => 'name',
    ),
    'mks_interestcourse_opportunitiesopportunities_ida' => 
    array (
      'name' => 'mks_interestcourse_opportunitiesopportunities_ida',
      'type' => 'link',
      'relationship' => 'mks_interestcourse_opportunities',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_MKS_INTERESTCOURSE_OPPORTUNITIES_FROM_MKS_INTERESTCOURSE_TITLE',
    ),
    'leads_mks_interestcourse_1' => 
    array (
      'name' => 'leads_mks_interestcourse_1',
      'type' => 'link',
      'relationship' => 'leads_mks_interestcourse_1',
      'source' => 'non-db',
      'module' => 'Leads',
      'bean_name' => 'Lead',
      'vname' => 'LBL_LEADS_MKS_INTERESTCOURSE_1_FROM_LEADS_TITLE',
      'id_name' => 'leads_mks_interestcourse_1leads_ida',
    ),
    'leads_mks_interestcourse_1_name' => 
    array (
      'name' => 'leads_mks_interestcourse_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_LEADS_MKS_INTERESTCOURSE_1_FROM_LEADS_TITLE',
      'save' => true,
      'id_name' => 'leads_mks_interestcourse_1leads_ida',
      'link' => 'leads_mks_interestcourse_1',
      'table' => 'leads',
      'module' => 'Leads',
      'rname' => 'name',
      'db_concat_fields' => 
      array (
        0 => 'first_name',
        1 => 'last_name',
      ),
    ),
    'leads_mks_interestcourse_1leads_ida' => 
    array (
      'name' => 'leads_mks_interestcourse_1leads_ida',
      'type' => 'link',
      'relationship' => 'leads_mks_interestcourse_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_LEADS_MKS_INTERESTCOURSE_1_FROM_MKS_INTERESTCOURSE_TITLE',
    ),
    'id_autoincrement_c' => 
    array (
      'inline_edit' => '1',
      'labelValue' => '#',
      'required' => false,
      'source' => 'custom_fields',
      'name' => 'id_autoincrement_c',
      'vname' => 'LBL_ID_AUTOINCREMENT_C',
      'type' => 'autoincrement',
      'massupdate' => '0',
      'default' => NULL,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 80,
      'size' => '20',
      'dbType' => 'varchar',
      'format' => '{CI}{-}{y}{-}{00000}{}{}',
      'start_number' => '00001',
      'id' => 'mks_InterestCourseid_autoincrement_c',
      'custom_module' => 'mks_InterestCourse',
    ),
  ),
  'relationships' => 
  array (
    'mks_interestcourse_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_InterestCourse',
      'rhs_table' => 'mks_interestcourse',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'mks_interestcourse_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_InterestCourse',
      'rhs_table' => 'mks_interestcourse',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'mks_interestcourse_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_InterestCourse',
      'rhs_table' => 'mks_interestcourse',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'securitygroups_mks_interestcourse' => 
    array (
      'lhs_module' => 'SecurityGroups',
      'lhs_table' => 'securitygroups',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_InterestCourse',
      'rhs_table' => 'mks_interestcourse',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'securitygroups_records',
      'join_key_lhs' => 'securitygroup_id',
      'join_key_rhs' => 'record_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'mks_InterestCourse',
    ),
  ),
  'optimistic_locking' => true,
  'unified_search' => true,
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'mks_interestcoursepk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'templates' => 
  array (
    'security_groups' => 'security_groups',
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => true,
);