<?php
ini_set("display_errors",true);
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class create_new_registration {
    	
	function create_new_registration(&$bean, $event, $arguments)
	{
	
		if(isset($_REQUEST['duplicateSave'])&&$_REQUEST['duplicateSave']=='true')
		{					
			
			$mks_Refinances = BeanFactory::getBean('mks_Refinances');
			$mks_Refinances->debt					  =	$bean->debt_c;
			$mks_Refinances->surcharge				  =	$bean->surcharge_c; 
			$mks_Refinances->discount				  =	$bean->discount_c;
			$mks_Refinances->total_debt				  =	$bean->total_debt_c;
			$mks_Refinances->assigned_user_id	 	  =	$bean->assigned_user_id;
			$mks_Refinances->id_autoincrement		  =	'pending';			
			$mks_Refinances->mks_courses_id_c		  = $bean->mks_courses_id_c;
			$mks_Refinances->mks_academicgroups_id_c  = $bean->mks_academicgroups_id_c;
			$mks_Refinances->mks_academicgroups_id1_c = $bean->mks_academicgroups_id1_c;			
			$mks_Refinances->update_registration_c    = 0;			
			$mks_Refinances->mks_registration_id_c 	  =	$_REQUEST['duplicateId'];
			$mks_Refinances->flag_payment_plan_c	  = 0;
			$mks_Refinances->save();		
			
			if ($bean->load_relationship('mks_refinances_mks_registration'))
			{
				$bean->mks_refinances_mks_registration->add($mks_Refinances->id);
			}

			/*			
			$mks_CustomPaymentPlan 					 = BeanFactory::getBean('mks_CustomPaymentPlan');
			$mks_CustomPaymentPlan->name   			 = "Personalizado";
			$mks_CustomPaymentPlan->amount 			 = 0;
			$mks_CustomPaymentPlan->assigned_user_id = $bean->assigned_user_id;	
			$mks_CustomPaymentPlan->id_autoincrement ='pending';				
			
			$mks_CustomPaymentPlan->save();
				
			if ($bean->load_relationship('mks_custompaymentplan_mks_registration'))
			{
				$bean->mks_custompaymentplan_mks_registration->add($mks_CustomPaymentPlan->id);
			}		
            */
			
			$mks_Registration = BeanFactory::getBean('mks_Registration',$_REQUEST['duplicateId']);
			
			if($mks_Refinances->total_debt>0){
				if ($mks_Registration->load_relationship('mks_custompaymentplan_mks_registration'))
				{
						
						$custompaymentplans = $mks_Registration->mks_custompaymentplan_mks_registration->getBeans(
								
								array(
									
									'order_by' => array(array('date_entered', 'ASC'))
								)
							
							);	
							
						foreach($custompaymentplans as $custompaymentplan )	
						{
							if($custompaymentplan->status_c=='valid'){
								$custompaymentplan->status_c    = 'closed';
								$custompaymentplan->description = 'Matricula refinanciada.';
								$custompaymentplan->save();
							}
						}
				}
			}			
		
		}	
		
	}	
	
}
