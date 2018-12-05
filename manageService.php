<?php
/**
 * Created by PhpStorm.
 * User: evan
 * Date: 05/12/18
 * Time: 15:44
 */

# du coup on va tenter de lister les services:

$command = '/usr/sbin/service --status-all';

$output = shell_exec($command);


$tab = explode ('[', $output);

foreach ($tab as $service) {
    #echo $service;
    $state = substr($service, 1, 1);
    if ($state == '+'){
        $state = TRUE;
    }
    else{
        $state = FALSE;
    }

    echo $state;

    echo "<br/>";
    $name = substr($service, 5);
    echo $name;
    echo "<br/>";


}



#$state = substr($output )

?>

