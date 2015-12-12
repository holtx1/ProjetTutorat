<?php
echo 'test1';
echo "test2";
if(!empty($_POST['submit_connexion'])) {
	echo "test";	
	// $bdd = new PDO('mysql:host=localhost;dbname=projetbase;charset=utf8', 'root', 'iamthelamb1');
	//rehachage du MDP
	$pass_hache = sha1($_POST['pass']);
	$id = $_POST['id'];
    echo "test";

	//recupereation du resultat
	$req = $bdd->prepare('SELECT numero_etudiant from etudiant where numero_etudiant = :id AND mdp = :pass');
	$req->execute(array(
		'id' => $id,
		'pass' => $pass_hache));

	$resultat = $req->fetch();

	if(!$resultat){
		echo 'Mauvais identifiant ou mot de passe');
		header('Location:index.php');
	}

	else
	{
		session_start();
		$_SESSION['id']=$resultat['id'];
		echo 'vous etes connecté';
	}


?>
