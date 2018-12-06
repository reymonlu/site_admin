<?php
/**
 * Created by PhpStorm.
 * User: reymonlu
 * Date: 23/11/18
 * Time: 15:56
 * hash du pass admin : "$2y$10$zy8lFIRDlR7SYTnG.0mv/.09Cw4dvDg2E3/hBLXC9ka6DrOV9in92"
 */

require_once("modele/Vue.php");
require_once("modele/DatabaseDAO.php");

class Identification
{
    public $HASH = 'sha512';
    public function afficheForm(){
        # Création de la vue
        $vue = new Vue();
        $vue->show("./vue/Identification_form.php");
    }

    /**
     * Fonction qui contrôle que tous les champs sont corrects
     */

    public function controleForm(){
        # Création de la vue
        $vue = new Vue();
        # Vérification des données passées dans le formulaire
        # Si il manque une variable
        if(!isset($_POST["identifiant"]) || !isset($_POST["motDePasse"])){
            $vue->error_identification = "Mauvais mot de passe/identifiant";
            $vue->show("vue/Identification_form.php");
        }
        else{
            # Création d'un databaseDAO
            $database = new DatabaseDAO();
            # Récupération des variables
            $identifiant = htmlspecialchars($_POST["identifiant"]);
            $mdp_saisi = htmlspecialchars($_POST["motDePasse"]);
            # hachage du mot de passe /
            $mdp_hash_saisi = hash($this->HASH, $mdp_saisi);
            # Il faut à présent vérifier que le mot de passe est bon avec le bon utilisateur
            $utilisateur = $database->getAdmin($identifiant, $mdp_hash_saisi);

            # Si nous avons un résultat qui correspond
            if($utilisateur != false){

                header("location: site_administration/index.php");
            }
            # Si l'utilisateur n'est pas dans la base
            else{
                $vue->error_identification = "Mauvais mot de passe/identifiant";
                $vue->show("vue/Identification_form.php");
            }

        }
    }
}