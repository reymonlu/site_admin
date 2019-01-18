<?php
/**
 * Created by PhpStorm.
 * User: evan
 * Date: 17/01/19
 * Time: 11:31
 */
require_once("test.php");


if (isset($_POST['state'])) {
    if ($_POST['state'] == "start") {
        $status = "start";
    }
    else {
        $status = "stop";
    }
}

if (isset($_POST['servicename'])) {
    # la il faut vérifier que le service existe
    $name = htmlentities($_POST['servicename']);
    #if ($name == "cron"){
    #    echo "fzefnrezjofhbzeriouhfuiozehfouziebhfjezbhfjksezbjksbfjsk <br/>";
    #    echo $name;
    #}
    echo $name;
}

#echo $status;
#echo "<br/>";
## modification du service
$rep = commandService($name, $status);
#echo "<br/>";
#echo $rep;



    ?>
