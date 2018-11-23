<?php
/**
 * Created by PhpStorm.
 * User: reymonlu
 * Date: 23/11/18
 * Time: 15:56
 */
require_once("modele/Vue.php");

class Identification
{
    public function afficheForm(){
        # Création de la vue
        $vue = new Vue();
        $vue->show("./vue/Identification_form.html");
    }

    /**
     * Fonction qui contrôle que tous les champs sont corrects
     */

    public function ControleForm(){
        # Création de la vue


    }
}