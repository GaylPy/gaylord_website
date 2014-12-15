<!DOCTYPE html>
<html>
<head>
	<title>Gaylord Ansel | Développeur et Programmation Informatique | Création site internet</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1.0">
	<meta name="description" content="Découvrez le portfolio de Gaylord Ansel Développeur informatique. Agit sur la métropole lilloise dans le Nord de la France. 		Création de site internet, e-Commerce, site vitrine, site web sur mesure" />
 	<meta name="keywords" content="gaylord ansel, ansel gaylord, gaylord ansel développeur, développeur web, développeur, développeur application, développeur 		android, développeur informatique, site, web, Gaylord, Ansel,  développeur web wattrelos ,portfolio, wattrelos, roubaix, lille, création site internet wattrelos, création site internet roubaix, crétaion site wattrelos, création site web wattrelos, creation site internet wattrelos" />
	<meta name="google-site-verification" content="YEHV62Y6dBtrghMYpY1_08csZge10Qh2soJIVo2wuMk" />
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Buda:300' rel='stylesheet' type='text/css'>
	<link rel="icon" type="image/png" href="logo_blue.png" />
	<script src="js/jquery.js" type="text/javascript"></script><!-- Insertion de la bibliotheque jQuery --> 
    	<script type="text/javascript" src="js/localscroll/jquery.localscroll.js"></script>
    	<script type="text/javascript" src="js/localscroll/jquery.scrollTo.js"></script>   
    	<script type="text/javascript" src="js/lancement.js"></script><!-- permet le lancement de la fonction de scroll -->
</head>

<body>
	<section id="accueil">
		<header>		
			<img id="logo_home" src="img/logo-gaylord-ansel.png" alt="logo gaylord ansel" width="90"/>
			<nav>
				<ul>
					<li><a href="#accueil">Accueil</a></li>
					<li><a href="#realisations">Réalisations</a></li>
					<li><a href="#a_propos">À propos</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>
			<hr>	
		</header>
		
		<div id="div_accueil">
			
			<h1 id="titre-accueil">Bienvenue sur mon portfolio<br /><strong>Gaylord Ansel</strong><br />Développeur & Programmation Informatique</h1>
			
			<h2 id="button_rea"><a href="#realisations">Mes réalisations</a></h2>			
		</div>
	</section>

	<section id="realisations">
	<h2>Mes réalisations</h2>	
		<aside class="aside-1">
			<h3>● Luxyol Lighting - Entreprises Matériel électrique</h3>
			<div class="rea-1">
			<p>Site vitrine réalisé sur mesure avec espace d'administration pour permettre à l'utilisateur de mettre à jour sa page.</p>
			<p class="p-rea">HTML - CSS - PHP - SQL</p></div><!-- espace
			--><div class="rea-2"><img src="img/luxyol-lighting.jpg" alt="Luxyol Lighting" width=""/></div>
		</aside>
		<aside class="aside-2">
			<h3>● AS Photographe - Photographe</h3>
			<div class="rea-1">
				<p>Site vitrine réalisé avec Wordpress, entièrement responsive et adapté aux besoins du Photographe.</p>
				<p class="p-rea">Wordpress</p>
			</div><!-- espace
			--><div class="rea-2">
				<img src="img/as-photographe.jpg" alt="As photographe" width=""/>
			</div>
		</aside>
	</section>	
	
	<section id="a_propos">
		<div id="table">
			<aside id="photo">
				<img src="img/gaylord-ansel.jpg" alt="photo gaylord ansel"/>
			</aside>
			<aside id="presentation">
				<h2 id="a-propos">Présentation</h2>				
				<p>Bonjour, moi c'est <strong>Gaylord Ansel</strong>, je suis actuellement Étudiant en développement et programmation 		  					informatique.</p>
				<p>J'ai obtenu mon BTS SIO option SLAM à St Rémi à <strong>Roubaix</strong> cette année.</p>
				<p>Je peut développer des sites internet pour vous, je suis localisé à <strong>Wattrelos</strong>, mais me déplace dans la région 					Lilloise (Tourcoing, Roubaix, Villeneuve d'Ascq, Leers, Lille).</p>
				<p>Ce portfolio a pour but de présenter les différents projets sur lesquels j'ai travaillé ces dernières années.</p>	
				<p>Si vous avez une question, ou si vous avez simplement besoin d'un renseignement, vous pouvez <a href="#contact" alt="Contactez moi" 					title="Contactez moi">me contacter</a>.</p>
				<p><a href="pdf/cv.pdf" alt="CV Gaylord Ansel" target="_blank">Consulter mon CV</a>.</p>					
			</aside>
		</div>
	</section>
	
	<section id="contact">
		<div id="formulaire_contact">
			<h2>Contactez-moi !</h2>
			<?php
			$erreur=NULL;
			$info = NULL;
			if (!empty($_POST['nom']) AND !empty($_POST['email'])){
				extract($_POST);
				if(preg_match("#^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#",$email)){
					$nom=htmlspecialchars(addslashes($nom));
					$email=htmlspecialchars(addslashes($email));
					$sujet=htmlspecialchars(addslashes($sujet));
					$message=htmlspecialchars(addslashes($message));
					$destinataire="ansel.gaylord@gmail.com";
					$entete= 'From :'.$email;
					$message= 'Nom : '.$nom.''."\n".'Sujet :'.$sujet.''."\n".'Message : '.$message;
					$sujet='Message depuis formulaire de contact - '.$sujet;
					mail($destinataire, $sujet, $message, $entete);			
					$info="Votre email a bien été envoyé. Je vous recontacterais dans les 24 heures.";
					unset($_POST, $message, $nom, $email, $sujet);
				}
				else{
					$info="Adresse email invalide.";
				}
			}
			
			?>
			<div id="mon_form">
			<form method="post" action="#contact" id="formulaire">
				<label for="nom">Nom*</label><input type="text" required name="nom" id="nom" value="<?php if(isset($_POST['nom'])) echo 				htmlspecialchars($_POST['nom']); ?>"/><br />
				<label for="email">E-mail*</label><input type="email" required name="email" id="email" value="<?php if(isset($_POST['email'])) echo 					htmlspecialchars($_POST['email']); ?>"/><br />
				<label for="sujet">Sujet</label><input type="text" name="sujet" id="sujet" value="<?php if(isset($_POST['sujet'])) echo 				htmlspecialchars($_POST['sujet']); ?>"/><br />
				<label for="message">Message</label><textarea name="message" id="message" rows="5"><?php if (isset($_POST['message'])) {echo 					htmlspecialchars($_POST["message"],ENT_QUOTES);} ?></textarea><br />
				<p style="margin-left: 5%;">Les champs suivis d'une * sont obligatoires.</p>
				<input type="submit" value="Envoyer" /><span><?php if($info != null){echo "<p id='message-mail'>$info</p>";}; ?></span>
			</form>
			</div>
		</div>

		<a href="#accueil"><img class="retour_haut" src="img/top.png" alt="retour accueil" title="Retour haut" /></a>
		
	</section>
	<footer>
		<div id="reseaux_sociaux">
			<a href="https://www.linkedin.com/pub/gaylord-ansel/95/b7a/a89" target="_blank" alt="Profil linkedIn Gaylord Ansel" title="linkedIn"><img 				src="img/linkedIn.png" alt="linkedIn gaylord ansel"/></a>
			<a href="https://plus.google.com/u/0/108341959610970143720/about" target="_blank" alt="Profil Google+ Gaylord Ansel" title="Google+"><img 				src="img/Google+.png" alt="Profil Google+ gaylord ansel"/></a>
		</div>
		<p id="copyright">Gaylord Ansel / 2014</p>
	</footer>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-55234355-1', 'auto');
	  ga('send', 'pageview');

	</script>
</body>	
</html>		
