<?php
/**
 * Created by PhpStorm.
 * User: evan
 * Date: 07/12/18
 * Time: 09:33
 */

class manageService
{
    public function listService() {
        $command = '/usr/sbin/service --status-all';
        $output = shell_exec($command);

        $tab = explode('[', $output);

        foreach ($tab as $service) {

            $state = substr($service, 1, 1);
            if ($state == '+') {
                $state = TRUE;
            } else {
                $state = FALSE;
            }
            # récupération du nom du service
            $name = substr($service, 5);
            $services[$name] = $state;

        }
        return $services;
    }

    public function startService()
    {
        #start a service
    }
    }