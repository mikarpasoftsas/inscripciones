<?php
$module_name = 'mks_PaymentsCard';
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
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'type_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPE',
          ),
          1 => 
          array (
            'name' => 'card_c',
            'label' => 'LBL_CARD',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'fees_c',
            'studio' => 'visible',
            'label' => 'LBL_FEES',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'last_4_digits_c',
            'label' => 'LBL_LAST_4_DIGITS',
          ),
          1 => 
          array (
            'name' => 'authorization_code_c',
            'label' => 'LBL_AUTHORIZATION_CODE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'currency_c',
            'studio' => 'visible',
            'label' => 'LBL_CURRENCY',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'amount_c',
            'label' => 'LBL_AMOUNT',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'exchange_rate_c',
            'label' => 'LBL_EXCHANGE_RATE',
          ),
          1 => '',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'mks_registrationreceipts_mks_paymentscard_1_name',
            'label' => 'LBL_MKS_REGISTRATIONRECEIPTS_MKS_PAYMENTSCARD_1_FROM_MKS_REGISTRATIONRECEIPTS_TITLE',
          ),
        ),
        7 => 
        array (
          0 => 'assigned_user_name',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
    ),
  ),
);
;
?>
