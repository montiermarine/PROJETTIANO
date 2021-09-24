<?php
session_start();
require_once 'models/database.php';
require_once 'models/usersModel.php';
require_once 'config.php';
require_once 'controllers/updatePasswordController.php';
require_once 'includes/header.php';
?>
<div class="container-fluid">
    <div class="row">
    <h1> MODIFIEZ VOS INFORMATIONS</h1>
        <div class="col-md-5">
            <form method="POST" action="updatePassword.php">
                <!-- On affiche qu'une erreur est survenue lors de l'envoie du formulaire !-->
                <?php if (isset($formErrors['db'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $formErrors['db'] ?>
                    </div>
                <?php } ?>
                <div class="mt-4 mb-3">
                    <label for="password" class="form-label">Nouveau Mot de passe</label>
                    <!-- On crée une ternaire dans l'input pour verifier si celui ci est "rempli" si ce n'est pas le cas le message d'erreur apparaitra
          On stock le $_POST dans la value afin de faire transiter les informations du formulaire à la db!-->
                    <input type="password"  name="password" class="form-control <?= !empty($formErrors['password']) ? 'is-invalid' : ''; ?>" id="password" value="<?= @$_POST['password'] ?>" />
                    <small class="invalid-feedback"><?= @$formErrors['password']; ?></small>
                </div>
                <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Confirmation du nouveau mot de passe </label>
                    <input type="password" name="confirmPassword" class="form-control <?= !empty($formErrors['confirmPassword']) ? 'is-invalid' : ''; ?>" id="confirmPassword" value="<?= @$_POST['confirmPassword'] ?>" />
                    <small class="invalid-feedback"><?= @$formErrors['firstname']; ?></small>
                </div>
                <input type="submit" class="btn btn-success" value="Envoyer" />
            </form>
        </div>
<?php
require_once 'includes/footer.php';
?>