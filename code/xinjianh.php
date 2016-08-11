<?php
	require "conn.inc.php";
	$code = $_POST['oper'];
	
//	$orout='未迁';
//	$InAdress='';
//	$Indata='';
//	$logout='no';
	
	$Hnum = $_POST['Hnum'];
	$Hname=$_POST['Hname'];
	$Adress=$_POST['Adress'];
	$Regdata=$_POST['Regdata'];
	$Indata=$_POST['Indata'];
	$InAdress=$_POST['InAdress'];
	$orout=$_POST['orout'];
	$logout=$_POST['logout'];
	$Hcategory=$_POST['Hcategory'];
	$id=$_POST['id'];
	$IDcard=$_POST['IDcard'];
//	if($orout=='No')$orout='未迁';
//	else $orout="已迁";

	$sql="select * from account where id='".$id."'";
	var_dump($sql);
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	$oldHnum=$row['Hnum'];
	$oldname=$row['Hname'];

	if ($code == "edit"){
		if ($oldHnum!=$Hnum){
			$sql="update person set Hnumber='".$Hnum."' where Hnumber ='".$oldHnum."'";
			var_dump($sql);
			$result=mysql_query($sql);
		}
		if ($oldname!=$Hname){
			$sql="update person set relation='' where Hnumber ='".$oldHnum."'";
			var_dump($sql);
			$result=mysql_query($sql);
			$sql="update person set relation='户主' where IDcard ='".$IDcard."'";
			var_dump($sql);
			$result=mysql_query($sql);
		}
		$sql="update account set IDcard='".$IDcard."',Hnum=\"".$Hnum."\",Hname=\"".$Hname."\",Adress='".$Adress."',Regdata='".$Regdata."',Hcategory='".$Hcategory."'  where id=".$id.";";
		$result=mysql_query($sql);
	}
	if ($code =="del"){
		//var_dump($id);
		$tempid = explode(",", $id);
		var_dump($tempid);
		var_dump(count($tempid));
		if (count($tempid) == 1){
			$sql="delete from account where id='".$id."';";
			var_dump($sql);
			$result=mysql_query($sql);
			$sql="update person set Hnumber='' where Hnumber='".$oldHnum."'";
			var_dump($sql);
			$result=mysql_query($sql);
		}
		else {
			foreach ($tempid as $value) {
				$sql="delete from account where id='".$value."';";
				$result=mysql_query($sql);
				
				$sql="select * from account where id='".$value."'";
				var_dump($sql);
				$result=mysql_query($sql);
				$row=mysql_fetch_array($result);
				$oldHnum=$row['Hnum'];
				$oldname=$row['Hname'];
				
				$sql="update person set Hnumber='' where Hnumber='".$oldHnum."'";
				var_dump($sql);
				$result=mysql_query($sql);
			}
			mysql_close();
			exit;
		}
		
		
	}
	if ($code == "add"){
		$sql="insert into account values('','".$Hnum."','".$Hname."','".$Adress."','".$Regdata."','','','未迁','no','".$Hcategory."','".$IDcard."')";
	}
//	if ($code == 4){
//		header("localhost/jemadmin/login.php?code=".$code);
//	}
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

			mysql_close();