<?php
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
