<?php
      try
          {
          include("bdd.php");
              $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      $recup=$connexion->query('SELECT * FROM voyageurs');
         while($resultat=$recup->fetch()){
         ?>
             <tr>
                <td><?php echo $resultat["nom"];?></td>
                <td><?php echo $resultat["postnom"];?></td>
                <td><?php echo $resultat["prenom"];?></td>
                <td><?php echo $resultat["telephone"];?></td>
                <td><?php echo $resultat["adresse"];?></td>
                <td><a href="apropos_voyageur.php?id=<?php echo $resultat["id_voyageur"];?>" class="btn btn-primary">Consulter</a></td>
                <td><a href="?id=<?php echo $resultat["id_voyageur"];?>" class="btn btn-danger">Supprimer</a></td>
            </tr>
      <?php
         } 
          }
      catch(PDOException $e)
          {
          echo 'Echec : '.$e->getMessage();
          }

?>