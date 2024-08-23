<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des voyageurs</title>
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
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        Liste des paiements
                    <button class="btn btn-warning" style="margin: 5px;" onclick="window.print();">Imprimer</button>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Abonné</th>
                                    <th>Percepteur</th>
                                    <th>Designation trajet</th>
                                    <th>Montant du trajet</th>
                                    <th>Date de paiement</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php include("../backend/recup_paiements.php"); ?>
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
