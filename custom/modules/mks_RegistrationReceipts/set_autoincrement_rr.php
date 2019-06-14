<<<<<<< HEAD
<?php
ini_set("display_errors",true);
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class set_autoincrement_rr {
    	
	function set_autoincrement_rr(&$bean, $event, $arguments)
	{
		
		$mks_Registration = BeanFactory::getBean(
							'mks_Registration', 
							$bean->tmp_reg_c
						);
		
		$bean->mks_receiptype_id_c = $mks_Registration->mks_receiptype_id_c;
		
		if (empty($bean->name))
			
			$bean->name = "	Número Pendiente";
	
	}	
	
}
=======
<?php
ini_set("display_errors",true);
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class set_autoincrement_rr {
    	
	function set_autoincrement_rr(&$bean, $event, $arguments)
	{
		
		$mks_Registration = BeanFactory::getBean(
							'mks_Registration', 
							$bean->tmp_reg_c
						);
		
		$bean->mks_receiptype_id_c = $mks_Registration->mks_receiptype_id_c;
		
		if (empty($bean->name))
			
			$bean->name = "	Número Pendiente";
	
	}	
	
}
>>>>>>> d368532854a4e9301ed814ff37b5ca7aed9c9989
