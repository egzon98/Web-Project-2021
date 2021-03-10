<?php require 'includes/connect.php'; 

$query = $pdo->query('SELECT * from posts LIMIT 6');
$posts = $query->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/Homepage.css">
	<script src="script.js" defer></script>
	<title>Albanian Beaches - Visit Albania</title>
		<link rel = "icon" href = "images/eagle.png" type = "image/x-icon"> 
</head>
<body>
	<div class="container">

		<!-- NAVBAR -->
		<nav class="navbar">
			<div class="logo">
				<img src="images/eagle.png">
			</div>
			<a href="#" class="toggle-button">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</a>
			<div class="navbar-links">
				<ul>
					<li><a href="Index.php">HOME</a></li>
					<li><a href="#vendet">PLACES</a></li>
					<li><a href="Contact.php">CONTACT</a></li>
					<li><a href="About.php">ABOUT</a></li>
					<li><a href="Login.php">LOGIN</a></li>

				</ul>
			</div>
			<div class="location">
				<a href="https://www.google.com/maps/place/Kosova/@42.5571974,19.7808801,8z/data=!3m1!4b1!4m5!3m4!1s0x13537af354bf7df1:0xbfffeedfabc31791!8m2!3d42.6026359!4d20.902977" target="_blank"><img src="images/location.png"></a>
			</div>
		</nav>

		<!-- KONTEKTI -->
		<div class="content">
			<img id="background-kryesor" src="images/HomeBackground.jpg">
			<h1 id="welcome-title">Welcome to Albania</h1>

			<div id="vendet">
				<?php foreach($posts as $post): ?>
					<div id="paragrafi1">
						<h3><?php echo $post['post_title']; ?></h3>
						<img src="images/<?php echo $post['post_image']; ?>">
						<a href="Durresi.php"><p><?php echo $post['post_description']; ?></p></a>
					</div>
				<?php endforeach;  ?>
			</div>
		</div>

		<footer>
			<div id="logo-footer">
				<img src="images/eagle.png">
			</div>
			<div id="rrjetet-sociale">
				<a href="#"><img src="images/facebook.png"></a>
				<a href="#"><img src="images/twitter.png"></a>
				<a href="#"><img src="images/phone-call.png"></a>
				<a href="#"><img src="images/instagram.png"></a>
			</div>
			<div id="autori">
				<p>© Tourism Albania 2021</p>
			</div>
			

		</footer>
	</div>
</body>
</html>