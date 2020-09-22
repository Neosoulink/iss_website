<!DOCTYPE html>
<html>
<head>
	<title>Contacts</title>

	<?php include_once('../include/usr_css_include.php'); ?>

</head>
<body>
<!-- Scroll ver le haut -->
<button id="btn_up" title="aller vers le haut"><i class="fa fa-fw fa-chevron-up"></i></button>
 <form class="visible-xs wrapper fixed" id="lang_page" action="../../cookie_user_lang.php" method="post" style="border-radius:10px;bottom:23px;right:82px;">
	<input type="hidden" name="lang_page" value="fr">
	<input type="hidden" name="page_location" value="contact.php">
	<input class="clr-primary clr-success-hf" title="Choix de langue" type="submit" name="send_lang_page" value="FR">
</form>

<!-- Header -->
<header>
	<?php include_once('../include/header_logo.php') ?>

	<!-- Banner Header with shadow & bostrap -->
	<div class="wrapper header-wrapper width-max-pr height-l9-px" style="background-image: url(../../images/ban_con.jpg)">
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
	                <li><a href="matos.php">Nos produits</a></li>
	                <li><a href="whoUs.php">Qui sommes-nous</a></li>
	                <li><a href="#">Contacts</a></li>
	            </ul>
	            <form class="absolute hidden-xs" id="lang_page" action="../../cookie_user_lang.php" method="post">
	            	<input type="hidden" name="lang_page" value="fr">
	            	<input type="hidden" name="page_location" value="contact.php">
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

<main class="container space-top-l5-px">
	<div class="col-sm-3">
		<h3>Free in DRC</h3>
		<h4 style="font-size: 1.25em">With :
			<ul>
				<li>64 Employees</li>
				<li>5 Control Centers operating 24/7</li>
				<li>9 TechnicalAntenna all over the country </li>
				<li>The largest security technology company</li>
			</ul>
		</h4>
	</div>
	<div class="col-sm-3">
		<h3>Contacts ISS</h3>
		<ul class="list-inline text-left">
            <li><strong>Coordonator of projects and technic:</strong> Mr. ILUNGA TRESOR, 0976950655, tech@iss-rdc.com</li>
			<li><strong>Administrator manager:</strong> Mr. IILIJA TAL, 0997562275, ilia@iss-rdc.com</li>
			<li><strong>Noc: Control Centre ISS:</strong> 0843385355, noc@iss-rdc.com</li>
			<li><strong>Administration ISS:</strong> Mr Magloire, 0847837486 assistant@iss-rdc.com</li>
		</ul>
	</div>
	<div class="col-sm-6">
		<div class="width-max-pr">
			<img src="../../images/components/location.png" class="width-max-pr">
		</div>
	</div>
	<div class="clearfix"></div>

	<section class=" text-center vertical-space-l6-px">
		<div class="clr-notis space-in-l3-px">
			<h3 class="txt-clr-primary"> ISS all right in 2019 !</h3>
			<p class="txt-notis">We are very glad to present you our centre ISS, and...</p>
		</div>
	</section>

</main>

<?php include_once('../include/footer.php') ?>

<?php include_once('../include/usr_js_include.php') ?>

</body>
</html>