<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-09-24 17:10:37
$dictionary["mks_WaitingListAssignment"]["fields"]["mks_waitinglistassignment_opportunities"] = array (
  'name' => 'mks_waitinglistassignment_opportunities',
  'type' => 'link',
  'relationship' => 'mks_waitinglistassignment_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_MKS_WAITINGLISTASSIGNMENT_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'mks_waitinglistassignment_opportunitiesopportunities_ida',
);
$dictionary["mks_WaitingListAssignment"]["fields"]["mks_waitinglistassignment_opportunities_name"] = array (
  'name' => 'mks_waitinglistassignment_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_WAITINGLISTASSIGNMENT_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'mks_waitinglistassignment_opportunitiesopportunities_ida',
  'link' => 'mks_waitinglistassignment_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["mks_WaitingListAssignment"]["fields"]["mks_waitinglistassignment_opportunitiesopportunities_ida"] = array (
  'name' => 'mks_waitinglistassignment_opportunitiesopportunities_ida',
  'type' => 'link',
  'relationship' => 'mks_waitinglistassignment_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_WAITINGLISTASSIGNMENT_OPPORTUNITIES_FROM_MKS_WAITINGLISTASSIGNMENT_TITLE',
);


 // created: 2018-09-24 17:14:39
$dictionary['mks_WaitingListAssignment']['fields']['name']['full_text_search']=array (
);

 

 // created: 2018-09-24 17:15:05
$dictionary['mks_WaitingListAssignment']['fields']['id_autoincrement_c']['inline_edit']='1';
$dictionary['mks_WaitingListAssignment']['fields']['id_autoincrement_c']['labelValue']='#';

 

 // created: 2018-10-18 15:42:37
$dictionary['mks_WaitingListAssignment']['fields']['day_available']['default']='';
$dictionary['mks_WaitingListAssignment']['fields']['day_available']['len']=NULL;
$dictionary['mks_WaitingListAssignment']['fields']['day_available']['required']=true;

 

 // created: 2018-10-18 15:42:54
$dictionary['mks_WaitingListAssignment']['fields']['turn']['len']=NULL;
$dictionary['mks_WaitingListAssignment']['fields']['turn']['required']=true;

 
?>