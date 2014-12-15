<!DOCTYPE html>
<html>
<head>
	<title>Gaylord Ansel | Accueil | Développeur et Programmation Informatique</title>
	<meta charset="UTF-8">
	<link rel="icon" type="image/png" href="img/favicon.png" />
	<meta name="viewport" content="initial-scale=1.0">
	<meta name="description" content="Découvrez le portfolio de Gaylord Ansel Développeur informatique. Agit sur la métropole lilloise dans le Nord de la France. Création de site internet, e-Commerce, site vitrine, site web sur mesure" />
 	<meta name="keywords" content="gaylord ansel, ansel gaylord, gaylord ansel développeur, développeur web, développeur, développeur application, développeur android, développeur informatique, site, web, Gaylord, Ansel,  développeur web wattrelos ,portfolio, wattrelos, roubaix, lille, création site internet wattrelos, création site internet roubaix, crétaion site wattrelos, création site web wattrelos, creation site internet wattrelos" />
	<meta name="google-site-verification" content="YEHV62Y6dBtrghMYpY1_08csZge10Qh2soJIVo2wuMk" />
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
	<script src="js/jquery.js" type="text/javascript"></script><!-- Insertion de la bibliotheque jQuery --> 
    <script type="text/javascript" src="js/localscroll/jquery.localscroll.js"></script>
    <script type="text/javascript" src="js/localscroll/jquery.scrollTo.js"></script>   
    <script type="text/javascript" src="js/lancement.js"></script><!-- permet le lancement de la fonction de scroll -->
    <script type="text/javascript">
        
    var tableau= new Array();
            tableau.push("-moz-transform: scale(1, 1);");
            tableau.push("-moz-transform: scale(1.3, 1.3);");
            var pointeur = 0;
    
    // Fonction modifiant le fond de page de façon aléatoire.
        function changeBackground(){
            var elmt=document.getElementById("heart");
            elmt.style=tableau[pointeur];
            
            if(pointeur < tableau.length - 1){
            pointeur++;
            }
            else{
            pointeur = 0;
            }
            window.setTimeout(changeBackground, 600); 
        }
        // Mise en place du fond de page une première fois au chargement de la page.
        window.onload = changeBackground;
    </script>
</head>
<body>
	<section id="accueil">
		<?php $page="accueil"; include('inc/header.php'); ?>
		
		<div id="div_accueil">
			
			<h1 class="titre-accueil"><strong>Gaylord Ansel</strong><br/>Developpement<br /><span>& Programmation </span></h1>
				
		</div>
	</section>

	<section id="competences">	

		<article id="dev" class="bloc">
			<h2>Développement Web</h2>
                        <img src="img/dev.png" alt="Développement Web" width=200px"/>
			<p>J'ai découvert le développement et la programmation informatique lors de mon entrée en <strong>BTS SIO</strong>, depuis j'ai découvert une réel passion pour ce domaine.</p>
			<p>Je crée des sites interactifs : <strong>sites vitrines, sites dynamiques, e-commerce, blogs, CMS, HTML5 / CSS3 / JS, sites au design responsive</strong>.</p>
			<!--<input type="button" class="bouton-large" value="En savoir plus"/>-->
		</article><article id="dep" class="bloc">
			<h2>Dépannage Informatique</h2>
                        <img src="img/dep.png" alt="Dépannage Informatique" width="200px" />
			<p>Grace à mes années d'études en <strong>Bac Pro SEN</strong>, à mes différents stages ainsi que ma passion pour les nouvelles technologies.</p>
			<p>J'ai acquis des compétences dans le <strong>dépannage informatique</strong>, la <strong>formation de l'informatique logiciel et matériel</strong> mais également la <strong>vente de matériel informatique</strong>.</p>
			<!--<input type="button" class="bouton-large" value="En savoir plus"/>-->
		</article>
	</section>	

	<section id="informations">
		<article id="presentation" class="bloc">
			<h2>Hello,</h2>
			<p>Moi c'est Gaylord, j'ai 19 ans, j'habite dans la métropole Lilloise, plus précisément <strong>Wattrelos</strong> entre <strong>Roubaix</strong> et <strong>Tourcoing</strong>.</p>
			<p>Je me suis retrouvé dans le monde de l'informatique en commenéant un Bac Pro puis je me suis orienté dans le développement informatique en BTS.</p> 
			<p>À présent je suis en Bachelor 3 Informatique à L'EPSI à Lille où j'étudie le <strong>développement</strong>. Si vous souhaitez en savoir plus consulter mon <a href="doc/cv-gaylord-ansel.pdf" title="Télécharger ou consulter mon CV" target="_blank">CV</a> ou <a href="contact.php" title="Contactez-moi">contactez-moi</a>.</p> 
			<img class="image-gaylord-ansel" src="img/moi.jpg" alt="Gaylord Ansel" width="150px"/>
		</article><a id="lien-cv" href="doc/cv-gaylord-ansel.pdf" target="_blank" title="Consulter/Télécharger mon CV"><article id="cv" class="bloc">
						
			<h2>Télécharger mon CV</h2>
			<img id="img-cv" src="img/cv.jpg" alt="CV Gaylord Ansel" height="280px"/>
			<!--<p>Voir & Télécharger mon CV.</p>-->
		</article></a>
            <article id="news" class="bloc">
                <h2>News</h2>
                <p>Mon site est encore tout récent, je le construis au fur et à mesure. Si vous avez des questions ou remarques, n'hésitez pas, <a href="contact.php" title="Contactez-moi">contactez-moi</a>.</p>
            </article><article id="love" class="bloc">
                <div>
                    <div class="love-bloc"><img src="img/love/dance.png" alt="Breakdance" title="Breakdance"/></div>
                    <div class="love-bloc"><img src="img/love/music.png" alt="Musique" title="Musique"/></div>
                    <div class="love-bloc"><img src="img/love/code.png" alt="Coder" title="Coder"/></div>
                    <div class="love-bloc"><img src="img/love/travel.png" alt="Voyager" title="Voyager"/></div>
                    <div class="love-bloc"><img src="img/love/pc.png" alt="La technologie" title="La technologie"/></div>
                    <div class="love-bloc"><img src="img/love/photo.png" alt="La photographie" title="La photographie"/></div>
                    <div class="love-bloc"><img src="img/love/soccer.png" alt="Jouer au foot" title="Jouer au foot"/></div>
                    <div class="love-bloc"><img src="img/love/party.png" alt="Faire la fête" title="Faire la fête"/></div>
                    <img id="heart" src="img/heart.png" width="70px" title="J'aime"/>                
                </div>
            </article>
	</section>

	
	<a class="bouton-large" href="#accueil">Retour en haut</a>
	
	<?php include('inc/footer.php'); ?>
</body>	
</html>		
