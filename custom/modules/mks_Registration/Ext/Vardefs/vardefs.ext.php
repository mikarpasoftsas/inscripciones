<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-11-01 22:41:44
$dictionary["mks_Registration"]["fields"]["mks_registration_contacts"] = array (
  'name' => 'mks_registration_contacts',
  'type' => 'link',
  'relationship' => 'mks_registration_contacts',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_MKS_REGISTRATION_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'mks_registration_contactscontacts_ida',
);
$dictionary["mks_Registration"]["fields"]["mks_registration_contacts_name"] = array (
  'name' => 'mks_registration_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_REGISTRATION_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'mks_registration_contactscontacts_ida',
  'link' => 'mks_registration_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["mks_Registration"]["fields"]["mks_registration_contactscontacts_ida"] = array (
  'name' => 'mks_registration_contactscontacts_ida',
  'type' => 'link',
  'relationship' => 'mks_registration_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_REGISTRATION_CONTACTS_FROM_MKS_REGISTRATION_TITLE',
);


// created: 2018-11-01 22:42:13
$dictionary["mks_Registration"]["fields"]["mks_custompaymentplan_mks_registration"] = array (
  'name' => 'mks_custompaymentplan_mks_registration',
  'type' => 'link',
  'relationship' => 'mks_custompaymentplan_mks_registration',
  'source' => 'non-db',
  'module' => 'mks_CustomPaymentPlan',
  'bean_name' => 'mks_CustomPaymentPlan',
  'side' => 'right',
  'vname' => 'LBL_MKS_CUSTOMPAYMENTPLAN_MKS_REGISTRATION_FROM_MKS_CUSTOMPAYMENTPLAN_TITLE',
);


 // created: 2018-11-08 20:44:31
$dictionary['mks_Registration']['fields']['flag_payment_plan_c']['inline_edit']='1';
$dictionary['mks_Registration']['fields']['flag_payment_plan_c']['labelValue']='Bandera Plan de Pago';

 

 // created: 2018-11-17 16:25:34
$dictionary['mks_Registration']['fields']['id_autoincrement']['inline_edit']='';
$dictionary['mks_Registration']['fields']['id_autoincrement']['format']='{MT}{-}{y}{-}{00000000}{}{}';

 

// created: 2018-11-13 17:09:55
$dictionary["mks_Registration"]["fields"]["accounts_mks_registration_1"] = array (
  'name' => 'accounts_mks_registration_1',
  'type' => 'link',
  'relationship' => 'accounts_mks_registration_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_MKS_REGISTRATION_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_mks_registration_1accounts_ida',
);
$dictionary["mks_Registration"]["fields"]["accounts_mks_registration_1_name"] = array (
  'name' => 'accounts_mks_registration_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_MKS_REGISTRATION_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_mks_registration_1accounts_ida',
  'link' => 'accounts_mks_registration_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["mks_Registration"]["fields"]["accounts_mks_registration_1accounts_ida"] = array (
  'name' => 'accounts_mks_registration_1accounts_ida',
  'type' => 'link',
  'relationship' => 'accounts_mks_registration_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_ACCOUNTS_MKS_REGISTRATION_1_FROM_MKS_REGISTRATION_TITLE',
);


 // created: 2018-11-16 21:53:11
$dictionary['mks_Registration']['fields']['course']['inline_edit']='';
$dictionary['mks_Registration']['fields']['course']['audited']=true;

 

 // created: 2018-11-16 21:53:18
$dictionary['mks_Registration']['fields']['grouptheory']['inline_edit']='';
$dictionary['mks_Registration']['fields']['grouptheory']['audited']=true;

 

 // created: 2018-11-16 21:53:31
$dictionary['mks_Registration']['fields']['grouppractice']['inline_edit']='';
$dictionary['mks_Registration']['fields']['grouppractice']['audited']=true;

 

// created: 2018-11-13 17:39:44
$dictionary["mks_Registration"]["fields"]["mks_registration_securitygroups_1"] = array (
  'name' => 'mks_registration_securitygroups_1',
  'type' => 'link',
  'relationship' => 'mks_registration_securitygroups_1',
  'source' => 'non-db',
  'module' => 'SecurityGroups',
  'bean_name' => 'SecurityGroup',
  'vname' => 'LBL_MKS_REGISTRATION_SECURITYGROUPS_1_FROM_SECURITYGROUPS_TITLE',
);


 // created: 2018-11-13 18:58:42
$dictionary['mks_Registration']['fields']['reg_num_c']['inline_edit']='';
$dictionary['mks_Registration']['fields']['reg_num_c']['labelValue']='Matricula N°';

 

 // created: 2018-11-13 19:45:22
$dictionary['mks_Registration']['fields']['active_date']['required']=false;
$dictionary['mks_Registration']['fields']['active_date']['inline_edit']='';
$dictionary['mks_Registration']['fields']['active_date']['merge_filter']='disabled';
$dictionary['mks_Registration']['fields']['active_date']['enable_range_search']=false;

 

 // created: 2018-11-13 19:45:35
$dictionary['mks_Registration']['fields']['exp_date']['inline_edit']='';
$dictionary['mks_Registration']['fields']['exp_date']['merge_filter']='disabled';
$dictionary['mks_Registration']['fields']['exp_date']['enable_range_search']=false;

 

 // created: 2018-11-13 22:12:15
$dictionary['mks_Registration']['fields']['status_id']['default']='Draft';
$dictionary['mks_Registration']['fields']['status_id']['inline_edit']='';
$dictionary['mks_Registration']['fields']['status_id']['merge_filter']='disabled';
$dictionary['mks_Registration']['fields']['status_id']['reportable']=true;

 

 // created: 2018-11-13 22:06:17
$dictionary['mks_Registration']['fields']['category_id']['inline_edit']='';
$dictionary['mks_Registration']['fields']['category_id']['merge_filter']='disabled';
$dictionary['mks_Registration']['fields']['category_id']['reportable']=true;

 

 // created: 2018-11-13 22:06:33
$dictionary['mks_Registration']['fields']['subcategory_id']['inline_edit']='';
$dictionary['mks_Registration']['fields']['subcategory_id']['merge_filter']='disabled';
$dictionary['mks_Registration']['fields']['subcategory_id']['reportable']=true;

 

 // created: 2018-11-14 18:04:20
$dictionary['mks_Registration']['fields']['debt_c']['inline_edit']='';
$dictionary['mks_Registration']['fields']['debt_c']['labelValue']='Deduda cuota vencida';

 

 // created: 2018-11-14 18:03:33
$dictionary['mks_Registration']['fields']['surcharge_c']['inline_edit']='';
$dictionary['mks_Registration']['fields']['surcharge_c']['labelValue']='Recargo %';

 

 // created: 2018-11-14 18:06:42
$dictionary['mks_Registration']['fields']['discount_c']['inline_edit']='';
$dictionary['mks_Registration']['fields']['discount_c']['labelValue']='Mondo del Descuento';

 

 // created: 2018-11-14 18:05:52
$dictionary['mks_Registration']['fields']['total_debt_c']['inline_edit']='';
$dictionary['mks_Registration']['fields']['total_debt_c']['labelValue']='Deuda total del plan';

 

// created: 2018-11-14 20:55:03
$dictionary["mks_Registration"]["fields"]["mks_refinances_mks_registration"] = array (
  'name' => 'mks_refinances_mks_registration',
  'type' => 'link',
  'relationship' => 'mks_refinances_mks_registration',
  'source' => 'non-db',
  'module' => 'mks_Refinances',
  'bean_name' => 'mks_Refinances',
  'side' => 'right',
  'vname' => 'LBL_MKS_REFINANCES_MKS_REGISTRATION_FROM_MKS_REFINANCES_TITLE',
);


 // created: 2018-11-16 20:37:51
$dictionary['mks_Registration']['fields']['mks_registration_id_c']['inline_edit']=1;

 

 // created: 2018-11-16 20:38:32
$dictionary['mks_Registration']['fields']['register_c']['inline_edit']='';
$dictionary['mks_Registration']['fields']['register_c']['labelValue']='Matricula Asociada';

 

 // created: 2018-12-12 17:03:59
$dictionary['mks_Registration']['fields']['amount_fees_c']['inline_edit']='1';
$dictionary['mks_Registration']['fields']['amount_fees_c']['labelValue']='# de Cuotas';

 

 // created: 2018-12-12 17:06:24
$dictionary['mks_Registration']['fields']['advance_c']['inline_edit']='1';
$dictionary['mks_Registration']['fields']['advance_c']['labelValue']='Anticipo';

 
?>