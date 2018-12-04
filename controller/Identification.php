<?php
/**
 * Created by PhpStorm.
 * User: reymonlu
 * Date: 23/11/18
 * Time: 15:56
 * hash du pass admin : "$2y$10$zy8lFIRDlR7SYTnG.0mv/.09Cw4dvDg2E3/hBLXC9ka6DrOV9in92"
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
        $vue = new Vue();
        # Vérification des données passées dans le formulaire
        # Si il manque une variable
        if(!isset($_POST["ID"]) || !isset($_POST["motDePasse"])){
            $vue->error_identification = "Mauvais mot de passe/identifiant";
            $vue->show("Vue/Identification_form.html");
        }
        else{
            # Récupération des variables
            $identifiant = htmlspecialchars($_POST["ID"]);
            $mdp = password_verify(htmlspecialchars($_POST["motDePasse"]),PASSWORD_BCRYPT);

        }



        # Gestion des données


    }
}