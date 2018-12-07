<?php
/**
 * User: reymonlu
 * Date: 23/11/18
 * Time: 15:35
 */

require_once("./modele/Vue.php");
require_once ("./controller/Identification.php");
require_once ("./controller/Accueil.php");
require_once ("./modele/Verification.php");
  # Controleur frontal
  # On vérifie qu'il y a une session en cours avec le bon token et le cookie associé
  if(Verification::verifCookieSession()){

      # Vérification des paramètres GET
    if(!isset($_GET['controleur']) || !isset($_GET['action'])){
      $action = "accueilPage";
      $controller_name = "Accueil";
      $controller_file_name= "./controller/".$controller_name.".php";
    }

    else{
      $action = $_GET['action'];
      # contruction du chemin
      $controller_name = $_GET['controleur'];
      $controller_file_name = "./controller/".$_GET['controleur'].".php";
    }
    # vérification de l'existence du fichier
    if((file_exists($controller_file_name))){
      require_once($controller_file_name);
      # Création de l'objet
      $controller = new $controller_name();
      # Tentative de lancement de la méthode
      if (method_exists($controller, $action)){
        $controller->$action();
      }
      else{
        $view = new Vue();
        $view->show("vue/Erreur.vue.html");
      }
    }
    else{

      $view = new Vue();
      $view->show("vue/Erreur.vue.html");
    }
  }
  # Si on est pas connecté, redirection vers la page de connexion
  else{
    # Vérification des paramètres GET
    if(!isset($_GET['controleur']) || !isset($_GET['action'])){
      $action = "afficheForm";
      $controller_name = "Identification";
      $controller_file_name = "./controller/".$controller_name.".php";
    }
    else{
      $action = $_GET['action'];
      # contruction du chemin
      $controller_name = $_GET['controleur'];
      $controller_file_name = "./controller/".$_GET['controleur'].".php";
    }

    # vérification de l'existence du fichier
    if((file_exists($controller_file_name))){
      require_once($controller_file_name);
      # Création de l'objet
      $controller = new $controller_name();
      # Tentative de lancement de la méthode
      if (method_exists($controller, $action)){
        $controller->$action();
        }
      else{
        $view = new Vue();
        $view->show("vue/Erreur.vue.html");
      }
    }
    else{
      $view = new Vue();
      $view->show("vue/Erreur.vue.html");
    }
  }


?>
