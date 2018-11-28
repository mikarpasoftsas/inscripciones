<?php
ini_set("display_errors",true);
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class copy_payment_plan {
    	
	function copy_payment_plan(&$bean, $event, $arguments)
	{
		global $timedate;
		
		if($bean->flag_payment_plan_c==0)
		{
			if(!empty($bean->mks_paymentplan_id_c))
			{
				//First the payment plan is copied
				$mks_PaymentPlan = BeanFactory::getBean('mks_PaymentPlan', $bean->mks_paymentplan_id_c);
				
				$mks_CustomPaymentPlan 					 = BeanFactory::getBean('mks_CustomPaymentPlan');
				$mks_CustomPaymentPlan->name   			 = $mks_PaymentPlan->name;
				$mks_CustomPaymentPlan->amount 			 = $mks_PaymentPlan->amount;
				$mks_CustomPaymentPlan->assigned_user_id = $mks_PaymentPlan->assigned_user_id;	
				$mks_CustomPaymentPlan->id_autoincrement ='pending';				
				
				$mks_CustomPaymentPlan->save();
				
				if ($bean->load_relationship('mks_custompaymentplan_mks_registration'))
				{
					$bean->mks_custompaymentplan_mks_registration->add($mks_CustomPaymentPlan->id);
				}
				
				//Second, plan fees are copied
				
				if ($mks_PaymentPlan->load_relationship('mks_paymentplan_mks_planfees'))
				{
					$Fees = $mks_PaymentPlan->mks_paymentplan_mks_planfees->getBeans(
						
						array(
							
							'order_by' => array(array('date_entered', 'ASC'))
						)
					
					);
						
					$i=1;
					$j=1;
					$m=1;
					foreach($Fees as $Fees){
						
						$mks_PlanFees = BeanFactory::getBean('mks_PlanFees', $Fees->id);
						
						for($f=0;$f<$mks_PlanFees->name;$f++)
						{
							$mks_CustomPlanFees = BeanFactory::getBean('mks_CustomPlanFees');
							$mks_CustomPlanFees->name    = $f+1 .' de '. $mks_PlanFees->name;
							$mks_CustomPlanFees->n_fee_c = $j++;
							$mks_CustomPlanFees->amount = $Fees->amount;
							if($i==1)
								$mks_CustomPlanFees->expiration = $bean->first_expiration;
							else if($i==2)
								$mks_CustomPlanFees->expiration = $bean->second_expiration;
							else{
								
								$dateDB = $GLOBALS['timedate']->fromString($bean->second_expiration);
								$dateDBformatDate = new DateTime($dateDB);
								$dateDBformatDate->add(new DateInterval("P".$m++."M"));
								$mks_CustomPlanFees->expiration = $dateDBformatDate->format('Y-m-d');
							}
							$mks_CustomPlanFees->assigned_user_id = $mks_PlanFees->assigned_user_id;
							
							$mks_CustomPlanFees->save();
							
							if ($mks_CustomPaymentPlan->load_relationship('mks_custompaymentplan_mks_customplanfees'))
							{
								$mks_CustomPaymentPlan->mks_custompaymentplan_mks_customplanfees->add($mks_CustomPlanFees->id);
							}
							
							$i++;
						}	
					    	
					}
				}
				
				//Third, plan rules are copied
				if ($mks_PaymentPlan->load_relationship('mks_paymentplan_mks_discountrules'))
				{
					$Rules = $mks_PaymentPlan->mks_paymentplan_mks_discountrules->getBeans();
							
					foreach($Rules as $Rule){
						
						$mks_DiscountRules 		 = BeanFactory::getBean('mks_DiscountRules', $Rule->id);
						$mks_CustomDiscountRules = BeanFactory::getBean('mks_CustomDiscountRules');
						$mks_CustomDiscountRules->name 				= $mks_DiscountRules->name;
						$mks_CustomDiscountRules->initial_day		= $mks_DiscountRules->initial_day;
						$mks_CustomDiscountRules->final_day			= $mks_DiscountRules->final_day;
						$mks_CustomDiscountRules->discountrule		= $mks_DiscountRules->discountrule;
						$mks_CustomDiscountRules->type_c			= $mks_DiscountRules->type_c;
						$mks_CustomDiscountRules->value				= $mks_DiscountRules->value;
						$mks_CustomDiscountRules->id_autoincrement	='pending';
						
						
						$mks_CustomDiscountRules->assigned_user_id = $mks_DiscountRules->assigned_user_id;
						
						$mks_CustomDiscountRules->save();
						
						if ($mks_CustomPaymentPlan->load_relationship('mks_customdiscountrules_mks_custompaymentplan'))
						{
							$mks_CustomPaymentPlan->mks_customdiscountrules_mks_custompaymentplan->add($mks_CustomDiscountRules->id);
						}
						
					}
				}
				
				$bean->flag_payment_plan_c = 1;
				
			}
			
			
			
		}
	
	}	
	
}
