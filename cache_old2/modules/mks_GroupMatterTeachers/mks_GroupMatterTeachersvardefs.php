<?php 
 $GLOBALS["dictionary"]["mks_GroupMatterTeachers"]=array (
  'table' => 'mks_groupmatterteachers',
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
      'relationship' => 'mks_groupmatterteachers_created_by',
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
      'relationship' => 'mks_groupmatterteachers_modified_user',
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
      'relationship' => 'mks_groupmatterteachers_assigned_user',
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
      'relationship' => 'securitygroups_mks_groupmatterteachers',
      'module' => 'SecurityGroups',
      'bean_name' => 'SecurityGroup',
      'source' => 'non-db',
      'vname' => 'LBL_SECURITYGROUPS',
    ),
    'amount_theory' => 
    array (
      'required' => false,
      'name' => 'amount_theory',
      'vname' => 'LBL_AMOUNT_THEORY',
      'type' => 'currency',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => '',
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 26,
      'size' => '20',
      'enable_range_search' => false,
      'precision' => 6,
    ),
    'currency_id' => 
    array (
      'required' => false,
      'name' => 'currency_id',
      'vname' => 'LBL_CURRENCY',
      'type' => 'currency_id',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => 0,
      'audited' => false,
      'inline_edit' => true,
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 36,
      'size' => '20',
      'dbType' => 'id',
      'studio' => 'visible',
      'function' => 
      array (
        'name' => 'getCurrencyDropDown',
        'returns' => 'html',
      ),
    ),
    'amount_practice' => 
    array (
      'required' => false,
      'name' => 'amount_practice',
      'vname' => 'LBL_AMOUNT_PRACTICE',
      'type' => 'currency',
      'massupdate' => 0,
      'no_default' => false,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'inline_edit' => '',
      'reportable' => true,
      'unified_search' => false,
      'merge_filter' => 'disabled',
      'len' => 26,
      'size' => '20',
      'enable_range_search' => false,
      'precision' => 6,
    ),
    'id_autoincrement' => 
    array (
      'required' => false,
      'name' => 'id_autoincrement',
      'vname' => 'LBL_ID_AUTOINCREMENT',
      'type' => 'autoincrement',
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
      'len' => 80,
      'size' => '20',
      'dbType' => 'varchar',
      'format' => '{GMT}{-}{y}{-}{00000}{}{}',
      'start_number' => '00001',
    ),
    'mks_groupmatters_mks_groupmatterteachers' => 
    array (
      'name' => 'mks_groupmatters_mks_groupmatterteachers',
      'type' => 'link',
      'relationship' => 'mks_groupmatters_mks_groupmatterteachers',
      'source' => 'non-db',
      'module' => 'mks_GroupMatters',
      'bean_name' => 'mks_GroupMatters',
      'vname' => 'LBL_MKS_GROUPMATTERS_MKS_GROUPMATTERTEACHERS_FROM_MKS_GROUPMATTERS_TITLE',
      'id_name' => 'mks_groupmatters_mks_groupmatterteachersmks_groupmatters_ida',
    ),
    'mks_groupmatters_mks_groupmatterteachers_name' => 
    array (
      'name' => 'mks_groupmatters_mks_groupmatterteachers_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_MKS_GROUPMATTERS_MKS_GROUPMATTERTEACHERS_FROM_MKS_GROUPMATTERS_TITLE',
      'save' => true,
      'id_name' => 'mks_groupmatters_mks_groupmatterteachersmks_groupmatters_ida',
      'link' => 'mks_groupmatters_mks_groupmatterteachers',
      'table' => 'mks_groupmatters',
      'module' => 'mks_GroupMatters',
      'rname' => 'name',
    ),
    'mks_groupmatters_mks_groupmatterteachersmks_groupmatters_ida' => 
    array (
      'name' => 'mks_groupmatters_mks_groupmatterteachersmks_groupmatters_ida',
      'type' => 'link',
      'relationship' => 'mks_groupmatters_mks_groupmatterteachers',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_MKS_GROUPMATTERS_MKS_GROUPMATTERTEACHERS_FROM_MKS_GROUPMATTERTEACHERS_TITLE',
    ),
    'mks_teacher_mks_groupmatterteachers_1' => 
    array (
      'name' => 'mks_teacher_mks_groupmatterteachers_1',
      'type' => 'link',
      'relationship' => 'mks_teacher_mks_groupmatterteachers_1',
      'source' => 'non-db',
      'module' => 'mks_Teacher',
      'bean_name' => 'mks_Teacher',
      'vname' => 'LBL_MKS_TEACHER_MKS_GROUPMATTERTEACHERS_1_FROM_MKS_TEACHER_TITLE',
      'id_name' => 'mks_teacher_mks_groupmatterteachers_1mks_teacher_ida',
    ),
    'mks_teacher_mks_groupmatterteachers_1_name' => 
    array (
      'name' => 'mks_teacher_mks_groupmatterteachers_1_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_MKS_TEACHER_MKS_GROUPMATTERTEACHERS_1_FROM_MKS_TEACHER_TITLE',
      'save' => true,
      'id_name' => 'mks_teacher_mks_groupmatterteachers_1mks_teacher_ida',
      'link' => 'mks_teacher_mks_groupmatterteachers_1',
      'table' => 'mks_teacher',
      'module' => 'mks_Teacher',
      'rname' => 'name',
      'db_concat_fields' => 
      array (
        0 => 'first_name',
        1 => 'last_name',
      ),
    ),
    'mks_teacher_mks_groupmatterteachers_1mks_teacher_ida' => 
    array (
      'name' => 'mks_teacher_mks_groupmatterteachers_1mks_teacher_ida',
      'type' => 'link',
      'relationship' => 'mks_teacher_mks_groupmatterteachers_1',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_MKS_TEACHER_MKS_GROUPMATTERTEACHERS_1_FROM_MKS_GROUPMATTERTEACHERS_TITLE',
    ),
  ),
  'relationships' => 
  array (
    'mks_groupmatterteachers_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_GroupMatterTeachers',
      'rhs_table' => 'mks_groupmatterteachers',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'mks_groupmatterteachers_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_GroupMatterTeachers',
      'rhs_table' => 'mks_groupmatterteachers',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'mks_groupmatterteachers_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_GroupMatterTeachers',
      'rhs_table' => 'mks_groupmatterteachers',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'securitygroups_mks_groupmatterteachers' => 
    array (
      'lhs_module' => 'SecurityGroups',
      'lhs_table' => 'securitygroups',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_GroupMatterTeachers',
      'rhs_table' => 'mks_groupmatterteachers',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'securitygroups_records',
      'join_key_lhs' => 'securitygroup_id',
      'join_key_rhs' => 'record_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'mks_GroupMatterTeachers',
    ),
  ),
  'optimistic_locking' => true,
  'unified_search' => true,
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'mks_groupmatterteacherspk',
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
  'custom_fields' => false,
);