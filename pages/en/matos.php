<!DOCTYPE html>
<html>
<head>
	<title>Nos produits</title>

	<?php include_once('../include/usr_css_include.php'); ?>

</head>
<body>
<!-- Scroll ver le haut -->
<button id="btn_up" title="aller vers le haut"><i class="fa fa-fw fa-chevron-up"></i></button>
<form class="visible-xs wrapper fixed" id="lang_page" action="../../cookie_user_lang.php" method="post" style="border-radius:10px;bottom:23px;right:82px;">
	<input type="hidden" name="lang_page" value="fr">
	<input type="hidden" name="page_location" value="matos.php">
	<input class="clr-primary clr-success-hf" title="Choix de langue" type="submit" name="send_lang_page" value="FR">
</form>

<!-- Header -->
<header>
	<?php include_once('../include/header_logo.php') ?>

	<!-- Banner Header with shadow & bostrap -->
	<div class="wrapper header-wrapper width-max-pr height-l9-px" style="background-image: url(../../images/cmer.jpg)">
		<nav class="navbar navbar-inverse" role="navigation">

	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <span class="navbar-brand visible-xs font-size-3" href="#">Pages</span>
	        </div>
	    
	        <div class="collapse navbar-collapse" id="example-navbar-collapse">
	            <ul class="nav navbar-nav">
	                <li><a href="index.php">Acceuil</a></li>
	                <li><a href="#">Nos produits</a></li>
	                <li><a href="whoUs.php">Qui sommes-nous</a></li>
	                <li><a href="contact.php">Contacts</a></li>
	            </ul>
	             <form class="absolute hidden-xs" id="lang_page" action="../../cookie_user_lang.php" method="post">
	            	<input type="hidden" name="lang_page" value="fr">
	            	<input type="hidden" name="page_location" value="matos.php">
	            	<input class="clr-primary clr-success-hf" title="Choix de langue" type="submit" name="send_lang_page" value="FR">
	            	<span class="tooltipertext clr-primary">Changer de langue</span>
	            </form>
	        </div>
	    </nav>

	    <!-- Content banner -->
	    <div class="txt-notis space-left-in-l6-pr space-right-in-l2-pr wrapper-content-overlay" style="padding-top: 8%;">
	    	<h2 class="title-medium">Integrated Systems & Services</h2>
	    	<h4>An innovative company that responds with solutions adapted to the needs of its clients in all related security !</h4>
	    </div>
	</div>
</header>

<div class="vertical-space-l1-pr"></div>

<!-- Corps de la page -->
<main class="container">
	<div>
		<div class="col-sm-6">
			<div class="clr-notis space-in-l1-px">
				<h1 class="title-small txt-italic bottom-line-separator">ISS met à votre dispositon des materiels de qualité</h1>
				<p class="txt-notis" style="font-size: 1.2em;">Nous vous présentons ici les materiels que nous pouvons mettre à votre disposition. Ces produits sont à 100% fiable et ont une garentie! ceux-ci vont booster votre bussiness</p>
			</div>
			<span class="text-center clr-notis">
				<h3><i class="fa fa-heart txt-clr-danger" style="font-size: 20px;margin-right: 5px;"></i>Merci de nous faire confiance !</h3>
				<p class="txt-notis">Nous vous remerçions d'avoir choisi nos services vous ne serez pas déçu</p>
			</span>
		</div>

		<div class="wrapper col-sm-6 height-l5-px">
			<div class="wrapper header-wrapper width-max-pr height-max-pr" style="background-image: url(../../images/phoneSecured.jpg)">
				<div class="wrapper-content-overlay text-center" style="padding-top: 12%;">
					<h3>Every thing begin with a call</h3>
					<div class="btn-link-danger"><a href="contact.php">Contact us</a></div>
				</div>
			</div>

		</div>
	</div>

	<div class="clearfix"></div>
	<div class="col-sm-12 clr-notis txt-clr-danger text-center space-top-l3-px space-top-in-l1-px space-bottom-l2-px" style="font-size: 80px;">
		<h3>Discover ours quality product</h3>
		<i class="fa fa-fw fa-cogs space-top-l3-px"></i>
		<i class="fa fa-fw fa-lock horizontal-space-l1-pr"></i>
		<i class="fa fa-fw fa-fire-extinguisher"></i><br>
		<i class="fa fa-fw fa-chevron-down" style="font-size: 35px;margin-top: 10px; vertical-align: top;"></i>
	</div>
	<div class="clearfix"></div>

	<div class="vertical-space-l1-pr">
		<div class="col-sm-6" id="CCTV">
			<h1 class="title-small txt-italic bottom-line-separator">CCTV (Surveillance Camera)</h1>
			<p class="txt-notis" style="font-size: 1.2em;">Nous mettons en votre disposition des matériels de surveillance pour votre entière sécurité. Nos matériels présentent les caractéristiques suivantes :</p>
			<ul style="font-size: 1.19em;">
				<li>Analogue cameras for a completely closed circuit, IP Cameras for long distance systems or network monitoring system</li>
				<li>Full HD image up to 3 Mega Pixels</li>
				<li>Day / Night cameras, interior or exterior cameras or totally IR cameras for a perfect night viewing</li>
				<li>All cameras designs for any type of sites, buildings, hotels, villas, etc. ... compact camera, dome, mini-dome, mini-camera, camera 360</li>
				<li>Recording system as required; days, weeks, months ... up to 6 months non stop recording</li>
				<li>Motion Detection, Recording Programming</li>
				<li>Mobile cameras for service vehicles, buses, trucks for long distances</li>
				<li>Remote visualization from a computer, anywhere in the world or on smartphone (IOs or Android)</li>
				<li>Monitoring connected to a private control center or the ISS control center to analyze the images and emergency call</li>
				<li>Long-range thermal cameras (500m) for large spaces such as mining sites</li>
				<li>Ultra advanced video analysis system with detection of human presence</li>
				<li>VIGIPLUS Integrated Devices</li>
			</ul>
		</div>
		<div class="col-sm-6 text-center">
			<div class="wrapper width-max-pr height-l6-px">
				<img src="../../images/camera.jpg" class="height-max-pr">
			</div>

			<div class="vertical-space-l2-px"></div>
			<div class="wrapper col-sm-12 col-md-6 height-l5-px">
				<img src="../../images/components/cameras.png" class="height-max-pr">
			</div>
			<div class="vertical-space-l2-px"></div>

			<div class="wrapper col-sm-12 col-md-6 height-l5-px">
				<img src="../../images/components/cctv-network.png" class="height-max-pr">
			</div>

		</div>
	</div>

	<div class="clearfix vertical-space-l1-pr"></div>

	<div>
		<div class="col-sm-6 hidden-xs text-center">
			<div class="wrapper width-max-pr height-l6-px">
				<img src="../../images/components/anti-intrusion.png" class="height-max-pr">
			</div>

			<div class="vertical-space-l2-px"></div>
			<div class="wrapper col-sm-12 col-md-6 height-l5-px">
				<img src="../../images/components/anti-intrusion2.png" class="height-max-pr">
			</div>
			<div class="vertical-space-l2-px"></div>

			<div class="wrapper col-sm-12 col-md-6 height-l5-px">
				<img src="../../images/components/cctv-network.png" class="height-max-pr">
			</div>

		</div>
		<div class="col-sm-6" id="Anti-Intrusion">
			<h1 class="title-small text-right txt-italic bottom-line-separator">Anti-Intrusion</h1>
			<p class="txt-notis" style="font-size: 1.2em;">Nous vous protégeons cotre les menaces extérieures, plus de problème de cambriolage. Une sécurité optimale.</p>
			<ul style="font-size: 1.19em;">
				<li>Sécurisation de toutes les portes pour un accès limité : en terme de personne et d’horaire</li>
				<li>Toutes sortes de porte : alluminium, bois ou encore portes blindées</li>
				<li>Systèmes de serrure magnétiques ou électrique, apparent ou encastré</li>
				<li>Type de lecteurs différents : par carte, par code PIN, ou par empreinte digitale. Toujours choisir son système d’accès en fonction du niveau de sécurité nécessaire…</li>
				<li>Système de gestion d’horaire pour le suivi des employés en entreprise, relié au système des ressources humaines</li>
				<li>Système entièrement programmable : heure d’ouverture des portes, personne ou groupe de personnes avec des accès totalement définis, envoie ou impression de rapport automatique, etc.</li>
				<li>Jusqu'à 15000 utilisateurs et 43000 événements</li>
				<li>Système intégrable aux portes tourniquets ou au vidéophone.</li>
				<li>Intégrable au logiciel VIGIPLUS</li>
				<li>Système facile d’enrôlement.</li>
				<li>Paramétrable partir d’un ordinateur en réseau local.</li>
				<li>Autonomie du système jusqu’ à 12h.</li>
				<li>Carte magnétique personnalisable avec photo ou Code barre.</li>
			</ul>
		</div>
		<div class="col-sm-6 visible-xs text-center">
			<div class="wrapper width-max-pr height-l6-px">
				<img src="../../images/components/anti-intrusion.png" class="height-max-pr">
			</div>

			<div class="vertical-space-l2-px"></div>
			<div class="wrapper col-sm-12 col-md-6 height-l5-px">
				<img src="../../images/components/anti-intrusion2.png" class="height-max-pr">
			</div>
			<div class="vertical-space-l2-px"></div>

			<div class="wrapper col-sm-12 col-md-6 height-l5-px">
				<img src="../../images/components/cctv-network.png" class="height-max-pr">
			</div>

		</div>
	</div>

	<div class="clearfix vertical-space-l1-pr"></div>

	<div class="col-sm-6" id="trasage">
			<h1 class="title-small txt-italic bottom-line-separator">Surveillance Mobile ou à Distance</h1>
			<p class="txt-notis" style="font-size: 1.2em;">Equiper vos véhicules avec des technologies telle que le MVG200 de SERVISION qui est un équipement embarqué sur véhicule avec les caractéristiques suivantes :</p>
			<ul style="font-size: 1.19em;">
				<li>Communication par Modem GSM,WIFI,LAN</li>
				<li>Enregistrement de 2 à 16 caméras</li>
				<li>Positionnement et enregistrement GPS</li>
				<li>« GeoFencing » (Zone de circulation)</li>
				<li>Communication audio bidirectionnelle</li>
				<li>Bouton panique incorporé Bouton panique incorporé</li>
				<li>Forme compact, faible consommation d'énergie et de conception robuste</li>
				<li>Système fixe ou mobile</li>
				<li>Surveillance pour les plates-formes telles que les trains, les voitures de patrouille et les taxis en mouvement</li>
				<li>On se connecte sur le MVG200 par l’intermédiaire d’un soft installé sur un Ordinateur ou d’une Application Mobile sur un Smartphone.</li>
				<li>Système de vidéo analyse ultra avancée avec détection de présence humaine</li>
				<li>Replay es images enregistrées ainsi que le parcours effectué</li>
			</ul>
		</div>
		<div class="col-sm-6 text-center">
			<div class="wrapper width-max-pr height-l6-px">
				<img src="../../images/components/trasage.png" class="height-max-pr">
			</div>

			<div class="vertical-space-l2-px"></div>
			<div class="wrapper col-sm-12 col-md-6 height-l5-px">
				<img src="../../images/components/anti-intrusion2.png" class="height-max-pr">
			</div>
			<div class="vertical-space-l2-px"></div>

			<div class="wrapper col-sm-12 col-md-6 height-l5-px">
				<img src="../../images/components/cctv-network.png" class="height-max-pr">
			</div>

		</div>
	</div>

	<div class="clearfix vertical-space-l1-pr"></div>

	<section class="oursPartener vertical-space-l6-px" id="oursPartener">
		<div class="txt-clr-danger text-center">
			<h1 class="title-small">NOS REALISATIONS</h1>
			<p class="text-center">
				<span class="txt-notis">Voici une selection de nos differentes réalisations</span>
				<br><i class="text-center fa fa-chevron-down" style="font-size : 30px;"></i>
			</p>
		</div>

		<div class="width-max-pr text-center">
			<div class="width-max-pr">
				<img src="../../images/components/ourRealisation.png" class="width-max-pr">
			</div>
		</div>
	</section>

	<div>
		<div class="col-sm-6 hidden-xs text-center">
			<div class="wrapper width-max-pr height-l6-px">
				<img src="../../images/components/detection_incendie.png" class="height-max-pr">
			</div>

			<div class="vertical-space-l2-px"></div>
			<div class="wrapper col-sm-12 col-md-6 height-l5-px">
				<img src="../../images/components/cctv-network.png" class="height-max-pr">
			</div>
			<div class="vertical-space-l2-px"></div>

			<div class="wrapper col-sm-12 col-md-6 height-l5-px">
				<img src="../../images/components/cameras.png" class="height-max-pr">
			</div>
		</div>
		<div class="col-sm-6 space-bottom-l2-px" id="incendie">
			<h1 class="title-small txt-italic bottom-line-separator">Détection et extinction incendie</h1>
			<p class="txt-notis" style="font-size: 1.2em;">Nous mettons en place un système anti-incendie avec les caracteristiques suivantes :</p>
			<ul style="font-size: 1.19em;">
				<li>Système de détection incendie autonome ou relié un système d’alarme : résidentiel ou industriel</li>
				<li>Système de détection de chaleur ou de fumée</li>
				<li>Système conventionnel ou analogique avec une à plusieurs boucles</li>
				<li>Système anti incendie complet avec brise glace, sirène, flash,…</li>
				<li>Système d’extinction automatique d’incendie idéal pour salle serveur, cuisine espace clos, etc.</li>
				<li>Aérosol solide classifié dans le monde entier et aussi au RDC comme extinction a poudre.</li>
				<li>Système de détection et déclanchement (sans l’aérosol connecté) avec fume réel (spray). Le système d’EXTINCTION peut être lié a un système de détection/central anti incendie qui envoi les SMS.</li>
				<li>Peut fonctionner de façon autonome avec un module GSM/SMS</li>
			</ul>
		</div>
		<div class="col-sm-6 visible-xs text-center">
			<div class="wrapper width-max-pr height-l6-px">
				<img src="../../images/components/detection_incendie.png" class="height-max-pr">
			</div>

			<div class="vertical-space-l2-px"></div>
			<div class="wrapper col-sm-12 col-md-6 height-l5-px">
				<img src="../../images/components/cctv-network.png" class="height-max-pr">
			</div>
			<div class="vertical-space-l2-px"></div>

			<div class="wrapper col-sm-12 col-md-6 height-l5-px">
				<img src="../../images/components/cameras.png" class="height-max-pr">
			</div>
		</div>
	</div>

	<div class="clearfix vertical-space-l1-px"></div>

	<div class="col-sm-6" id="access-control">
			<h1 class="title-small txt-italic bottom-line-separator">Controle d'access</h1>
			<p class="txt-notis" style="font-size: 1.2em;">Une protection d'accés par controle. Présente les fonctionalités suivantes :</p>
			<ul style="font-size: 1.19em;">
				<li>Sécurisation de toutes les portes pour un accès limité : en terme de personne et d’horaire</li>
				<li>Toutes sortes de porte : alluminium, bois ou encore portes blindés</li>
				<li>Systèmes de serrure magnétiques ou électrique, apparent ou encastré</li>
				<li>Type de lecteurs différents : par carte, par code PIN, ou par empreinte digitale. Toujours choisir son système d’accès en fonction du niveau de sécurité nécessaire…</li>
				<li>Système de gestion d’horaire pour le suivi des employés en entreprise, relié au système des ressources humaines</li>
				<li>Système entièrement programmable : heure d’ouverture des portes, personne ou groupe de personnes avec des accès totalement définis, envoie ou impression de rapport automatique, etc.</li>
				<li>Jusqu'à 15000 utilisateurs et 43000 événements</li>
				<li>Système intégrable aux portes tourniquets ou au vidéophone.</li>
				<li>Intégrable au logiciel VIGIPLUS</li>
				<li>Système facile d’enrôlement.</li>
				<li>Paramétrable partir d’un ordinateur en réseau local.</li>
				<li>Autonomie du système jusqu’ à 12h .</li>
				<li>Carte magnétique personnalisable avec photo ou Code barre ;</li>
			</ul>
		</div>
		<div class="col-sm-6 ">
			<div class="wrapper text-center width-max-pr height-l6-px">
				<img src="../../images/components/access_kits.png" class="height-max-pr">
			</div>

			<div class="vertical-space-l2-px"></div>
			<div class="wrapper text-center col-sm-12 col-md-6 height-l5-px">
				<img src="../../images/components/anti-intrusion2.png" class="height-max-pr">
			</div>
			<div class="vertical-space-l2-px"></div>

			<div class="wrapper text-center col-sm-12 col-md-6 height-l5-px">
				<img src="../../images/components/cctv-network.png" class="height-max-pr">
			</div>

		</div>
	</div>

	<div class="clearfix vertical-space-l1-pr"></div>

	<section class="width-max-pr">
		<div class="col-sm-3" id="RSM">
			<h3>Découvrez notre R.S.M</h3>
			<p class="txt-notis">Découvrez cet outil très performant et qui a déjà fait ses preuves.</p>
		</div>
		<div class="col-sm-5 height-l9-px">
			<img src="../../images/components/RSM.png" class="height-max-pr width-max-pr">
		</div>
		<div class="col-sm-4 text-center">
			<div class="inline-block wrapper height-l2-px">
				<img style="height: 100%;" src="../../images/logos/iss_logo3.png">
			</div>
			<div class="clr-notis space-in-l2-px">
				<p><i class="fa fa-fw fa-quote-left"></i>Une vie sûre et protegée et une belle vie !<i class="fa fa-fw fa-quote-right"></i></p>
				<span class="txt-notis">Protegez ceux qui vous sont precieux ! Vous avez désormais toutes les clés en main pour être un protecteur !</span>
			</div>
		</div>

	</section>

</main>

<?php include_once('../include/footer.php') ?>

<?php include_once('../include/usr_js_include.php') ?>

</body>
</html>