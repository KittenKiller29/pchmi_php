<?php
	
	$connect=mysqli_connect('localhost','root','12345678','test');
	$param=$_GET['id'];
	$table=mysqli_query($connect,'select * from books where idbooks = '.$param);
	$row=mysqli_fetch_array($table);
	$table1=mysqli_query($connect,'select * from response where idbook = '.$param);
	$row1=[];
	while($row2=mysqli_fetch_array($table1)){
		$row1[]=$row2;
	}
