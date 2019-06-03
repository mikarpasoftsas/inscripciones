<?php
$module_name = 'mks_Refinances';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'custom/modules/mks_Refinances/js/editview.js',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'mks_refinances_mks_registration_name',
            'label' => 'LBL_MKS_REFINANCES_MKS_REGISTRATION_FROM_MKS_REGISTRATION_TITLE',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'course_c',
            'studio' => 'visible',
            'label' => 'LBL_COURSE',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'grouptheory_c',
            'studio' => 'visible',
            'label' => 'LBL_GROUPTHEORY',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'grouppractice_c',
            'studio' => 'visible',
            'label' => 'LBL_GROUPPRACTICE',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'debt',
            'label' => 'LBL_DEBT',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'surcharge',
            'label' => 'LBL_SURCHARGE',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'discount',
            'label' => 'LBL_DISCOUNT',
          ),
          1 => '',
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'total_debt',
            'label' => 'LBL_TOTAL_DEBT',
          ),
          1 => '',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'advance_c',
            'label' => 'LBL_ ADVANCE',
          ),
          1 => '',
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'amount_fees_c',
            'studio' => 'visible',
            'label' => 'LBL_AMOUNT_FEES',
          ),
          1 => '',
        ),
        10 => 
        array (
          0 => 
          array (
            'name' => 'first_expiration_c',
            'label' => 'LBL_FIRST_EXPIRATION',
          ),
          1 => '',
        ),
        11 => 
        array (
          0 => 
          array (
            'name' => 'attachment_c',
            'label' => 'LBL_ATTACHMENT',
          ),
          1 => '',
        ),
        12 => 
        array (
          0 => 'assigned_user_name',
          1 => '',
        ),
        13 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
;
?>
