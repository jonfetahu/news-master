<?php 

	$host = 'localhost';
	$db = 'projekti';
	$user = 'root';
	$pass = '';

	try{

		$con = new PDO("mysql:host=$host; dbname=$db", $user, $pass);

	}catch(Exception $e){
		echo "Dicka shkoi keq";
	}
?>