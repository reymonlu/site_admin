<?php
/**
 * Created by PhpStorm.
 * User: evan
 * Date: 17/01/19
 * Time: 11:31
 */
require_once("../test.php");
echo "fezfzesfezs";


if (isset($_POST['state'])) {
    if ($_POST['state'] == "start") {
        $status = "start";
    }
    elseif ($_POST['state'] == "stop") {
        $status = "stop";
    }
}

if (isset($_POST['servicename'])) {
    # la il faut vérifier que le service existe
    $name = $_POST['servicename'];
}

# modification du service
$rep = commandService($name, $status);
echo $rep;
#echo "fezfzesfezs";


    ?>