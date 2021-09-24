<?php
/**
 * Vérifie si $_SESSION['username'] existe, si c'est le cas,
 * on nous redirige vers login.php
 */

if (isset($_SESSION['username'])) {
    header('location: login.php');
    exit;
}
/**
 * On vérifie si le $_POST n'est pas vide en utilisant le count dans une condition
 *  */ 
if (count($_POST) > 0) {
/**
 * * on initialise le tableau $formErrors qui va stocker les différents messages d'erreurs.
 */
$formErrors =  [];
$regex['name'] =  '/^[A-Za-z \-\']+$/';
$regex['username'] =  '/^[a-zA-Z0-9]{3,50}$/';
$regex['phone'] = '/^[0-9 \-\.]{14}$/';
$regex['address'] = '/^[1-9a-zA-Z\'àâéèêôùûçÀÂÉÈÔÙÛÇ0-9 ,]+$/';

$users = new users ;

if (!empty($_POST['lastname'])) {
    if (preg_match($regex['name'], $_POST['lastname'])) {
        // strtoupper sert à mettre le NOM en Majuscule dans la db
        $users->lastname = strtoupper($_POST['lastname']);
    } else {
        $formErrors['lastname'] = INVALID_LASTNAME ;
        // on utilise une constante dans config.php pour pouvoir la rappeler dans d'autres fichiers
    }
} else {
    $formErrors['lastname'] = EMPTY_LASTNAME;
}

if (!empty($_POST['firstname'])) {
    if (preg_match($regex['name'], $_POST['firstname'])) {
        // strtoupper sert à mettre le NOM en Majuscule dans la db
        $users->firstname = strtoupper($_POST['firstname']);
    } else {
        $formErrors['firstname'] = INVALID_FIRSTNAME;
    }
} else {
    $formErrors['firstname'] = EMPTY_FIRSTNAME;
}
if (!empty($_POST['username'])) {
    if (preg_match($regex['username'], $_POST['username'])) {
        $users->username = $_POST['username'];
        if ($users->checkIfUserExists() > 0) {
            $formErrors['username'] = EXIST_USERNAME;
        }
    } else {
        $formErrors['username'] = INVALID_USERNAME;
    }
} else {
    $formErrors['username'] = EMPTY_USERNAME;
}


if (!empty($_POST['address'])) {
    if (preg_match($regex['address'], $_POST['address'])) {
        // strtoupper sert à mettre le NOM en Majuscule dans la db
        $users->address = strtoupper($_POST['address']);
    } else {
        $formErrors['address'] = INVALID_ADDRESS;
    }
} else {
    $formErrors['address'] = EMPTY_ADDRESS;
}

if (!empty($_POST['mail'])) {
    if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        $users->mail = $_POST['mail'];
    } else {
        $formErrors['mail'] = INVALID_MAIL;
    }
} else {
    $formErrors['mail'] = EMPTY_MAIL;
}
if (!empty($_POST['phoneNumber'])) {
    if (preg_match($regex['phone'], $_POST['phoneNumber'])) {
        $users->phoneNumber = $_POST['phoneNumber'];
    } else {
        $formErrors['phoneNumber'] = INVALID_PHONENUMBER;
    }
} else {
    $formErrors['phoneNumber'] = EMPTY_PHONENUMBER;
}

/** Verification du mdp, confirmMdp et verification mdp=confirmMdp */

if (!isset($_POST['password']) || empty($_POST['password'])) {
    $formErrors['password'] = EMPTY_PASSWORD;
}

if (!isset($_POST['confirmPassword']) || empty($_POST['confirmPassword'])) {
    $formErrors['confirmPassword'] = EMPTY_PASSWORD;
}

if (!isset($formErrors['password']) && !isset($formErrors['confirmPassword'])) {
    if ($_POST['password'] === $_POST['confirmPassword']) {
        $users->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    } else {
        $formErrors['password'] = $formErrors['confirmPassword'] = INVALID_PASSWORD;
    }
}
/**
 * Si le $formErrors est nul alors on ajoute les données de l'utilisateur et il est redirigé sur login.php 
 * ou un message lui confirme que son inscription est bien prise en compte
 * sinon un message d'erreur lui est adressé
 */
if (count($formErrors) == 0) {
    if ($users->addUsers()) {
        header('location:login.php?signin=success');
        exit;
    } else {
        $formErrors['db'] = 'Une erreur est survenue.';
    }
}

}
