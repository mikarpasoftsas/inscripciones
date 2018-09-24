<?php
// created: 2018-09-19 21:02:45
$dictionary["mks_interestcourse_leads"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'mks_interestcourse_leads' => 
    array (
      'lhs_module' => 'Leads',
      'lhs_table' => 'leads',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_InterestCourse',
      'rhs_table' => 'mks_interestcourse',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mks_interestcourse_leads_c',
      'join_key_lhs' => 'mks_interestcourse_leadsleads_ida',
      'join_key_rhs' => 'mks_interestcourse_leadsmks_interestcourse_idb',
    ),
  ),
  'table' => 'mks_interestcourse_leads_c',
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
      'name' => 'mks_interestcourse_leadsleads_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mks_interestcourse_leadsmks_interestcourse_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mks_interestcourse_leadsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mks_interestcourse_leads_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mks_interestcourse_leadsleads_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mks_interestcourse_leads_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mks_interestcourse_leadsmks_interestcourse_idb',
      ),
    ),
  ),
);