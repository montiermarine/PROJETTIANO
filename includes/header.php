<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/style.css"/>
  <link rel="stylesheet" href="assets/css/dashb.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.0.1/dist/journal/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TIANO, L'espoir de mieux voir</title>
</head>
<!-- Je fais une ternaire en php avec $_SERVER['PHP_SELF'] pour que celle ci s'affiche que lorsque nous sommes sur la page index-->
<body <?= $_SERVER['PHP_SELF'] != '/Projet TIANO/index.php' ?: 'class="index"';?> >
  <!--Section Page d'accueil-->
  <section>
  <!-- Je fais une conditions en php car je ne veux pas que mon titre s'affiche sur d'autres pages que l'index-->
  <?php if($_SERVER['PHP_SELF'] == '/Projet TIANO/index.php') { ?>
    <div class="container-fluid text-center align-middle">
      <div class="row d-flex align-items-center" id="TianoCover">
        <div class="col-12 fs-1 fw-bold">
          <h1>Tiano</h1>
          <p class="fs-5 fw-light" id="titletiano">L'ESPOIR DE MIEUX VOIR</p>
        </div>
      </div>
    </div>
    <?php } ?>
    <!--Nav bar-->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Accueil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="tiano.php">TIANO</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Dashboard.php">ÉVÉNEMENTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#.php">BLOG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#.php">COTISATION</a>
            </li>
          </ul>
          <div class="d-flex text-white">
            <?php if(!isset($_SESSION['username'])) { ?>
              <a class="btn btn-info" href="signin.php">INSCRIPTION</a>
              <a class="btn btn-success" href="login.php">CONNEXION</a>
              <?php } else {?>
              <a class="btn btn-danger" href="controllers/logoutController.php">DECONNEXION</a>
              <?php } ?>
          </div>
        </div>
      </div>
    </nav>