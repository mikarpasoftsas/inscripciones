<?php
$module_name = 'mks_AuthDestinationBox';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'box_c',
            'studio' => 'visible',
            'label' => 'LBL_BOX',
          ),
          1 => 
          array (
            'name' => 'auth_user_c',
            'studio' => 'visible',
            'label' => 'LBL_AUTH_USER',
          ),
        ),
        1 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
    ),
  ),
);
;
?>
