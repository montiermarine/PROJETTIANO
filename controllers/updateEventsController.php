<?php
 $events = new events;
 $formErrors = [];
 $events->id = $_GET['id'];

if(count($_POST) > 0) {
    $formError = [];
    $regex['title'] = "/^[A-Za-z0-9 -'À-ÿ]{3,100}+$/";
    $regex['date'] = "/^[0-9]{4}(-){1}((0[1-9])|(1[0-2])){1}(-){1}((0[1-9])|((1|2)[0-9])|(3[0-1]))$/" ;
   

    if (!empty($_POST['title'])) {
        if (preg_match($regex['title'], $_POST['title'])) {
            $events->title = strtoupper($_POST['title']);
        } else {
            $formErrors['title'] = INVALID_TITLE;
        }
    } else {
        $formErrors['title'] = EMPTY_TITLE;
    }

    if(!empty($_POST['content'])) {
        $events->content = htmlspecialchars($_POST['content']);
    } else {
        $formErrors['content'] = 'La zone de contenu est obligatoire.';
    }

    if ($_FILES['photo']['error'] == 0) {
        $photoExtension = strtolower(pathinfo($_FILES['photo']['name'])['extension']);
        $authorizedExtensions = ['png', 'jpeg', 'jpg', 'gif'];

        if (in_array($photoExtension, $authorizedExtensions)) {
            if (move_uploaded_file($_FILES['photo']['tmp_name'], 'assets/uploads/' . $_FILES['photo']['name'])) {
                chmod('assets/uploads/' . $_FILES['photo']['name'], 0644);
                $events->photo = 'assets/uploads/' . $_FILES['photo']['name'];
            } else {
                $formErrors['photo'] = 'Une erreur est survenue';
            }
        } else {
            $formErrors['photo'] = INVALID_PHOTO;
        }
    } else {
        $formErrors['photo'] = EMPTY_PHOTO;
    }

    if(!empty($_POST['startDate'])) {
        if(preg_match($regex['date'], $_POST['startDate'])) {
            $events->startDate = $_POST['startDate'];
        } else {
            $formErrors['date'] = INVALID_SDATE;
        } 
    } else { 
        $formErrors['date'] = EMPTY_SDATE;

        }
        if(!empty($_POST['endDate'])) {
            if(preg_match($regex['date'], $_POST['endDate'])) {
                $events->endDate = $_POST['endDate'];
            } else {
                $formErrors['date'] = INVALID_EDATE;
            } 
        } else { 
            $formErrors['date'] = EMPTY_EDATE;
    
            }
            if (count($formErrors) == 0) {
                if ($events->updateEvents()) {
                    //header('location:articles.php');
                    //exit;
                   
                } else {
                    $formErrors['db'] = 'Une erreur est survenue.';
                }
            }
}

$eventsList = $events->getEventsInformation();
