<!DOCTYPE html>

<html lang="fr">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Energiekontor est une entreprise allemande spécialisée dans le développement et le management de fermes éoliennes et de parcs solaires.">

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
	<div class="main-content js--main-content">
		<header class="main-header">
			<div>
				<div class="flags">
						<ul>
							<li><a href="https://www.energiekontor.de" title="Site Allemand" target="_blank"><img src="resources/img/if_DE_167808.png" alt="DE Flag"></a></li>
							<li><a href="https://www.energiekontor.com" target="_blank"><img src="resources/img/if_US_167805.png" alt="US Flag" title="Site Américain"></a></li>
							<li><a href="https://www.energiekontor.co.uk" target="_blank"><img src="resources/img/if_GB_167794.png" alt="GB Flag" title="Site Britannique"></a></li>
							<li><a href="http://www.rotorbladeextension.com/rotor-blade-extension-team/" title="Site Portugais" target="_blank"><img src="resources/img/if_PT_167831.png" alt="PT Flag"></a></li>
						</ul>
					</div>
				<nav>
					<div>
						<a href="index.html">
							<img src="resources/img/Energiekontor-Logo-2017_RGB.png" alt="logo EK" class="logo">
						</a>
					</div>
					<div>
						<ul class="main-nav js--mobile">
							<li>
								<a>Energiekontor AG</a>
								<ul>
									<li><a href="entreprise_pionniere.html">Une entreprise pionnière</a></li>
									<li><a href="presence_dans_le_monde.html">Présence dans le monde</a></li>
									<li><a href="valeurs.html">Nos valeurs</a></li>
									<li><a href="mission.html">Notre mission</a></li>
									<li><a href="prix_distinctions.html">Prix et distinctions</a></li>
									<li><a href="news_media.html">News &amp; Média</a></li>
								</ul>
							</li>
							<li>
								<a>Notre Expertise</a>
								<ul>
									<li><a href="developpement_projet.html">Développement projet</a></li>
									<li><a href="cycle_de_vie.html">Cycle de vie</a></li>
									<li><a href="ppa.html">Contrat d'Obligation d'Achat</a></li>
									<li><a href="proprietaires.html">Propriétaires</a></li>
									<li><a href="municipalites.html">Municipalités</a></li>
									<li><a href="references_projets.html">Références projets</a></li>
								</ul>
							</li>
							<li>
								<a>&Eacute;olien</a>
								<ul>
									<li><a href="energie_eolienne.html">L'énergie éolienne</a></li>
									<li><a href="objectifs_francais.html">Objectifs fran&ccedil;ais</a></li>
									<li><a href="resources/PDF/Liste_complete_des_projets_eoliens_realises_par_Energiekontor.pdf" target="_blank">Plaquette pdf</a></li>
								</ul>
							</li>
							<li>
								<a>Solaire</a>
								<ul>
									<li><a href="energie_solaire.html">L'énergie solaire</a></li>
									<li><a href="objectifs_francais.html">Objectifs français</a></li>
									<li><a href="resources/PDF/Liste_complete_des_projets_solaires_realises_par_Energiekontor.pdf" target="_blank">Plaquette pdf</a></li>
								</ul>
							</li>
							<li>
								<a href="contact.html">Contact</a>
							</li>
						</ul>
					</div>
				</nav>
				<a class="mobile-nav-icon js--nav-icon">
					<ion-icon name="ios-menu"></ion-icon>
				</a>
			</div>
		</header>

			
		<section class="bandeau bandeau-contact">
			<div class="row">
				<div class="main-title">
					<h1>Contact</h1>
				</div>
				<div class="arrow">
					<a href="#" class="js--arrow"><ion-icon name="ios-arrow-down" class="icon-arrow"></ion-icon></a>
				</div>
			</div>
		</section>

		<section class="js--sticky">
			<div class="row">
				<h2>Que pouvons-nous faire pour vous ?</h2>
			</div>
			<div class="form-box">
				<form method="post" action="mailer-new.php" class="contact-form">
					<div class="row">
						<div class="col span-1-of-3">
                              <!-- <?php
                             if($_GET['success']==1){
                                    echo "<div class=\"form-messages success\"> Merci ! Votre message a été envoyé ! </div>";
                                }
                             if($_GET['success']==-1){
                                    echo "<div class=\"form-messages error\"> Oups ! Quelque chose n'a pas fonctionné... Réessayez s'il vous plait !</div>";
                                }
                                ?>-->
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
					<p><a href="resources/PDF/R18018895-Datenschutzerkl%C3%A4rung_Homepage_Stand_23_05_2018-FR.pdf" target="_blank">Confidentialité</a> &mdash; <a href="resources/PDF/R18018968-Impressum_Englisch.pdf" target="_blank">Impressum</a><br> Copyright &copy; 2018 by Energiekontor all right reserved</p>
				</div>
			</div>

		</footer>
	</div>
	<section class="section-mobile js--s-mobile">
		<div class="row">
			<a class="mobile-nav-icon js--nav-out">
				<ion-icon name="close"></ion-icon>
			</a>
		</div>
		<div class="row">
			<ul class="mobile">
				<li>
					<a>Energiekontor AG</a>
					<ul>
						<li><a href="entreprise_pionniere.html">Une entreprise pionnière</a></li>
						<li><a href="presence_dans_le_monde.html">Présence dans le monde</a></li>
						<li><a href="valeurs.html">Nos valeurs</a></li>
						<li><a href="mission.html">Notre mission</a></li>
						<li><a href="prix_distinctions.html">Prix et distinctions</a></li>
						<li><a href="news_media.html">News &amp; Média</a></li>
					</ul>
				</li>
				<li>
					<a>Notre Expertise</a>
					<ul>
						<li><a href="developpement_projet.html">Développement projet</a></li>
						<li><a href="cycle_de_vie.html">Cycle de vie</a></li>
						<li><a href="ppa.html">Contrat d'Obligation d'Achat</a></li>
						<li><a href="proprietaires.html">Propriétaires</a></li>
						<li><a href="municipalites.html">Municipalités</a></li>
						<li><a href="references_projets.html">Références projets</a></li>
					</ul>
				</li>
				<li>
					<a>&Eacute;olien</a>
					<ul>
						<li><a href="energie_eolienne.html">L'énergie éolienne</a></li>
						<li><a href="objectifs_francais.html">Objectifs fran&ccedil;ais</a></li>
						<li><a href="resources/PDF/Liste_complete_des_projets_eoliens_realises_par_Energiekontor.pdf" target="_blank">Plaquette pdf</a></li>
					</ul>
				</li>
				<li>
					<a>Solaire</a>
					<ul>
						<li><a href="energie_solaire.html">L'énergie solaire</a></li>
						<li><a href="objectifs_francais.html">Objectifs français</a></li>
						<li><a href="resources/PDF/Liste_complete_des_projets_solaires_realises_par_Energiekontor.pdf" target="_blank">Plaquette pdf</a></li>
					</ul>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
			</ul>
		</div>
	</section>



	<!-- all browsers -->

	<script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
	<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="//cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://unpkg.com/ionicons@4.1.2/dist/ionicons.js"></script>
	<script src="vendors/js/jquery.waypoints.min.js"></script>


	<script src="resources/js/script.js"></script>


</body>

</html>
