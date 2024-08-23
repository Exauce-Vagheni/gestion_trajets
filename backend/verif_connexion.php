<?php
@session_start();

if (isset($_POST['identifiant']) && isset($_POST['password'])) {
    $identifiant = htmlspecialchars($_POST['identifiant']);
    $password = htmlspecialchars($_POST['password']);

    try {
include("bdd.php");
        $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $select = $connexion->prepare('SELECT id FROM admin WHERE username=:username AND password=:password');
        $select->execute(array(
            'username' => $identifiant,
            'password' => $password
        ));
        
        // Utilisation de fetchColumn() pour vérifier s'il y a une correspondance
        $resultat= $select->fetchAll();
        if(count($resultat)>0){
            $id_admin=$resultat[0]['id'];
        }
        if (isset($id_admin) AND $id_admin != false) {
            // Stocker l'ID de l'administrateur dans la session
            $_SESSION['id_admin'] = $id_admin;
            // Rediriger l'utilisateur vers une page appropriée (par exemple, "liste_annees.php")
            header("location: liste_annees.php");
            exit; // Assurez-vous de quitter le script après la redirection
        } else {
            echo "Mauvais identifiant ou mot de passe incorrect";
        }
    } catch (PDOException $e) {
        echo 'Echec : ' . $e->getMessage();
    }
}
?>