<?php
/**
 * Created by PhpStorm.
 * User: reymonlu
 * Date: 07/12/18
 * Time: 08:39
 */

require_once("modele/Verification.php");
require_once("modele/Vue.php");
require_once("modele/Tool.php");
class Accueil
{


    public function accueilPage(){
        $vue = new Vue();
        # test de la variable de session avec le cookie
        if(Verification::verifCookieSession()){

            $vue->show("vue/Accueil.php");
        }
        # Si l'identification n'est pas bonne
        else{
            Tool::redirectAuth();
        }
    }
}