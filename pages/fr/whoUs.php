<!DOCTYPE html>
<html>
<head>
	<title>Qui sommes-nous</title>
	
	<?php include_once('../include/usr_css_include.php'); ?>

</head>
<body>
<!-- Scroll ver le haut -->
<button id="btn_up" title="aller vers le haut"><i class="fa fa-fw fa-chevron-up"></i></button>
<form class="visible-xs wrapper fixed" id="lang_page" action="../../cookie_user_lang.php" method="post" style="border-radius:10px;bottom:23px;right:82px;">
	<input type="hidden" name="lang_page" value="en">
	<input type="hidden" name="page_location" value="whoUs.php">
	<input class="clr-primary clr-success-hf" title="Choose your language" type="submit" name="send_lang_page" value="EN">
	<span class="tooltipertext clr-primary">Change language</span>
</form>


<!-- Header -->
<header>
	<?php include_once('../include/header_logo.php') ?>

	<!-- Banner Header with shadow & bostrap -->
	<div class="wrapper header-wrapper width-max-pr height-l9-px" style="background-image: url(../../images/security.jpg)">
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
	                <li><a href="index.php">Accueil</a></li>
	                <li><a href="matos.php">Nos produits</a></li>
	                <li><a href="#">Qui sommes-nous</a></li>
	                <li><a href="contact.php">Contacts</a></li>
	            </ul>
	             <form class="absolute hidden-xs" id="lang_page" action="../../cookie_user_lang.php" method="post">
	            	<input type="hidden" name="lang_page" value="en">
	            	<input type="hidden" name="page_location" value="whoUs.php">
	            	<input class="clr-primary clr-success-hf" title="Choose your language" type="submit" name="send_lang_page" value="EN">
	            	<span class="tooltipertext clr-primary">Change language</span>
	            </form>
	        </div>
	    </nav>

	    <!-- Content banner -->
	    <div class="txt-notis space-left-in-l6-pr space-right-in-l2-pr wrapper-content-overlay" style="padding-top: 8%;">
	    	<h2 class="title-medium">Integrated Systems & Services</h2>
	    	<h4>Une société innovante qui répond avec des solutions adaptées à vos besoins dans toutes les questions liées à la sécurité !</h4>
	    </div>
	</div>
</header>

<main>
	<div class="container" style="font-size: 1.17em;">
		<div class="col-sm-3">
			<h3 class="bottom-line-separator">Ce quoi ISS ?</h3>
			<p>
				Fondée en octobre 2012, Integrated Systems & Services est une société spécialisée dans l’intégration de systèmes de sécurité électronique. Notre expertise repose sur des années de travail en République Démocratique du Congo dans le domaine de la sécurité, de télécommunication et d’intégration de systèmes:
			</p>
		</div>
		<div class="col-sm-5 text-center">
			<div class="width-max-pr space-top-l3-pr"><img src="../../images/logos/iss_logo3.png" class="width-max-pr"></div>
		</div>
		<div class="col-sm-4 space-top-l3-px">
			<p>
				ISS est une société innovante qui répond avec des solutions adaptées aux besoins de ses clients dans toutes les questions liées à la sécurité électronique, la télécommunication, le personnel, le suivi des véhicules, panneau de contrôle, le contrôle de réservoir de carburant et le backup électrique.
			</p>
		</div>
	</div>

	<section class="container text-center vertical-space-l6-px">
		<div class="clr-notis space-in-l3-px">
			<h3 class="txt-clr-primary">2019 ISS est en forme !</h3>
			<p class="txt-notis">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.</p>
		</div>
	</section>

	<section class="container">
		<div class="col-sm-6">
			<div class="width-max-pr text-center height-max-px">
				<img src="../../images/cask_sec.jpg" style="opacity: 0.9;" class="height-max-pr width-max-pr">
			</div>
		</div>
		<div class="col-sm-6">
			<h2 class="bottom-line-separator width-l9-pr title-small">NOTRE EXPERTISE</h2>
			<p style="font-size: 1.2em;">Notre expertise repose sur l’intégration de tous les systèmes électroniques sous une seule et même plateforme ayant déjà fait ses preuves en République Démocratique du Congo pour des clients ci-après:
				<ul style="font-size: 1.2em;">
					<li>NOC SEP Congo (Entreprise Pétrolière)</li>
					<li>NOC ISS Kin (GSA, Bolloré, World</li>
					<li>Vision, Nestlé, Delta Protection, Volvo, Devimco,…)</li>
					<li>NOC Ruashi Mining (Entreprise Minière)</li>
					<li>NOC Bralima (Brasserie)</li>
					<li>NOC Airtel (Télécom)</li>
					<li>NOC ISS Lubumbashi (GSA, World Vision, Volvo,…)</li>
					<li>NOC ISS Goma (GSA, PNUD,..)</li>
					<li>NOC ISS Bukavu ( GSA, PNUD,…)</li>
				</ul>
			</p>
		</div>
		<div class="clearfix"></div>
	</section>

	<!-- Section centre de controle -->
	<section class="space-top-l5-px" id="centre-de-controle">
		<div class="text-center txt-clr-primary">
			<h1 class="title-small">NOTRE CENTRE DE CONTROLE</h1>
			<p class="container txt-notis">Quoi de mieux que notre centre de contrôle pour pouvoir être à votre entier disposition</p>
			<p><i class="fa fa-chevron-down" style="font-size : 30px; margin: -10px 0 10px 0;"></i></p>
		</div>
		
		<div class="wrapper height-l8-px width-max-pr" style="background-image: url(../../images/components/control-center.png)">
	        <div class="wrapper-annonce-overlay">
	            <div class="col-sm-8">
	                <h2>Centre de controle de l'ISS</h2>
	            		<strong>Pour votre Société de gardiennage, armée, etc.</strong></p>
	            	<h3>Chaque jour nous serons là à votre disposition, ISS est la clé de securité qui vous manque, alors n'hesitez plus est contactez nous !</h3>
	            </div>
	        </div>
    	</div>

    	<div class="container control-center" style="margin-top: 0px; z-index: 3;position: relative;">
			<div class="col-sm-4 height-l5-px space-in-l3-px">
				<div class="clr-info height-max-pr text-center">
					<i class="fa fa-clock-o" style="opacity:0.8;font-size : 70px;margin: 3% 0 3% 0;"></i>
					<p class="horizontal-space-in-l1-px txt-notis">Opérationnel 24h/24, contrôlé par des professionnels de l’informatique et de la sécurité</p>
				</div>
			</div>
			<div class="col-sm-4 height-l5-px space-in-l1-px">
				<div class="clr-primary height-max-pr text-center ">
					<i class="fa fa-sitemap" style="opacity:0.8;font-size : 70px;margin: 5% 0 0 0;"></i>
					<p class="horizontal-space-in-l1-px txt-notis">Analyse des données à distance pour tous les abonnées : contrôle et activation du système d’alarme résidentiel et professionnel, contrôle tracking des véhicules, vidéo surveillance, etc.</p>
				</div>
			</div>
			<div class="col-sm-4 height-l5-px space-in-l3-px">
				<div class="clr-info height-max-pr text-center">
					<i class="fa fa-tty" style="opacity:0.8;font-size : 60px;margin: 5% 0 1% 0;"></i>
					<p class="horizontal-space-in-l1-px txt-notis">Support technique et appel d’urgence en cas de problème ou d’incident : connexion possible entre ISS et un groupe d’intervention (Police, pompiers, ...)</p>
				</div>
			</div>
		</div>
	</section>
</main>

<?php include_once('../include/footer.php') ?>

<?php include_once('../include/usr_js_include.php') ?>

</body>
</html>