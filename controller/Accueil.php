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


    private function listService() {
        $command = '/usr/sbin/service --status-all';
        $output = shell_exec($command);

        $tab = explode('[', $output);

        foreach ($tab as $service) {

            $state = substr($service, 1, 1);
            $state = ($state == "+") ? "+" : "-";   
            # récupération du nom du service
            $name = substr($service, 5);
            $services[$name] = $state;

        }
        return array_slice($services,1);
    }

    public function accueilPage(){
        $vue = new Vue();
        # test de la variable de session avec le cookie
        if(Verification::verifCookieSession()){
            # Récupération du tableau des services
            $service = $this->listService();
            $vue->list_service = $service;
            $vue->show("vue/Accueil.php");
        }
        # Si l'identification n'est pas bonne
        else{
            Tool::redirectAuth();
        }
    }

}