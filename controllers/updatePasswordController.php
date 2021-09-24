<?php
$users = new users();
// on recupère l'id par le bouton modifier le profil utilisateur
$users->id = $_SESSION['id'];
/**
 * On vérifie si le $_POST n'est pas vide en utilisant le count dans une condition
 *  */ 
if (count($_POST) > 0) {
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
if(count($formErrors) == 0) {
    if($users->updatePassword()) {
        header('location:userProfile.php');
        exit;  
    }else{
        $formErrors['db'] = 'Une erreur est survenue.';
    }
}
}

