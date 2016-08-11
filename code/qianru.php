<?php
	require "conn.inc.php";
	
	$code = $_POST['oper'];
	$outdata=$_POST['indate'];
	$outadress=$_POST['inAdress'];
	$id=$_POST['id'];
	
	$sql="select * from person where id='".$id."';";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	$Hnumber=$row[Number];
	var_dump($Hnumber);
//	if($ordis=='No')$ordis='未注销';
//	else $ordis="已注销";

//  satus：1 户号为空  

	if ($code == "edit"){
		$sql="update person set inAdress='".$outadress."',indate='".$outdata."' where id=".$id.";";
	}
	if ($code =="del"){
		//var_dump($id);
		$tempid = explode(",", $id);
		var_dump($tempid);
		var_dump(count($tempid));
		if (count($tempid) == 1){
			$sql="update person set indate='',inAdress='' where id='".$id."';";
			$result=mysql_query($sql);
		}
		else {
			foreach ($tempid as $value) {
				$sql="update person set indate='',inAdress='' where id='".$value."';";
				$result=mysql_query($sql);
			}
			mysql_close();
			exit;
		}
		
		
	}
	var_dump($sql);
	$result=mysql_query($sql);

	//$row=mysql_fetch_array($result);	
	if(!$result){
				echo "ERROR ".mysql_errno()." :".mysql_error();
				mysql_close();
				exit;
			}
			else{
				echo "success";
				}
			if(!$result2){
				echo "ERROR ".mysql_errno()." :".mysql_error();
				mysql_close();
				exit;
			}
			else{
				echo "success";
				}

			mysql_close();