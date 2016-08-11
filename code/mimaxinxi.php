<?php
	require "conn.inc.php";
	
	$code = $_POST['code'];
	$passw1 = $_POST['password'];	
	$passw2 = $_POST['password2'];

	//var_dump($name);
	
	$sql="select * from operator where code=\"".$code."\";";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$passw = $row['password'];
	echo"$passw";
	echo"$passw1";
	
	if(!$result){
				echo "ERROR ".mysql_errno()." :".mysql_error();
				exit;
			}
			else{
				if($passw1 == $passw){
					$sql = "update operator set password = \"$passw2\" where code = \"$code\" ;";
					var_dump($sql);
					$result=mysql_query($sql);
					$row=mysql_fetch_array($result);
					header("Location:http://127.0.0.1:8080/jemadmin/gerenxinxi.php?status=1");//更新成功
					mysql_close();
				}
				else{
					header("Location:http://127.0.0.1:8080/jemadmin/userxiugai.php?&status=2");//密码错误
					mysql_close();
				}
			}
			//var_dump($result);
			mysql_close();

	

 ?>