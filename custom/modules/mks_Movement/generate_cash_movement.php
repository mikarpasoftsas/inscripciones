<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class generate_cash_movement {    	
		
	function generate_cash_movement(&$bean, $event, $arguments)
	{
		    //Only execute on new rows
			
			if ($bean->fetched_row == false) {
				
				
				
				$mks_RegistrationReceipts = BeanFactory::getBean('mks_RegistrationReceipts');								
				
				$ObjBox =  $mks_RegistrationReceipts->getOpenMovementByBox($bean->mks_box_id_c,$bean->assigned_user_id);
					
				if ($ObjBox->load_relationship('mks_dailyboxmovements_mks_movement_1'))
				{	
					$ObjBox->mks_dailyboxmovements_mks_movement_1->add($bean->id);
					if($bean->type_income == 'Ingreso')
						$ObjBox->balance_c+=$bean->amount;
					else
						$ObjBox->balance_c-=$bean->amount;
					$ObjBox->save();
					
				}
			}
	}	
	
}
