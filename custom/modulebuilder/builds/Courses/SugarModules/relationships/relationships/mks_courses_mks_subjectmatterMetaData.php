<?php
// created: 2018-09-24 16:16:47
$dictionary["mks_courses_mks_subjectmatter"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'mks_courses_mks_subjectmatter' => 
    array (
      'lhs_module' => 'mks_Courses',
      'lhs_table' => 'mks_courses',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_SubjectMatter',
      'rhs_table' => 'mks_subjectmatter',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mks_courses_mks_subjectmatter_c',
      'join_key_lhs' => 'mks_courses_mks_subjectmattermks_courses_ida',
      'join_key_rhs' => 'mks_courses_mks_subjectmattermks_subjectmatter_idb',
    ),
  ),
  'table' => 'mks_courses_mks_subjectmatter_c',
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
      'name' => 'mks_courses_mks_subjectmattermks_courses_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mks_courses_mks_subjectmattermks_subjectmatter_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mks_courses_mks_subjectmatterspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mks_courses_mks_subjectmatter_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mks_courses_mks_subjectmattermks_courses_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mks_courses_mks_subjectmatter_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mks_courses_mks_subjectmattermks_subjectmatter_idb',
      ),
    ),
  ),
);