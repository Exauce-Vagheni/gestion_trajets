<?php
@session_start();
include("../backend/entete_verif.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations sur l'voyageur</title>
    <!-- Inclure Bootstrap CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Styles personnalisés */
        body {
            background-color: #f4f4f4;
        }
        .navbar {
            background-color: #333;
        }
        .navbar-dark .navbar-toggler-icon {
            background-color: #fff;
        }
        .navbar-dark .navbar-nav .nav-link {
            color: #fff;
        }
        .navbar-dark .navbar-nav .nav-link:hover {
            color: #ccc;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }
        .trajets-table {
            margin-top: 20px;
        }
        @media print{
            .btn,#menus{
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Barre de navigation verticale -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <?php include("nav.php"); ?>
    </nav>

    <div class="container mt-5">
        <h2>Informations sur le voyageur</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Détails de le voyageur
                    </div>
                    <div class="card-body">
                       <?php include("../backend/recup_infos_voyageur.php");?>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Trajets payées par l'abonné pour l'année: <?php echo $_SESSION['year']; ?>
                    </div>
                    <div class="card-body">
                        <table class="table trajets-table">
                            <thead>
                                <tr>
                                    <th>Désignation du trajet</th>
                                    <th>Montant du trajet</th>
                                    <th>Date de paiement</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include("../backend/recup_paiements_voyageur.php"); ?>
                            </tbody>
                        </table>
                        <a class="btn btn-primary" style="margin: 5px;" href="new_paiement.php?id=<?php echo $_GET['id']; ?>">Nouveau paiement</a>
                        <button class="btn btn-warning" onclick="window.print()">Imprimer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Inclure Bootstrap JS et les dépendances -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
