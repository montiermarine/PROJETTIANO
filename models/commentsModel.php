<?php

class comments extends database {
    protected $db = NULL;
    public $id = 0;
    public $commentText = '';
    public $date = '2021-09-31';
    public $id_users = 1;
    public $id_events = 1;

    public function __construct() 
    {
        $this->db = parent::__construct();
       // methode magique qui permet de se connecter à la base de données
    }

//addcomments() permet d'ajouter un commentaire
public function addComments() {
    $query='INSERT INTO fyS_comments (commentText, date, id_users, id_events)
        VALUES (:commentText, NOW(), :id_users, :id_events)';
        $queryExecute = $this->db->prepare($query);
        $queryExecute->bindValue(':commentText', $this->commentText, PDO::PARAM_STR);
        $queryExecute->bindValue(':id_users', $this->id_users, PDO::PARAM_INT);
        $queryExecute->bindValue(':id_events', $this->id_events, PDO::PARAM_INT);
        return $queryExecute->execute();
}

//getCommentsList() permet d'avoir la liste des commentaires en fonction d'un événement
public function getCommentsList() {
    $query = 'SELECT fyS_comments.id,commentText, DATE_FORMAT(date, "%d/%m/%Y %H:%i" ) as date, username, id_events
    FROM fyS_comments
    INNER JOIN fyS_users
    ON fyS_users.id = id_users
    INNER JOIN fyS_events
    ON fyS_events.id = id_events';
    $queryExecute = $this->db->query($query);
    $queryResult = $queryExecute->fetchAll(PDO::FETCH_OBJ);
    return $queryResult;

}

//getLastComments() permet d'avoir la liste des commentaires
public function getLastComments() {
    $query = 'SELECT fyS_comments.id,commentText, DATE_FORMAT(date, "%d/%m/%Y %H:%i" ) as date, username, id_events
    FROM fyS_comments
    INNER JOIN fyS_users
    ON fyS_users.id = id_users
    INNER JOIN fyS_events
    ON fyS_events.id = id_events
    ORDER BY date DESC
    LIMIT 5';
     
    $queryExecute = $this->db->query($query);
    $queryResult = $queryExecute->fetchAll(PDO::FETCH_OBJ);
    return $queryResult;

}

//updateComments() permet de modifier un commentaire
public function updateComments() {
    $query = 'UPDATE fyS_comments
    SET commentText=:commentText, date=NOW()
    WHERE id=:id';
    $queryExecute = $this->db->prepare($query);
    $queryExecute->bindValue(':commentText', $this->commentText, PDO::PARAM_STR);
    $queryExecute->bindValue(':id', $this->id, PDO::PARAM_INT);
    return $queryExecute->execute();
}

//deleteComments() permet de supprimer un commentaire
public function deleteComments() {
    $query = 'DELETE FROM fyS_comments
    WHERE id=:id';
    $queryExecute = $this->db->prepare($query);
    $queryExecute->bindValue(':id', $this->id, PDO::PARAM_INT);
    return $queryExecute->execute();
    
}
}