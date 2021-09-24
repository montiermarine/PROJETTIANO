<?php
$events = new events();
$comments = new comments();
$formErrors = [];
//on fait une condition pour vérifier si il POST n'est pas vide
if (!empty($_POST)) {
    //on envoie depuis la modal le $_POST['recipient-name'] qui est l'id de suppression, on le stock dans l'attribut id de l'objet user pour pouvoir appeler la méthode delete 
    // 'recupient-name' est le name de l'input ou transite $_POST
    if (!empty($_POST['recipient-name'])) {
        $events->id = $_POST['recipient-name'];

         $events->deleteEvents(); 
    }
    

    if (!empty($_POST['commentText'])) {
        $comments->commentText = htmlspecialchars($_POST['commentText']);
    } else {
        $formErrors['commentText'] = 'La zone de contenu est obligatoire.';
    }

    if (count($formErrors) == 0) {

        $comments->id_users = $_SESSION['id'];

        $comments->id_events = $_POST['hidden'];

       $comments->addComments();
         
    }
}


//On utilise le $_SESSION['id], déja crée pour démarrer la connexion


$eventsList = $events->getEventsList();
$commentsList = $comments->getCommentsList();
var_dump($comments->id_users);
var_dump($comments->id_events);
var_dump($comments->commentText);
var_dump($formErrors);