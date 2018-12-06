<?php
/**
 * Created by PhpStorm.
 * User: evan
 * Date: 05/12/18
 * Time: 15:44
 */

# fonction pour lister les services présent dans la machine vu par la commande service
function listServices()
{
    $command = '/usr/sbin/service --status-all';

    $output = shell_exec($command);


    $tab = explode('[', $output);



    foreach ($tab as $service) {
        #echo $service;
        $state = substr($service, 1, 1);
        if ($state == '+') {
            $state = TRUE;
        } else {
            $state = FALSE;
        }

        $name = substr($service, 5);

        $services[$name] = $state;


    }
    print_r(array_keys($services));

}


