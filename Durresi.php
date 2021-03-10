<!DOCTYPE html>
<html>
<head>
	<title>Albanian Beaches - Durrësi</title>
	<link rel = "icon" href = "images/eagle.png" type = "image/x-icon"> 
	<link rel="stylesheet" type="text/css" href="css/Homepage.css">
	<link rel="stylesheet" type="text/css" href="css/Durresi.css">
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



		<div class="content-durresi">

			<div class="slideshow-container">
  				<div class="mySlides fade">
   				<img src="images/Durresi1.jpg" style="width:100%; height: 490px">
  			</div>

  			<div class="mySlides fade">
 				<img src="images/Durresi2.jpg" style="width:100%; height: 490px">
			</div>

  			<div class="mySlides fade">
  			  <img src="images/Durresi3.jpg" style="width:100%; height: 490px">
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

			<h2 id="content-title">Durrësi's Beach</h2>
			<p id="tregimi">
				Plazhi i Durrësit është një ndër plazhet më interesante, më të mëdha dhe më modernë jo vetëm në Shqipëri por edhe më gjerësisht. Duke qenë se ndodhet shumë afër Tiranës, Plazhi i Durrësit paraqet një zgjedhje të shpejtë dhe të leverdishme ku shumëkush preferon të shkojë për t’u relaksuar. Duket se kohët e fundit interesi ndaj Durrësit është rritur sidomos nga shqiptarët jashtë kufirit si kosovarët, shqiptarët e Maqedonisë së Veriut apo shqiptarët e Malit të Zi.
				Në Periudhën Romake, qyteti njihej me emrin (Dyrrahu), dhe ishte një ndër qytetet detare me një fortifikim të fuqishëm. Me pozitë strategjike dhe skelë të klasit të parë ai ishte kreu i rrugës Egnatia që lidhte Romën me Kostandinopojën. Me Plazhin e Durrësit lidhen fillimet e turizmit në Shqipëri. Kështu p.sh. në vitet '20 të shekullit të kaluar këtu ishin ngritur disa vila private nga familjet durrsake dhe tiranase si dhe 3 hotele të nivelit mesatar. Në vitet '30 lëvizjet turistike u rritën edhe më shumë. Gjatë periudhës së Luftës së Dytë Botërore Plazhi i Durrësit u kthye në një qendër të rëndësishme turistike, sidomos për të huajt. Në fund të viteve '40 në Plazhin e Durrësit kishe 15 vila turistike private dhe 1 hotel me 28 dhoma. Deri në vitin 1990 në këtë plazh u ngritën edhe një varg objektesh hotelerie dhe shtëpi pushimi për punonjësit dhe pionierët mes të cilave u dalluan "Adriatiku", "Durrësi", "Apollonia", "Kruja" dhe "Butrinti". Pas vitit 1990 pati një zhvillim shumë të hovshëm të këtij plazhi. Kështu p.sh. në vitin 2005 kishte rreth 60 hotele dhe motele me 1350 dhoma dhe 2800 shtretër.
				Plazhi i Durrësit shtrihet përgjatë gjithë bregut të Gjirit të Durrësit, nga Ura e Dajlanit në Veri e deri te gryka e përroit të Darçit (Karpen) në Jug, në një gjatësi prej rreth 12 km, gjerësi 100 - 200 m dhe sipërfaqe prej rreth 180 - 240 ha. Kapaciteti turistik është rreth 400 mijë turistë në vit (6 - 8 m2 sipërfaqe për çdo turist). Tradicionalisht Plazhi i Durrësit ndahet në disa sektorë, si, Teuta, Hekurudha, Plepat, Shkëmbi i Kavajës, Golemi, Mali i Robit dhe Karpeni. Deti në Plazhin e Durrësit është i cekët dhe thellësia rritet në mëmyrë shumë graduale. Autostrada që lidh qytetin bregdetar me kryeqytetin bën që atje të shkohet mjaft lehtë, pavarësisht trafikut që me stinën e verës vjen e rëndohet, kryesisht nga dyndja e pushuesve dhe mbërritja e emigrantëve. Ajo çfarë të shtyn drejt pushimeve në Durrës, është edhe mundësia për të njohur historinë e këtij qyteti të lashtë. 

				Durrësi ofron një vijë të bollshme bregdetare me një numër të konsiderueshëm plazhesh, lokalesh e argëtimesh të pafund, deri në Kavajë, ku ndodhet një nga vendet më të pëlqyer për plazhin e të rinjve “Shkëmbi i Kavajës”. Komplekse argëtimi, kuzhinë të shkëlqyer, bare verore, të gjitha këto e bëjnë plazhin e Durrësit dhe të Kavajës një mundësi që nuk duhet humbur.
			</p>

			<p id="map-durres"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12654.118610073983!2d19.493739314165047!3d41.289004450141796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134fd96d87c80691%3A0x2a7272a404cf2b79!2sPlazhi%20i%20Durr%C3%ABsit!5e1!3m2!1ssq!2s!4v1610398663983!5m2!1ssq!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></p>
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