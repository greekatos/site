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
			<li class='list-item'><a class='href active' href="#home">Αρχική Σελίδα</a></li>
			<!-- <div class='divider' ></div> -->
			<li  class='list-item'><a class='href' href="#about">Σχετικά με εμάς</a></li>
			<!-- <div class='divider'></div> -->
			<div id="box">
				<img class='logo' src='images/logo.png' alt='Logo' />
			</div>
			<!-- <div class='divider'></div> -->
			<li  class='list-item'><a class='href' href="#facilities">Εγκαταστάσεις</a></li>
			<!-- <div class='divider'></div> -->
			<li class='list-item'><a class='href' href="#contact">Επικοινωνία</a></li>
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
			<h1>Η ποιότητα είναι η προτεραιότητα μας</h1>
		</div>
		<img class='quote-image' src='images/Home.jpg' alt='Quote-Image' />
	</div>
	<!-- </div> -->

	<div class='section' id='about'>
		<h3 class='par-title'>Σχετικά με εμάς</h3>
		<div class='underline'><img  class='underline-image' src="images/underline.png" alt="underline"/></div>
		<div class='sub-section reveal'>
			<div class='info-section'>
				<p class='par-text'>Η εταιρεία μας είναι μια οικογενειακή επιχείρηση που εδρεύει από το 2007 στην
									περιοχή της Άρτας. Διαθέτουμε ένα πλήρως εξοπλισμένο συσκευαστήριο
									φρούτων με καλιμπραδόρο και σύγχρονες μονάδες ψύξης. Χειριζόμαστε το
									προϊόν με τους πιο αποτελεσματικούς τρόπους, διασφαλίζοντας έτσι, ότι ο
									καρπός παραμένει στις ιδανικές συνθήκες για τη διατήρηση της ποιότητας και της
									σκληρότητάς του.

									Ειδικευόμαστε στην παραγωγή, συσκευασία και αποθήκευση ακτινιδίων.

									Η ποικιλία που χειριζόμαστε κυρίως είναι η Hayward.

									Διαθέτουμε βιολογικά και συμβατικά ακτινίδια.</p>
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
		<h3 class='par-title'>Εγκαταστάσεις</h3>
		<div class='underline'><img  class='underline-image' src="images/underline.png" alt="underline"/></div>
		<div class='sub-section '>
			<div class='info-section reveal one'>
				<div class='text-container'>
				<div class='span'>Παραγωγή:</div>
				<p class='par-text'>Η περίοδος συγκομιδής για το ακτινίδιο είναι τον Οκτώβριο έως και τον
									Νοέμβριο. Τα εξειδικευμένα συνεργεία μας χειρίζονται τα φρούτα με εξαιρετική
									προσοχή. Με αυτόν τον τρόπο, εγγυόμαστε ένα προϊόν κορυφαίας ποιότητας.
				</p>
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
					<div class='span'>Αποθήκευση:</div>
					<p class='par-text'> Ο καρπός διατηρείται υπό συνεχή παρακολούθηση στις ψυκτικές μας μονάδες
										(χωρητικότητας 3000 τόνων). Τα συστήματα ψύξης μας είναι κορυφαία,
										διασφαλίζοντας ότι το προϊόν μπορεί να διατηρήσει την ποιότητά του για μεγάλο
										χρονικό διάστημα.
					</p>
				</div>

			</div>
			<div class='info-section reveal three'>
			<div class='text-container'>
				<div class='span'>Χώρος διαλογής:</div>
				<p class='par-text'> Διαλογίζουμε και συσκευάζουμε τα προϊόντα προκειμένου να καλύψουμε τις
									ανάγκες των πελατών μας σε όλο τον κόσμο. Προσφέρουμε ποικιλία
									συσκευασιών - 3κιλα και 10κιλα κουτιά καθώς και κουπάκια κιλού.
				</p>
			</div>
				<div class='image'>
					<img class='image' src='images/calibrate.jpg' alt='Quote-Image' />
				</div>
			</div>
		</div>
	</div>

	<div class='content-divider'></div>

	<div class='section' id='contact'><!--Maybe contact-->

		<h3 class='par-title'>Επικοινωνία</h3>
		<div class='underline'><img  class='underline-image' src="images/underline.png" alt="underline"/></div>

		<div class='sub-section '>

		<div class='info-section '>


			<div class='send-email reveal'>
				<div class='span'>Αποστολή email:</div>
				<!--Name-->
				<div class='line'>
					<input class='name-input' type='text' placeholder='Όνομα:' required></input>
					<div class="alert-name"></div>
				</div>
					<!--Email-->
				<div class='line'>
					<input class='email-input' type='email' title="Please Provide A Valid Email Address !" placeholder='Email:' required></input>
					<div class='alert-email'></div>
				</div>


				<!--Subject-->
				<div class='line'>

				<input class='subject-input' type='text' placeholder='Θέμα:' required></input>
			</div>
				<!--Message-->
				<div class='line'>
				<textarea class="message-input" placeholder='Το μήνυμα σου:' rows="5" cols="40" aria-invalid='false'></textarea>
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
				<p>Προσφέρεται από <a href="https://postmail.invotes.com" target="_blank">PostMail</a></p>
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
					<h1 class="help">Ακολουθήστε μας</h1>
					<li><a  id="foot-link"  href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a  id="foot-link"  href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a  id="foot-link"  href="#"><i class="fa fa-instagram"></i></a></li>

					<span>
						<div class='address'> ©2022 Biokiwi
						KAKOSIMOS E MON IKE
						Άγιος Σπυρίδων, Δοκίμια, Άρτα
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
