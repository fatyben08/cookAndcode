<?php
require_once 'models/Database.php';

class User extends Database
{
    public $id;
    public $pseudo;
    public $email;
    public $password;


    public function getAllUser()
    {
        $query = "SELECT * FROM `rfrs_users`";
        $queryExecute = $this->db->query($query);

        return $queryExecute->fetchAll(PDO::FETCH_OBJ);
    }

    public function register()
    {
        $query = "INSERT INTO `rfrs_users`(`pseudo`, `email`, `password`) 
        VALUES (:pseudo,:email ,:password);";

        $queryExecute = $this->db->prepare($query);
        $queryExecute->bindValue(':pseudo', $this->pseudo, PDO::PARAM_STR);
        $queryExecute->bindValue(':email', $this->email, PDO::PARAM_STR);
        $queryExecute->bindValue(':password', $this->password, PDO::PARAM_STR);
        
        return    $queryExecute->execute();
    }

    public function delete()
    {
        $query = "DELETE FROM `rfrs_users` WHERE `id` = :id;";
        $queryExecute = $this->db->prepare($query);
        $queryExecute->bindValue(':id', $this->id, PDO::PARAM_INT);
        return    $queryExecute->execute();
    }
}


