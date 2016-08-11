<?php

	
//	{idcard:"620121199511131445",name:"杨静如",relation:"女儿",sex:"女",nation:"汉族", Hnumber:"1459341712330"}
	require "conn.inc.php";

	$sql = "select IDcard,name,relation,Sex,nation,Hnumber from person;";
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
		
	
			if(!$result){
				echo "ERROR ".mysql_errno()." :".mysql_error();
				exit;
			}
			else{
				
			}
			//echo"$name";
		?>