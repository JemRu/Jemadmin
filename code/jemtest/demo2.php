<?php
	require "conn.inc.php";
	
	//执行任何SQL（必须连接的用户有操作SQL语句的权限）DDL DML DQL DCL

	//将后有语句分类两类，一个是有影响行数（update,delete, insert）的语句，和另一类有结果集（select）, 语句分为： select和非select

	$sql="insert into miao(name, age) values('{$_GET["name"]}','{$_GET["age"]}')";

	echo $sql."<br>";
	$result=mysql_query($sql); //如果是select语句返回结果集（资源），失败返回false, 所有执行非select语句，成功返回true,失败则返回false

	//解决错误
	if(!$result){
		echo "ERROR ".mysql_errno()." :".mysql_error();
		exit;
	}

	echo "最后自动增长的ID：".mysql_insert_id()."<br>";

	echo "影响的行数：".mysql_affected_rows()."<br>";

	var_dump($result);
	mysql_close();
