<?php
$comments = new comments();

$formErrors = [];

if (!empty($_POST['commentText'])) {
    $comments->commentText = htmlspecialchars($_POST['commentText']);
} else {
    $formErrors['commentText'] = 'La zone de contenu est obligatoire.';
}

if (count($formErrors) == 0) {

   $comments->id = $_GET['id'];

    if ($comments->updateComments()) {
       header('location:comments.php');
       exit;
    } else {
        $formErrors['db'] = 'Une erreur est survenue.';
    }
}

$commentsList = $comments->getCommentsList();