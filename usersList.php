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
            <table class="table table-responsive table-hover  table-primary table-stripped border border-secondary">
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
                            <td><?= $usersDetails->mail ?></td>
                            <td><?= $usersDetails->address ?></td>
                            <td><?= $usersDetails->phoneNumber ?></td>
                            <td><a href="updateProfile.php?id=<?= $usersDetails->id ?>"><i class="bi bi-pen  btn btn-danger"></i></a></td>
                            <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-delete="<?= $usersDetails->id ?>"><i class="bi bi-trash-fill"></i></button></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel">Suppression de compte utilisateur</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- on utilise la méthode POST pour quela transition des données ne soit pas visible dans l'url-->
                            <form method="POST" action="usersList.php?id=<?= $usersDetails->id ?>">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label"></label>
                                    <!-- on utilise une balise p car on doit afficher un message dans la modal !-->
                                    <p> SOUHAITEZ-VOUS SUPPRIMER VOTRE COMPTE ?</br>
                                        Vous allez être rediriger vers le Dashboard quand celle-ci sera effective. </br>
                                    </p>
                                    <!-- Il est important que le name soit présent dans l'input car c'est grace à celui ci que nous pouvons recupérer valeur dans le POST-->
                                    <input type="hidden" class="form-control" name="recipient-name" id="recipient-name" value="<?= $usersDetails->id ?>">
                                </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">NON</button>
                            <button type="submit" class="btn btn-success">OUI</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/deleteModal.js"></script>
</body>
</html>