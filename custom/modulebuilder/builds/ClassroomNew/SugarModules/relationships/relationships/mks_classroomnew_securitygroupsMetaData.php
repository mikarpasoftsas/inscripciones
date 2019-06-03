<?php
// created: 2019-04-29 18:28:10
$dictionary["mks_classroomnew_securitygroups"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'mks_classroomnew_securitygroups' => 
    array (
      'lhs_module' => 'mks_ClassroomNew',
      'lhs_table' => 'mks_classroomnew',
      'lhs_key' => 'id',
      'rhs_module' => 'SecurityGroups',
      'rhs_table' => 'securitygroups',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mks_classroomnew_securitygroups_c',
      'join_key_lhs' => 'mks_classroomnew_securitygroupsmks_classroomnew_ida',
      'join_key_rhs' => 'mks_classroomnew_securitygroupssecuritygroups_idb',
    ),
  ),
  'table' => 'mks_classroomnew_securitygroups_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'mks_classroomnew_securitygroupsmks_classroomnew_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mks_classroomnew_securitygroupssecuritygroups_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mks_classroomnew_securitygroupsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mks_classroomnew_securitygroups_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mks_classroomnew_securitygroupsmks_classroomnew_ida',
        1 => 'mks_classroomnew_securitygroupssecuritygroups_idb',
      ),
    ),
  ),
);