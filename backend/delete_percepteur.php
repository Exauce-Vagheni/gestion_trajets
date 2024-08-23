<?php
if (!empty(isset($_GET['id']))) {
	$id=htmlspecialchars($_GET['id']);
	try
		{
			include("bdd.php");
			$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$delete_percepteur=$connexion->prepare('DELETE FROM percepteurs WHERE id_percepteur=:id_percepteur');
		$delete_percepteur->execute(array(
			'id_percepteur'=>$id
		));
			@header("location:liste_percepteur.php");
			
		}
		catch(PDOException $e)
		{
			echo 'Echec : '.$e->getMessage();
		}


}

?>