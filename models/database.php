<?php
// on la créer pour éviter de connecter X fois, aux différentes class. Le lien est fais grace à extend. //
class database {
    protected $db = NULL;
    public function __construct(){

        try{
            $this->db = new PDO('mysql:host=localhost;dbname=ProjetTiano;charset=utf8', 'root', 'root');
            return $this->db;
        } catch (Exception $error){
            die ($error->getMessage());
        }
    }
}