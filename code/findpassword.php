<?php 
	require "conn.inc.php";
	$name = $_POST['username'];
	$code = $_POST['code'];
	
	$sql = "select name,code,password from operator where code = \"$code\";";
	$result=mysql_query($sql);
	$row =mysql_fetch_array($result);
	if(count($row['code'])){		
		if($row['name']==$name){
			$temppassword=$row['password'];
			header("Location:http://127.0.0.1:8080/jemadmin/login.php?code=5&password=$temppassword");
			mysql_close();
		}
		else{
			header("Location:http://127.0.0.1:8080/jemadmin/login.php?code=7");
			mysql_close();
		}
	}
	else{
		header("Location:http://127.0.0.1:8080/jemadmin/login.php?code=6");
		mysql_close();
	}
?>