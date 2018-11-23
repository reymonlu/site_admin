<?php
require_once("./modele/Vue.php");
/**
 * User: reymonlu
 * Date: 23/11/18
 * Time: 15:35
 */
  # Controleur frontal
  if(isset($_GET['controleur']) && isset($_GET['action'])){
    $action = $_GET['action'];
    # contruction du chemin
    $controller_file_name = "./controller/".$_GET['controleur'].".php";
    # vérification de l'existence du fichier
    if((file_exists($controller_file_name))){
      require_once($controller_file_name);
      # Création de l'objet
      $controller = new $_GET['controleur']();
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
  else{
      $view = new Vue();
      $view->show("vue/Erreur.vue.html");
  }

?>
