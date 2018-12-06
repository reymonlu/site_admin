<?php
/**
 * Created by PhpStorm.
 * User: evan
 * Date: 05/12/18
 * Time: 15:44
 */

# du coup on va tenter de lister les services:

fann_cascadetrain_on_data()
$command = '/usr/sbin/service --status-all';

$output = shell_exec($command);


$tab = explode ('[', $output);

$services = array();

foreach ($tab as $service) {
    #echo $service;
    $state = substr($service, 1, 1);
    if ($state == '+'){
        $state = TRUE;
    }
    else{
        $state = FALSE;
    }

    $name = substr($service, 5);

    $services[] = array($name, $state);


}

foreach ($services as $srv){
    echo $srv[0];
    echo $srv[1];
    echo '<br/>';
}





#$state = substr($output )

?>

