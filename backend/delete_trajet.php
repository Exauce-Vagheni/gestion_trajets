<?php
if (!empty(isset($_GET['id']))) {
	$id=htmlspecialchars($_GET['id']);
	try
		{
			include("bdd.php");
			$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$delete_trajet=$connexion->prepare('DELETE FROM trajets WHERE id_trajet=:id_trajet');
		$delete_trajet->execute(array(
			'id_trajet'=>$id
		));
			@header("location:liste_trajets.php");
			
		}
		catch(PDOException $e)
		{
			echo 'Echec : '.$e->getMessage();
		}


}

?>