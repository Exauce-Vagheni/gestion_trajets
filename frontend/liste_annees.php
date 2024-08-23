<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Années enregistrées</title>
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
            <h1 style="color: white;">TRAVEL-M</h1>
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
                      
                        
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h2>Années enregistrées</h2>
        <p>Veuillez selectionner une année pour voir la situation de la perception des trajets au courant de cette année pour chaque voyageur.</p>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <a style="margin-bottom:5px;" class="btn btn-primary" href="ajouter_annee.php">Ajouter une nouvelle année</a>
                        <ul class="list-group">
                            <?php include("../backend/recup_annees.php") ?>
                            <?php include("../backend/create_session_year.php") ?>
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
