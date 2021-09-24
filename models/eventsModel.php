<?php

class events extends database {
    protected $db = NULL;
    public $id = 0;
    public $title = '';
    public $content = '';
    public $photo = '';
    public $startDate = '2021-09-31';
    public $endDate = '2021-09-31';

    public function __construct()
    {
       $this->db = parent::__construct();
       // methode magique qui permet de se connecter à la base de données
    }

    /** addEvents permet d'ajouter un événment */
    public function addEvents() {
        $query='INSERT INTO fyS_events (title, content, photo, startDate, endDate)
        VALUES (:title, :content, :photo, :startDate, :endDate)';
        $queryExecute = $this->db->prepare($query);
        $queryExecute->bindValue(':title', $this->title, PDO::PARAM_STR);
        $queryExecute->bindValue(':content', $this->content, PDO::PARAM_STR);
        $queryExecute->bindValue(':photo', $this->photo, PDO::PARAM_STR);
        $queryExecute->bindValue(':startDate', $this->startDate, PDO::PARAM_STR);
        $queryExecute->bindValue(':endDate', $this->endDate, PDO::PARAM_STR);
        return $queryExecute->execute();
    }

    /**getEventsInformation permet les informations d'un événement*/
    public function getEventsInformation() {
        $query='SELECT title, content, photo, DATE_FORMAT(startDate, "%d/%m/%Y") as startDate, DATE_FORMAT(endDate, "%d/%m/%Y") as endDate
        FROM fyS_events
        WHERE id=:id';
        $queryExecute = $this->db->prepare($query);
        $queryExecute->bindValue(':id', $this->id, PDO::PARAM_INT);
        $queryExecute->execute();
         return $queryExecute->fetch(PDO::FETCH_OBJ);
    }

    /**getEventsList permet d'afficher la liste des événements*/
    public function getEventsList() {
        $query= 'SELECT id, title, photo, content, DATE_FORMAT(startDate, "%d/%m/%Y") as startDate, DATE_FORMAT(endDate, "%d/%m/%Y") as endDate
        FROM fyS_events';
        $queryExecute = $this->db->query($query);
        $queryResult = $queryExecute->fetchAll(PDO::FETCH_OBJ);
        return $queryResult;

    }

    /**getLastEvents permet d'afficher le dernier événement */
    public function getLastEvents() {
        $query = 'SELECT title, content, photo, DATE_FORMAT(startDate, "%d/%m/%Y") as startDate, DATE_FORMAT(endDate, "%d/%m/%Y") as endDate
        FROM fyS_events
        ORDER BY endDate DESC
        LIMIT 1';
        $queryExecute = $this->db->query($query);
        $queryResult = $queryExecute->fetchAll(PDO::FETCH_OBJ);
        return $queryResult;
    }

    /**getLast5Events permet d'afficher les 5 derniere parutions */
    public function getLast5Events() {
        $query = 'SELECT id, title, content, photo, DATE_FORMAT(startDate, "%d/%m/%Y") as startDate, DATE_FORMAT(endDate, "%d/%m/%Y") as endDate
        FROM fyS_events
        ORDER BY startDate DESC
        LIMIT 5';
        $queryExecute = $this->db->query($query);
        $queryResult = $queryExecute->fetchAll(PDO::FETCH_OBJ);
        return $queryResult;
    }

    /**getBeforeEvents permet d'afficher l'événement à venir */
    public function getBeforeEvents() {
        $query = 'SELECT title, content, photo, DATE_FORMAT(startDate, "%d/%m/%Y") as startDate, DATE_FORMAT(endDate, "%d/%m/%Y") as endDate
        FROM fyS_events
        ORDER BY startdate DESC
        LIMIT 1';
        $queryExecute = $this->db->query($query);
        $queryResult = $queryExecute->fetchAll(PDO::FETCH_OBJ);
        return $queryResult;
    }

    /**updateEvents permet de modifier l'événement */
    public function updateEvents() {
        $query= 'UPDATE fyS_events
        SET title=:title, content=:content, photo=:photo, startDate=:startDate, endDate=:endDate
        WHERE id=:id';
        $queryExecute = $this->db->prepare($query);
        $queryExecute->bindValue(':title', $this->title, PDO::PARAM_STR);
        $queryExecute->bindValue(':content', $this->content, PDO::PARAM_STR);
        $queryExecute->bindValue(':photo', $this->photo, PDO::PARAM_STR);
        $queryExecute->bindValue(':startDate', $this->startDate, PDO::PARAM_STR);
        $queryExecute->bindValue(':endDate', $this->endDate, PDO::PARAM_STR);
        $queryExecute->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $queryExecute->execute();
    }

    /**deleteEvents permet de supprimer un événement */
    public function deleteEvents() {
        $query='DELETE FROM fyS_events
        WHERE id=:id';
        $queryExecute = $this->db->prepare($query);
        $queryExecute->bindValue(':id', $this->id, PDO::PARAM_INT);
        return $queryExecute->execute();
    }

}