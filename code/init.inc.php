<?php
	define("ROOT", str_replace("\\", "/", dirname(__FILE__)).'/');
	require ROOT."/libs/Smarty.class.php";

	$smarty = new Smarty();

	$smarty -> setTemplateDir(ROOT."/tpls")
		-> setCompileDir(ROOT."/coms")
		-> setConfigDir(ROOT."/configs")
		-> addPluginsDir(ROOT."plugins");
	$smarty -> auto_literal = false;
	$smarty -> left_delimiter="<{";
	$smarty -> right_delimiter="}>";
