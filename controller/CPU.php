<?php
/**
 * Created by PhpStorm.
 * User: reymonlu
 * Date: 17/01/19
 * Time: 16:43
 */
require_once('modele/data/config.php');
require_once('controller/test.php');
require_once('modele/Vue.php');

class CPU
{
    public function show(){
        $tab_cpu = launchCommandLscpuReturnKeyValueArray();
        $tab_memoire = launchCommandFreeMemoryReturnKeyValueArray();
        # Création de la vue
        $view = new Vue();
        $view->tab_cpu = $tab_cpu;
        $view->tab_memoire = $tab_memoire;
        $view->show('vue/vue_status.php');

    }

}