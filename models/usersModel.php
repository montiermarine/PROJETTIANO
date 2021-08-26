<?php

class users extends database
{
    protected $db = NULL;
    public $id = 0;
    public $firstname = '';
    public $lastname = '';
    public $username = '';
    public $address = '';
    public $mail = '';
    public $phoneNumber = '';
    public $password = '';
    public $id_usersTypes = 0;
    public $id_usersRoles = 0;
/**
 * LA fonction construct est une methode magique
 * elle se declenche au moment ou l'on instencie l'objet
 * ICI, elle permet de se connecter à la methode construct de la database qui est le parent
 * donc la database qui elle contient l'objet PDO et la phrase de connexion
 */

    public function __construct()
    {
       $this->db = parent::__construct();
       // methode magique qui permet de se connecter à la base de données
    }

    /**
     *  addUsers Permet d'ajouter un utilisateur
     * * Elle est en visibilité public pour qu'on puisse l'appeler à l'extérieur de la classe
     */

     public function addUsers() {
        // On stocke dans une variable notre requète 
        // on ajoute des marqueurs nominatifs pour préparer l'entrée de futures données
        $query = 'INSERT INTO fyS_users (firstname, lastname, username, address, mail, phoneNumber, password,id_userTypes, id_userRoles) 
        VALUES (:firstname, :lastname, :username, :address, :mail, :phoneNumber, :password, NULL, 2)';
        //Ajoute les clefs etrangères dans la requetes et on leir attribut des valeurs par defaut
        // quand on a des marqueurs nominatifs on utilise prepare(), elle n'exécute pas la requète immédiatement contrairement à query()
        $queryExecute = $this->db->prepare($query);
        // on attribut les données aux marqueurs nominatifs et on les formate en STRING
        //cela protege la base de données des injections SQL en formatant une requete en String
        
        $queryExecute->bindValue(':firstname', $this->firstname, PDO::PARAM_STR);
        $queryExecute->bindValue(':lastname', $this->lastname, PDO::PARAM_STR);
        $queryExecute->bindValue(':username', $this->username, PDO::PARAM_STR);
        $queryExecute->bindValue(':address', $this->address, PDO::PARAM_STR);
        $queryExecute->bindValue(':mail', $this->mail, PDO::PARAM_STR);
        $queryExecute->bindValue(':phoneNumber', $this->phoneNumber, PDO::PARAM_STR);
        $queryExecute->bindValue(':password', $this->password, PDO::PARAM_STR);
        //execute() execute la requete preparé avec les valeurs données dans les bindValues
        // on retourne l'execute() pour qu'il nous retourne un booloean true (fonctionne) ou false (fonctionne pas)
        return $queryExecute->execute();

        
     }
/** checkIfUserExist permet de verifier si le nom de l'utilisateur existe */
     public function checkIfUserExists()
     {
         $query = 'SELECT COUNT(username) AS count 
         FROM fyS_users 
         WHERE username = :username ';
         /** Présence de marqueur nominatif, donc je dois utiliser le prepare() */
         $queryExecute = $this->db->prepare($query);
         $queryExecute->bindValue(':username', $this->username, PDO::PARAM_STR);
         $queryExecute->execute();
         
         $queryResult = $queryExecute->fetch(PDO::FETCH_OBJ);
         return $queryResult->count;
     }
/** getHashByLogin permet de recupérer le password grâce au pseudo */
     public function getHashByLogin()
    {
        $query = 'SELECT password 
        FROM fyS_users
        WHERE username = :username';
        $queryExecute = $this->db->prepare($query);
        $queryExecute->bindValue(':username', $this->username, PDO::PARAM_STR);
        $queryExecute->execute();
        return $queryExecute->fetch(PDO::FETCH_OBJ);
    }
    /** getUsersInformations permet de savoir qu'elle est le rôle de l'utilisateur */
    public function getUsersInformations()
    {
        $query = 'SELECT id, id_userTypes, id_userRoles
        FROM fyS_users
        WHERE username = :username';
        $queryExecute = $this->db->prepare($query);
        $queryExecute->bindValue(':username', $this->username, PDO::PARAM_STR);
        $queryExecute->execute();
        $queryResult = $queryExecute->fetch(PDO::FETCH_OBJ);
        $this->id = $queryResult->id;
        /** on utilise une hydratation, pour simplifier la démarche dans le controller */
        $this->id_userTypes = $queryResult->id_userTypes;
        $this->id_userRoles = $queryResult->id_userRoles;
        return true;
    }
/**getUsersList permet d'afficher la liste des utilisateurs */
    public function getUsersList() {
        $query = 'SELECT firstname, lastname, username, address, mail, phoneNumber
        FROM fyS_users';
        $queryExecute = $this->db->query($query);
        $queryResult = $queryExecute->fetchAll(PDO::FETCH_OBJ);
        return $queryResult;
    }

    /** getUserProfile permet voir le Profil de l'utilisateur */
    public function getUserProfile() {
    $query = 'SELECT id,firstname, lastname, username, address, mail, phoneNumber, password
    FROM fyS_users
    WHERE id = :id';
    }
}