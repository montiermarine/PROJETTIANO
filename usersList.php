<?php
session_start();
require_once 'models/database.php';
require_once 'models/usersModel.php';
require_once 'controllers/usersListController.php';
require_once 'includes/header.php';

?>
<div class="container-fluid">
    <h1>ADHÉRENTS</h1>
    <div class="row">
        <div class="col-12">
        <table class="table table-responsive table-hover border border-secondary">
                            <thead>
                                <tr>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Pseudo</th>
                                    <th scope="col">Mail</th>
                                    <th scope="col">Adresse</th>
                                    <th scope="col">Numéro de téléphone</th>
                                    <th scope="col">Modification</th>
                                    <th scope="col">Suppression</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($usersList as $usersDetails) {
                              ?>
                                <tr class="table-light">
                                    <td><?= $usersDetails->lastname ?></td>
                                    <td><?= $usersDetails->firstname ?></td>
                                    <td><?= $usersDetails->username ?></td>
                                    <td><?= $usersDetails->address ?></td>
                                    <td><?= $usersDetails->mail ?></td>
                                    <td><?= $usersDetails->phoneNumber ?></td>
                                    <td><button><i class="bi bi-pen text-success"></i></button></td>
                                    <td><button><i class="bi bi-trash text-danger"></i></button></td>
                                    
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>

        </div>
    </div>
</div>
</body>
</html>