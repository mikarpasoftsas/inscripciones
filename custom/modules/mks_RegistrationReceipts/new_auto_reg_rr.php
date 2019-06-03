<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

global $current_user,$db;

if(isset($_REQUEST['record']) && !empty($_REQUEST['record']))
{
	$record = $_REQUEST['record'];
	
	global $db,$app_list_strings;
							
	require_once "modules/mks_RegistrationReceipts/mks_RegistrationReceipts.php";
	
	$mks_RegistrationReceipts = new mks_RegistrationReceipts();	
	
	$mks_RegistrationReceipts->name =  "Número Pendiente";
	
	$mks_RegistrationReceipts->tmp_reg_c = $record;
	
	$mks_RegistrationReceipts->assigned_user_id = $current_user->id;
	
	$mks_RegistrationReceipts->save();
	
	$query_u = "	

					UPDATE mks_registrationreceipts 
					SET 
						date_entered  = NOW(),
						date_modified =NOW(),
						created_by = '".$current_user->id."',
						modified_user_id = '".$current_user->id."',
						assigned_user_id = '".$current_user->id."'						
					
					WHERE id = '".$mks_RegistrationReceipts->id."'
						
			";				
			
	$result = $db->query($query_u);
	
	$mks_RegistrationReceipts_New = BeanFactory::getBean(
							'mks_RegistrationReceipts', 
							$mks_RegistrationReceipts->id
						);
	
	if ($mks_RegistrationReceipts_New->load_relationship('mks_registration_mks_registrationreceipts_1'))
	{
		$mks_RegistrationReceipts_New->mks_registration_mks_registrationreceipts_1->add($record);
	}
	
	SugarApplication::redirect('index.php?module=mks_RegistrationReceipts&action=DetailView&record=' . $mks_RegistrationReceipts_New->id);
	
}



