<?php
	session_start();
	$param=$_GET['elem'];
	foreach($_SESSION['books'] as $key => $value){
		if($param==$value){
			unset($_SESSION['books'][$key]);
			exit;
		}
	}