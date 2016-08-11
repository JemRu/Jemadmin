<?php
	require "conn.inc.php";
	
	//执行任何SQL（必须连接的用户有操作SQL语句的权限）DDL DML DQL DCL

	$sql="CREATE TABLE if not exists shops(id int not null auto_increment, name varchar(50) not null default '', price double not null default '0.00', num int not null default '0', desn text, primary key(id), key name(name,price))";

	$result=mysql_query($sql);

	//解决错误
	if(!$result){
		echo "ERROR ".mysql_errno()." :".mysql_error();
		exit;
	}
	var_dump($result);

	mysql_close();
