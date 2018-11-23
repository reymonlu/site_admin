<?php
/**
 * Created by PhpStorm.
 * User: valentid
 * Date: 23/11/18
 * Time: 16:25
 */
require_once ('DatabaseDAO.class.php');


class CommandeDAO
{
    private $db;

    function __construct()
    {
        $db = new DatabaseDAO();
    }

    function get_liste_commandes_possibles()
    {
        global $db;
        $req = array();
        if ($fh = fopen('data/commandes.txt', 'r')) {
            $line = fgets($fh);
            $req[] = $line;
        }
        fclose($fh);
        return $req;
    }

}