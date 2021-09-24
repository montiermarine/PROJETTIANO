<?php
session_start();
require_once 'models/database.php';
require_once 'models/eventsModel.php';
require_once 'controllers/eventsLastController.php';
require_once 'includes/header.php';

?>
<!--Description association-->
<div class="container-fluid bg-light">
  <div class="row">
    <div class="col-12 bold mt-5 text-center">
      <h2>Bienvenue sur le site de l'association Tiano</h2>
    </div>
    <div class="col-10 ms-auto me-auto mb-5 mt-5">
      <p>L'association TIANO a été fondée en janvier 2016, après l'annonce de la Rétinite Pigmentaire chez Tiago et Lino.<br />
        Suite à l'annonce brutale et au manque d'implication du corps médical dans le suivi des familles, une idée à germé dans l'esprit de la Présidente : Accompagner les enfants et les famille face à cette maladie génétique.<br />
        Avril 2019, L'association est enfin créée.<br />
        Cette association aide déjà Tiago et Lino face à leur maladie. Des événements et levées de fonds sont régulièrement faits pour financer la recherche et acheter du matériel spécifique.<br />
        Il est aussi primordiale pour sa Présidente, d'être présente dans le milieu associatif local, de partager des moments de convivialités chaque année avec les bénévoles et adhérents lors de sortie annuelle.<br />

      </p>
      <div class="col-12 text-center mt-5 mb-5">
        <a class=" text-center btn btn-info" href="signin.php" role="button">Rejoignez-nous !</a>
      </div>
    </div>
  </div>
</div>
<!--Évenements-->
<div class="container-fluid text-center mt-5">
  <div class="row mt-5">
    <div class="col-12 col-md-6 mt-4 d-flex justify-content-center">
      <div class="card" style="width: 25rem;">
      <?php  foreach($eventsLast as $eventsDetails)?>
        <img src="<?= $eventsDetails->photo ?>" class="card-img-top">
        <div class="card-body">
          <h2 class="card-title"><?= $eventsDetails->title ?></h2>
          <p class="card-text"><?= $eventsDetails->content ?></p></br>
          <p class="text-muted"><?= $eventsDetails->endDate ?></p>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6 mt-5  d-flex justify-content-center">
      <div class="card" style="width: 25rem;">
      <?php foreach($eventsBefore as $eventsDetails) ?>
        <img src="<?= $eventsDetails->photo ?>" class="card-img-top" id="logotiano">
        <div class="card-body">
          <h2 class="card-title">Évenement à venir : <?=$eventsDetails->title ?></h2>
          <p class="card-text"><?=$eventsDetails->content ?></p></br>
          <p class="text-muted"><?=$eventsDetails->startDate ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="row text-center mt-5 mb-5">
    <div class="col-12 mt-5 mb-5">
      <a href="calendrier.php" class="btn btn-info">Calendrier des Événements</a>
    </div>
  </div>
</div>
<?php
require_once 'includes/footer.php';
?>