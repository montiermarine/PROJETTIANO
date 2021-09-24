<?php
session_start();
require_once 'models/database.php';
require_once 'models/commentsModel.php';
require_once 'controllers/commentsController.php';
require_once 'includes/header.php';
?>
<div class="container">
    <h1>COMMENTAIRES</h1>
    <div class="row">
        <div class="col-12">
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
                <?php foreach ($commentsList as $commentsDetails) { ?>
                    <tr class="table-success">
                        <td><?=$commentsDetails->username ?></td>
                        <td><?=$commentsDetails->commentText ?></td>
                        <td><?=$commentsDetails->date ?></td>
                        <td><a href="updateComments.php?id=<?=$commentsDetails->id ?>"><i class="bi bi-pen btn btn-warning"></i></a></td>
                        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-delete="<?= $commentsDetails->id ?>"><i class="bi bi-trash btn btn-primary"></i></button></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Suppression d'un commentaire</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form method="POST" action="comments.php">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label"></label>
                            <!-- on utilise une balise p car on doit afficher un message dans la modal !-->
                            <p> SOUHAITEZ-VOUS SUPPRIMER CE COMMENTAIRE ?</br>
                                Vous allez être rediriger vers le Dashboard quand celle-ci sera effective. </br>
                            </p>
                            <!-- Il est important que le name soit présent dans l'input car c'est grace à celui ci que nous pouvons recupérer valeur dans le POST-->
                            <input type="hidden" class="form-control" name="recipient-name" id="recipient-name" value="<?= $commentsDetails->id ?>">
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


</div>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/deleteComments.js"></script>

</body>
</html>