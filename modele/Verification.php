<?php
/**
 * Created by PhpStorm.
 * User: reymonlu
 * Date: 23/11/18
 * Time: 16:43
 */


/**
 * Class Verification qui s'occupe de vérifier les variables liés à une connexion.
 */

class Verification
{
    /**
     * @param $session
     * @param $cookie
     * @return Vrai si le token dans le cookie et dans la variable de session son égaux
     */
    public static function verifCookieSession(){
        return isset($_SESSION["ticket"]) && isset($_COOKIE["ticket"]) && isset($_COOKIE["ticket"]) == $_SESSION["ticket"] ;
    }
}