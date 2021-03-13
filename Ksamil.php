<!DOCTYPE html>
<html>
<head>
	<title>Albanian Beaches - Ksamil</title>
	<link rel = "icon" href = "images/eagle.png" type = "image/x-icon"> 
	<link rel="stylesheet" type="text/css" href="css/Homepage.css">
	<link rel="stylesheet" type="text/css" href="css/Ksamil.css">
	<script src="script.js" defer></script>


	<style>
		* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.acctive, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}
	</style>
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



		<div class="content-ksamil">

			<div class="slideshow-container">
  				<div class="mySlides fade">
   				<img src="images/Ksamil.jpg" style="width:100%; height: 490px">
  			</div>

  			<div class="mySlides fade">
 				<img src="images/Ksamil2.jpg" style="width:100%; height: 490px">
			</div>

  			<div class="mySlides fade">
  			  <img src="images/Ksamil3.jpg" style="width:100%; height: 490px">
  			</div>

  <!-- Next and previous buttons -->
 			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
 			<a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>
			<br>

<!-- The dots/circles -->
			<div style="text-align:center">
			  <span class="dot" onclick="currentSlide(1)"></span>
			  <span class="dot" onclick="currentSlide(2)"></span>
			  <span class="dot" onclick="currentSlide(3)"></span>
			</div>

			<h2 id="content-title">Ksamil's Beach</h2>
			<p id="tregimi">
				Ksamil (Albanian: Ksamili; Greek: Εξαμίλι) is a village and a former municipality in the riviera of Southern Albania, and part of Butrint National Park. At the 2015 local government reform it became a subdivision of the municipality Sarandë. The population at the 2011 census was 2,994. The municipal unit consists of the villages Ksamil and Manastir. During the communist era the proper coastal village was built in 1966 and is located south of the city of Sarandë off the road to Butrint.

				Ksamil is one of the most frequented coastal resorts by both domestic and foreign tourists. Ksamil Beach and Albania's Ionian Coast further north was included in the Guardian's 20 of the best bargain beach holidays for 2013.

				The main attractions are the nearby Ksamil Islands. The mainland beach is small but clean.

				During communism, the area became well known for the production of olive oil, lemons, and tangerines. In 2010, national authorities demolished over 200 illegal structures that violated the town's master plan and the integrity of Butrint National Park. Some remains from the demolished buildings have yet to be removed by authorities. 
				The village of Ksamil, according to the fieldwork undertaken by Greek scholar Leonidas Kallivretakis in the area during 1992, Ksamil has a mixed population and is inhabited by Muslim Albanians (1125), Orthodox Albanians (210) and Greeks (520).

				According to official estimates (2014) the population of the commune of Ksamil numbers 9,215, of whom 4,207 are members of the Greek minority and 5,008 are ethnic Albanians.
			</p>

			<p id="map-ksamil"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24533.32564238449!2d19.9858580327131!3d39.769613484497086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x135b6bd1e3b36029%3A0x87cc14b3c8a2d66d!2sKsamil%2C%20Albania!5e0!3m2!1sen!2s!4v1615633854561!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
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


	<script>
		var slideIndex = 1;
		showSlides(slideIndex);

// Next/previous controls
		function plusSlides(n) {
		showSlides(slideIndex += n);
		}

// Thumbnail image controls
		function currentSlide(n) {
		showSlides(slideIndex = n);
		}

		function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("dot");
			if (n > slides.length) {slideIndex = 1}
			if (n < 1) {slideIndex = slides.length}
			for (i = 0; i < slides.length; i++) {
		    	slides[i].style.display = "none";
		  	}
  			for (i = 0; i < dots.length; i++) {
      			dots[i].className = dots[i].className.replace(" acctive", "");
  			}
  			slides[slideIndex-1].style.display = "block";
  			dots[slideIndex-1].className += " acctive";
			}
	</script>
</body>
</html>