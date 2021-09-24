<?php 
$users = new users();

//on fait une condition pour vérifier si il POST n'est pas vide
if (!empty($_POST)){
    //on envoie depuis la modal le $_POST['recipient-name'] qui est l'id de suppression, on le stock dans l'attribut id de l'objet user pour pouvoir appeler la méthode delete 
    // 'recupient-name' est le name de l'input ou transite $_POST
$usersDetails->id=$_POST['recipient-name'];

if ($users->deleteUser()) {
    session_unset();
    session_destroy();
    header('location:dashboard.php');
    exit;
}
}
//On utilise le $_SESSION['id], déja crée pour démarrer la connexion
$users->id = $_SESSION['id'];

$usersList = $users->getUsersList();