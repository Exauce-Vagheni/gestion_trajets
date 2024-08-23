<?php
@session_start();
include("fonctions.php");
      try
          {
          include("bdd.php");
              $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      $recup=$connexion->prepare('SELECT * FROM paiements INNER JOIN voyageurs ON voyageurs.id_voyageur=paiements.idvoyageur WHERE anneeEnCours=:anneeEnCours');
      $recup->execute( array('anneeEnCours' => $_SESSION['year'] ));
         while($resultat=$recup->fetch()){
         ?>
             <tr>
                <td><?php echo $resultat["nom"];?></td>
                <td><?php echo Percepteur($resultat["idPercepteur"]);?></td>
                <td><?php echo trajetDesignation($resultat["idtrajet"]);?></td>
                <td><?php echo trajetMontant($resultat["idtrajet"]);?></td>
                <td><?php echo $resultat["date_paiement"];?></td>
            </tr>
      <?php
         } 
          }
      catch(PDOException $e)
          {
          echo 'Echec : '.$e->getMessage();
          }

?>