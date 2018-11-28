<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class update_registration {
    	
	function update_registration(&$bean, $event, $arguments)
	{
		if($bean->update_registration_c==1){
			if(is_object($bean->mks_refinances_mks_registrationmks_registration_ida))
					foreach ($bean->mks_refinances_mks_registrationmks_registration_ida->beans as $key => $value) {
						$IdReg = $key;	
						continue;
					}
			else
					$IdReg=$bean->mks_refinances_mks_registrationmks_registration_ida;
			
			$mks_Registration = BeanFactory::getBean('mks_Registration',$IdReg);
			
			
			$mks_Registration->mks_courses_id_c 		= $bean->mks_courses_id_c;
			
			$mks_Registration->mks_academicgroups_id_c  = $bean->mks_academicgroups_id_c;
			
			$mks_Registration->mks_academicgroups_id1_c	= $bean->mks_academicgroups_id1_c;
			
			$mks_Registration->save();	

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
