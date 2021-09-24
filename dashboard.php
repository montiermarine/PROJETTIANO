<?php
session_start();
require_once 'models/database.php';
require_once 'models/usersModel.php';
require_once 'models/eventsModel.php';
require_once 'models/commentsModel.php';
require_once 'controllers/dashboardcontroller.php';
require_once 'includes/header.php';
?>
<!-- MENU DASHBOARD-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <ul class="navbar-nav dashboard">
                    <hr class="sidebar-divider my-0">
                    <li class="nav-item text-center">
                        <a class="nav-link" href="dashboard.php">
                            <i class="color bi bi-speedometer titleDashboard"></i>
                            <span class="titleDashboard">DASHBOARD</span></a>
                    </li>
                    <hr class="sidebar-divider">
                    <div class="sidebar-heading text-center">
                        GESTION
                    </div>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="usersList.php" data-toggle="collapse"> 
                            <i class=" color bi bi-person-badge"></i>
                            <span>ADHÉRENTS</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="contributions.php" data-toggle="collapse">
                            <i class="color bi bi-cash-coin text-center"></i>
                            <span>COTISATIONS</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="donations.php" data-toggle="collapse">
                            <i class="color bi bi-cash-coin text-center"></i>
                            <span>DONS</span>
                        </a>
                    </li>
                    <hr class="sidebar-divider">
                    <div class="sidebar-heading text-center">
                        ACTUALITÉS
                    </div>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="articles.php" data-toggle="collapse">
                            <i class="color bi bi-blockquote-left"></i>
                            <span>BLOG</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="comments.php">
                            <i class="color bi bi-card-checklist"></i>
                            <span>COMMENTAIRES</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="calendrier.php">
                            <i class="color bi bi-calendar3"></i>
                            <span>CALENDRIER</span></a>
                    </li>
                    <hr class="sidebar-divider d-none d-md-block">
                </ul>
            </div>
    
    



            <!-- TABLEAU DE COMMANDES -->
            <div class="col-9 text-center">
                <div class="row">
                    <div class="col-6">
                        <h2>Adhérents</h2>
                        <table class="table table-responsive bg-danger table-hover border border-danger">
                            <thead>
                                <tr>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Mail</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($usersLast as $usersDetails) { ?>
                                <tr class="table-danger">
                                    <td><?= $usersDetails->firstname ?></td>
                                    <td><?= $usersDetails->lastname ?></td>
                                    <td><?= $usersDetails->mail ?></td>
                                </tr>
                                <?php } ?>     
                            </tbody>
                        </table>
                    </div>
                    <div class="col-6">
                        <h2>Cotisations</h2>
                        <table class="table table-responsive bg-warning table-hover border border-warning">
                            <thead>
                                <tr>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Réglement</th>
                                    <th scope="col">Type de Réglement</th>
                                    <th scope="col">Date</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-warning">
                                    <td>MICHAUD</td>
                                    <td>Cendrillon</td>
                                    <td>35</td>
                                    <td>ESP</td>
                                    <td>28/05/21</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-5">
                        <h2>Dons</h2>
                        <table class="table table-responsive bg-primary table-hover border border-primary">
                            <thead>
                                <tr>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Réglement</th>
                                    <th scope="col">Type de Réglement</th>
                                    <th scope="col">Date</th>
                                    <th scope="col"><a href=""></a></th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-primary">
                                    <td>MICHAUD</td>
                                    <td>20</td>
                                    <td>ESP</td>
                                    <td>28/05/21</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                        <div class="col-6">
                            <h2>Événements</h2>
                            <?php include 'calendrier.php';
                            ?>
                        </div>
                    
                    
                        <div class="col-6">
                            <h2>Blog</h2>
                            <table class="table table-responsive bg-info table-hover border border-info">
                                <thead>
                                    <tr>
                                        <th scope="col">Titre</th>
                                        <th scope="col">Publication</th>
                                        <th scope="col">Modification</th>
                                        <th scope="col">Suppression</th>

                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($eventsLast as $eventsDetails) { ?>
                                    <tr class="table-info">
                                        <td><?=$eventsDetails->title ?></td>
                                        <td><?=$eventsDetails->startDate ?></td>
                                        <td><a href="updateEvents.php?=id<?=$eventsDetails->id?>"><i class="bi bi-pen btn btn-warning"></i></a></td>
                                        <td><a href="articles.php"><i class="bi bi-trash-fill btn btn-danger"></i></a></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-6">
                            <h2>Commentaires</h2>
                            <table class="table bg-success table-responsive table-hover border border-success">
                                <thead>
                                    <tr>
                                        <th scope="col">Pseudo</th>
                                        <th scope="col">Commentaire</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Modification</th>
                                        <th scope="col">Suppression</th>

                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($commentsLast as $commentsDetails) { ?>
                                    <tr class="table-success">
                                        <td><?=$commentsDetails->username ?></td>
                                        <td><?=$commentsDetails->commentText ?></td>
                                        <td><?=$commentsDetails->date ?></td>
                                        <td><a href="updateComments.php?=id<?=$commentsDetails->id?>"><i class="bi bi-pen btn btn-warning"></i></a></td>
                                        <td><a href="comments.php"><i class="bi bi-trash-fill btn btn-danger"></i></a></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    
                </div>
            </div>
        </div>

        </body>
        </html>