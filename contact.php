<!DOCTYPE html>
<html>
<head>
	<title>Gaylord Ansel | Contact | Développeur et Programmation Informatique</title>
	<meta charset="UTF-8">
	<link rel="icon" type="image/png" href="img/favicon.png" />
	<meta name="viewport" content="initial-scale=1.0">
	<meta name="description" content="Découvrez le portfolio de Gaylord Ansel Développeur informatique. Agit sur la métropole lilloise dans le Nord de la France. Création de site internet, e-Commerce, site vitrine, site web sur mesure" />
 	<meta name="keywords" content="gaylord ansel, ansel gaylord, gaylord ansel développeur, développeur web, développeur, développeur application, développeur 		android, développeur informatique, site, web, Gaylord, Ansel,  développeur web wattrelos ,portfolio, wattrelos, roubaix, lille, création site internet wattrelos, création site internet roubaix, créion site wattrelos, création site web wattrelos, creation site internet wattrelos" />
	<meta name="google-site-verification" content="YEHV62Y6dBtrghMYpY1_08csZge10Qh2soJIVo2wuMk" />
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
	<link rel="icon" type="image/png" href="logo_blue.png" />
	<script src="js/jquery.js" type="text/javascript"></script><!-- Insertion de la bibliotheque jQuery --> 
    	<script type="text/javascript" src="js/localscroll/jquery.localscroll.js"></script>
    	<script type="text/javascript" src="js/localscroll/jquery.scrollTo.js"></script>   
    	<script type="text/javascript" src="js/lancement.js"></script><!-- permet le lancement de la fonction de scroll -->
</head>
<body>
	<section id="accueil">
		<?php $page="contact"; include('inc/header.php'); ?>
		
		<div id="div_accueil">
			
			<h1 class="titre-accueil"><strong>Contactez-moi</strong><br/>par mail <br /></h1>
				
		</div>
	</section>
	
	<section id="contact" class="bloc">
		<h2>Par mail</h2>
		<div id="formulaire_contact">
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
				<p style="margin-left:2%; 	color: #58585a;">Les champs suivis d'une * sont obligatoires.</p>
				<span><?php if($info != null){echo "<p id='message-mail'>$info</p>";}; ?></span>
				<input type="submit" value="Envoyer" class="bouton-large"/>
			</form>
			</div>
		</div>
	</section><section id="contact-autre" class="bloc">
		<h2>Contact</h2>
		<ul id="menu-contact">
                    <a href="mailto:ansel.gaylord@gmail.com" title="Mail Gaylord Ansel"><li id="mail-contact" class="rs-footer"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ansel.gaylord@gmail.com</p></li></a>
                    <a href="tel:+33620577713" title="Téléphone Gaylord Ansel"><li id="phone-contact" class="rs-footer"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(+33)620577713</p></li></a>
                    <a href="https://www.facebook.com/gaylord.ansel.1" target="_blank" title="Facebook Gaylord Ansel"><li id="fb-contact" class="rs-footer"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Facebook</p></li></a>
                    <a href="https://plus.google.com/u/0/108341959610970143720/posts" target="_blank"title="Google+ Gaylord Ansel"><li id="google-contact" class="rs-footer"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Google+</p></li></a>
                    <a href="https://www.linkedin.com/pub/gaylord-ansel/95/b7a/a89" target="_blank"title="LinkedIn Gaylord Ansel"><li id="linkedin-contact" class="rs-footer"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LinkedIn</p></li></a>
		</ul>
		<img class="image-gaylord-ansel" src="img/moi.jpg" alt="Gaylord Ansel" width="150px"/>
	</section>
	
	<a class="bouton-large" href="#accueil">Retour en haut</a>
	
	<?php include('inc/footer.php'); ?>
</body>	
</html>	
</html>	