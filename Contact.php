<!DOCTYPE html>
<html>
<head>
	<title>Albanian Beaches - Contact Page</title>
	<link rel="stylesheet" type="text/css" href="css/Homepage.css">
	<link rel="stylesheet" type="text/css" href="css/Contact.css">
	<script src="script.js" defer></script>

	<script>
		function validateForm(){
			var name=document.myForm.emri.value;
			var mail=document.myForm.imella.value;
			var textbox=document.myForm.teksti.value;
			if(name == null || name==""){
				alert("Write your name!");
				return false;
			}else if(mail == null || mail == ""){
				alert("Write your mail!");
				return false;
			}else if(textbox == null || textbox == ""){
				alert("Write your question!")
				return false;
			}
		}
	</script>
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


		<div class="content-contact">
			
			<h2 id="contact-title">Want to know more?</h2>
			<div class="contact-box">
				<form action="contact-process.php" name="myForm" method="POST" onsubmit="return validateForm()">
				<div>
					<input type="text" class="input-field" name="emri" placeholder="Your name">
				</div>
				<div>
					<input type="email" class="input-field" name="imella" placeholder="Your mail">
				</div>
				<div>
					<p>Where are you from? </p>
					<input type="radio" name="vendi" value="Kosova">Kosova
					<input type="radio" name="vendi" value="Albania">Albania
					<input type="radio" name="vendi" value="Other" checked>Other
				</div>
				<div>
					<textarea class="input-field textarea-field" name="teksti" placeholder="Your message or question..."></textarea>
				</div>
				<div>
					<p>Do you like our page? (optional)</p>
					<input type="checkbox" name="like" value="Yes">Yes
					<input type="checkbox" name="like" value="No">No
				</div>
				<div>
					<button class="button" type="submit" name="" >Send your question</button>
				</div>
				</form>
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