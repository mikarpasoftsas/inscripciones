<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-09-24 15:56:18
$dictionary["mks_Movement"]["fields"]["mks_movement_securitygroups"] = array (
  'name' => 'mks_movement_securitygroups',
  'type' => 'link',
  'relationship' => 'mks_movement_securitygroups',
  'source' => 'non-db',
  'module' => 'SecurityGroups',
  'bean_name' => 'SecurityGroup',
  'vname' => 'LBL_MKS_MOVEMENT_SECURITYGROUPS_FROM_SECURITYGROUPS_TITLE',
);


 // created: 2019-05-23 22:18:06
$dictionary['mks_Movement']['fields']['currency_c']['inline_edit']='1';
$dictionary['mks_Movement']['fields']['currency_c']['labelValue']='Moneda';

 

// created: 2019-05-18 17:45:38
$dictionary["mks_Movement"]["fields"]["mks_dailyboxmovements_mks_movement_1"] = array (
  'name' => 'mks_dailyboxmovements_mks_movement_1',
  'type' => 'link',
  'relationship' => 'mks_dailyboxmovements_mks_movement_1',
  'source' => 'non-db',
  'module' => 'mks_DailyBoxMovements',
  'bean_name' => 'mks_DailyBoxMovements',
  'vname' => 'LBL_MKS_DAILYBOXMOVEMENTS_MKS_MOVEMENT_1_FROM_MKS_DAILYBOXMOVEMENTS_TITLE',
  'id_name' => 'mks_dailyboxmovements_mks_movement_1mks_dailyboxmovements_ida',
);
$dictionary["mks_Movement"]["fields"]["mks_dailyboxmovements_mks_movement_1_name"] = array (
  'name' => 'mks_dailyboxmovements_mks_movement_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_DAILYBOXMOVEMENTS_MKS_MOVEMENT_1_FROM_MKS_DAILYBOXMOVEMENTS_TITLE',
  'save' => true,
  'id_name' => 'mks_dailyboxmovements_mks_movement_1mks_dailyboxmovements_ida',
  'link' => 'mks_dailyboxmovements_mks_movement_1',
  'table' => 'mks_dailyboxmovements',
  'module' => 'mks_DailyBoxMovements',
  'rname' => 'name',
);
$dictionary["mks_Movement"]["fields"]["mks_dailyboxmovements_mks_movement_1mks_dailyboxmovements_ida"] = array (
  'name' => 'mks_dailyboxmovements_mks_movement_1mks_dailyboxmovements_ida',
  'type' => 'link',
  'relationship' => 'mks_dailyboxmovements_mks_movement_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_DAILYBOXMOVEMENTS_MKS_MOVEMENT_1_FROM_MKS_MOVEMENT_TITLE',
);


 // created: 2019-05-23 22:15:47
$dictionary['mks_Movement']['fields']['exchange_rate_c']['inline_edit']='1';
$dictionary['mks_Movement']['fields']['exchange_rate_c']['labelValue']='T.C';

 

 // created: 2019-06-06 15:36:37
$dictionary['mks_Movement']['fields']['voucher_c']['inline_edit']='';
$dictionary['mks_Movement']['fields']['voucher_c']['labelValue']='Comprobante';

 
?>