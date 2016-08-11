<?php
	include "init.inc.php";

	$smarty -> assign("var", "abcdefg");
/*
	//注册funone 修改器
	$smarty -> registerPlugin("modifier", "funone", "one");
	//注册funtwo 函数
	$smarty -> registerPlugin("function", "funtwo", "two");
	//注册funthree 块函数
	$smarty -> registerPlugin("block", "funthree", "three");
	
	//注册一个修改器  funone   <{$var|funone}>
	function one($var, $a="", $b="", $c="1") {
		return strtoupper($var);
	}


	//注册一个函数 funtwo   <{funtwo color="red" size="7" content="11111111111111"}>	
	function two($args, $smarty) {
		return '<font color="'.$args['color'].'" size="'.$args['size'].'">'.$args['content'].'</font>';
	}

	//注册一个块函数 funthree  <{funthree color="red" size="5"}>2222222222222 <{/funthree}>
	function three($args, $content, $smarty) {
		return '<font color="'.$args['color'].'" size="'.$args['size'].'">'.$content.'</font>';
	}
   */


	$smarty->display("demo.tpl");
