<?php 
include("fonctions.php");		
      try
          {
          include("bdd.php");
              $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      $recup=$connexion->prepare('SELECT * FROM paiements WHERE anneeEncours=:anneeEnCours AND idvoyageur=:idvoyageur');
      $recup->execute(array('anneeEnCours' => $_SESSION['year'],'idvoyageur' => $_GET['id'] ));
         while($resultat=$recup->fetch()){
         ?>
             <tr>
                 <td><?php echo trajetDesignation($resultat['idtrajet']); ?></td>
                 <td><?php echo trajetMontant($resultat['idtrajet']); ?></td>
                 <td><?php echo $resultat['date_paiement']; ?></td>
             </tr>
      <?php
         } 
          }
      catch(PDOException $e)
          {
          echo 'Echec : '.$e->getMessage();
          }
?>
