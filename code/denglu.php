<?php
	require_once "conn.inc.php";
	$name = $_POST['username'];
	$password = $_POST['password'];
	$sql = "select password,code from operator where name=\"$name\";";
	echo $sql;
	$result=mysql_query($sql);
	$row =mysql_fetch_array($result);
	if(count($row['password'])){
		
		if($row['password']==$password){
			$tempusercode=$row['code'];
			session_start();
			$_SESSION['code']=$tempusercode;
			header("Location:http://127.0.0.1:8080/jemadmin/index.php");
			mysql_close();
		}
		else{
			echo $result;
			header("Location:http://127.0.0.1:8080/jemadmin/login.php?code=2");
			mysql_close();
		}
	}
	else{
		header("Location:http://127.0.0.1:8080/jemadmin/login.php?code=3");
		mysql_close();
	}
 ?>