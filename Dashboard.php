<!DOCTYPE html>
<html>
<head>
	<title>Albanian Beaches - Login</title>
	<link rel = "icon" href = "images/eagle.png" type = "image/x-icon"> 
	<link rel="stylesheet" type="text/css" href="css/Homepage.css">
	<link rel="stylesheet" type="text/css" href="css/Login.css">
	<link rel="stylesheet" type="text/css" href="css/Dashboard.css">
	<script src="script.js" defer></script>

</head>

<body>
	<div class="container">
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
					<li><a href="Index.php #welcome-title">PLACES</a></li>
					<li><a href="Contact.php">CONTACT</a></li>
					<li><a href="About.php">ABOUT</a></li>
					<li><a href="Login.php">LOGIN</a></li>

				</ul>
			</div>
			<div class="location">
				<a href="https://www.google.com/maps/place/Kosova/@42.5571974,19.7808801,8z/data=!3m1!4b1!4m5!3m4!1s0x13537af354bf7df1:0xbfffeedfabc31791!8m2!3d42.6026359!4d20.902977" target="_blank"><img src="images/location.png"></a>
			</div>
		</nav>
		<h2 id="content-title">Dashboard</h2>
		<nav class="posts">
			<h4>New post </h4>
			<form action="dashboard-process.php" name="myForm" method="post">
				<input class="input-field" type="textbox" name="title" placeholder="Title">
				<input class="input-field" type="textbox" name="image" placeholder="Image URL">
				<input class="input-field" type="textbox" name="description" placeholder="Description">
				<button class="button" type="submit" name="" >Post</button>
			</form>
		</nav>
		<hr style="margin-top:20px;height:2px;border-width:0;color:gray;background-color:gray"> 


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