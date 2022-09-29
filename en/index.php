<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/solid.min.css">

	<link rel="stylesheet" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arsenal:ital,wght@0,400;0,700;1,400&family=Inter:wght@400;600&family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;600&family=Tiro+Gurmukhi&display=swap" rel="stylesheet">
	<script src="js/jquery.js"></script>
    <script src="js/sweetalert.js"></script>
	<title>BioKiwi</title>
</head>

<body>
	<header class="header">
		<button class="toggle-btn"><i class="fa-solid fa-bars"></i></button>
		<div class='navbar'>

			<ul></ul>
			<li class='list-item'><a class='href active' href="#home">Home</a></li>
			<!-- <div class='divider' ></div> -->
			<li  class='list-item'><a class='href' href="#about">About</a></li>
			<!-- <div class='divider'></div> -->
			<div id="box">
				<img class='logo' src='images/logo.png' alt='Logo' />
			</div>
			<!-- <div class='divider'></div> -->
			<li  class='list-item'><a class='href' href="#facilities">Facilities</a></li>
			<!-- <div class='divider'></div> -->
			<li class='list-item'><a class='href' href="#contact">Contact</a></li>
			</ul>
			<div class='languages'>
				<ul>
					<li>
						<a href='../el/index.php' class='language-link'>
							<img class='language-icon' src='images/el.png' alt='Ελληνικά' title='Ελληνικά'>
						</a>
					</li>
					<li>
						<a href='../en/index.php' class='language-link'>
							<img class='language-icon' src='images/en.png' alt='English' title='English'>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</header>

	<!-- <div class='section ' id='home'> -->
	<div class='quote-container section' id='home'>
		<div class='quote'>
			<h1>Quality is our first priority</h1>
		</div>
		<img class='quote-image' src='images/HOME.jpg' alt='Quote-Image' />
	</div>
	<!-- </div> -->

	<div class='section' id='about'>
		<h3 class='par-title'>About us</h3>
		<div class='underline'><img  class='underline-image' src="images/underline.png" alt="underline"/></div>
		<div class='sub-section reveal'>
			<div class='info-section'>
				<p class='par-text'>Our company is a Greek family business founded in 2007 in the region of Arta,Greece.
                                    We own a fully equipped warehouse which offers calibration, packing and cold
                                    storage. We handle our product in the most efficient ways, ensuring the fruit is
                                    kept under the ideal conditions for maintaining its prime quality and firmness.

                                    We specialize in producing, packaging and storing kiwifruit.

                                    The variety we primarily handle is Hayward.

                                    We offer organic and conventional kiwifruit.</p>
				<div class='image'>
					<img class='image' src='images/headquarters.jpg' alt='Quote-Image' />
				</div>
			</div>
		</div>
	</div>
	<div class='ribbon'>
		<div class='extra-section first'>
			<h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, aliquam.</h4>
		</div>

		<div class='extra-section second'>
			<h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, aliquam.</h4>
		</div>

		<div class='extra-section third'>
			<h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, aliquam.</h4>
		</div>
		<img class='ribbon' src="images/ribbon.jpg" alt="ribbon-image"/>
	</div>



	<div class='content-divider'></div>

	<div class='section' id='facilities'>
		<h3 class='par-title'>Facilities</h3>
		<div class='underline'><img  class='underline-image' src="images/underline.png" alt="underline"/></div>
		<div class='sub-section '>
			<div class='info-section reveal one'>
				<div class='text-container'>
				<div class='span'>Production:</div>
				<p class='par-text'>Harvesting season for the kiwifruit is during October and November. Our skilled
                                    crews handle the fruit with extreme caution. That way, we guarantee a top-quality
                                    product for our clients.</p>
			</div>

				<div class='image'>
					<img class='image' src='images/facilities.jpg' alt='Quote-Image' />
				</div>
			</div>

			<div class='info-section reveal two'>
				<div class='image'>
					<img class='image' src='images/clark.jpg' alt='Quote-Image' />
				</div>
				<div class='text-container'>
					<div class='span'>Storing:</div>
					<p class='par-text'> The fruit is kept under constant monitoring in our cold storage units (approx.
                                        3000 tons capacity). Our refrigeration systems are top of the line, ensuring the
                                        product can maintain its quality for an extended period of time.</p>
				</div>

			</div>
			<div class='info-section reveal three'>
			<div class='text-container'>
				<div class='span'>Calibration Spacing:</div>
				<p class='par-text'> We calibrate and package our products accordingly in order to meet our clients
                                    needs all over the world. We offer a variety of packaging - 3 and 10kg boxes as
                                    well as 1kg punnets.</p>
			</div>
				<div class='image'>
					<img class='image' src='images/calibrate.jpg' alt='Quote-Image' />
				</div>
			</div>
		</div>
	</div>

	<div class='content-divider'></div>

	<div class='section' id='contact'><!--Maybe contact-->

		<h3 class='par-title'>Contact us</h3>
		<div class='underline'><img  class='underline-image' src="images/underline.png" alt="underline"/></div>

		<div class='sub-section '>

		<div class='info-section '>


			<div class='send-email reveal'>
				<div class='span'>Send an email:</div>
				<!--Name-->
				<div class='line'>
					<input class='name-input' type='text' placeholder='Enter your name:' required></input>
					<div class="alert-name"></div>
				</div>
					<!--Email-->
				<div class='line'>
					<input class='email-input' type='email' title="Please Provide A Valid Email Address !" placeholder='Enter your email:' required></input>
					<div class='alert-email'></div>
				</div>


				<!--Subject-->
				<div class='line'>

				<input class='subject-input' type='text' placeholder='Subject:' required></input>
			</div>
				<!--Message-->
				<div class='line'>
				<textarea class="message-input" placeholder='Your Message:' rows="5" cols="40" aria-invalid='false'></textarea>
				</div>
				<div class='alert-message'></div>
				<input type="hidden" name="access_token" value="clhfsbn96kke4ugt9u5no0xe" />
				<!-- return urls can be fully qualified -OR-
				start with / for root relative -OR-
				start with . for url relative -->
				<input type="hidden" name="success_url" value=".?message=Email+Successfully+Sent%21&isError=0" />
				<input type="hidden" name="error_url" value=".?message=Email+could+not+be+sent.&isError=1" />
				<div class='line'>
				<input type='submit' class='submit-btn' onclick="submit_email()"></input>
				<p>Powered by <a href="https://postmail.invotes.com" target="_blank">PostMail</a></p>
				</div>

				<div class='alert-success'></div>
			</div>

			<div class='google-maps'>
		<div id="map"></div>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnaJQstAE4mU1oW9JDsMPNUhafgzKL2UM&callback=initMap&v=weekly" defer></script>

		</div>
	</div>
		</div>
	</div><!--This div has to go under the google maps div-->
	<!--The div element for the map -->

	<div class="footer">
			<div class="logo_container">
					<img src="images/Logo.png" class="footer_logo">
				</div>
			<div class="inner_footer">


				<div class="footer_third">
					<h1 class="help">Need Help?</h1>
					<a  id="foot-link"  href="#">Terms &amp; Conditions</a>
					<a  id="foot-link"  href="#">Privacy Policy</a>
				</div>

				<div class="footer_third">
					<h1 class="help">Need Help?</h1>
					<a  id="foot-link"  href="#">Brouchures</a>
					<a  id="foot-link"  href="#">Donate</a>
					<a  id="foot-link"  href="#">Governance</a>
					<a  id="foot-link"  href="#">Impact Reports</a>
				</div>

				<div class="footer_third">
					<h1 class="help">Follow us</h1>
					<li><a  id="foot-link"  href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a  id="foot-link"  href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a  id="foot-link"  href="#"><i class="fa fa-instagram"></i></a></li>

					<span>
						<div class='address'> ©2022 Biokiwi
						KAKOSIMOS E MON IKE
						Agios Spyridon, Arta, Greece
						</div>
						<div class='footer-info'>
							<i class="fa fa-phone"></i><a  id="foot-link"  href="tel:2683041239">2683041239</a>
						</div>
						<div class='footer-info'>
							<i class="fa fa-envelope"></i><a  id="foot-link"  href="mailto: biokiwi@hotmail.gr">biokiwi@hotmail.gr</a>
						</div>
					</span>
				</div>


			</div>
		</div>

</body>
<script src="js/send_email.js"></script>
<script src="js/location.js"></script>
<script src="js/styleHandler.js"></script>

</html>
