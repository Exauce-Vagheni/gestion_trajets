<?php
      try
          {
          include("bdd.php");
              $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      $recup=$connexion->query('SELECT * FROM percepteurs');
         while($resultat=$recup->fetch()){
         ?>
            <tr>
                <td><?php echo $resultat["nom"];?></td>
                <td><?php echo $resultat["postnom"];?></td>
                <td><?php echo $resultat["telephone"];?></td>
                <td><?php echo $resultat["code"];?></td>
                <td><a href="?id=<?php echo $resultat["id_percepteur"];?>" class="btn btn-danger">Supprimer</a></td>
            </tr>
      <?php
         } 
          }
      catch(PDOException $e)
          {
          echo 'Echec : '.$e->getMessage();
          }

?>