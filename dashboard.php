<?php
session_start();
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
                            <i class="bi bi-speedometer titleDashboard"></i>
                            <span class="titleDashboard">DASHBOARD</span></a>
                    </li>
                    <hr class="sidebar-divider">
                    <div class="sidebar-heading text-center">
                        GESTION
                    </div>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="usersList.php" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <i class="bi bi-person-badge"></i>
                            <span>ADHÉRENTS</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="contributions.php" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                            <i class="bi bi-cash-coin text-center"></i>
                            <span>COTISATIONS</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="donations.php" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                            <i class="bi bi-cash-coin text-center"></i>
                            <span>DONS</span>
                        </a>
                    </li>
                    <hr class="sidebar-divider">
                    <div class="sidebar-heading text-center">
                        ACTUALITÉS
                    </div>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="articles.php" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                            <i class="bi bi-blockquote-left"></i>
                            <span>BLOG</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="comments.php">
                            <i class="bi bi-card-checklist"></i>
                            <span>COMMENTAIRES</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tables.html">
                            <i class="bi bi-calendar3"></i>
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
                        <table class="table table-responsive table-hover border border-secondary">
                            <thead>
                                <tr>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-light">
                                    <td>MICHAUD</td>
                                    <td>Cendrillon</td>
                                    <td>28/05/21</td>
                                </tr>
                                <tr class="table-danger">
                                    <td>BARON</td>
                                    <td>Denise</td>
                                    <td>28/05/21</td>
                                </tr>
                                <tr class="table-light">
                                    <td>TABOR</td>
                                    <td>Chandonnet</td>
                                    <td>28/05/21</td>
                                </tr>
                                <tr class="table-danger">
                                    <td>DESNOYER</td>
                                    <td>Martin</td>
                                    <td>28/05/21</td>
                                </tr>
                                <tr class="table-light">
                                    <td>MOREL</td>
                                    <td>Maurice</td>
                                    <td>28/05/21</td>
                                </tr>
                                <tr class="table-danger">
                                    <td>BAMBARA</td>
                                    <td>Abu</td>
                                    <td>28/05/21</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-6">
                        <h2>Cotisations</h2>
                        <table class="table table-responsive table-hover border border-secondary">
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
                                <tr class="table-light">
                                    <td>MICHAUD</td>
                                    <td>Cendrillon</td>
                                    <td>35</td>
                                    <td>ESP</td>
                                    <td>28/05/21</td>
                                </tr>
                                <tr class="table-success">
                                    <td>BARON</td>
                                    <td>Denise</td>
                                    <td>35</td>
                                    <td>CB</td>
                                    <td>28/05/21</td>
                                </tr>
                                <tr class="table-light">
                                    <td>TABOR</td>
                                    <td>Chandonnet</td>
                                    <td>35</td>
                                    <td>CHQ</td>
                                    <td>28/05/21</td>
                                </tr>
                                <tr class="table-success">
                                    <td>DESNOYER</td>
                                    <td>Martin</td>
                                    <td>35</td>
                                    <td>CB</td>
                                    <td>28/05/21</td>
                                </tr>
                                <tr class="table-light">
                                    <td>MOREL</td>
                                    <td>Maurice</td>
                                    <td>35</td>
                                    <td>ESP</td>
                                    <td>28/05/21</td>
                                </tr>
                                <tr class="table-success">
                                    <td>BAMBARA</td>
                                    <td>Abu</td>
                                    <td>35</td>
                                    <td>CHQ</td>
                                    <td>28/05/21</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-5">
                        <h2>Dons</h2>
                        <table class="table table-responsive table-hover border border-secondary">
                            <thead>
                                <tr>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Réglement</th>
                                    <th scope="col">Type de Réglement</th>
                                    <th scope="col">Date</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="table-light">
                                    <td>MICHAUD</td>
                                    <td>20</td>
                                    <td>ESP</td>
                                    <td>28/05/21</td>
                                </tr>
                                <tr class="table-primary">
                                    <td>BARON</td>
                                    <td>3200</td>
                                    <td>CB</td>
                                    <td>28/05/21</td>
                                </tr>
                                <tr class="table-light">
                                    <td>TABOR</td>
                                    <td>35</td>
                                    <td>CHQ</td>
                                    <td>28/05/21</td>
                                </tr>
                                <tr class="table-primary">
                                    <td>DESNOYER</td>
                                    <td>450</td>
                                    <td>CB</td>
                                    <td>28/05/21</td>
                                </tr>
                                <tr class="table-light">
                                    <td>MOREL</td>
                                    <td>65</td>
                                    <td>ESP</td>
                                    <td>28/05/21</td>
                                </tr>
                                <tr class="table-primary">
                                    <td>BAMBARA</td>
                                    <td>100</td>
                                    <td>CHQ</td>
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
                            <table class="table table-responsive table-hover border border-secondary">
                                <thead>
                                    <tr>
                                        <th scope="col">Titre</th>
                                        <th scope="col">Publication</th>
                                        <th scope="col">Modification</th>
                                        <th scope="col">Suppression</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="table-light">
                                        <td>Des Vacances adaptés</td>
                                        <td>20/06/2021</td>
                                        <td><button><i class="bi bi-pen text-success"></i></button></td>
                                        <td><button><i class="bi bi-trash text-danger"></i></button></td>
                                    </tr>
                                    <tr class="table">
                                        <td>Citizen Day l'Oréal</td>
                                        <td>20/06/2021</td>
                                        <td><button><i class="bi bi-pen text-success"></i></button></td>
                                        <td><button><i class="bi bi-trash text-danger"></i></button></td>
                                    </tr>
                                    <tr class="table-light">
                                        <td>Cross Notre-Dame de Noyon</td>
                                        <td>20/06/2021</td>
                                        <td><button><i class="bi bi-pen text-success"></i></button></td>
                                        <td><button><i class="bi bi-trash text-danger"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-6">
                            <h2>Commentaires</h2>
                            <table class="table table-responsive table-hover border border-secondary">
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
                                    <tr class="table-light">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><button><i class="bi bi-pen text-success"></i></button></td>
                                        <td><button><i class="bi bi-trash text-danger"></i></button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>






</body>

</html>