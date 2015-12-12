<!--<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
 <xsl:output encoding="utf-8" method="html"/>
 <xsl:template match="enbref">-->
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
							<li id="menu_accueil" class="navbar_menu_item"><a href="#">Accueil</a></li>
							<li id="menu_inscription" class="navbar_menu_item"><a href="#" data-reveal-id="inscription-modal">Inscription</a></li>
                            <li id="menu_connexion" class="navbar_menu_item"><a href="#" data-reveal-id="connexion-modal">Connexion</a></li>
                        </ul>
                    </div>

                    <div id="inscription-modal" class="reveal-modal tiny" data-reveal aria-labelledby="inscription" aria-hidden="true" role="dialog">
                        <!-- Page inscription here -->
                        <h3>Inscription</h3>
                        <span id="error1" style="display: none; color: red;">L'identifiant existe deja<br /></span>
                        <span id="error2" style="display: none; color: red;">L'adresse email existe deja</span>
                        <form data-abide action="" method="post"> <!-- PATTERN PAS FAIT -->
                            <div class="row">
                                <div class="small-12 columns">
                                    <div class="name-field">
                                        <label>Identifiant <small>required</small>
                                            <input type="text" name="identifiant" placeholder=""  required pattern=""/>
                                        </label><small class="error">L'identifiant doit etre composer de 8 chiffres</small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-12 columns">
                                    <label>Nom <small>required</small>
                                        <input type="text" name="nom" placeholder=""  required pattern=""/>
                                    </label>
                                    <small class="error">Le nom doit comporter que des lettres (entre 2 et 30)</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-12 columns">
                                    <label>Prenom <small>required</small>
                                        <input type="text" name="prenom" placeholder="" required pattern=""/>
                                    </label>
                                    <small class="error">Le prenom doit comporter que des lettres (entre 2 et 30)</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-12 columns">
                                    <label> Email <small>required</small>
                                        <input type="email" name="email" placeholder="" required pattern="email"/>
                                    </label>
                                    <small class="error">Une adresse email est requise</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-12 columns">
                                    <label> Mot de passe <small>required</small>
                                        <input id="password" type="password" name="pass" placeholder="" required pattern=""/>
                                    </label>
                                    <small class="error">Un mot de passe est requis (entre 6 et 30 caracteres)</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-12 columns">
                                    <label> Confirmation mot de passe <small>required</small>
                                        <input type="password" name="pass_verif" placeholder="" required pattern="" data-equalto="password"/>
                                    </label>
                                    <small class="error">Les mots de passe ne correspondent pas</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-12 columns">
                                    <label> Departement <small>required</small>
                                        <select name="formation" >
                                            <option value="GEII">Genie Electrique et Informatique</option>
                                            <option value="INFO">Informatique</option>
                                            <option value="MMI">Metiers du multimedia et de l'Internet</option>
                                            <option value="RT">Reseaux et Telecommunication</option>
                                        </select>
                                    </label>
                                    <small class="error">Selectionner un departement</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="small-12 small-centered text-center columns">
                                    <input class="button small secondary" type="submit" name="submit_inscription" value="Valider" />
                                </div>
                            </div>
                        </form>
                        <a class="close-reveal-modal" aria-label="Close">&#215;</a>
                    </div>


              <div id="connexion-modal" class="reveal-modal tiny" data-reveal aria-labelledby="connexion" aria-hidden="true" role="dialog">
                <!-- Page connexion here -->
                <h3>Connexion</h3>
                <form action="index.php" method="post">
                  <div class="row">
                    <div class="small-12 columns">
                      <label>Identifiant
                        <input type="text" placeholder="" />
                      </label>
                    </div>
                  </div>
                  <div class="row">
                    <div class="small-12 columns">
                      <label> Mot de passe
                        <input type="password" placeholder="" />
                      </label>
                    </div>
                  </div>
                  <div class="row">
                      <div class="small-12 small-centered text-center columns">
                          <input class="button small secondary" type="submit" value="Valider" />
                      </div>
                  </div>
                </form>
                <a class="close-reveal-modal" aria-label="Close">&#215;</a>
              </div>

				<!-- fin banniere -->

				<div id="contenu">
					<h1>Bienvenue sur le projet tutorat</h1>
					<p>Easy tutorat voici un long texte blabla blablablabla blabla
					blabla blabla blabla blabla blabla blabla blabla blabla blabla
					blabla blabla blabla blabla blabla blabla blabla blabla blabla
					blabla blabla blabla blabla blabla blabla blabla blabla blabla
					blabla blabla blabla blabla blabla blabla blabla blabla blabla
					blabla blabla blabla blabla blabla blabla blabla blabla blabla
					blabla blabla blabla blabla blabla blabla blabla blabla blabla
					blabla blabla blabla blabla blabla blabla blabla blabla blabla
					blabla blabla blabla blabla blabla blabla blabla blabla blabla
					</p>
				</div>

				<!-- debut footer -->
				<div id="footer">
					(c) 2015 Groupe tutorat - INF2A. En partenariat avec:
					<div id="logo_partenaire">
						<img src="Pictures/pulseheberg.png" />		
					</div>

				</div>
				<!-- fin footer -->

				<a class="exit-off-canvas"></a>

		</div>

	<script src="foundation/js/vendor/jquery.js"></script>
	<script src="foundation/js/foundation.min.js"></script>
	<script>
        $(document).foundation();
    </script>
	</body>
</html>

<?php
$bdd = new PDO('mysql:host=localhost;dbname=projetbase;charset=utf8', 'root', '');

if (!empty($_POST['submit_inscription'])) {

    $identifiant = $_POST['identifiant'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $pass = sha1($_POST['pass']);
	$departement= $_POST['formation'];

    if(formValideInscription($bdd,$identifiant,$email))
    {
		
		/*//BETA//
		$requete=$bdd->prepare("Select id_grp from groupe where annee=2 and formation=':departement'");
		$requete->execute(array(':departement'=>$departement));
		$resultat = $requete->fetchAll();
		
		echo $resultat;*/
		
		////

        $req = $bdd->prepare('INSERT INTO etudiant(numero_etudiant, mdp, nom, prenom, email/*,id_grp*/) VALUES(:identifiant, :pass, :nom, :prenom, :email/*, :id_grp*/)');

		$req->execute(array(
            'identifiant' => $identifiant,
            'pass' => $pass,
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email/*,
			'id_grp' => $resultat*/
        ));
        echo "inscription valide";
        echo htmlspecialchars($_POST['nom']);
    } // pas besoin de else : deja gerer dans la fonction
}


function formValideInscription($bdd,$identifiant,$email){
    $valide = true;

    //Requete
    $req_id = "SELECT count(*) AS Nbr_id FROM etudiant where numero_etudiant = '" . $identifiant . "'";
    $req_email = "SELECT count(*) AS Nbr_email FROM etudiant where email = '" . $email . "'";

    // Traitement disponibilite identifiant
    $reponse_id = $bdd->query($req_id);
    $row_id = $reponse_id->fetch();
    $reponse_id->closeCursor();

    if ($row_id['Nbr_id'] > 0) {
        ?>
        <script>
            $('#inscription-modal').foundation('reveal', 'open');
            document.getElementById('error1').style.display = 'inline';
        </script><?php
        $valide = false;
    }

    // Traitement disponibilite email
    $reponse_email = $bdd->query($req_email);
    $row_email = $reponse_email->fetch();
    $reponse_email->closeCursor();

    if ($row_email['Nbr_email'] > 0) {
        ?>
        <script>
            $('#inscription-modal').foundation('reveal', 'open');
            document.getElementById('error2').style.display = 'inline';
        </script><?php
        $valide = false;
    }
    return $valide;
}
?>
