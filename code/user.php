<?php
	require "conn.inc.php";
	
	$code = $_POST['code'];
	$passw1 = $_POST['password1'];	
	$passw2 = $_POST['password1'];
	$name = $_POST['name'];
	
	$sql="select * from operator where code=\"".$code."\";";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$passw = $row['password'];
	
	if(!$result){
				echo "ERROR ".mysql_errno()." :".mysql_error();
				exit;
			}
			else{
				if($passw1 == $passw){
					$sql = "update );";
					$result=mysql_query($sql);
					$row=mysql_fetch_array($result);
			
					header("Location:http://localhost/jemadmin/gerenzhongxin.php?code=\"".$code."\"&status=\"update\"");
					mysql_close();
				}
				mysql_close();
			}
			//var_dump($result);
			mysql_close();

	

 ?>