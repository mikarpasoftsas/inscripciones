<?php /* Smarty version 2.6.31, created on 2019-05-14 23:44:31
         compiled from themes/Creacttive/tpls/_head.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getimagepath', 'themes/Creacttive/tpls/_head.tpl', 69, false),array('function', 'sugar_getjspath', 'themes/Creacttive/tpls/_head.tpl', 80, false),)), $this); ?>
<!DOCTYPE html>
<html <?php echo $this->_tpl_vars['langHeader']; ?>
>
<head>
    <link rel="SHORTCUT ICON" href="<?php echo $this->_tpl_vars['FAVICON_URL']; ?>
">
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['APP']['LBL_CHARSET']; ?>
">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" />
    <!-- Bootstrap -->
    <link href="themes/Creacttive/css/normalize.css" rel="stylesheet" type="text/css"/>
    <link href='themes/Creacttive/css/fonts.css' rel='stylesheet' type='text/css'>
    <link href="themes/Creacttive/css/grid.css" rel="stylesheet" type="text/css"/>
    <link href="themes/Creacttive/css/footable.core.css" rel="stylesheet" type="text/css"/>
	<link href="themes/Creacttive/css/messages.css" rel="stylesheet" type="text/css"/>
    <title><?php echo $this->_tpl_vars['APP']['LBL_BROWSER_TITLE']; ?>
</title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php echo $this->_tpl_vars['SUGAR_JS']; ?>

    <?php echo '
    <script type="text/javascript">
        <!--
        SUGAR.themes.theme_name = \''; ?>
<?php echo $this->_tpl_vars['THEME']; ?>
<?php echo '\';
        SUGAR.themes.theme_ie6compat = \''; ?>
<?php echo $this->_tpl_vars['THEME_IE6COMPAT']; ?>
<?php echo '\';
        SUGAR.themes.hide_image = \''; ?>
<?php echo smarty_function_sugar_getimagepath(array('file' => "hide.gif"), $this);?>
<?php echo '\';
        SUGAR.themes.show_image = \''; ?>
<?php echo smarty_function_sugar_getimagepath(array('file' => "show.gif"), $this);?>
<?php echo '\';
        SUGAR.themes.loading_image = \''; ?>
<?php echo smarty_function_sugar_getimagepath(array('file' => "img_loading.gif"), $this);?>
<?php echo '\';
        
        if (YAHOO.env.ua)
            UA = YAHOO.env.ua;
        -->
    </script>
    '; ?>

    <?php echo $this->_tpl_vars['SUGAR_CSS']; ?>

    <link rel="stylesheet" type="text/css" href="themes/Creacttive/css/colourSelector.php">
    <script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "themes/Creacttive/js/jscolor.js"), $this);?>
'></script>
    <script type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file' => "cache/include/javascript/sugar_field_grp.js"), $this);?>
'></script>
	
	<link rel="stylesheet" href="themes/Creacttive/jQuery-UI-Multiple-Select-Widget/jquery.multiselect.css">
	<script src="themes/Creacttive/jQuery-UI-Multiple-Select-Widget/src/jquery.multiselect.js"></script>
	
	<link rel="stylesheet" href="themes/Creacttive/jQuery-UI-Multiple-Select-Widget/jquery.multiselect.filter.css">
	<script src="themes/Creacttive/jQuery-UI-Multiple-Select-Widget/src/jquery.multiselect.filter.js"></script>

	<script src="themes/Creacttive/jQuery-UI-Multiple-Select-Widget/i18n/jquery.multiselect.es.js"></script>
	<script src="themes/Creacttive/jQuery-UI-Multiple-Select-Widget/i18n/jquery.multiselect.filter.es.js"></script>

</head>