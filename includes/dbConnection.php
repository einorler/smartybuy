<?php
	$host='localhost';
	$user='pirkiniai';
	$pass='560333';
	$database='pirkiniu_sarasas';
	$connection = mysqli_connect($host, $user, $pass, $database);
	if(mysqli_connect_errno()){
		die('Nepavyko prisijungti prie duomenų bazės'.mysqli_connect_errno());
	}
?>