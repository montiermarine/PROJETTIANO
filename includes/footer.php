 <!--Footer-->
  
 <footer class="bg-white">
        <div class="container py-5">
          <div class="row py-4">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0"><img src="assets/img/logo.jpg" alt="" width="180" class="mb-3">
              <p class="font-italic">Nous vous remercions de l'intêret apporté à l'Association TIANO</p>
              <ul class="list-inline mt-4">
                <li class="list-inline-item text-secondary"><a href="https://fr-fr.facebook.com/associationtiano/" target="_blank" title="facebook"><i class="bi bi-facebook"></i></a></li>
                <li class="list-inline-item text-secondary"><a href="#" target="_blank" title="instagram"><i class="bi bi-instagram"></i></a></li>
              </ul>
            </div>
      
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
              <h6 class="text-uppercase font-weight-bold mb-4">Company</h6>
              <ul class="list-unstyled mb-0">
              <li class="mb-2"><a href="signin.php" class="text-muted">Inscription</a></li>
                <li class="mb-2"><a href="login.php" class="text-muted">Connexion</a></li>
                <li class="mb-2"><a href="#" class="text-muted">Conditions d'utilisation</a></li>
                <li class="mb-2"><a href="#" class="text-muted">Contact</a></li>
              </ul>
            </div>
            <div class="col-lg-4 col-md-6 mb-lg-0">
              <h6 class="text-uppercase font-weight-bold mb-4" id="newletters">Newsletter</h6>
              <p class="text-muted mb-4">Abonnez-vous à notre Newsletter, et soyez tenu au courant de toutes nos actualitées</p>
              <div class="p-1 rounded border">
                <div class="input-group">
                  <input type="email" placeholder="Entrer votre email" aria-describedby="button-addon1" class="form-control border-0 shadow-0">
                  <div class="input-group-append">
                    <button id="button-addon1" type="submit" class="btn btn-info"><i class="bi bi-envelope"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    
        <!-- Copyrights -->
        <div class="bg-light py-4">
          <div class="container text-center">
            <p class="text-muted mb-0 py-2">© 2021 TIANO All rights reserved.</p>
          </div>
        </div>
      </footer>

  </section>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.js"></script>
  <?php if($_SERVER['PHP_SELF'] == '/Projet TIANO/userProfile.php') { ?>
  <script src="assets/js/deleteModal.js"></script>
 <?php } ?>
 
  <script src="assets/js/deleteArticle.js"></script>
 
</body>

</html>