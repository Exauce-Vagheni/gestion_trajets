<?php
if (isset($_GET['id'])) {
        try
          {
          include("bdd.php");
              $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      $recup=$connexion->prepare('SELECT * FROM voyageurs WHERE id_voyageur=:id_voyageur');
      $recup->execute(array('id_voyageur' => htmlspecialchars($_GET['id'])));
         while($resultat=$recup->fetch()){
         ?>
             <p><strong>Nom: </strong><?php echo $resultat["nom"];?></p>
             <p><strong>Postnom: </strong> <?php echo $resultat["postnom"];?></p>
             <p><strong>Prénom: </strong><?php echo $resultat["prenom"];?></p>
             <p><strong>Numéro de téléphone: </strong><?php echo $resultat["telephone"];?></p>
             <p><strong>Adresse: </strong><?php echo $resultat["adresse"];?></p>
      <?php
         } 
          }
      catch(PDOException $e)
          {
          echo 'Echec : '.$e->getMessage();
          }
}else{
    header("location:liste_voyageurs.php");
}
     

?>