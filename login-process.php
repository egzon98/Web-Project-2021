<?php

	$email = $_POST['email'];
	$password = $_POST['password'];



	if(!empty($email) || !empty($password)){
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbname = "albaniatourism";

		//Lidhja e databazes
		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

		if(mysqli_connect_error()){
			die('Connect Error(' .mysqli_connect_error(). ')' . 	mysqli_connect_error());
		}else{

			$SELECT = "SELECT * FROM users WHERE email='".$email."' AND password='".$password."' limit 1";


			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("ss", $email, $password);
			$stmt->execute();
					// echo "You are logged in successfully!";
			header('Location: index.php');

			$stmt->close();
			$conn->close();
		}

	}else{
		echo "All fields are required!";
		die();
	}

?>