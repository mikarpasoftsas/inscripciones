<?php
ini_set("display_errors",true);
global $current_user;

if(!isset($_REQUEST["idcontacto"]) or empty($_REQUEST["idcontacto"]))
{
	if(!empty($_REQUEST["idpreinforme"])){
		$Opportunities = BeanFactory::getBean('Opportunities',$_REQUEST["idpreinforme"]);
		$idcontact     = $Opportunities->account_id;
	}
}
else
	$idcontact = $_REQUEST["idcontacto"];

if(!empty($idcontact)){
	
$mks_MessagesFb = BeanFactory::getBean('mks_MessagesFb');
$mks_MessagesFb->name = '-';
$mks_MessagesFb->description = $_REQUEST["text"];
$mks_MessagesFb->type='sent';
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
	
	$Contact = BeanFactory::getBean('Accounts', $idcontact);
	$name   = $Contact->name;
	$avatar = "index.php?entryPoint=download&id=".$Contact->id."_avatar_c&type=Accounts" ;
	
	$arr["message"] = array(

		 "id"=>$mks_MessagesFb->id,
		 "from"=>array(
				"name"  => $name,
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