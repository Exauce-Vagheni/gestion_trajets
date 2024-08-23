<?php
if (!empty(isset($_GET['id']))) {
	$id=htmlspecialchars($_GET['id']);
	try
		{
			include("bdd.php");
			$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$delete_percepteur=$connexion->prepare('DELETE FROM voyageurs WHERE id_voyageur=:id_voyageur');
		$delete_percepteur->execute(array(
			'id_voyageur'=>$id
		));
			@header("location:liste_voyageurs.php");
			
		}
		catch(PDOException $e)
		{
			echo 'Echec : '.$e->getMessage();
		}


}

?>