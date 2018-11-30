<?php
ini_set("display_errors",true);
global $current_user;
$recipient = '';
if(!isset($_REQUEST["idcontacto"]) or empty($_REQUEST["idcontacto"]))
{

	if(!empty($_REQUEST["idpreinforme"])){
		$Opportunities = BeanFactory::getBean('Opportunities',$_REQUEST["idpreinforme"]);
		$idcontact     = $Opportunities->account_id;
		if ($Opportunities->load_relationship('SecurityGroups'))
		{
			$fillials = $Opportunities->SecurityGroups->getBeans();
			
			foreach ($fillials as $fillial)
			
			{
				$recipient = $fillial->id;
				
				continue;
			}
		}
		else{
			 $GLOBALS['log']->fatal('Load Rel securitygroups_opportunities');
		}		
	}
}
else
	$idcontact = $_REQUEST["idcontacto"];

if(!empty($idcontact)){
	
$mks_MessagesFb = BeanFactory::getBean('mks_MessagesFb');
$mks_MessagesFb->name = 'Chat Facebook';
$mks_MessagesFb->description = $_REQUEST["text"];
$mks_MessagesFb->type='sent';
$mks_MessagesFb->sender=$idcontact;
$mks_MessagesFb->recipient=$recipient;
$mks_MessagesFb->assigned_user_id = $current_user->id;

$mks_MessagesFb->save();

if(!empty($_REQUEST["idpreinforme"])){
	
	if ($mks_MessagesFb->load_relationship('mks_messagesfb_opportunities'))
	{
		$mks_MessagesFb->mks_messagesfb_opportunities->add($_REQUEST["idpreinforme"]);
	}
}
	if ($mks_MessagesFb->load_relationship('accounts_mks_messagesfb_1'))
	{
		$mks_MessagesFb->accounts_mks_messagesfb_1->add($idcontact);
	}
	
	if ($mks_MessagesFb->load_relationship('mks_messagesfb_securitygroups_1'))
	
		$mks_MessagesFb->mks_messagesfb_securitygroups_1->add($recipient);
	
	$avatar = "index.php?entryPoint=download&id=".$current_user->id."_photo&type=Users" ;
	
	$arr["message"] = array(

		 "id"=>$mks_MessagesFb->id,
		 "from"=>array(
				"name"  => $current_user->first_name . ' ' . $current_user->last_name,
				"avatar"=> $avatar
			),
		 "text"=> $mks_MessagesFb->description,
		 "created_at"=> $mks_MessagesFb->date_entered,
		 "type"=> $mks_MessagesFb->type

		);
}
else{
	$arr["message"] = array();
}

echo json_encode($arr);

exit;