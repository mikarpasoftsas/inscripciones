<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2019-05-18 15:35:36
$dictionary['mks_DailyBoxMovements']['fields']['date_box_c']['inline_edit']='1';
$dictionary['mks_DailyBoxMovements']['fields']['date_box_c']['options']='date_range_search_dom';
$dictionary['mks_DailyBoxMovements']['fields']['date_box_c']['labelValue']='Fecha';
$dictionary['mks_DailyBoxMovements']['fields']['date_box_c']['enable_range_search']='1';

 

 // created: 2019-05-18 15:06:24
$dictionary['mks_DailyBoxMovements']['fields']['mks_box_id_c']['inline_edit']=1;

 

 // created: 2019-05-18 15:06:24
$dictionary['mks_DailyBoxMovements']['fields']['box_c']['inline_edit']='1';
$dictionary['mks_DailyBoxMovements']['fields']['box_c']['labelValue']='Caja';

 

 // created: 2019-05-18 15:10:48
$dictionary['mks_DailyBoxMovements']['fields']['status_c']['inline_edit']='1';
$dictionary['mks_DailyBoxMovements']['fields']['status_c']['labelValue']='Estado';

 

// created: 2019-05-18 15:11:59
$dictionary["mks_DailyBoxMovements"]["fields"]["mks_dailyboxmovements_mks_paymentscash_1"] = array (
  'name' => 'mks_dailyboxmovements_mks_paymentscash_1',
  'type' => 'link',
  'relationship' => 'mks_dailyboxmovements_mks_paymentscash_1',
  'source' => 'non-db',
  'module' => 'mks_PaymentsCash',
  'bean_name' => 'mks_PaymentsCash',
  'side' => 'right',
  'vname' => 'LBL_MKS_DAILYBOXMOVEMENTS_MKS_PAYMENTSCASH_1_FROM_MKS_PAYMENTSCASH_TITLE',
);


// created: 2019-05-18 15:12:19
$dictionary["mks_DailyBoxMovements"]["fields"]["mks_dailyboxmovements_mks_paymentstransfer_1"] = array (
  'name' => 'mks_dailyboxmovements_mks_paymentstransfer_1',
  'type' => 'link',
  'relationship' => 'mks_dailyboxmovements_mks_paymentstransfer_1',
  'source' => 'non-db',
  'module' => 'mks_PaymentsTransfer',
  'bean_name' => 'mks_PaymentsTransfer',
  'side' => 'right',
  'vname' => 'LBL_MKS_DAILYBOXMOVEMENTS_MKS_PAYMENTSTRANSFER_1_FROM_MKS_PAYMENTSTRANSFER_TITLE',
);


 // created: 2019-05-18 15:14:20
$dictionary['mks_DailyBoxMovements']['fields']['name']['default']='Mov. Diario';
$dictionary['mks_DailyBoxMovements']['fields']['name']['inline_edit']=true;
$dictionary['mks_DailyBoxMovements']['fields']['name']['duplicate_merge']='disabled';
$dictionary['mks_DailyBoxMovements']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['mks_DailyBoxMovements']['fields']['name']['merge_filter']='disabled';
$dictionary['mks_DailyBoxMovements']['fields']['name']['unified_search']=false;

 

// created: 2019-05-18 17:45:38
$dictionary["mks_DailyBoxMovements"]["fields"]["mks_dailyboxmovements_mks_movement_1"] = array (
  'name' => 'mks_dailyboxmovements_mks_movement_1',
  'type' => 'link',
  'relationship' => 'mks_dailyboxmovements_mks_movement_1',
  'source' => 'non-db',
  'module' => 'mks_Movement',
  'bean_name' => 'mks_Movement',
  'side' => 'right',
  'vname' => 'LBL_MKS_DAILYBOXMOVEMENTS_MKS_MOVEMENT_1_FROM_MKS_MOVEMENT_TITLE',
);


 // created: 2019-06-07 21:58:17
$dictionary['mks_DailyBoxMovements']['fields']['balance_c']['inline_edit']='1';
$dictionary['mks_DailyBoxMovements']['fields']['balance_c']['labelValue']='Saldo';

 

 // created: 2019-06-07 21:58:17
$dictionary['mks_DailyBoxMovements']['fields']['currency_id']['inline_edit']=1;

 
?>