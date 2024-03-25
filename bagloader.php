<?php
	$connect=mysqli_connect('localhost','root','12345678','test');
	$row1=[];
	if(isset($_SESSION['books'])){
	foreach($_SESSION['books'] as $key => $value){
		$row2=$_SESSION['books'][$key];
		$table=mysqli_query($connect,'select * from books where idbooks ='.$row2);
		$row2=mysqli_fetch_array($table);
		$row1[]=$row2;
	}
	}
	