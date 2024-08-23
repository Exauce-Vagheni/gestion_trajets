<?php
if (!empty(isset($_POST['designation']))) {
	$designation=htmlspecialchars($_POST['designation']);
	try
		{
			include("bdd.php");
			$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$insert_trajet=$connexion->prepare('INSERT INTO annees(designation) VALUES(:designation)');
		$insert_trajet->execute(array(
			'designation'=>$designation
		));
			header("location:liste_annees.php");
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