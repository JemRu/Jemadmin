<?php
	require "conn.inc.php";
	
	$code = $_POST['oper'];
	$IDcard=$_POST['IDcard'];
	$name=$_POST['name'];
	$Sex=$_POST['Sex'];
	$nation=$_POST['nation'];
	$province=$_POST['province'];
	$birthdate=$_POST['birthdate'];
	$place=$_POST['place'];
	$degree=$_POST['degree'];
	$marry=$_POST['marry'];
	$Job=$_POST['Job'];
	$WorkAdress=$_POST['WorkAdress'];
	$ordis=$_POST['ordis'];
	$id=$_POST['id'];
	if($ordis=='No')$ordis='未注销';
	else $ordis="已注销";
	if($marry=='No')$marry='未婚';
	else $marry="已婚";
	if ($code == "edit"){
		$sql="update person set name=\"".$name."\",Sex='".$Sex."',nation='".$nation."',province='".$province."',birthdate='".$birthdate."',	IDcard='".$IDcard."',place='".$place."',degree='".$degree."',marry='".$marry."',Job='".$Job."',WorkAdress='".$WorkAdress."',ordis='".$ordis."' where id=".$id.";";
		$result=mysql_query($sql);

	}
	if ($code =="del"){
		//var_dump($id);
		$tempid = explode(",", $id);
		var_dump($tempid);
		var_dump(count($tempid));
		if (count($tempid) == 1){
			$sql="delete from person where id='".$id."';";
			$result=mysql_query($sql);
		}
		else {
			foreach ($tempid as $value) {
				$sql="delete from person where id='".$value."';";
				$result=mysql_query($sql);
			}
			mysql_close();
			exit;
		}
		
		
	}
	if ($code == "add"){
		$sql="insert into person values(\"\",\"$name\",\"$Sex\",\"\",\"$nation\",\"$province\",\"$birthdate\",\"$place\",\"\",\"$degree\",\"$marry\",\"$IDcard\",\"$Job\",\"$WorkAdress\",\"\",\"\",\"$ordis\");";
	}
	if ($code == 4){
		header("localhost/jemadmin/login.php?code=".$code);
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

			mysql_close();