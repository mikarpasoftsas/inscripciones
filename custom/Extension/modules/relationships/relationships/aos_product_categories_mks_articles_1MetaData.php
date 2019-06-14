<?php
// created: 2019-06-06 14:48:38
$dictionary["aos_product_categories_mks_articles_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'aos_product_categories_mks_articles_1' => 
    array (
      'lhs_module' => 'AOS_Product_Categories',
      'lhs_table' => 'aos_product_categories',
      'lhs_key' => 'id',
      'rhs_module' => 'mks_Articles',
      'rhs_table' => 'mks_articles',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'aos_product_categories_mks_articles_1_c',
      'join_key_lhs' => 'aos_product_categories_mks_articles_1aos_product_categories_ida',
      'join_key_rhs' => 'aos_product_categories_mks_articles_1mks_articles_idb',
    ),
  ),
  'table' => 'aos_product_categories_mks_articles_1_c',
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
      'name' => 'aos_product_categories_mks_articles_1aos_product_categories_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'aos_product_categories_mks_articles_1mks_articles_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'aos_product_categories_mks_articles_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'aos_product_categories_mks_articles_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'aos_product_categories_mks_articles_1aos_product_categories_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'aos_product_categories_mks_articles_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'aos_product_categories_mks_articles_1mks_articles_idb',
      ),
    ),
  ),
);