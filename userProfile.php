<?php
session_start();
require_once 'models/database.php';
require_once 'models/usersModel.php';
require_once 'config.php';
require_once 'controllers/userProfileController.php';
require_once 'includes/header.php';
?>
<div class="container-fluid">
  <div class="row">
    <h1>Profil Utilisateur</h1>
    <div class="col-8">
      <div class="card mb-4">
        <div class="card-body">
          <p>Bienvenue sur ton profil utilisateur, <?= $usersProfile->username ?></p>
        </div>
      </div>
      <ol class="list-group mb-5">
        <li class="list-group-item list-group-item-action list-group-item-secondary">Nom : <?= $usersProfile->lastname ?></li>
        <li class="list-group-item list-group-item-action list-group-item-secondary">Prénom : <?= $usersProfile->firstname ?></li>
        <li class="list-group-item list-group-item-action list-group-item-secondary">Pseudo : <?= $usersProfile->username ?></li>
        <li class="list-group-item list-group-item-action list-group-item-secondary">Numéro de téléphone : <?= $usersProfile->phoneNumber ?></li>
        <li class="list-group-item list-group-item-action list-group-item-secondary">Adresse e-mail : <?= $usersProfile->mail ?></li>
        <li class="list-group-item list-group-item-action list-group-item-secondary">Adresse : <?= $usersProfile->address ?></li>
      </ol>
    </div>
    <div class="col-12 d-flex justify-content-center">
      <a href="updateProfile.php?id=<?= $usersProfile->id ?>" class="btn btn-danger">Modifier le profil</a>
      <a href="updatePassword.php?id=<?= $usersProfile->id ?>" class="btn btn-danger ">Modifier le mot de passe</a>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-delete="<?= $usersProfile->id ?>"><i class="bi bi-trash-fill"></i></button>
    </div>
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Suppression de compte utilisateur</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- on utilise la méthode POST pour quela transition des données ne soit pas visible dans l'url-->
            <form method="POST" action="userProfile.php?id=<?= $usersProfile->id ?>">
              <div class="mb-3">
                <label for="recipient-name" class="col-form-label"></label>
                <!-- on utilise une balise p car on doit afficher un message dans la modal !-->
                <p> SOUHAITEZ-VOUS SUPPRIMER VOTRE COMPTE ?</br>
                  Vous allez être rediriger vers l'accueil quand celle-ci sera effective. </br>
                </p>
                <!-- Il est important que le name soit présent dans l'input car c'est grace à celui ci que nous pouvons recupérer valeur dans le POST-->
                <input type="hidden" class="form-control" name="recipient-name" id="recipient-name" value="<?= $usersProfile->id ?>">
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
<?php
require_once 'includes/footer.php';
?>