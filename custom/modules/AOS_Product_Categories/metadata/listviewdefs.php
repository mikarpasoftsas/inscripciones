<?php
$module_name = 'AOS_Product_Categories';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'PARENT_CATEGORY_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_PRODUCT_CATEGORYS_NAME',
    'id' => 'PARENT_CATEGORY_ID',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
;
?>
