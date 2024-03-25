<?php
	$connect=mysqli_connect('localhost','root','12345678','test');
	$data = json_decode(file_get_contents('php://input'),true);
	$keys=["author","bname","tag","start","end"];
	for($i=0;$i<5;$i++){
		if($data[$i]==''){
			$keys[$i]='';
		}
	}
	$datas=[];
	$table=mysqli_query($connect,'select * from books');
	while($row=mysqli_fetch_array($table)){

		if($keys[0]!='' && $row[$keys[0]]!=$data[0]){
			continue;
		}
		if($keys[1]!='' && $row[$keys[1]]!=$data[1]){
			continue;
		}
		if($keys[2]!='' && $row[$keys[2]]!=$data[2]){
			continue;
		}
		$startcost=-1;
		if($keys[3]!=''){
			$startcost=(int)$data[3];
		}
		$endcost=1000000000;
		if($keys[4]!=''){
			$startcost=(int)$data[4];
		}
		if( $startcost> (int)$row['cost'] || $endcost<(int)$row['cost']){
			continue;
		}
		$datas[]=[$row['img'],$row['bname'],$row['tag'],$row['author'],$row['about'],$row['cost'],$row['idbooks']];
	}
	echo json_encode($datas, JSON_UNESCAPED_UNICODE);
