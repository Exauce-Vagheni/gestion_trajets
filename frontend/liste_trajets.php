<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trajets Enregistrées</title>
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
    </style>
</head>
<body>
    <!-- Barre de navigation verticale -->
    <nav class="navbar navbar-expand-lg navbar-dark">
       <?php include("nav.php"); ?>
    </nav>

    <div class="container mt-5">
        <h2>trajets enregistrées</h2>
        <?php
                            if(isset($_SESSION["id_admin"])){
                                ?>
                       <a class="btn btn-primary" style="margin-bottom: 5px;" href="ajouter_trajet.php">Ajouter une trajet</a>
                                <?php
                            }
                        ?>
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Désignation du trajet</th>
                                    <th>Montant du trajet</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php include("../backend/recup_trajets.php");?>
                               <?php include("../backend/delete_trajet.php");?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Inclure Bootstrap JS et les dépendances -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
