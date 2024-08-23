<?php
@session_start();

if (isset($_POST['telephone']) && isset($_POST['code'])) {
    $telephone = htmlspecialchars($_POST['telephone']);
    $code = htmlspecialchars($_POST['code']);

    try {
        include("bdd.php");
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $select = $connexion->prepare('SELECT id_percepteur FROM percepteurs WHERE telephone=:telephone AND code=:code');
        $select->execute(array(
            'telephone' => $telephone,
            'code' => $code
        ));
        
        $resultat= $select->fetch();
        $id_percepteur=$resultat[0];

        if ($id_percepteur !== false) {
            // Stocker l'ID de l'administrateur dans la session
            $_SESSION['id_percepteur'] = $id_percepteur;
            // Rediriger l'utilisateur vers une page appropriée
            header("location: liste_annees.php");
            exit; 
        } else {
            echo "Mauvais numero de telephone ou code incorrect";
        }
    } catch (PDOException $e) {
        echo 'Echec : ' . $e->getMessage();
    }
}
?>