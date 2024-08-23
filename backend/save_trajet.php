<?php
if (!empty(isset($_POST['designation'])) AND !empty(isset($_POST['montant']))) {
	$designation=htmlspecialchars($_POST['designation']);
	$montant=htmlspecialchars($_POST['montant']);
	try
		{
			include("bdd.php");
			$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$insert_trajet=$connexion->prepare('INSERT INTO trajets(designation,montant) VALUES(:designation,:montant)');
		$insert_trajet->execute(array(
			'designation'=>$designation,
			'montant'=>$montant
		));
			header("location:liste_trajets.php");
			
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