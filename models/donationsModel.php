<?php

class donations extends database
{
    protected $db = NULL;
    public $id = 0;
    public $price = '';
    public $donDate = '2021-09-31';
    public $id_typePaiements = 1;
    public $id_users = 1;
    public $id_typeGift = 1;


    public function __construct()
    {
        $this->db = parent::__construct();
        // methode magique qui permet de se connecter à la base de données
    }

    // addContributions() sert à ajouter une cotisation
    public function addDonations()
    {
        $query = 'INSERT INTO fyS_donations (price, donDate, id_users, id_typePaiements, id_typeGift)
            VALUES (:price, NOW(), :id_users, :id_typePaiements, :id_typeGift)';
        $queryExecute = $this->db->prepare($query);
        $queryExecute->bindValue(':price', $this->commentText, PDO::PARAM_STR);
        $queryExecute->bindValue(':id_users', $this->id_users, PDO::PARAM_INT);
        $queryExecute->bindValue(':id_typePaiements', $this->id_events, PDO::PARAM_INT);
        $queryExecute->bindValue(':id_typeGift', $this->id_typeGift, PDO::PARAM_INT);
        return $queryExecute->execute();
    }

    //getContributionsList() sert à afficher la liste des cotisations
    public function getDonationsList()
    {
        $query = 'SELECT fyS_donations.id,price, lastname, firstname, DATE_FORMAT(donDate, "%d/%m/%Y %H:%i" ) as donDate, id_users, id_typePaiements
        FROM fyS_donations
        INNER JOIN fyS_users
        ON fyS_users.id = id_users
        INNER JOIN fyS_typePaiements
        ON fyS_typePaiements.id = id_typePaiements';
        $queryExecute = $this->db->query($query);
        $queryResult = $queryExecute->fetchAll(PDO::FETCH_OBJ);
        return $queryResult;
    }

    //getLastDonations() sert à afficher les dernières contributions
    public function getLastDonations()
    {
        $query = 'SELECT fyS_donations.id,price, lastname, firstname, DATE_FORMAT(donDate, "%d/%m/%Y %H:%i" ) as donDate, id_users, id_typePaiements
        FROM fyS_donations
        INNER JOIN fyS_users
        ON fyS_users.id = id_users
        INNER JOIN fyS_typePaiements
        ON fyS_typePaiements.id = id_typePaiements
        ORDER BY Dondate DESC
        LIMIT 5';
        $queryExecute = $this->db->query($query);
        $queryResult = $queryExecute->fetchAll(PDO::FETCH_OBJ);
        return $queryResult;
    }

    //updateContributions() permet de modifier une cotisation
public function updateDonations() {
    $query = 'UPDATE fyS_donations
    SET price=:price, date=NOW()
    WHERE id=:id';
    $queryExecute = $this->db->prepare($query);
    $queryExecute->bindValue(':price', $this->commentText, PDO::PARAM_STR);
    $queryExecute->bindValue(':id', $this->id, PDO::PARAM_INT);
    return $queryExecute->execute();
}

//deleteContributions() permet de supprimer une cotisation
public function deleteDonations() {
    $query = 'DELETE FROM fyS_donations
    WHERE id=:id';
    $queryExecute = $this->db->prepare($query);
    $queryExecute->bindValue(':id', $this->id, PDO::PARAM_INT);
    return $queryExecute->execute();
    
}
}