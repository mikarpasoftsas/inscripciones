<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-11-14 20:55:03
$dictionary["mks_Refinances"]["fields"]["mks_refinances_mks_registration"] = array (
  'name' => 'mks_refinances_mks_registration',
  'type' => 'link',
  'relationship' => 'mks_refinances_mks_registration',
  'source' => 'non-db',
  'module' => 'mks_Registration',
  'bean_name' => 'mks_Registration',
  'vname' => 'LBL_MKS_REFINANCES_MKS_REGISTRATION_FROM_MKS_REGISTRATION_TITLE',
  'id_name' => 'mks_refinances_mks_registrationmks_registration_ida',
);
$dictionary["mks_Refinances"]["fields"]["mks_refinances_mks_registration_name"] = array (
  'name' => 'mks_refinances_mks_registration_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_REFINANCES_MKS_REGISTRATION_FROM_MKS_REGISTRATION_TITLE',
  'save' => true,
  'id_name' => 'mks_refinances_mks_registrationmks_registration_ida',
  'link' => 'mks_refinances_mks_registration',
  'table' => 'mks_registration',
  'module' => 'mks_Registration',
  'rname' => 'document_name',
);
$dictionary["mks_Refinances"]["fields"]["mks_refinances_mks_registrationmks_registration_ida"] = array (
  'name' => 'mks_refinances_mks_registrationmks_registration_ida',
  'type' => 'link',
  'relationship' => 'mks_refinances_mks_registration',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_REFINANCES_MKS_REGISTRATION_FROM_MKS_REFINANCES_TITLE',
);


 // created: 2018-11-21 17:16:16
$dictionary['mks_Refinances']['fields']['attachment_c']['inline_edit']='1';
$dictionary['mks_Refinances']['fields']['attachment_c']['labelValue']='Archivo firmado';

 

 // created: 2018-11-16 15:41:39
$dictionary['mks_Refinances']['fields']['id_autoincrement']['format']='{RFM}{-}{y}{-}{00000000}{}{}';

 

 // created: 2018-11-16 21:06:54
$dictionary['mks_Refinances']['fields']['mks_courses_id_c']['inline_edit']=1;

 

 // created: 2018-11-16 21:06:54
$dictionary['mks_Refinances']['fields']['course_c']['inline_edit']='';
$dictionary['mks_Refinances']['fields']['course_c']['labelValue']='Carreras y cursos';

 

 // created: 2018-11-16 21:07:19
$dictionary['mks_Refinances']['fields']['mks_academicgroups_id_c']['inline_edit']=1;

 

 // created: 2018-11-16 21:07:19
$dictionary['mks_Refinances']['fields']['grouptheory_c']['inline_edit']='';
$dictionary['mks_Refinances']['fields']['grouptheory_c']['labelValue']='Grupo Teoria';

 

 // created: 2018-11-16 21:07:44
$dictionary['mks_Refinances']['fields']['mks_academicgroups_id1_c']['inline_edit']=1;

 

 // created: 2018-11-16 21:07:44
$dictionary['mks_Refinances']['fields']['grouppractice_c']['inline_edit']='';
$dictionary['mks_Refinances']['fields']['grouppractice_c']['labelValue']='Grupo Practica';

 

 // created: 2018-11-23 00:14:32
$dictionary['mks_Refinances']['fields']['update_registration_c']['inline_edit']='1';
$dictionary['mks_Refinances']['fields']['update_registration_c']['labelValue']='Actualizar Matricula?';

 

 // created: 2018-12-13 17:01:51
$dictionary['mks_Refinances']['fields']['amount_fees_c']['inline_edit']='1';
$dictionary['mks_Refinances']['fields']['amount_fees_c']['labelValue']='# Cuotas';

 

 // created: 2018-12-13 17:01:28
$dictionary['mks_Refinances']['fields']['advance_c']['inline_edit']='1';
$dictionary['mks_Refinances']['fields']['advance_c']['labelValue']='Anticipo';

 

 // created: 2019-05-03 17:23:16
$dictionary['mks_Refinances']['fields']['first_expiration_c']['inline_edit']='1';
$dictionary['mks_Refinances']['fields']['first_expiration_c']['labelValue']='Primer Vencimiento';

 
?>