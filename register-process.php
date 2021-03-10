<?php

	$name = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$passwordC = $_POST['passwordC'];


	if(!empty($name) || !empty($username) || !empty($email) || !empty($password) || !empty($passwordC)){
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbname = "albaniatourism";

		//Lidhja e databazes
		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

		if(mysqli_connect_error()){
			die('Connect Error(' .mysqli_connect_error(). ')' . 	mysqli_connect_error());
		}else{
			$SELECT = "SELECT email From users Where email = ? Limit 1";
			$INSERT = "INSERT Into users (name, username, email, password, passwordC) values(?, ?, ?, ?, ?)";


				//Pregaditim statementin
			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s", $email);
			$stmt->execute();
			$stmt->bind_result($email);
			$stmt->store_result();
			$rnum = $stmt->num_rows;

			if($rnum == 0){
				$stmt->close();

				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("sssss", $name, $username, $email, $password, $passwordC);
				$stmt->execute();
					// echo "You are registered successfully!";
				header('Location: Login.php');
			}else{
				echo '<script>alert("Someone already registered with this email address!")</script>'; 
				//echo "Someone already registered with this email address!";
			}
			$stmt->close();
			$conn->close();
		}

	}else{
		echo "All fields are required!";
		die();
	}
?>