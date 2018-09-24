<?php
// created: 2018-09-19 21:02:45
$dictionary["mks_InterestCourse"]["fields"]["mks_interestcourse_leads"] = array (
  'name' => 'mks_interestcourse_leads',
  'type' => 'link',
  'relationship' => 'mks_interestcourse_leads',
  'source' => 'non-db',
  'module' => 'Leads',
  'bean_name' => 'Lead',
  'vname' => 'LBL_MKS_INTERESTCOURSE_LEADS_FROM_LEADS_TITLE',
  'id_name' => 'mks_interestcourse_leadsleads_ida',
);
$dictionary["mks_InterestCourse"]["fields"]["mks_interestcourse_leads_name"] = array (
  'name' => 'mks_interestcourse_leads_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_MKS_INTERESTCOURSE_LEADS_FROM_LEADS_TITLE',
  'save' => true,
  'id_name' => 'mks_interestcourse_leadsleads_ida',
  'link' => 'mks_interestcourse_leads',
  'table' => 'leads',
  'module' => 'Leads',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["mks_InterestCourse"]["fields"]["mks_interestcourse_leadsleads_ida"] = array (
  'name' => 'mks_interestcourse_leadsleads_ida',
  'type' => 'link',
  'relationship' => 'mks_interestcourse_leads',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_MKS_INTERESTCOURSE_LEADS_FROM_MKS_INTERESTCOURSE_TITLE',
);
