<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
  <link rel="stylesheet" href="..style.css">
    <title>Configuration du serveur FTP</title>
  </head>
  <body>
  <a href="index.php?controleur=Deconnexion&action=disconnect">Déconnexion</a>

  <h1>Configuration du serveur FTP</h1>
    <h2>Configuration</h2>
    <table>
      <tr>
        <th>Clé</th><th>Valeur</th>
      </tr>
      <form action="index.php?controleur=FTP&action=validation" method="post">
        <table>
      <?php foreach ($this->conf_ftp as $key => $value) { ?>
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
