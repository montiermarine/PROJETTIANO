<?php
session_start();
require_once 'models/database.php';
require_once 'models/eventsModel.php';
require_once 'config.php';
require_once 'controllers/addEventsController.php';
require_once 'includes/header.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <form method="POST" enctype="multipart/form-data"  action="addEvents.php">
                <div class="mb-3">
                    <label for="title">Titre</label>
                    <input type="text" name="title" class="form-control <?= !isset($formErrors['title']) ?: 'is-invalid' ?>" id="title" value="<?= @$_POST['title'] ?>" />
                    <small class="invalid-feedback"><?= @$formErrors['title'] ?></small>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-floating">Contenu article</label>
                    <textarea type="text" name="content" class="form-control <?= !isset($formErrors['content']) ?: 'is-invalid' ?>" id="content" value="<?= @$_POST['content'] ?>"></textarea>
                    <small class="invalid-feedback"><?= @$formErrors['content'] ?></small>
                </div>
                <div class="mb-3">
                    <label for="photo" class="form-floating">Photo</label>
                    <input type="file" name="photo" class="form-control <?= !isset($formErrors['photo']) ?: 'is-invalid' ?>" id="photo" value="<?= @$_POST['photo'] ?>" />
                    <small class="invalid-feedback"><?= @$formErrors['photo'] ?></small>
                </div>
                <div class="mb-3">
                    <label for="startDate" class="form-floating">Date de parution</label>
                    <input type="date" name="startDate" class="form-control <?= !isset($formErrors['startDate']) ?: 'is-invalid' ?>" id="startDate" value="<?= @$_POST['startDate'] ?>" />
                    <small class="invalid-feedback"><?= @$formErrors['startDate'] ?></small>
                </div>
                <div class="mb-3">
                    <label for="endDate" class="form-floating">Date Événements</label>
                    <input type="date" name="endDate" class="form-control <?= !isset($formErrors['endDate']) ?: 'is-invalid' ?>" id="endDate" value="<?= @$_POST['endDate'] ?>" />
                    <small class="invalid-feedback"><?= @$formErrors['endDate'] ?></small>
                </div>
                <input type="submit" class="btn btn-success" value="Envoyer"/>

            </form>
        </div>
    </div>
</div>


<?php
require_once 'includes/footer.php';
?>