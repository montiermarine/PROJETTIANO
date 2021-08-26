<?php
session_start();
require_once 'includes/header.php';
?>
    <!--Description association-->
    <div class="container-fluid bg-light">
      <div class="row">
        <div class="col-12 bold mt-4 text-center">
          <h2>Bienvenue sur le site de l'association Tiano</h2>
        </div>
        <div class="col-12 mb-4 mt-4">
          <p>L'association TIANO a été fondée en janvier 2016, après l'annonce de la Rétinite Pigmentaire chez Tiago et Lino.<br/>
            Suite à l'annonce brutale et au manque d'implication du corps médical dans le suivi des familles, une idée à germé dans l'esprit de la Présidente :  Accompagner les enfants et les famille face à cette maladie génétique.<br/>
            Avril 2019, L'association est enfin créée.<br/>
            Cette association aide déjà Tiago et Lino face à leur maladie. Des événements et levées de fonds sont régulièrement faits pour financer la recherche et acheter du matériel spécifique.<br/>
            Il est aussi primordiale pour sa Présidente, d'être présente dans le milieu associatif local, de partager des moments de convivialités chaque année avec les bénévoles et adhérents lors de sortie annuelle.<br/>

            </p>
          <a class="btn btn-info" href="signin.php" role="button">Rejoignez-nous !</a>
        </div>
      </div>
    </div>
    <!--Évenements-->
    <div class="container-fluid text-center mt-4">
      <div class="row mt-4">
        <div class="col-12 col-md-6 mt-4 d-flex justify-content-center">
          <div class="card" style="width: 25rem;">
            <img src="assets/img/fetemoto.JPG" class="card-img-top" alt="feteMoto">
            <div class="card-body">
              <h2 class="card-title">Fête de la moto 2019</h2>
              <p class="card-text">Grâce aux Macadam Riders, nous avons pu faire connaitre l'association aux
                <strong>Pays du Noyonnais</strong></p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 mt-4  d-flex justify-content-center">
          <div class="card" style="width: 25rem;">
            <img src="assets/img/SmallLogo copie.jpg" class="card-img-top" alt="logotiano" id="logotiano">
            <div class="card-body">
              <h2 class="card-title">Évenement à venir</h2>
              <p class="card-text">Retrouvez-nous le DATE à VILLE, pour la course de l'Espoir. Les bénéfices de cette
                course seront reversés à l'Association</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row text-center mt-4 mb-4">
        <div class="col-12 mb-4">
          <a href="calendrier.php" class="btn btn-info">Calendrier des Événements</a>
        </div>
      </div>
    </div>
    <?php
    require_once 'includes/footer.php';
    ?>
   