<?php
require_once('../modele/data/config.php');
#http://localhost:8081/controller/validation_ftp.php?listen=NO&listen_ipv6=YES&anonymous_enable=NO&local_enable=YES&dirmessage_enable=YES&use_localtime=YES&xferlog_enable=YES&connect_from_port_20=YES&secure_chroot_dir=%2Fvar%2Frun%2Fvsftpd%2Fempty&pam_service_name=vsftpd&rsa_cert_file=%2Fetc%2Fssl%2Fcerts%2Fssl-cert-snakeoil.pem&rsa_private_key_file=%2Fetc%2Fssl%2Fprivate%2Fssl-cert-snakeoil.key&ssl_enable=NO
$config_ftp = array();

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
}
if
echo(count($config_ftp));
echo('<br>');


  var_dump($config_ftp);

 ?>