<?php
	require "conn.inc.php";
	
	$code = $_POST['oper'];
	$IDcard = $_POST['IDcard'];
	$name=$_POST['name'];
	$relation=$_POST['relation'];
//	$Hnumber=$_POST['Hnumber'];
	$id=$_POST['id'];
	
	$sql="select Hnumber,IDcard,name,relation from person where id ='".$id."';";
	$result=mysql_query($sql);
	$row = mysql_fetch_array($result);
	$oldHnum = $row['Hnumber'];
	$oldIDcard=$row['IDcard'];
	$oldrelation = $row['relation'];
	$name = $row['name'];
	var_dump($oldrelation);
//	if($ordis=='No')$ordis='未注销';
//	else $ordis="已注销";

//  satus：1 户号为空  

//	if ($code == "edit"){
//		if ($oldIDcard!=$IDcard){
//			$sql="update person set Hnumber='".$Hnumber.",relation='".$relation."' 'where IDcard='".$IDcard."' and name='".$IDcard."';";
//			$result=mysql_query($sql);
//			$sql=
//		}
//		$sql="update person set Hnumber='".$Hnumber."',relation='".$relation."' where id=".$id.";";
//		$result=mysql_query($sql);
//		$sql="select * from account where Hnum='".$oldHnum."';";
//		var_dump($sql);
//		$result=mysql_query($sql);
//		$row=mysql_fetch_array($result);
//		$int=count($row);
//		var_dump($row);
//		if (!$row){
//			if ( $oldrelation == '户主' ){
//			$sql="insert into account(Hnum,IDcard,Hname) values('".$Hnumber."','".$IDcard."','".$name."')";
//			var_dump($sql);
//			$result=mysql_query($sql);
//			}
//			
//		}
//		else {
//			if ( $oldrelation == '户主' ){
//			$sql="update account set Hnum='".$Hnumber."' where IDcard='".$IDcard."'";
//				var_dump($sql);
//			$result=mysql_query($sql);
//			}
//			
//		}
//	}
	if ($code =="del"){
		//var_dump($id);
		$tempid = explode(",", $id);
		var_dump($tempid);
		var_dump(count($tempid));
		if (count($tempid) == 1){
			$sql="select Hnumber,IDcard from person where id ='".$id."';";
			$result=mysql_query($sql);
			$row = mysql_fetch_array($result);
			$oldHnum = $row['Hnumber'];
			$IDcard=$row['IDcard'];
			$oldrelation=$row['relation'];
			if ($oldrelation=='户主'){
				$sql="delete from account where Hnum='".$oldHnum."';";
				$result=mysql_query($sql);
				$sql="update person set Hnumber='' where Hnumber='".$oldHnum."';";
				$result=mysql_query($sql);
			}
			else {
				$sql="update person set Hnumber='' where Hnumber='".$oldHnum."';";
				$result=mysql_query($sql);
			}
		}
		else {
			foreach ($tempid as $value) {
				$sql="select Hnumber,IDcard from person where id ='".$value."';";
				$result=mysql_query($sql);
				$row = mysql_fetch_array($result);
				$oldHnum = $row['Hnumber'];
				$IDcard=$row['IDcard'];
				$oldrelation=$row['relation'];
				if ($oldrelation=='户主'){
					$sql="delete from account where Hnum='".$oldHnum."';";
					$result=msysql_query($sql);
					$sql="update person set Hnumber='' where Hnumber='".$oldHnum."';";
					$result=mysql_query($sql);
				}
				else {
					$sql="update person set Hnumber='' where IDcard='".$oldIDcard."';";
					$result=mysql_query($sql);
				}
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