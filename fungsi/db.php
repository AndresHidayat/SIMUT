<?php
	
	$host		='localhost';
	$user		='root';
	$password	='';
	$db			='mutabaah';

	$link =mysqli_connect($host, $user, $password, $db);

	if ( !$link ){
		die('ada error' . mysqli_connect_error());
	}
?>