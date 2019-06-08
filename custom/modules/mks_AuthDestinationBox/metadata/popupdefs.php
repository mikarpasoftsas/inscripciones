<?php
$popupMeta = array (
    'moduleMain' => 'mks_AuthDestinationBox',
    'varName' => 'mks_AuthDestinationBox',
    'orderBy' => 'mks_authdestinationbox.name',
    'whereClauses' => array (
  'box_c' => 'mks_authdestinationbox.box_c',
  'assigned_user_id' => 'mks_authdestinationbox.assigned_user_id',
),
    'searchInputs' => array (
  4 => 'box_c',
  5 => 'assigned_user_id',
),
    'searchdefs' => array (
  'box_c' => 
  array (
    'type' => 'relate',
    'studio' => 'visible',
    'label' => 'LBL_BOX',
    'id' => 'MKS_BOX_ID_C',
    'link' => true,
    'width' => '10%',
    'name' => 'box_c',
  ),
  'assigned_user_id' => 
  array (
    'name' => 'assigned_user_id',
    'label' => 'LBL_ASSIGNED_TO',
    'type' => 'enum',
    'function' => 
    array (
      'name' => 'get_user_array',
      'params' => 
      array (
        0 => false,
      ),
    ),
    'width' => '10%',
  ),
),
);
