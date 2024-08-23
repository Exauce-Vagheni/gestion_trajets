<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rechercher des voyageurs</title>
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
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" id="sidebar" tabindex="-1">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title">Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="page_accueil_admin.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ajouter_voyageur.php">Ajouter un voyageur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="liste_voyageurs.php">Liste des voyageurs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ajouter_percepteur.php">Ajouter un Percepteur</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="liste_percepteurs.php">Liste des Percepteurs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ajouter_trajet.php">Ajouter une trajet</a>
                        </li>
                        <!-- Ajoutez d'autres liens de navigation ici -->
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Rechercher des voyageurs
                    </div>
                    <div class="card-body">
                        <form method="POST" action="rechercher_voyageurs.php">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Rechercher un voyageur..." name="recherche">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">Rechercher</button>
                                </div>
                            </div>
                        </form>
                        <!-- Afficher les résultats de la recherche ici -->
                        <ul class="list-group">
                            <li class="list-group-item">Résultat 1</li>
                            <li class="list-group-item">Résultat 2</li>
                            <!-- Ajoutez d'autres résultats de la recherche ici -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Inclure Bootstrap JS et les dépendances -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
