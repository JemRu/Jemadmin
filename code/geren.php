<?php
	require "conn.inc.php";

	$code = $_POST['code'];
	$phone = $_POST['phone'];
	$sql = "update operator set phone=\"$phone\" where code = \"$code\";";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	if(!$result){
				echo "ERROR ".mysql_errno()." :".mysql_error();
				exit;
			}
			else{
				header("http://127.0.0.1:8080/jemadmin/gerenxinxi.php?code=$code&status=1");
				mysql_close();
			}
			//var_dump($result);
			mysql_close();
 ?>