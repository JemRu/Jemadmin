<?php 
	require "conn.inc.php";
	
	$name = $_POST['username'];
	$code = $_POST['code'];
	$passw1 = $_POST['password1'];
	
	$sql = "select code,IDcard from usercode where code=\"".$code."\";";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$idcard = $row['IDcard'];
	$code=$row['code'];
	//echo"$idcard";
	$temp = count($row["code"]);
	echo "$temp";
	if(count($row["code"])) {
		$sql="select code from operator where code=\"".$code."\";";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		if(count($row['code'])){
			header("Location:http://127.0.0.1:8080/jemadmin/login.php?code=1");
			mysql_close();
		}
		else {
			$sql="insert into operator(name,code,password,IDcard) values(\"".$name."\",\"".$code."\",\"".$passw1."\",\"".$idcard."\");";
			$result=mysql_query($sql);
			//解决错误
			if(!$result){
				echo "ERROR ".mysql_errno()." :".mysql_error();
				exit;
			}
			else{
				header("Location:http://127.0.0.1:8080/jemadmin/login.php?code=4");
				mysql_close();
			}
			//var_dump($result);
			mysql_close();
		}
	}
	else {
		header("Location:http://127.0.0.1:8080/jemadmin/login.php?code=8");
		mysql_close();
	}
	
	//echo "$name"."$code"."$passw1"."$passw2";
