<!DOCTYPE html>
<html>
	<!-- head -->
	<head>
		<link rel="stylesheet" href="foundation/css/foundation.css"/>
		<link rel="stylesheet" href="foundation/css/app.css"/>
		<link rel="stylesheet" href="CSS/default.css"/>

		<script src="foundation/js/vendor/modernizr.js"></script>
	</head>

	<!-- body -->
	<body>
		<div class="off-canvas-wrap" data-offcanvas>
			<div class="inner-wrap">
				<!-- debut banniere -->

				<!-- en-tete mobile -->
				<div id="ban_mobile" class="show-for-small-down">
					<div id="navbar">
						<ul>
							<li class="left-off-canvas-toggle menu-icon"><a href="#" ><span>Menu</span></a></li>
						</ul>
					</div>
					<aside class="left-off-canvas-menu">
						<ul id="navbar_menu_mobile" class="menu">
							<li><a href="#">Accueil</a></li>
							<li><a href="#" data-reveal-id="inscription-modal">Inscription</a></li>
							<li><a href="#" data-reveal-id="connexion-modal">Connexion</a></li>
						</ul>
					</aside>
				</div>

				<!-- en-tete pc -->
				<div id="ban_pc" class="show-for-medium-up">
					<div id="ban_img">

					</div>
					<div id="navbar">
						<ul id="navbar_menu_pc" class="menu">
							<li id="menu_accueil" class="navbar_menu_item"><a href="index.php">Accueil</a></li>
							<li id="menu_modification" class="navbar_menu_item"><a href="#" data-reveal-id="inscription-modal">Modifier le profil</a></li>
                            <li id="menu_deconnexion" class="navbar_menu_item"><a href="deconnexion.php" data-reveal-id="connexion-modal">Deconnexion</a></li>
                        </ul>
                    </div>
				</div>
			</div>
		</div>
		<script src="foundation/js/vendor/jquery.js"></script>
		<script src="foundation/js/foundation.min.js"></script>
		<script>
       		$(document).foundation();
    		</script>
	</body>

</html>

<?php

if(!empty($_POST['submit_connexion'])) {
	
	$bdd = new PDO('mysql:host=localhost;dbname=projetbase;charset=utf8', 'root', 'iamthelamb1');

	//données du formulaire dans variables
	$pass = sha1($_POST['pass']);
	$id = $_POST['id'];


	//recuperation du resultat
	$req = $bdd->prepare('SELECT numero_etudiant from etudiant where numero_etudiant = :id AND mdp = :pass');
	$req->execute(array(
		'id' => $id,
		'pass' => $pass));
	$resultat = $req->fetch();
	
	if(!$resultat){//données invalides
		header('Location:index.php');
	}
	
	else//Utilisateur trouvé
	{
		
		//mise en place des cookies
		// setcookie('identifiant',$id,time()+300);
		// setcookie('mdp',$pass,time()+300);

		echo 'Vous etes connecté :'."<br/>";
		$req2 = $bdd->prepare('SELECT * from etudiant where numero_etudiant = :id AND mdp = :pass');
		$req2->execute(array(
			'id' => $id,
			'pass' => $pass));
		$donnees = $req2->fetch();
		echo "Bonjour ".$donnees['prenom']." ".$donnees['nom'];
	}
	
}

?>
