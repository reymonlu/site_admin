<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Configuration du serveur FTP</title>
  </head>
  <body>
    <h1>Configuration du serveur FTP</h1>
    <h2>Configuration</h2>
    <table>
      <tr>
        <th>Clé</th><th>Valeur</th>
      </tr>
      <?php
        require_once("../test.php");
        $conf_ftp = readFileFTPConfigReturnArrayKeyValue();
       ?>
      <form class="" action="../controller/validation_ftp.php" method="post">
        <table>
      <?php foreach ($conf_ftp as $key => $value) { ?>
          <tr>
          <td><?=$key?> :</td>
          <td><input type="text" name=<?=$key?> value=<?=$value?>></td>
          </tr>
      <?php } ?>
    </table>
      <input type="submit" value="Valider">
      </form>
  </body>
</html>
