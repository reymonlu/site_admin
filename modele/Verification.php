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
require_once ("modele/data/config.php");

class Verification
{
    /**
     * @param $session
     * @param $cookie
     * @return Vrai si le token dans le cookie et dans la variable de session son égaux
     */
    public static function verifCookieSession(){
        global $HASH;

        if (isset($_SESSION["ticket"]) && isset($_COOKIE["ticket"])){
            $json = json_decode($_COOKIE["ticket"]);
            return $json->{"ticket"} == $_SESSION["ticket"] &&
                     $json->{"expiry"} >= time() &&
                    hash($HASH,$json->{"expiry"} + 20) == $json->{"random_datas"};

        }
        else return false;


    }
}