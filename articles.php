<?php
session_start();
require_once 'models/database.php';
require_once 'models/eventsModel.php';
require_once 'models/commentsModel.php';
require_once 'controllers/eventsListController.php';
require_once 'includes/header.php';
?>
<div class="container">
    <h1>BLOG</h1>
    <div class="row">
        <div class="col-12">
            <table class="table table-responsive table-stripped border border-info">
                <thead>
                    <tr>
                        <th scope="col">Titre</th>
                        <th scope="col">Date de publication</th>
                        <th scope="col">Date d'événements</th>
                        <th scope="col">Modification</th>
                        <th scope="col">Suppression</th>
                        <th scope="col"><a href="addEvents.php"><i class="bi bi-blockquote-left btn btn-success"></i></a></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($eventsList as $eventsDetails) { ?>
                        <tr class="table">
                            <td><?= $eventsDetails->title ?></td>
                            <td><?= $eventsDetails->startDate ?></td>
                            <td><?= $eventsDetails->endDate ?></td>
                            <td><a type="button" class="btn btn-danger" href="updateEvents.php?id=<?= $eventsDetails->id ?>"><i class="bi bi-pen"></i></a></td>
                            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-delete="<?= $eventsDetails->id ?>"><i class="bi bi-trash btn btn-primary"></i></button></td>

                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Suppression d'un article du blog</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form method="POST" action="articles.php">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label"></label>
                            <!-- on utilise une balise p car on doit afficher un message dans la modal !-->
                            <p> SOUHAITEZ-VOUS SUPPRIMER CET ARTICLE ?</br>
                                Vous allez être rediriger vers le Dashboard quand celle-ci sera effective. </br>
                            </p>
                            <!-- Il est important que le name soit présent dans l'input car c'est grace à celui ci que nous pouvons recupérer valeur dans le POST-->
                            <input type="hidden" class="form-control" name="recipient-name" id="recipient-name" value="<?= $eventsDetails->id ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Supprimer" />
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
</body>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/deleteArticle.js"></script>

</html>