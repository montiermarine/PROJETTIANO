<?php
$comments = new comments();


if (!empty($_POST)) {
    //on envoie depuis la modal le $_POST['recipient-name'] qui est l'id de suppression, on le stock dans l'attribut id de l'objet user pour pouvoir appeler la méthode delete 
    // 'recupient-name' est le name de l'input ou transite $_POST
    if (!empty($_POST['recipient-name'])) {
        $commentsDetails->id = $_POST['recipient-name'];

        if ($comments->deleteComments()) {
            header('location:dashboard.php');
            exit;
        }
    }
}

$commentsList = $comments->getCommentsList();