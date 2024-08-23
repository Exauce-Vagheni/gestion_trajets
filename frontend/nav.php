<?php
    @session_start();


 include("../backend/entete_verif.php"); ?>

        <h1 style="color: white;">TRAVEL-M</h1>
        
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start" id="sidebar" tabindex="-1">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title">Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body" id="menus">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="liste_annees.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="liste_voyageurs.php">Voyageurs abonnés</a>
                        </li>
                        <?php
                            if(isset($_SESSION["id_admin"])){
                                ?>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="liste_percepteur.php">Percepteurs</a>
                        </li> -->
                                <?php
                            }
                        ?>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="liste_trajets.php">Trajets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="liste_paiements.php">Paiements</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="deconnecter.php">Se deconnecter</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <p style="color:white;">Année en cours: <?php @session_start(); echo $_SESSION['year']; ?></p>