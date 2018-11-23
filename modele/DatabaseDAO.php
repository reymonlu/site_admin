<?php
/**
 * Created by PhpStorm.
 * User: valentid
 * Date: 23/11/18
 * Time: 16:04
 */

class DatabaseDAO
{
    private $database="modele/data/database.db";

    function __construct()
    {
        $this->database = "modele/data/database.db";
        try {
            $this->db = new PDO("sqlite:$this->database",'','');
        }
        catch (PDOException $e){
            die("Erreur de connexion ".$e->getMessage());
        }
    }
}
