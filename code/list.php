<?php
			
			//$code=$_REQUEST['code'];

			
			
//			$name = $row['name'];
//			$idcard = $row['IDcard'];
//			$phone = $row['phone'];
//			
//			$sql="select * from person;";
//			$result=mysql_query($sql);
//			$row=mysql_fetch_array($result);
//			$passw = $row['password'];
//          mysql_data_seek

	
	
//	print_r(mysql_fetch_row($result));
//	//print_r($result);
//	//print_r($row);
//	
//	mysql_data_seek($result, 3);
//	
//	$row = mysql_fetch_assoc($result);
//	
//	//print_r(mysql_fetch_row($result));
//	//print_r($result);
//	print_r($row);
	
	
	require "conn.inc.php";
	
	$sql = "select * from person;";
	$result = mysql_query($sql);
	$row = mysql_fetch_assoc($result);
	$cols=mysql_num_fields($result);
	$rows=mysql_num_rows($result);
	//$table=mysql_field_name($result, $i);
	for ($j=0; $j<$rows; $j++){
		echo '{';
		for($i=0; $i<$cols; $i++){
				
			$table=mysql_field_name($result, $i);
			if($i != $cols-1 ){
				echo ''.$table.":\"".$row[$table]."\",";
			}
			else {
				echo ''.$table.":\"".$row[$table]."\"";
			}		
		}
		if ($j != $rows-1 ){
			echo '},';

			mysql_field_seek($result,1);
			$row = mysql_fetch_assoc($result);
//			$row = mysql_fetch_assoc($result);
//			var_dump($row);
		}
		else {
			echo '}';
		}
	}
	mysql_close();
	
//{idcard:"620121199511131445",name:"杨静如",sex:"女",nation:"汉族",province:"甘肃兰州", birthdate:"1995-11-13",place:"甘肃兰州",Hnumber:"1459341712330",degree:"高中毕业",marry:"未婚",job:"学生",WorkAdress:"无",indate:"1995-11-13",inAdress:"甘肃兰州",stock:"Yes"},
//
			if(!$result){
				echo "ERROR ".mysql_errno()." :".mysql_error();
				exit;
			}
			else{
				
			}
			//echo"$name";
		?>