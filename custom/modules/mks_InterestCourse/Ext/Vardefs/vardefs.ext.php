<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2018-09-20 17:52:35
$dictionary["mks_InterestCourse"]["fields"]["leads_mks_interestcourse_1"] = array (
  'name' => 'leads_mks_interestcourse_1',
  'type' => 'link',
  'relationship' => 'leads_mks_interestcourse_1',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_LEADS_MKS_INTERESTCOURSE_1_FROM_LEADS_TITLE',
  'id_name' => 'leads_mks_interestcourse_1leads_ida',
);
$dictionary["mks_InterestCourse"]["fields"]["leads_mks_interestcourse_1_name"] = array (
  'name' => 'leads_mks_interestcourse_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_LEADS_MKS_INTERESTCOURSE_1_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'leads_mks_interestcourse_1leads_ida',
  'link' => 'leads_mks_interestcourse_1',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["mks_InterestCourse"]["fields"]["leads_mks_interestcourse_1leads_ida"] = array (
  'name' => 'leads_mks_interestcourse_1leads_ida',
  'type' => 'link',
  'relationship' => 'leads_mks_interestcourse_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_LEADS_MKS_INTERESTCOURSE_1_FROM_MKS_INTERESTCOURSE_TITLE',
);


// created: 2018-09-19 21:19:28
$dictionary["mks_InterestCourse"]["fields"]["mks_interestcourse_opportunities"] = array (
  'name' => 'mks_interestcourse_opportunities',
  'type' => 'link',
  'relationship' => 'mks_interestcourse_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'vname' => 'LBL_MKS_INTERESTCOURSE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'mks_interestcourse_opportunitiesopportunities_ida',
);
$dictionary["mks_InterestCourse"]["fields"]["mks_interestcourse_opportunities_name"] = array (
  'name' => 'mks_interestcourse_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_INTERESTCOURSE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'mks_interestcourse_opportunitiesopportunities_ida',
  'link' => 'mks_interestcourse_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["mks_InterestCourse"]["fields"]["mks_interestcourse_opportunitiesopportunities_ida"] = array (
  'name' => 'mks_interestcourse_opportunitiesopportunities_ida',
  'type' => 'link',
  'relationship' => 'mks_interestcourse_opportunities',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_INTERESTCOURSE_OPPORTUNITIES_FROM_MKS_INTERESTCOURSE_TITLE',
);


 // created: 2018-10-18 15:43:20
$dictionary['mks_InterestCourse']['fields']['day_available']['len']=NULL;

 

 // created: 2018-09-24 18:13:28
$dictionary['mks_InterestCourse']['fields']['id_autoincrement_c']['inline_edit']='1';
$dictionary['mks_InterestCourse']['fields']['id_autoincrement_c']['labelValue']='#';

 

 // created: 2018-09-22 17:02:03
$dictionary['mks_InterestCourse']['fields']['name']['default']='-';
$dictionary['mks_InterestCourse']['fields']['name']['inline_edit']=true;
$dictionary['mks_InterestCourse']['fields']['name']['duplicate_merge']='disabled';
$dictionary['mks_InterestCourse']['fields']['name']['duplicate_merge_dom_value']='0';
$dictionary['mks_InterestCourse']['fields']['name']['merge_filter']='disabled';
$dictionary['mks_InterestCourse']['fields']['name']['unified_search']=false;

 

 // created: 2018-10-18 15:43:25
$dictionary['mks_InterestCourse']['fields']['turn']['len']=NULL;

 
?>