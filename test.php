<?php
require_once('modele/data/config.php');

#######
# Fonction qui lance la commande 'lscpu' : Informations du système
# Le résultat est habilement retraité pour le rendre lisible facilement
# Return OK : Array clé-valeur
# Return KO : String d'erreur
#######
function launchCommandLscpuReturnKeyValueArray() {
  $a = shell_exec('lscpu -J');
  $retval = exec('echo $?');
  if($retval == 0){
    $a = json_decode($a, $asso=TRUE);
    $val_cpu = [];
    foreach ($a as $value) {
      foreach ($value as $key => $val) {
        $val_cpu[$value[$key]['field']] = $value[$key]['data'];
      }
    }
    return $val_cpu;
  }
  else {
    echo("Erreur dans le lancement de la fonction");
  }
}

#######
# Fonction qui lance la commande 'free -mht' : Informations sur la mémoire du serveur
# Le résultat est habilement retraité pour le rendre lisible facilement
# Return OK : Array clé-valeur
# Return KO : String d'erreur
#######
function launchCommandFreeMemoryReturnKeyValueArray(){
  $a = exec('free -mht');
  $retval = exec('echo $?');
  if($retval == 0){
    $a = preg_replace('!\s+!', ' ', $a);
    $a = explode(" ",$a);
    $val_mem = [];
    foreach ($a as $key => $value) {
      switch($key){
        case 1:
          $val_mem["Total"] = $value;
          break;

        case 2:
          $val_mem["Utilise"] = $value;
          break;

        case 3:
          $val_mem["Libre"] = $value;
      }
    }
    return $val_mem;
  }

  else {
    echo("Erreur dans le lancement de la fonction");
  }
}

#######
# Fonction qui gère un service donné :
# @paramètres :
# - $service : string d'un service présent sur le serveur
# - $command : commande à lancer pour le service (contrôle start, stop ou status)
# Return OK : String OK
# Return OK pour demande status : longue String OK
# Return KO : String d'erreur
#######
function commandService($service, $command){
  global $COMMANDES_SERVICES;
  foreach ($COMMANDES_SERVICES as $controle) {
    if($controle == $command){
      $command_ok = TRUE;
      break;
    }
    else {
      $command_ok = FALSE;
    }
  }
  if($command_ok == TRUE) {
    $val = shell_exec("sudo service ".$service." ".$command." 2>&1");
    $retval = shell_exec('$echo $?');
    if($retval == 0){
      switch ($command) {
        case 'start':
          return "La fonction ".$service." a bien été démarrée";
          break;

        case 'stop':
          return "La fonction ".$service." a bien été stoppé";
          break;

        case 'status':
          return $val;
      }
    }
    else {
      return "Veuillez entrer une commande valide";
    }
  }
}

function readFileFTPConfigReturnArrayKeyValue(){
    $tmp = file("/etc/vsftpd2.conf");
    $conf_file = array();
    foreach ($tmp as $value) {
      $i = 0;
      $cache = explode("=",$value);
      $conf_file[$cache[0]] = $cache[1];
    }
    return $conf_file;
}

function saveModifiedFTPConfFile($conf_file){

}


?>
