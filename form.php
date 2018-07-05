<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Energiekontor is a German company specialized in the development and management of wind farms and solar parks.">

	<link rel="stylesheet" href="vendors/css/grid.css" type="text/css">
	<link rel="stylesheet" href="vendors/css/animate.css" type="text/css">
	<link rel="stylesheet" href="vendors/css/normalize.css" type="text/css">
	<link rel="stylesheet" href="resources/css/style.css" type="text/css">
	<link rel="stylesheet" href="vendors/css/weather-icons.css" type="text/css">
	<link rel="stylesheet" href="resources/css/queries.css" type="text/css">

	<link rel="apple-touch-icon" sizes="180x180" href="resources/favicons/android-chrome-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="resources/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="resources/favicons/favicon-16x16.png">
	<link rel="manifest" href="resources/favicons/site.webmanifest">
	<link rel="mask-icon" href="resources/favicons/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">

	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100" rel="stylesheet">

	<title>EnergieKontor France</title>
</head>

<body>
	<header class="main-header">
		<div class="row">
			<div>
				<a href="index.html">
					<img src="resources/img/Energiekontor-Logo-2017_RGB.png" alt="logo EK" class="logo">
				</a>
			</div>
		</div>

	</header>

	<section class="section-form js--section-form">
		<div class="row">
			<h2>Nous sommes à votre écoute, contactez-nous !</h2>
		</div>
                            
						
		<div class="form-box">
			<form method="post" action="mailer-new.php" class="contact-form">
				<div class="row">
					
					<?php
						if($_GET['success']==1){
							echo "<div class=\"form-messages success\"> Merci ! Votre message a été envoyé ! </div>"
						}
						if($_GET['success']==-1){
							echo "<div class=\"form-messages error\"> Oups ! Quelque chose n'a pas fonctionné... Réessayez ! </div>"
						}
                     ?>
					
					<div class="col span-1-of-3">
						<div class="office">
							<h3>Notre bureau en France</h3>
							<p>téléphone</p>
							<p>adresse</p>
						</div>
					</div>
					<div class="col span-2-of-3">
						<div class="form-row">
							<input type="text" name="name" id="name" placeholder="Votre nom" required>
						</div>
						<div class="form-row">
							<input type="email" name="email" id="email" placeholder="Votre email" required>
						</div>
						<div class="form-row">
							<textarea name="message" placeholder="Votre message"></textarea>
						</div>
						<div class="col span-2-of-3">
							<input type="submit" value="Envoyer">
							<!-- Bouton submit -->
						</div>
					</div>
				</div>
			</form>
		</div>

	</section>

	<footer>
		<div class="row">
			<div class="col span-1-of-2">
				<ul class="footer-nav">
					<li><a target="_blank" href="https://www.energiekontor.de/en/company/career.html">Carrière</a></li>
					<li><a target="_blank" href="https://login.energiekontor.de/Login.html">Login</a></li>
					<li><a target="_blank" href="https://www.energiekontor.de/en/contact.html">Contact</a></li>
				</ul>
			</div>
			<div class="col span-1-of-2">
				<ul class="language-links">
					<li><a target="_blank" href="https://www.energiekontor.com">US</a></li>
					<li><a target="_blank" href="https://www.energiekontor.co.uk/">UK</a></li>
					<li><a target="_blank" href="http://www.rotorbladeextension.com/rotor-blade-extension-team/">Portugal</a></li>
					<li><a target="_blank" href="https://www.energiekontor.de">DE</a></li>
				</ul>
			</div>
			<div class="row">
				<p> Copyright &copy; 2018 by Energiekontor all right reserved</p>
			</div>
		</div>

	</footer>

	<!-- all browsers -->

	<script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
	<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://unpkg.com/ionicons@4.1.2/dist/ionicons.js"></script>


	<script src="resources/js/script.js"></script>


</body>

</html>
