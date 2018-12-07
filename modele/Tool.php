<?php
/**
 * Created by PhpStorm.
 * User: reymonlu
 * Date: 07/12/18
 * Time: 09:06
 */

class Tool
{
    /**
     * Fonction qui redirige vers la page de connexion
     */
    public static function redirectAuth(){
        header("location: index.php?controleur=Identification&action=afficheForm");
    }
}