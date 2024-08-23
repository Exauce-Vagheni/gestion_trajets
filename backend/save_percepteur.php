<?php
if (!empty(isset($_POST['nom'])) AND !empty(isset($_POST['postnom'])) AND !empty(isset($_POST['telephone']))) {
	$nom=htmlspecialchars($_POST['nom']);
	$postnom=htmlspecialchars($_POST['postnom']);
	$telephone=htmlspecialchars($_POST['telephone']);
	$code=str_shuffle($telephone); 
	try
		{
			include("bdd.php");
			$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$insert_percepteur=$connexion->prepare('INSERT INTO percepteurs(nom,postnom,telephone,code) VALUES(:nom,:postnom,:telephone,:code)');
		$insert_percepteur->execute(array(
			'nom'=>$nom,
			'postnom'=>$postnom,
			'telephone'=>$telephone,
			'code'=>$code
		));
			header("location:liste_percepteur.php");
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