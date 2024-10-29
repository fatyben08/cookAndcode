<?php
require_once 'models/Database.php';

class Categories extends Database
{
    public $id;
    public $name;



    public function register()
    {
        $query = "INSERT INTO `rfrs_categories`(`name`) 
        VALUES (:name);";
        $queryExecute = $this->db->prepare($query);
        $queryExecute->bindValue(':name', $this->name, PDO::PARAM_STR);
        return $queryExecute->execute();
    }
}
