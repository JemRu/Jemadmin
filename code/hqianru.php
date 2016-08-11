<?php
	require "conn.inc.php";
	
	$code = $_POST['oper'];
	$outdata=$_POST['Indata'];
	$outadress=$_POST['InAdress'];
	$orout=$_POST['orout'];
	$id=$_POST['id'];
	
	$sql="select * from account where id='".$id."';";
	$result = mysql_query($sql);
	$row = mysql_fetch_array($result);
	$Hnumber=$row['Hnum'];
	var_dump($Hnumber);
//	if($ordis=='No')$ordis='未注销';
//	else $ordis="已注销";

//  satus：1 户号为空  

	if ($code == "edit"){
		$sql="update account set orout='".$orout."',InAdress='".$outadress."',Indata='".$outdata."' where Hnum=".$Hnumber.";";
		$result=mysql_query($sql);
	}
	if ($code =="del"){
		//var_dump($id);
		$tempid = explode(",", $id);
		var_dump($tempid);
		var_dump(count($tempid));
		if (count($tempid) == 1){
			$sql="update account set orout='未迁',Indata='',InAdress='' where id='".$id."';";
			$result=mysql_query($sql);
		}
		else {
			foreach ($tempid as $value) {
				$sql="update account set orout='未迁',Indata='',InAdress=''  where id='".$value."';";
				$result=mysql_query($sql);
			}
			mysql_close();
			exit;
		}
		
		
	}
	var_dump($sql);

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