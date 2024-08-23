<?php
      try
          {
          include("bdd.php");
              $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      $recup_annees=$connexion->query('SELECT * FROM annees');
         while($resultat=$recup_annees->fetch()){
         ?>
         <li class="list-group-item">
              <a class="btn btn-warning" href="liste_annees.php?year=<?php echo $resultat["designation"];?>">Année <?php echo $resultat["designation"];?></a>
         </li>
      <?php
         } 
          }

      catch(PDOException $e)
          {
          echo 'Echec : '.$e->getMessage();
          }

?>