<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-09-19 21:19:28
$dictionary["Opportunity"]["fields"]["mks_interestcourse_opportunities"] = array (
  'name' => 'mks_interestcourse_opportunities',
  'type' => 'link',
  'relationship' => 'mks_interestcourse_opportunities',
  'source' => 'non-db',
  'module' => 'mks_InterestCourse',
  'bean_name' => 'mks_InterestCourse',
  'side' => 'right',
  'vname' => 'LBL_MKS_INTERESTCOURSE_OPPORTUNITIES_FROM_MKS_INTERESTCOURSE_TITLE',
);


// created: 2018-11-23 21:23:47
$dictionary["Opportunity"]["fields"]["mks_messagesfb_opportunities"] = array (
  'name' => 'mks_messagesfb_opportunities',
  'type' => 'link',
  'relationship' => 'mks_messagesfb_opportunities',
  'source' => 'non-db',
  'module' => 'mks_MessagesFb',
  'bean_name' => 'mks_MessagesFb',
  'side' => 'right',
  'vname' => 'LBL_MKS_MESSAGESFB_OPPORTUNITIES_FROM_MKS_MESSAGESFB_TITLE',
);


// created: 2018-09-24 17:10:37
$dictionary["Opportunity"]["fields"]["mks_waitinglistassignment_opportunities"] = array (
  'name' => 'mks_waitinglistassignment_opportunities',
  'type' => 'link',
  'relationship' => 'mks_waitinglistassignment_opportunities',
  'source' => 'non-db',
  'module' => 'mks_WaitingListAssignment',
  'bean_name' => 'mks_WaitingListAssignment',
  'side' => 'right',
  'vname' => 'LBL_MKS_WAITINGLISTASSIGNMENT_OPPORTUNITIES_FROM_MKS_WAITINGLISTASSIGNMENT_TITLE',
);


 // created: 2018-09-24 17:06:22
$dictionary['Opportunity']['fields']['amount']['inline_edit']=true;
$dictionary['Opportunity']['fields']['amount']['comments']='Unconverted amount of the opportunity';
$dictionary['Opportunity']['fields']['amount']['duplicate_merge']='enabled';
$dictionary['Opportunity']['fields']['amount']['duplicate_merge_dom_value']='1';
$dictionary['Opportunity']['fields']['amount']['merge_filter']='disabled';

 

 // created: 2018-09-24 17:05:47
$dictionary['Opportunity']['fields']['amount_usdollar']['inline_edit']=true;
$dictionary['Opportunity']['fields']['amount_usdollar']['comments']='Formatted amount of the opportunity';
$dictionary['Opportunity']['fields']['amount_usdollar']['duplicate_merge']='disabled';
$dictionary['Opportunity']['fields']['amount_usdollar']['duplicate_merge_dom_value']='0';
$dictionary['Opportunity']['fields']['amount_usdollar']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['amount_usdollar']['enable_range_search']=false;

 

 // created: 2018-09-21 15:09:09
$dictionary['Opportunity']['fields']['date_closed']['display_default']='+1 month';
$dictionary['Opportunity']['fields']['date_closed']['inline_edit']=true;
$dictionary['Opportunity']['fields']['date_closed']['comments']='Expected or actual date the oppportunity will close';
$dictionary['Opportunity']['fields']['date_closed']['merge_filter']='disabled';

 

 // created: 2018-10-02 11:56:55
$dictionary['Opportunity']['fields']['id_autoincrement_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['id_autoincrement_c']['labelValue']='#';

 

 // created: 2018-09-10 15:30:12
$dictionary['Opportunity']['fields']['jjwg_maps_address_c']['inline_edit']=1;

 

 // created: 2018-09-10 15:30:12
$dictionary['Opportunity']['fields']['jjwg_maps_geocode_status_c']['inline_edit']=1;

 

 // created: 2018-09-10 15:30:12
$dictionary['Opportunity']['fields']['jjwg_maps_lat_c']['inline_edit']=1;

 

 // created: 2018-09-10 15:30:12
$dictionary['Opportunity']['fields']['jjwg_maps_lng_c']['inline_edit']=1;

 

 // created: 2018-09-24 19:41:41
$dictionary['Opportunity']['fields']['lead_source']['len']=100;
$dictionary['Opportunity']['fields']['lead_source']['inline_edit']=true;
$dictionary['Opportunity']['fields']['lead_source']['comments']='Source of the opportunity';
$dictionary['Opportunity']['fields']['lead_source']['merge_filter']='disabled';

 

 // created: 2018-10-18 19:36:14
$dictionary['Opportunity']['fields']['means_notice1_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['means_notice1_c']['labelValue']='Medio de Aviso 2';

 

 // created: 2018-10-18 19:36:39
$dictionary['Opportunity']['fields']['means_notice_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['means_notice_c']['labelValue']='Medio de aviso 1';

 

 // created: 2018-10-18 19:36:14
$dictionary['Opportunity']['fields']['mks_meansnotice_id1_c']['inline_edit']=1;

 

 // created: 2018-09-24 19:42:09
$dictionary['Opportunity']['fields']['mks_meansnotice_id_c']['inline_edit']=1;

 

 // created: 2018-10-08 17:05:58
$dictionary['Opportunity']['fields']['next_call_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['next_call_c']['labelValue']='Próxima llamada';

 

 // created: 2018-10-18 19:25:57
$dictionary['Opportunity']['fields']['origin_conact_c']['inline_edit']='1';
$dictionary['Opportunity']['fields']['origin_conact_c']['labelValue']='Origen';

 

 // created: 2018-09-21 13:52:34
$dictionary['Opportunity']['fields']['sales_stage']['default']='Prospecting';
$dictionary['Opportunity']['fields']['sales_stage']['len']=100;
$dictionary['Opportunity']['fields']['sales_stage']['inline_edit']=true;
$dictionary['Opportunity']['fields']['sales_stage']['comments']='Indication of progression towards closure';
$dictionary['Opportunity']['fields']['sales_stage']['merge_filter']='disabled';

 
?>