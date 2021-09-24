<?php

if (count($_POST) > 0) {
    $formErrors =  [];
    $regex['username'] =  '/^[a-zA-Z0-9]{3,50}$/';
    $users = new users;

    if (!empty($_POST['username'])) {
        $users->username = $_POST['username'];
        if ($users->checkIfUserExists() == 0) {
            $formErrors['username'] = $formErrors['password'] = INVALID_USERNAME;
        }
    } else {
        $formErrors['username'] = EMPTY_USERNAME;
    }

    if (!empty($_POST['password'])) {
        if (!isset($formErrors['username'])) {
            $hash = $users->getHashByLogin();
            if (!password_verify($_POST['password'], $hash->password)) {
                $formErrors['username'] = $formErrors['password'] = 'L\'identifiant ou le mot de passe est incorrect';
            }
        }
    } else {
        $formErrors['password'] = EMPTY_PASSWORD;
    }
/**
 * Si le $formErrors n'a aucunes erreurs, 
 * alors on affiche les informations utilisateurs
 */
    if (count($formErrors) == 0) {
        $users->getUsersInformations();
        $_SESSION['id'] = $users->id;
        $_SESSION['username'] = $users->username;
        $_SESSION['id_userTypes'] = $users->id_userTypes;
        $_SESSION['id_userRoles'] = $users->id_userRoles;
/**
 * Si id_userRoles est égal à 1, donc à Présidente = role administrateur
 * redirection vers le dashboard
 * sinon direction sur l'index
 */
        if($_SESSION['id_userRoles'] == 1) {
            header('location:dashboard.php');
            exit;

        }else{
            header('location:userProfile.php');
            exit;
        }

        
    }
    
}