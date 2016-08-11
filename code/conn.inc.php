<?php
	//step 1 connect
	$link=mysql_connect("localhost", "root", "");

	if(!$link){
		echo "与数据库建立连失败!";
		exit;	
	}
	//step 2 select db
	mysql_select_db("jemadmin");
	mysql_query("set names 'UTF8'");
