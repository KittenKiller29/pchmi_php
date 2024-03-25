<?php
	session_start();
	$param=$_GET['id'];
	$_SESSION['books'][]=$param;