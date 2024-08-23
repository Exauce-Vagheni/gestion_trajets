<?php
      try
          {
          include("bdd.php");
              $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      $recup=$connexion->query('SELECT * FROM trajets');
         while($resultat=$recup->fetch()){
         ?>
         <tr>
            <td><?php echo $resultat["designation"];?></td>
            <td><?php echo $resultat["montant"];?>FC</td>
            <td>
                <a href="?id=<?php if(isset($_SESSION['id_admin'])){echo $resultat["id_trajet"];}?>" class="btn btn-danger">Supprimer</a>
            </td>
        </tr>
      <?php
         } 
          }

      catch(PDOException $e)
          {
          echo 'Echec : '.$e->getMessage();
          }

?>