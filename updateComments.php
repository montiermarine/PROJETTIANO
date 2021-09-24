<?php
session_start();
require_once 'models/database.php';
require_once 'models/commentsModel.php';
require_once 'controllers/updateCommentsController.php';
require_once 'includes/header.php';
?>

<div class="container">
    <div class="col">
        <div class="col-6">
            <form method="POST" action="updateComments.php?id=<?=$_GET['id']; ?>">
                <div class="mb-3">
                    <label for="commentText">Commentaire</label>
                    <textarea type="text" name="commentText" class="form-control <?= !isset($formErrors['commentText']) ?: 'is-invalid' ?>" id="commentText" value="<?= @$_POST['commentText'] ?>"></textarea>
                    <small class="invalid-feedback"><?= @$formErrors['commentText'] ?></small>
                </div>
                <div class="class">
                        <input type="submit" class="btn btn-success mt-1 mb-5" value="Ajouter un commentaire" />
                </div>
            </form>
        </div>
    </div>

</div>

<?php 
require_once 'includes/footer.php';
?>