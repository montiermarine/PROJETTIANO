<?php
session_start();
require_once 'includes/header.php';
?>
    <!--A propos Tiano-->
    <section>
        <div class="container-fluid bg-light text-center">
            <div class="row">
                <div class="col-12 mt-5 mb-5">
                    <h1>Qu'est ce que l'Association Tiano ? Pourquoi?</h1>
                </div>
            </div>  
            <div class="row text-center">
              <div class="col-12 col-md-3 card" >
                <img src="assets/img/tiagolino copie.JPG" class="card-img-top" alt="tiagolino">
                <div class="card-body">
                  <h2 class="card-title mb-5">La Rétinite Pigmentaire</h2>
                  <p class="card-text">La RP est une maladie génétique et dégénérative de la rétine. <br/>
                  A l'heure actuelle, aucun traitement n'est disponible. <br/> 
                la finalité est donc à terme la cécité</p>
                </div>
              </div>
              
                   <div class="col-12 col-md-9 mb-5 mt-5 ">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title  mb-5">La Recherche</h2>
                            <p class="card-text">La RP est une maladie dégénérative occulaire. <br/>
                            Pour le moment quelques essais cliniques sont en cours mais la recherche est extrêment couteuse. <br/>
                          Il est donc necessaire de financer la recherche afin de trouver un traitement durable pour les malades.</p>
                        </div>
                    </div>
                    <div class="card mt-5 mb-5">
                      <div class="card-body">
                          <h2 class="card-title mb-5">Les Partenaires/Partenariat</h2>
                          <p class="card-text">Nous avons la chance d'être parrainer par les MACADAM RIDER'S, très présent dans la vie associative du Noyonnais. <br/>
                          Si vous souhaitez devenir partenaire, n'hesitez pas à nous contacter : association.tiano@gmail.com</p>
                      </div>
                      <img src="assets/img/macadamrider.jpg" class="card-img-bot" alt="macadamRiders">
                      <div class="card-body">
                        <p class="card-text"><h3>Vous avez aussi pu nous entendre sur les ondes de la Radio VivFM.</3></p>
                        <img src="assets/img/IMG_2857.JPG" class="card-img-bot img-fluid" alt="radiovivfm" id="radiovivfm" width="80%">
                      </div>
                  </div>
              </div>
                </div>
          <div class="row text-center">
                <div class="col-12 col-md-6 mt-5 mb-5">
                    <a href="signin.php" class="btn btn-info">Adhérer</a>
                </div>
                <div class="col-12 col-md-6 mt-5 mb-5">
                    <a href="donationsPayements.php" class="btn btn-info">Faire un Don</a>
                </div>
            </div>
         </div>
        </div>
        <!--Footer-->
  
<?php
require_once 'includes/footer.php';
?>     