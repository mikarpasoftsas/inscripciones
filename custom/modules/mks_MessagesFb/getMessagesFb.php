<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

global $current_user;

if(!isset($_REQUEST["idcontacto"]) or empty($_REQUEST["idcontacto"]))
{
	if(isset($_REQUEST["idpreinforme"]) && !empty($_REQUEST["idpreinforme"])){
		$Opportunities = BeanFactory::getBean('Opportunities',$_REQUEST["idpreinforme"]);
		$idcontact     = $Opportunities->account_id;
	}
}
else
	$idcontact = $_REQUEST["idcontacto"];

$Contact = BeanFactory::getBean('Accounts',$idcontact);

if($Contact->load_relationship('accounts_mks_messagesfb_1'))
{
	$msgbypage = 6;
	
	if($_REQUEST["messagesPage"]==1){
		$start = 0;
		$end   = $_REQUEST["messagesPage"] * $msgbypage ;
	}
	else if ($_REQUEST["messagesPage"]>1)
	{
		$start = ($_REQUEST["messagesPage"]-1) * $msgbypage;
		$end   =  $_REQUEST["messagesPage"] * $msgbypage ;
	}
		
	
	$msgs = $Contact->accounts_mks_messagesfb_1->getBeans(
		array(
			'limit'    => "$start,$end",  
			'order_by' => "date_entered desc"			
		)
	);
	
	$arr["messages"] = array();
	
	foreach($msgs as $msg){
						
		$mks_MessagesFb = BeanFactory::getBean('mks_MessagesFb', $msg->id);
		
		if($mks_MessagesFb->type=='sent')
		{
				$User     = BeanFactory::getBean('Users', $Contact->created_by);
				$fullname = $User->first_name .' '.$User->last_name;
				$avatar = "index.php?entryPoint=download&id=".$User->id."_photo&type=Users" ;
		}
		else
		{
			    $fullname = $Contact->first_name_c.' '.$Contact->last_name_c;
				if(!empty($Contact->avatar_c))
					$avatar = "index.php?entryPoint=download&id=".$Contact->id."_avatar_c&type=Accounts" ;			
				else
					$avatar = $Contact->profile_pic_fbk_c;
					
		}		
		
		$arr["messages"][] = array(

		 "id"=>$mks_MessagesFb->id,
		 "from"=>array(
				"name"  => $fullname,
				"avatar"=> $avatar,
			),
		 "text"=> $mks_MessagesFb->description,
		 "created_at"=> $mks_MessagesFb->date_entered,
		 "type"=> $mks_MessagesFb->type

		);
		
	}						
}

echo json_encode($arr);

exit;

