<?php
session_start();
require_once 'models/database.php';
require_once 'models/donationsModel.php';
require_once 'controllers/addDonationsController.php';
require_once 'includes/header.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-5 mb-5">
            <h1 class="text-center">Donations</h1>
            <div class="col-10 ms-auto me-auto mb-5 mt-5">
                <p>Vos dons sont un moteur essentiel au fonctionnement de l'association TIANO, cela nous permet d'être présent lors d'événements de prévention dans les écoles et les entreprises. <br />
                    Celui-ci nous permettent aussi de financer chaque année des appareillages indispensables pour la bonne continuité de scolaire de Tiago et Lino,en privilégiant l'inclusion sociale et scolaire<br />
                    La majeure partie de vos dons financent la recherches sur les maladies dégénératives de la rétine <br />
                </p>
                <p>Nous tenons à vous remercier chaleureusement de vos investissements, votre confiance et de l'intêret que vous portez à l'Association TIANO</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-10 ms-auto me-auto mt-5 mb-5 border border-secondary bg-info">
            <form method="POST" action="addDonations.php">
                <div class="row">
                    <div class="col-6 text-white">
                        <fieldset>
                            <h3 class="text-center">Système de Paiement</h2>
                                <div class="mb-3 col-12">
                                    <p>Type de Carte</p>
                                    <input type="radio" name="Cardtype" value="mastercard" id="mastercard" />
                                    <label for="mastercard">Mastercard</label>
                                    <i class="bi bi-credit-card-2-back-fill"></i>
                                    
                                </div>

                                <div class="mb-3 col-12">
                                <input type="radio" name="cardType" value="visa" id="visa" />
                                    <label for="visa">Visa</label>
                                    <i class="bi bi-credit-card-2-front-fill"></i>
                                </div>
                                <div class="mb-3">
                                    <label for="price">Montant</label>
                                    <input type="text" name="price" placeholder="45,50" class="form-control <?= !empty($formErrors['price']) ? 'is-invalid' : ''; ?>" value="<?= @$_POST['price']; ?>" />
                                    <small class="invalid-feedback"><?= @$formErrors['price']; ?></small>
                                </div>

                                <div class="mb-3">
                                    <label for="cardNumber">Numero de carte</label>
                                    <input type="text" name="cardNumber" placeholder="Numero de carte" class="form-control <?= !empty($formErrors['cardNumber']) ? 'is-invalid' : ''; ?>" value="<?= @$_POST['cardNumber']; ?>" />
                                    <small class="invalid-feedback"><?= @$formErrors['cardNumber']; ?></small>
                                </div>

                                <div class="mb-3">
                                    <label for="expiryDate">Date d'expiration</label>
                                    <input type="date" name="expiryDate" placeholder="01/21" class="form-control <?= !empty($formErrors['expiryDate']) ? 'is-invalid' : ''; ?>" value="<?= @$_POST['expiryDate']; ?>" />
                                    <small class="invalid-feedback"><?= @$formErrors['expiryDate']; ?></small>
                                </div>

                                <div class="mb-3">
                                    <label for="securityCode">Cryptograme</label>
                                    <input type="text" name="securityCode" placeholder="***" class="form-control <?= !empty($formErrors['securityCode']) ? 'is-invalid' : ''; ?>" value="<?= @$_POST['securityCode']; ?>" />
                                    <small class="invalid-feedback"><?= @$formErrors['securityCode']; ?></small>
                                </div>


                        </fieldset>
                    </div>

                </div>
                <div class="col-12">
                    <input type="submit" class="btn btn-success" value="Envoyer" />
                </div>
            </form>
        </div>

    </div>
</div>
</div>

<?php
require_once 'includes/footer.php';
?>