<?php
require_once('modele/data/config.php');
require_once('controller/test.php');
require_once('modele/Vue.php');

class FTP{


  public function validation(){
    $config_ftp = array();
    $error = False;
    if(isset($_POST['listen'])
        && isset($_POST['listen_ipv6'])
        && isset($_POST['anonymous_enable'])
        && isset($_POST['local_enable'])
        && isset($_POST['dirmessage_enable'])
        && isset($_POST['use_localtime'])
        && isset($_POST['xferlog_enable'])
        && isset($_POST['connect_from_port_20'])
        && isset($_POST['secure_chroot_dir'])
        && isset($_POST['pam_service_name'])
        && isset($_POST['rsa_cert_file'])
        && isset($_POST['rsa_private_key_file'])
        && isset($_POST['ssl_enable']))
    {
      $config_ftp['listen'] = htmlentities($_POST['listen']);
      $config_ftp['listen_ipv6'] = htmlentities($_POST['listen_ipv6']);
      $config_ftp['anonymous_enable'] = htmlentities($_POST['anonymous_enable']);
      $config_ftp['local_enable'] = htmlentities($_POST['local_enable']);
      $config_ftp['dirmessage_enable'] = htmlentities($_POST['dirmessage_enable']);
      $config_ftp['use_localtime'] = htmlentities($_POST['use_localtime']);
      $config_ftp['xferlog_enable'] = htmlentities($_POST['xferlog_enable']);
      $config_ftp['connect_from_port_20'] = htmlentities($_POST['connect_from_port_20']);
      $config_ftp['secure_chroot_dir'] = htmlentities($_POST['secure_chroot_dir']);
      $config_ftp['pam_service_name'] = htmlentities($_POST['pam_service_name']);
      $config_ftp['rsa_cert_file'] = htmlentities($_POST['rsa_cert_file']);
      $config_ftp['rsa_private_key_file'] = htmlentities($_POST['rsa_private_key_file']);
      $config_ftp['ssl_enable'] = htmlentities($_POST['ssl_enable']);
      foreach ($config_ftp as $key => $value) {
        if($key !== 'rsa_cert_file' && $key !== 'rsa_private_key_file' && $key !== 'secure_chroot_dir') {
          $config_ftp[$key] = strtoupper($value);
        }
      }
      foreach ($config_ftp as $key => $value) {
        if($key !== 'rsa_cert_file' && $key !== 'rsa_private_key_file' && $key !== 'secure_chroot_dir') {
          $config_ftp[$key] = trim($value);
        }
      }

      $controlYesNo = array("YES","NO");
      $error = False;

      foreach ($config_ftp as $key => $value) {
        if($key != 'rsa_cert_file' &&
            $key != 'rsa_private_key_file' &&
            $key != 'secure_chroot_dir' &&
            $key != 'pam_service_name')
        {
          if(!in_array($value, $controlYesNo)){
            $error = True;
            break;
          }
        }

        if($key == 'pam_service_name') {
          if($value != 'VSFTPD') {
            $error = True;
            break;
          }
        }

        if($key == 'rsa_cert_file') {
          if(substr($value,-3) != 'pem') {
            echo(substr($value,-3));
            $error = True;
            break;
          }
        }

        if($key == 'rsa_private_key_file') {
          if(substr($value,-3) != 'key') {
            echo(substr($value,-3));
            $error = True;
            break;
          }
        }

        if($key == 'secure_chroot_dir') {
          if($value != '/var/run/vsftpd/empty') {
            $error = True;
            break;
          }
        }
      }
      if($error == False) {
        saveModifiedFTPConfFile($config_ftp);
      }
    }

    # Préparation de la vue
    $view = new Vue();
    $view->conf_ftp = readFileFTPConfigReturnArrayKeyValue();
    $view->show("vue/conf_file_vsftpd.php");



  }
}


?>
