<<<<<<< HEAD
<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class mks_ArticlesViewDetail extends ViewDetail {
    
	
	public function display()
    {
      	$this->dv->process();
		$this->ss->assign('custom_value', currency_format_number($this->bean->amount_c));	
        parent::display();
    }
		
}
=======
<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/MVC/View/views/view.detail.php');

class mks_ArticlesViewDetail extends ViewDetail {
    
	
	public function display()
    {
      	$this->dv->process();
		$this->ss->assign('custom_value', currency_format_number($this->bean->amount_c));	
        parent::display();
    }
		
}
>>>>>>> d368532854a4e9301ed814ff37b5ca7aed9c9989
?> 