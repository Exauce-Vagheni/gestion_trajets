<?php
@session_start();
if (!empty($_POST['designation']) && !empty($_GET['id'])) {
    $voyageur = htmlspecialchars($_GET['id']);
    
    function adminOrPrecepteur() {
        if (isset($_SESSION['id_admin'])) {
            return $_SESSION['id_admin'];
        } else if (isset($_SESSION['id_percepteur'])) {
            return $_SESSION['id_percepteur'];
        }
    }
    $id_percepteur = adminOrPrecepteur();
    
    $id_year = $_SESSION['year'];
    $id_trajet = htmlspecialchars($_POST['designation']); 
    try {
        include("bdd.php");
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $insert = $connexion->prepare('INSERT INTO paiements(idvoyageur, idPercepteur, idtrajet, anneeEnCours, date_paiement) VALUES(:idvoyageur, :idPercepteur, :idtrajet, :anneeEnCours, NOW())');
            $insert->execute(array(
                'idvoyageur' => $voyageur,
                'idPercepteur' => $id_percepteur,
                'idtrajet' => $id_trajet,
                'anneeEnCours' => $id_year
            ));
      
    } catch (PDOException $e) {
        echo 'Echec : ' . $e->getMessage();
    }
} else {
    echo "Les données necessaires doivent être fournies.";
}
?>