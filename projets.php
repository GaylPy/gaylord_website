<!DOCTYPE html>
<html>
<head>
	<title>Gaylord Ansel | Projets | Développeur et Programmation Informatique</title>
	<meta charset="UTF-8">
	<link rel="icon" type="image/png" href="img/favicon.png" />
	<meta name="viewport" content="initial-scale=1.0">
	<meta name="description" content="Découvrez le portfolio de Gaylord Ansel Développeur informatique. Agit sur la métropole lilloise dans le Nord de la France. Création de site internet, e-Commerce, site vitrine, site web sur mesure" />
 	<meta name="keywords" content="gaylord ansel, ansel gaylord, gaylord ansel développeur, développeur web, développeur, développeur application, développeur 		android, développeur informatique, site, web, Gaylord, Ansel,  développeur web wattrelos ,portfolio, wattrelos, roubaix, lille, création site internet wattrelos, création site internet roubaix, créion site wattrelos, création site web wattrelos, creation site internet wattrelos" />
	<meta name="google-site-verification" content="YEHV62Y6dBtrghMYpY1_08csZge10Qh2soJIVo2wuMk" />
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
	<script src="js/jquery.js" type="text/javascript"></script><!-- Insertion de la bibliotheque jQuery --> 
    <script type="text/javascript" src="js/localscroll/jquery.localscroll.js"></script>
    <script type="text/javascript" src="js/localscroll/jquery.scrollTo.js"></script>   
    <script type="text/javascript" src="js/lancement.js"></script><!-- permet le lancement de la fonction de scroll -->
<script type="text/javascript" >
	function fonctionOpen(){
		document.getElementById("div").style.opacity="0";
	};
</script>
</head>
<body>
	<section id="accueil">
		<?php $page="projets"; include('inc/header.php'); ?>
		
		<div id="div_accueil">
			<h1 class="titre-accueil"><span>Decouvrez</span><br/>mes<br /><strong>Projets</strong></h1>	
		</div>
	</section>
	
	<section id="projets">
		<article class="article-margin margin-responsive">
			<a href="http://www.ohmybro.com" title="Site OhMyBro!" target="_blank"><div><h2>OhMyBro!</h2>
			<p>Prestashop</p>
			</div>
			<img src="img/site/ohmybro.jpg" /></a>
		</article><article class="article-margin">
			<a href="http://www.asphotographe.fr/" title="Site asphotographe" target="_blank"><div><h2>As Photographe</h2>
			<p>Wordpress</p></div>
			<img src="img/site/asphoto.jpg" /></a>
		</article><article class="margin-responsive">
			<a href="http://www.gaylord-ansel.com/old" title="Ancien site" target="_blank"><div><h2>Mon ancien site</h2>
			<p>HTML5</p>
			<p>CSS3</p>
			<p>PHP</p>
			</div>
			<img src="img/site/ga-old.jpg"/></a>
		</article>	
		<article class="article-margin">
			<a href="http://www.cissok.com/freaky" title="Site FreakyGangz" target="_blank"><div><h2>Freaky Gangz</h2>
			<p>Wordpress</p>
			</div>
			<img src="img/site/freaky.jpg" /></a>
		</article><article class="article-margin margin-responsive">
			<a href="http://djxk.odev-web.com/" title="Site Djxk" target="_blank"><div><h2>Dj XK</h2>
			<p>Wordpress</p></div>
			<img src="img/site/djxk.jpg" /></a>
		</article><article>
			<a href="http://www.luxyol-lighting.com" title="Site Luxyol Lighting" target="_blank"><div><h2>Luxyol Lighting</h2>
			<p>HTML5</p>
			<p>CSS3</p>
			<p>PHP & SQL - Espace Admin</p>
			</div>
			<img src="img/site/luxyol.jpg"/></a>
		</article>
	</section>
	<a class="bouton-large" href="#accueil">Retour en haut</a>
	
	<?php include('inc/footer.php'); ?>
</body>	
</html>	
