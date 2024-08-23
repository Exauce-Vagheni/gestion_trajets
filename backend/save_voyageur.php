<?php
if (!empty(isset($_POST['nom'])) AND !empty(isset($_POST['postnom']))AND !empty(isset($_POST['prenom'])) AND !empty(isset($_POST['telephone']))) {
	$nom=htmlspecialchars($_POST['nom']);
	$postnom=htmlspecialchars($_POST['postnom']);
	$prenom=htmlspecialchars($_POST['prenom']);
	$telephone=htmlspecialchars($_POST['telephone']);
	$adresse=htmlspecialchars($_POST['adresse']);
	include("classes.php");
	$voyageur=new Voyageur();
	$voyageur->nom=$nom;
	$voyageur->postnom=$postnom;
	$voyageur->prenom=$prenom;
	$voyageur->telephone=$telephone;
	$voyageur->adresse=$adresse;
	try
		{
			include("bdd.php");
			$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$insert_percepteur=$connexion->prepare('INSERT INTO voyageurs(nom,postnom,prenom,telephone,adresse) VALUES(:nom,:postnom,:prenom,:telephone,:adresse)');
		$insert_percepteur->execute(array(
			'nom'=>$voyageur->nom,
			'postnom'=>$voyageur->postnom,
			'prenom'=>$voyageur->prenom,
			'telephone'=>$voyageur->telephone,
			'adresse'=>$voyageur->adresse
		));
			header("location:liste_voyageurs.php");
		}
		catch(PDOException $e)
		{
			echo 'Echec : '.$e->getMessage();
		}
}
else{
	echo "Veuillez renseigner tous les informations requis";
}


?>