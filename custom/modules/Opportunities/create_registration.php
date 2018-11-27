<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class create_registration {
    	
	function create_registration(&$bean, $event, $arguments)
	{		
			
		
		if ($bean->sales_stage == "Closed Won" && 
		
				( 
				
				 $bean->fetched_row['sales_stage'] != "Closed Won" || empty($bean->fetched_row)
				
				)
			) {
			
			$mks_Registration = BeanFactory::getBean('mks_Registration');
			$mks_Registration->id_autoincrement='pending';
			$mks_Registration->opportunity_id_c = $bean->id;
			$mks_Registration->accounts_mks_registration_1accounts_ida = $bean->account_id;
			$mks_Registration->save();
				
			$queryParams = array(
				'module' => 'mks_Registration',
				'action' => 'EditView',
				'record' => $mks_Registration->id			
			);
			
			SugarApplication::redirect('index.php?' . http_build_query($queryParams));
		
		}
	}		
}
