<?php

class contributions extends database
{
    protected $db = NULL;
    public $id = 0;
    public $price = '';
    public $contributionDate = '2021-09-31';
    public $id_typePaiements = 1;
    public $id_users = 1;


    public function __construct()
    {
        $this->db = parent::__construct();
        // methode magique qui permet de se connecter à la base de données
    }

    // addContributions() sert à ajouter une cotisation
    public function addContributions()
    {
        $query = 'INSERT INTO fyS_contributions (price, contributionDate, id_users, id_typePaiements)
            VALUES (:price, NOW(), :id_users, :id_typePaiements)';
        $queryExecute = $this->db->prepare($query);
        $queryExecute->bindValue(':price', $this->commentText, PDO::PARAM_STR);
        $queryExecute->bindValue(':id_users', $this->id_users, PDO::PARAM_INT);
        $queryExecute->bindValue(':id_typePaiements', $this->id_events, PDO::PARAM_INT);
        return $queryExecute->execute();
    }

    //getContributionsList() sert à afficher la liste des cotisations
    public function getContributionsList()
    {
        $query = 'SELECT fyS_contributions.id,price, lastname, firstname, DATE_FORMAT(contributionDate, "%d/%m/%Y %H:%i" ) as contributionDate, id_users, id_typePaiements
        FROM fyS_contributions
        INNER JOIN fyS_users
        ON fyS_users.id = id_users
        INNER JOIN fyS_typePaiements
        ON fyS_typePaiements.id = id_typePaiements';
        $queryExecute = $this->db->query($query);
        $queryResult = $queryExecute->fetchAll(PDO::FETCH_OBJ);
        return $queryResult;
    }

    //getContributionsLast() sert à afficher les dernières contributions
    public function getContributionslast()
    {
        $query = 'SELECT fyS_contributions.id,price,lastname, firstname, DATE_FORMAT(contributionDate, "%d/%m/%Y %H:%i" ) as contributionDate, id_users, id_typePaiements
        FROM fyS_contributions
        INNER JOIN fyS_users
        ON fyS_users.id = id_users
        INNER JOIN fyS_typePaiements
        ON fyS_typePaiements.id = id_typePaiements
        ORDER BY contributiondate DESC
        LIMIT 5';
        $queryExecute = $this->db->query($query);
        $queryResult = $queryExecute->fetchAll(PDO::FETCH_OBJ);
        return $queryResult;
    }

    //updateContributions() permet de modifier une cotisation
public function updateContributions() {
    $query = 'UPDATE fyS_contributions
    SET price=:price, date=NOW()
    WHERE id=:id';
    $queryExecute = $this->db->prepare($query);
    $queryExecute->bindValue(':price', $this->commentText, PDO::PARAM_STR);
    $queryExecute->bindValue(':id', $this->id, PDO::PARAM_INT);
    return $queryExecute->execute();
}

//deleteContributions() permet de supprimer une cotisation
public function deleteContributions() {
    $query = 'DELETE FROM fyS_contributions
    WHERE id=:id';
    $queryExecute = $this->db->prepare($query);
    $queryExecute->bindValue(':id', $this->id, PDO::PARAM_INT);
    return $queryExecute->execute();
    
}
}
