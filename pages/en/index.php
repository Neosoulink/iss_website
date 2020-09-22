<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Home</title>

	<?php include_once('../include/usr_css_include.php'); ?>

</head>
<body>
<!-- Scroll ver le haut -->
<button id="btn_up" title="aller vers le haut"><i class="fa fa-fw fa-chevron-up"></i></button>
 <form class="visible-xs wrapper fixed" id="lang_page" action="../../cookie_user_lang.php" method="post" style="border-radius:10px;bottom:23px;right:82px;">
	<input type="hidden" name="lang_page" value="fr">
	<input type="hidden" name="page_location" value="index.php">
	<input class="clr-primary clr-success-hf" title="Choix de langue" type="submit" name="send_lang_page" value="FR">
</form>


<!-- Header -->
<header>

	<?php include_once('../include/header_logo.php') ?>

	<!-- Banner Header with shadow & bostrap -->
	<div class="wrapper header-wrapper width-max-pr height-l9-px" style="background-image: url(../../images/security-265130__340.jpg)">
		<nav class="wrapper navbar navbar-inverse" role="navigation">

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
	                <li><a href="#">Home</a></li>
	                <li><a href="matos.php">Us product</a></li>
	                <li><a href="whoUs.php">Woh are us ?</a></li>
	                <li><a href="contact.php">Contacts</a></li>
	            </ul>
	            <form class="hidden-xs absolute" id="lang_page" action="../../cookie_user_lang.php" method="post">
	            	<input type="hidden" name="lang_page" value="fr">
	            	<input type="hidden" name="page_location" value="index.php">
	            	<input class="clr-primary clr-success-hf" title="Choix de langue" type="submit" name="send_lang_page" value="FR">
	            	<span class="tooltipertext clr-primary">Changer de langue</span>
	            </form>
	        </div>

	    </nav>

	    <!-- Content banner -->
	    <div class="txt-notis space-left-in-l6-pr space-right-in-l2-pr wrapper-content-overlay" style="padding-top: 8%;">
	    	<h2 class="title-medium">Integrated Systems & Services</h2>
	    	<h4>An innovatited company that responds with solutions adapted to the needs of it's clients in all related security !</h4>
	    </div>
	</div>
</header>

<!-- Corps de la page -->
<main>
	<!-- Bandeau sur bannier -->
	<div class="container cool-div-first">

		<div class="wrapper height-l6-px col-lg-4 col-md-6 no-horizontal-space-in clr-info">
            <div class=" horizontal-space-l3-px">
                <div>
                    <h3 class="no-space-bottom">Integrated Systems & Services</h3>
                    <ul class="list-inline-block">
                    	<li>Securité</li>
                    	<li>Protection</li>
                    	<li>Outils</li>
                    </ul>

                    <br/><ul class="list-type-none cd-lst">
                    	<li><a href="#avantages"><i class="fa fa-rocket" style="font-size: 15px;"></i>Nos avantages</a></li>
                    	<li><a href="#centre-de-controle"><i class="fa fa-tv" style="font-size: 13px;"></i>Notre centre de controle</a></li>
                    	<li><a href="#materiels"><i class="fa fa-diamond" style="font-size: 14px;"></i>Nos materiels</a></li>
                    </ul>
                </div>
            	<div class="btn-link-info"><a href="#footer">Voir plus</a></div>
            </div>
        </div>

        <div class="wrapper hidden-md height-l6-px col-md-4 no-horizontal-space-in clr-whiteblack" id="whoUs">
            <div class="text-center horizontal-space-l3-px">
                <div>
                    <h3 class="no-space-bottom">HOW ARE US ?</h3>
                    <span class="txt-notis">ISS is an innovative company that responds with solutions adapted to the needs of its clients in all related electronic security matters: Personnel and vehicle tracking, control panel, control of fuel tank.</p>
                </div>
				<div class="btn-link-info text-center"><a href="whoUs.php">More</a></div>
            </div>
        </div>

        <div class="wrapper height-l6-px col-lg-4 col-md-6 no-horizontal-space-in clr-info">
            <div class="text-center horizontal-space-l3-px">
                <div>
                    <h3 class="no-space-bottom">Prendre contact</h3>
                    <span class="txt-notis">N'esitez pas à nous contacter, nous sommes à votre disposition !</span>
					<ul class="list-inline text-left">
						<li><strong>Administrateur gerant:</strong> Mr. IILIJA TAL, 0997562275, ilia@iss-rdc.com</li>
						<li><strong>Noc: Centre de Control ISS:</strong> 0843385355, noc@iss-rdc.com</li>
						<li><strong>Administration ISS:</strong> Mr Magloire, 0847837486 assistant@iss-rdc.com</li>
					</ul>
                </div>
				<div class="btn-link-info float-right"><a href="contact.php">Voir plus</a></div>
            </div>
        </div>

        <div class="wrapper visible-md height-l5-px col-md-12 no-horizontal-space-in clr-whiteblack" id="whoUs">
            <div class="text-center horizontal-space-l3-px">
                <div>
                    <h3 class="no-space-bottom">HOW ARE US ?</h3>
                    <span class="txt-notis">Découvrez l'Integrated Systems & Services</span>
                    <p><br>ISS est une société innovante qui répond avec des solutions adaptées aux besoins de ses clients dans toutes les questions liées à la sécurité électronique, la télécommunication, le personnel, le suivi des véhicules, panneau de contrôle, le contrôle de réservoir de carburant et le backup électrique.</p>
                </div>
				<div class="btn-link-info text-center"><a href="whoUs.php">Voir plus</a></div>
            </div>
        </div>

	</div>

	<!-- Bandeau des avantages -->
	<section class="bandeau-avantages space-top-l1-pr">

		<div class="wrapper container-avantages">
			<!-- Titre bandeau des avantages -->
			<div class="text-center clr-info vertical-space-in-l2-px" id="avantages">
				<h1 class="title-small">ADVANTAGES OF OUR SOLUTION</h1>
				<p class="container txt-notis">Plus qu'une simple confirmation de securité, mais une garentie et un boost pour vous et votre business !</p>
				<p><i class="fa fa-chevron-down" style="font-size : 30px; margin: -10px 0 10px 0;"></i></p>
			</div>

			<div class="col-sm-6 col-md-3 avantage text-center">
				<div class="img-avantage">
					<div>
						<img src="../../images/thumbs/modules.png">
					</div>
				</div>

				<div>
					<h3 class="no-space-top">Synergy of the technical</h3>
					<p>The consequent decrease in static numbers, thanks to the synergy of the technical and human systems.</p>
				</div>
	        </div>
	        
	        <div class="col-sm-6 col-md-3 avantage text-center">
				<div class="img-avantage">
					<div>
						<img src="../../images/thumbs/web-shield.png">
					</div>
				</div>

				<div>
					<h3 class="no-space-top">Web alternative</h3>
					<p>Offre de la meilleure alternative en connexion Internet via VSAT pour les entreprises et certaines zones rurales.</p>
				</div>
	        </div>

	        <div class="col-sm-6 col-md-3 avantage text-center">
				<div class="img-avantage">
					<div>
						<img src="../../images/thumbs/services.png">
					</div>
				</div>

				<div>
					<h3 class="no-space-top">Automatisation</h3>
					<p>Automation and protocols reducing human error by a chain of precise reactions of various intervention forces from a control center.</p>
				</div>
	        </div>

	        <div class="col-sm-6 col-md-3 avantage text-center">
				<div class="img-avantage">
					<div>
						<img src="../../images/thumbs/wall-mount-camera.png">
					</div>
				</div>

				<div>
					<h3 class="no-space-top">Le système de détection</h3>
					<p>Le système de détection préventive sans faille permet d’anticiper et intervenir rapidement sur le site en alerte.</p>
				</div>
	        </div>

		</div>
		<div class="clearfix"></div>

		<!-- Note des aventages -->
		<div class="clr-notis wrapper sub-container-avantages">
			<div class="col-sm-6 text-center space-top-l1-pr">
				<h3 class="title-mini no-space-bottom">Votre securité à 100%</h3>
				<p class="txt-notis no-space-top">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>	
			</div>

			<div class="col-sm-6 text-center space-top-l1-pr txt-notis" style="font-size: 80px;">
				<i class="fa fa-fw fa-cogs space-top-l3-px"></i>
				<i class="fa fa-fw fa-lock horizontal-space-l1-pr"></i>
				<i class="fa fa-fw fa-fire-extinguisher "></i>
			</div>

		</div>
	</section>

	<div class="clearfix"></div>

	<!-- Section Nos forces -->
	<section id="powerUs">
		<div class="wrapper height-l9-px space-top-in-l1-px text-center" style="margin-top: 50px;margin-bottom: 20px; background-color: #3B4B4F; color:#9ABDC6;">
			<div class="height-l9-pr" style=""><img src="../../images/components/powerUs.png" class="height-max-pr"></div>
			<h2 class="title-small no-vertical-space">OUR STRENGTHS</h2>
			<span class="txt-notis hidden-xs title-mini no-decoration">WE ARE YOUR BEST CHOOSE</span>
			<h4 class="txt-notis visible-xs no-decoration">WE ARE YOUR BEST CHOOSE</h4>
		</div>
	</section>

	<div class="clearfix"></div>

	<!-- Section centre de controle -->
	<section id="centre-de-controle">
		<div class="text-center txt-clr-primary">
			<h1 class="title-small">NOTRE CENTRE DE CONTROLE</h1>
			<p class="container txt-notis">Quoi de mieux que notre centre de controle pour etre à votre entiere disposition</p>
			<p><i class="fa fa-chevron-down" style="font-size : 30px; margin: -10px 0 10px 0;"></i></p>
		</div>
		
		<div class="wrapper height-l8-px width-max-pr" style="background-image: url(../../images/security.jpg)">
	        <div class="wrapper-annonce-overlay">
	            <div class="col-sm-8">
	                <h2>Centre de controle de l'ISS</h2>
	            	<p>Nous vous invitons à nous faire un max de confiance !<br>
	            		<strong>Pour votre Société de gardiennage, armée, etc.</strong></p>
	            	<h3>Chaque jour nous serons là à votre disposition, ISS est la clé de securité qui vous manque, alors n'hesitez plus et contactez nous !</h3>
	            </div>
	            <div class="col-sm-4 text-center" style="margin-top: 5%">
	                <div class="btn-link-info"><a href="whoUs.php#centre-de-controle">Voir plus</a></div>
	            </div>
	                
	        </div>
    	</div>
	</section>

	<div class="clearfix"></div>

	<!-- Section des materiels -->
	<section id="materiels">
		<div class="txt-clr-primary text-center" style="margin-bottom: -15px">
			<h1 class="title-small">NOUS VOUS FOURNISSONS DES MATERIELS DE QUALITE</h1>
			<p class="text-center">
				<span class="txt-notis">Voici une selection des materiels que nous pouvons vous fournir</span>
				<br><i class="text-center fa fa-chevron-down" style="font-size : 30px;"></i>
			</p>
		</div>

		<div class="col-sm-3 hidden-xs text-center txt-clr-primary">
			<div style="padding-top: 50%">
				<i class="fa fa-lock" style="font-size: 100px;margin-right: 10%; "></i>
				<i class="fa fa-chevron-right" style="font-size: 50px;vertical-align: top;margin-top: 30px"></i>
			</div>
    	</div>

		<div class="col-sm-3">
			<div>
				<h3 class="bottom-line-separator">CCTV (Camera de Surveillance)</h3>
				<p class="txt-notis">Nous metons en votre disposition des materiels de surveilences pour votre entier securiter. Système de vidéo analyse ultra avancée avec détection de présence humaine</p>
			</div>

			<h3 class="bottom-line-separator">Anti-Intrusion</h3>
			<p class="txt-notis">Nous vous protegons cotre les menaces exeterieur, plus de probleme de conbriolage. Une securiter optimal; système d’alarme pour domicile ; pour grandes et moyennes entreprises (banque, magasins, usines, etc.)</p>

			<h3 class="bottom-line-separator">Access Control</h3>
			<p class="txt-notis">Sécurisation de avec systèmes de serrure magnétiques ou électrique. Système intégrable aux portes tourniquets ou au vidéophone </p>
			
		</div>

		<div class="col-sm-6">
			<a href="matos.php#access-control" class="link-materiels-img">
				<div class="col-sm-6 div-img">
					<div class="wrapper width-max-pr height-l4-px" style="background-image: url(../../images/components/access_kits.png)">
						<div class="overlay"> ACCESS CONTROL </div>
					</div>
				</div>
			</a>
			<a href="matos.php#CCTV" class="link-materiels-img">
				<div class="col-sm-6 div-img">
					<div class="wrapper width-max-pr height-l4-px" style="background-image: url(../../images/camera.jpg)">
						<div class="overlay"> CCTV CAMERA </div>
					</div>
					
				</div>
			</a>

			<div class="clearfix"></div>
			<h3 class="col-sm-12 txt-notis no-vertical-space title-mini text-right">Une vie plus sûre grâce à nos produits!</h3>

			<div class="clearfix"></div>

			<a href="matos.php#RSM" class="link-materiels-img">
				<div class="col-sm-6 div-img">
					<div class="wrapper width-max-pr height-l4-px " style="background-image: url(../../images/cont_secu.jpg)">
						<div class="overlay"> GARDE </div>
					</div>
					
				</div>
			</a>

			<a href="matos.php#Anti-Intrusion" class="link-materiels-img">
				<div class="col-sm-6 div-img">
					<div class="wrapper width-max-pr height-l4-px" style="background-image: url(../../images/components/anti-intrusion.png)">
						<div class="overlay"> ANTI-INTRUSION </div>
					</div>
					
				</div>
			</a>
				
		</div>

		<div class="row"></div>

		<div class="col-sm-6">
			<a href="matos.php#incendie" class="link-materiels-img">
				<div class="col-sm-6 div-img">
					<div class="wrapper width-max-pr height-l4-px " style="background-image: url(../../images/components/detection_incendie.png)">
						<div class="overlay"> DETECTION INCENDIE </div>
					</div>
					
				</div>
			</a>

			<a href="matos.php#trasage" class="link-materiels-img">
				<div class="col-sm-6 div-img">
					<div class="wrapper width-max-pr height-l4-px" style="background-image: url(../../images/components/trasage.png)">
						<div class="overlay"> TRASAGE </div>
					</div>
					
				</div>
			</a>
			
			<div class="clearfix"></div>
			<h3 class="txt-notis col-sm-12 no-vertical-space title-mini">Des materiels de qualité juste pour vous !</h3>
			<div class="clearfix"></div>

		</div>

		<div class="col-sm-3">
			<h3 class="bottom-line-separator">Détection et Extinction Incendie</h3>
			<p class="txt-notis">Système de détection incendie autonome ou relié un système d’alarme : résidentiel ou industriel; détection de chaleur ou de fumée, conventionnel ou analogique avec une à plusieurs boucles</p>

			<h3 class="bottom-line-separator">Surveillance Mobile ou à Distance</h3>
			<p class="txt-notis">
				Equiper vos véhicule avec des technologies capable de : Communiquer par Modem GSM,WIFI,LAN; Prener la posibiliter de recuper le positionnement et les enregistrements GPS
			</p>
			
		</div>

		<div class="col-sm-3 hidden-xs text-center  txt-clr-primary">
			<div style="padding-top: 25%">
				<i class="fa fa-chevron-left" style="font-size: 50px;vertical-align: top;margin-top: 30px"></i>
				<i class="fa fa-fire-extinguisher" style="font-size: 100px;margin-left: 10%; "></i>
			</div>
    	</div>
	</section>

	<div class="clearfix"></div>
	<section class="oursPartener" id="oursPartener">
		<div class="txt-clr-primary text-center">
			<h1 class="title-small">OUR CLIENTS AND PARTNERS</h1>
			<p class="text-center">
				<span class="txt-notis">A selection of our clients and our partners</span>
				<br><i class="text-center fa fa-chevron-down" style="font-size : 30px;"></i>
			</p>
		</div>

		<div class="width-max-pr text-center">
			<div class="width-max-pr">
				<img src="../../images/components/oursPartener.png" class="text-center width-l10-pr">
			</div>
		</div>
	</section>
	<div class="clearfix "></div>

</main>

<?php include_once('../include/footer.php') ?>

<?php include_once('../include/usr_js_include.php') ?>


</body>
</html>