<?php
	function voyageur($id){
		 try
          {
          include("bdd.php");
              $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      $recup=$connexion->prepare('SELECT nom,postnom,prenom FROM voyageurs WHERE id_voyageur=:id_voyageur');
      $recup->execute(array('id_voyageur' =>$id));
         while($resultat=$recup->fetch()){
         ?>
        	<strong><?php echo $resultat["nom"]." ".$resultat["postnom"]." ".$resultat["prenom"]; ?>
      <?php
         } 
          }

      catch(PDOException $e)
          {
          echo 'Echec : '.$e->getMessage();
          }
	}

	function Percepteur($id){
    if($id==876){
      return "Administrateur";
    }else{
      try
          {
          include("bdd.php");
              $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      $recup=$connexion->prepare('SELECT nom,postnom FROM percepteurs WHERE id_percepteur=:id_percepteur');
      $recup->execute(array('id_percepteur' =>$id));
         while($resultat=$recup->fetch()){
          return $resultat["nom"]." ".$resultat["postnom"];
         } 
          }

      catch(PDOException $e)
          {
          echo 'Echec : '.$e->getMessage();
          }
    }
		 
	}

function trajetDesignation($id){
		 try
          {
          include("bdd.php");
              $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      $recup=$connexion->prepare('SELECT designation FROM trajets WHERE id_trajet=:id_trajet');
      $recup->execute(array('id_trajet' =>$id));
         while($resultat=$recup->fetch()){
      		return $resultat["designation"];
         } 
          }

      catch(PDOException $e)
          {
          echo 'Echec : '.$e->getMessage();
          }
	}
	function trajetMontant($id){
		 try
          {
          include("bdd.php");
              $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      $recup=$connexion->prepare('SELECT montant FROM trajets WHERE id_trajet=:id_trajet');
      $recup->execute(array('id_trajet' =>$id));
         while($resultat=$recup->fetch()){
      		return $resultat["montant"];
         } 
          }

      catch(PDOException $e)
          {
          echo 'Echec : '.$e->getMessage();
          }
	}


?>