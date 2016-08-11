<?php
	require "conn.inc.php";
	
	//执行任何SQL（必须连接的用户有操作SQL语句的权限）DDL DML DQL DCL

	//将后有语句分类两类，一个是有影响行数（update,delete, insert）的语句，和另一类有结果集（select）, 语句分为： select和非select

	$sql="create table miao(id int auto_increment,name varchar(10) not null,age int not null,primary key(id));";

	echo $sql."<br>";
	$result=mysql_query($sql); //如果是select语句返回结果集（资源），失败返回false, 所有执行非select语句，成功返回true,失败则返回false

	//解决错误
	if(!$result){
		echo "ERROR ".mysql_errno()." :".mysql_error();
		exit;
	}

	if(mysql_affected_rows() > 0){
		echo "执行成功!<br>";
	}else{
		echo "记录没有改变<br>";
	}

	echo "最后自动增长的ID：".mysql_insert_id()."<br>";

	echo "影响的行数：".mysql_affected_rows()."<br>";

	mysql_close();
