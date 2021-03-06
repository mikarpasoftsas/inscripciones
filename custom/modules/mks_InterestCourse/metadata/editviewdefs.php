<?php
$module_name = 'mks_InterestCourse';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
	  'includes' => 
	   array(	
			array (
				'file' => 'custom/modules/mks_InterestCourse/js/editview.js',       
			)	
	   ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'mks_interestcourse_opportunities_name',
            'label' => 'LBL_MKS_INTERESTCOURSE_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'course',
            'studio' => 'visible',
            'label' => 'LBL_COURSE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'day_available',
            'studio' => 'visible',
            'label' => 'LBL_DAY_AVAILABLE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'turn',
            'studio' => 'visible',
            'label' => 'LBL_TURN',
          ),
        ),
        4 => 
        array (
          0 => 'assigned_user_name',
        ),
        5 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
;
?>
