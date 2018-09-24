<?php
$viewdefs ['Leads'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="prospect_id" value="{if isset($smarty.request.prospect_id)}{$smarty.request.prospect_id}{else}{$bean->prospect_id}{/if}">',
          1 => '<input type="hidden" name="account_id" value="{if isset($smarty.request.account_id)}{$smarty.request.account_id}{else}{$bean->account_id}{/if}">',
          2 => '<input type="hidden" name="contact_id" value="{if isset($smarty.request.contact_id)}{$smarty.request.contact_id}{else}{$bean->contact_id}{/if}">',
          3 => '<input type="hidden" name="opportunity_id" value="{if isset($smarty.request.opportunity_id)}{$smarty.request.opportunity_id}{else}{$bean->opportunity_id}{/if}">',
        ),
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
        ),
      ),
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
      'javascript' => '<script type="text/javascript" language="Javascript">function copyAddressRight(form)  {ldelim} form.alt_address_street.value = form.primary_address_street.value;form.alt_address_city.value = form.primary_address_city.value;form.alt_address_state.value = form.primary_address_state.value;form.alt_address_postalcode.value = form.primary_address_postalcode.value;form.alt_address_country.value = form.primary_address_country.value;return true; {rdelim} function copyAddressLeft(form)  {ldelim} form.primary_address_street.value =form.alt_address_street.value;form.primary_address_city.value = form.alt_address_city.value;form.primary_address_state.value = form.alt_address_state.value;form.primary_address_postalcode.value =form.alt_address_postalcode.value;form.primary_address_country.value = form.alt_address_country.value;return true; {rdelim} </script>',
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_CONTACT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ASSIGNMENT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'LBL_CONTACT_INFORMATION' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'first_name',
            'customCode' => '{html_options name="salutation" id="salutation" options=$fields.salutation.options selected=$fields.salutation.value}&nbsp;<input name="first_name"  id="first_name" size="25" maxlength="25" type="text" value="{$fields.first_name.value}">',
          ),
          1 => 'last_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'id_type_c',
            'studio' => 'visible',
            'label' => 'LBL_ID_TYPE',
          ),
          1 => 
          array (
            'name' => 'id_local_c',
            'label' => 'LBL_ID_LOCAL',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'sexo_c',
            'studio' => 'visible',
            'label' => 'LBL_SEXO',
          ),
          1 => 'phone_mobile',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'phone_home',
            'comment' => 'Home phone number of the contact',
            'label' => 'LBL_HOME_PHONE',
          ),
          1 => 'phone_work',
        ),
        4 => 
        array (
          0 => 'phone_fax',
          1 => 
          array (
            'name' => 'birthdate',
            'comment' => 'The birthdate of the contact',
            'label' => 'LBL_BIRTHDATE',
          ),
        ),
        5 => 
        array (
          0 => 'email1',
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'means_notice_c',
            'studio' => 'visible',
            'label' => 'LBL_MEANS_NOTICE_C',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_home_c',
            'label' => 'LBL_PRIMARY_ADDRESS_HOME',
          ),
          1 => 
          array (
            'name' => 'primary_address_number_c',
            'label' => 'LBL_PRIMARY_ADDRESS_NUMBER',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_floor_c',
            'label' => 'LBL_PRIMARY_ADDRESS_FLOOR',
          ),
          1 => 
          array (
            'name' => 'primary_address_state',
            'comment' => 'State for primary address',
            'label' => 'LBL_PRIMARY_ADDRESS_STATE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'primary_addres_between_stree_c',
            'label' => 'LBL_PRIMARY_ADDRES_BETWEEN_STREE',
          ),
          1 => 
          array (
            'name' => 'primary_address_postalcode',
            'comment' => 'Postal code for primary address',
            'label' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_location_c',
            'label' => 'LBL_PRIMARY_ADDRESS_LOCATION',
          ),
          1 => 
          array (
            'name' => 'primary_address_city',
            'comment' => 'City for primary address',
            'label' => 'LBL_PRIMARY_ADDRESS_CITY',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'primary_address_neighborhood_c',
            'label' => 'LBL_PRIMARY_ADDRESS_NEIGHBORHOOD',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 'status',
        ),
        1 => 
        array (
          0 => 'campaign_name',
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
      ),
    ),
  ),
);
;
?>
