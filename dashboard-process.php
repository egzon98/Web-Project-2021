
<?php

	$title = $_POST['title'];
	$image = $_POST['image'];
	$link = $_POST['link'];
	$description = $_POST['description'];



	if(!empty($title) || !empty($image)|| !empty($link) || !empty($description)){
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbname = "albaniatourism";

		//Lidhja e databazes
		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

		if(mysqli_connect_error()){
			die('Connect Error(' .mysqli_connect_error(). ')' . 	mysqli_connect_error());
		}else{
			$INSERT = "INSERT Into posts (post_title, post_image, post_link, post_description) values(?, ?, ?, ?)";
				
				//Pregaditim statementin
				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("ssss", $title, $image, $link, $description);
				$stmt->execute();
					// echo "You are registered successfully!";
				header('Location: Dashboard.php');

			$stmt->close();
			$conn->close();
		}

	}else{
		echo "All fields are required!";
		die();
	}
?>
