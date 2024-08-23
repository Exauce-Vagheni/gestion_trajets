<?php include("../backend/fonctions.php"); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un voyageur</title>
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
        <?php include("nav.php");?>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Nouveau paiement
                    </div>
                    <div class="card-body">
                        <form method="POST" action="">
                        <p class="alert-danger" style="padding:5px;"><?php include("../backend/save_new_paiement.php"); ?></p>
                            <p>Enregistrer un trajet payée par le voyageur: <?php voyageur($_GET['id']); ?></p>
                            <div class="mb-3">
                                <label for="nom" class="form-label">trajet payée</label>
                                <select class="form-control" id="designation" name="designation" required>
                                   <?php include("../backend/recup_trajets_voyageur.php"); ?>
                                </select>
                            </div>
        
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Inclure Bootstrap JS et les dépendances -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
