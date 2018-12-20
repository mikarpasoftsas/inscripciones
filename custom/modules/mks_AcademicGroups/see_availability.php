<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');
ini_set("display_errors",true);
class see_availability

{

    function see_availability($bean, $event, $arguments)

    {
		if($bean->load_relationship('mks_academicgroups_mks_groupschedule'))
		{
			$groupschedules = $bean->mks_academicgroups_mks_groupschedule->getBeans();
			$cadena=array();
			$cadena_ordenada=array();
			
			foreach ($groupschedules as $groupschedule)
			{
				switch($groupschedule->day)
				{
					case 'Lunes': $order = 1;break;
					case 'Martes': $order = 2;break;
					case 'Miercoles': $order = 3;break;
					case 'Jueves': $order = 4;break;
					case 'Viernes': $order = 5;break;
					case 'Sabado': $order = 6;break;
					case 'Domingo': $order = 7;break;
				}
				$cadena[$order] = $groupschedule->day .' '. $groupschedule->start_time .'-'. $groupschedule->end_time . ' hrs';
			}
			for ($i=1;$i<=count($cadena);$i++)		
			{
				if(isset($cadena[$i]))
					$cadena_ordenada[] = $cadena[$i];
			}
			if(count($cadena_ordenada))
				
				$bean->description = implode(', ',$cadena_ordenada);
		}
		
		global $db;
						
		$query = "
					
			SELECT document_name, mks_courses.name, COUNT(*) as c
			FROM `mks_registration` AS matricula
			INNER JOIN `mks_academicgroups` mg ON (mg.`id` = mks_academicgroups_id_c) OR (mg.id = `mks_academicgroups_id1_c`)
			INNER JOIN `mks_courses`  ON matricula.mks_courses_id_c = mks_courses.id
			WHERE matricula.deleted = 0 AND matricula.mks_courses_id_c = mg.mks_courses_id_c AND mg.id = '".$bean->id."' 
			GROUP BY mg.name
							
		";
			
		$result = $db->query($query);
		
		if($row = $db->fetchByAssoc($result))
		{
			$bean->vacancies_available_c = $bean->quantity - $row['c'];
		}			

    }

}