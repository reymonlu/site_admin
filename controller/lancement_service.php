<?php
/**
 * Created by PhpStorm.
 * User: valentid
 * Date: 23/11/18
 * Time: 15:58
 */

require_once ("../modele/DatabaseDAO.php");

if(isset($_POST['service'])){
  $service = htmlentities($_POST['service']);
}

$req = array();
if ($fh = fopen('../modele/data/commandes.txt', 'r')) {
   $line = fgets($fh);
   echo $line;
   $req[] = $line;
}
fclose($fh);

var_dump($req);
