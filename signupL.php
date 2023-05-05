<?php 
	include_once('config.php');

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$fullname = $_POST['fullname'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$teamPASS = $_POST['password'];
		$password = password_hash($teamPASS, PASSWORD_DEFAULT);

		$sql = "INSERT INTO registera(username, fullname, email, password)
				VALUES (:username, :fullname, :email, :password)";

		$prep = $con->prepare($sql);
		$prep->bindParam(':username', $username);
		$prep->bindParam(':fullname', $fullname);
		$prep->bindParam(':email',$email);
		$prep->bindParam(':password', $password);
		$prep->execute();
		header("Location: login.php");
	}



 ?>