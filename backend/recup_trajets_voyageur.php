<?php
      try
          {
          include("bdd.php");
              $connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      $recup=$connexion->query('SELECT * FROM trajets');
         while($resultat=$recup->fetch()){
         ?>
        <option value="<?php echo $resultat["id_trajet"]; ?>"> <?php echo $resultat["designation"]; ?></option>
      <?php
         } 
          }

      catch(PDOException $e)
          {
          echo 'Echec : '.$e->getMessage();
          }

?>