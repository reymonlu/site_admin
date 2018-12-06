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
    private $db;

    public function __construct()
    {

        try {
            $this->db = new PDO("sqlite:$this->database",'','');
        }
        catch (PDOException $e){
            die("Erreur de connexion ".$e->getMessage());
        }
    }

    /**
     * @param $id Id de l'utilisateur
     * @param $pass Hash du mot de passe saisi
     * @return l'utilisateur correspondant, faux s'il n'existe pas
     */
    public function getAdmin($id, $pass)
    {
        # Écriture de la requête
        $requete =$this->db->prepare("SELECT login, password FROM user WHERE login= ? AND password= ?");
        $requete->execute(array($id, $pass));
        # Récupération des données
        $utilisateurDB = $requete->fetch(PDO::FETCH_ASSOC);
        return $utilisateurDB;
    }
}
