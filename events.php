<?php
session_start();
require_once 'models/database.php';
require_once 'models/eventsModel.php';
require_once 'models/commentsModel.php';
require_once 'controllers/eventsListController.php';
require_once 'includes/header.php';
?>
<div class="container-fluid">
    <h1 class="mt-4 text-center mb-4 ">ÉVÉNEMENTS</h1>
    <div class="row">
        <div class="col-12">
            <?php foreach ($eventsList as $eventsDetails) { ?>
                <div class="card bg-light mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= $eventsDetails->photo ?>" class="img-fluid">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?= $eventsDetails->title ?></h5>
                                <p class="card-text"><small>Date d'événement <?= $eventsDetails->startDate ?></small></p>
                                <p class="card-text"><?= $eventsDetails->content ?></p>
                                <p class="card-text"><small class="text-muted"> Date de publication <?= $eventsDetails->endDate ?></small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <?php if (isset($_SESSION['username'])) {?>
                        <form method="POST" action="events.php">
                            <div class="mb-3">
                                <label for="commentText">Commentaire</label>
                                <textarea type="text" name="commentText" class="form-control <?= !isset($formErrors['commentText']) ?: 'is-invalid' ?>" id="commentText" value="<?= @$_POST['commentText'] ?>"></textarea>
                                <small class="invalid-feedback"><?= @$formErrors['commentText'] ?></small>
                            </div>
                            <div class="class">

                                <?php if (!isset($_POST['content'])) { ?>
                                    <input type="hidden" value="<?= $eventsDetails->id ?>" name="hidden" />
                                    <input type="submit" class="btn btn-success mt-1 mb-5" value="Ajouter un commentaire" />
                            </div>
                        <?php } ?>
                        </form>
                            <?php    } else { ?>
                                <p>Afin de pouvoir commenter, connectez-vous</p>
                                <a href="login.php" class="btn btn-success">Connectez-vous</a>
                            <?php
                            }
                            ?>
                    </div>
                        <div class="card card-body bg-light">
                            <?php foreach ($commentsList as $commentsDetails) { ?>
                                <?php if ($commentsDetails-> id_events == $eventsDetails->id) { ?>
                                <div class="card-title">
                                    <strong class="me-auto"><?= $commentsDetails->username ?></strong></br>
                                    <small><?= $commentsDetails->date ?></small>
                                </div>
                                <div class="card-text">
                                    <p> <?= $commentsDetails->commentText ?> </p>
                                </div>
                        <?php }
                        } 
                        ?>

                        </div>
                </div>
        </div>
    <?php } ?>

    </div>


</div>
</div>

<?php
require_once 'includes/footer.php';
?>