<?php
// created: 2018-10-31 23:05:29
$dictionary["mks_discountrules_mks_paymentplan"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'mks_discountrules_mks_paymentplan' => 
    array (
      'lhs_module' => 'mks_PaymentPlan',
      'lhs_table' => 'mks_paymentplan',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_DiscountRules',
      'rhs_table' => 'mks_discountrules',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'mks_discountrules_mks_paymentplan_c',
      'join_key_lhs' => 'mks_discountrules_mks_paymentplanmks_paymentplan_ida',
      'join_key_rhs' => 'mks_discountrules_mks_paymentplanmks_discountrules_idb',
    ),
  ),
  'table' => 'mks_discountrules_mks_paymentplan_c',
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
      'name' => 'mks_discountrules_mks_paymentplanmks_paymentplan_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'mks_discountrules_mks_paymentplanmks_discountrules_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'mks_discountrules_mks_paymentplanspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'mks_discountrules_mks_paymentplan_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'mks_discountrules_mks_paymentplanmks_paymentplan_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'mks_discountrules_mks_paymentplan_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'mks_discountrules_mks_paymentplanmks_discountrules_idb',
      ),
    ),
  ),
);