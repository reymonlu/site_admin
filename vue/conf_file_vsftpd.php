<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

      <title>Configuration du serveur FTP</title>
  </head>
  <body>
  <div class="container">
  <a href="index.php?controleur=Deconnexion&action=disconnect">Déconnexion</a>

  <h1>Configuration du serveur FTP</h1>
    <h2>Configuration</h2>
    <table class="table table-striped">
        <thead>
      <tr>
        <th>Clé</th><th>Valeur</th>
      </tr>
        </thead>
        <tbody>
      <form action="index.php?controleur=FTP&action=validation" method="post">
      <?php foreach ($this->conf_ftp as $key => $value) { ?>
          <tr>
          <td class="col-sm-6"><?=$key?> :</td>
          <td class="col-sm-6"><input type="text" name=<?=$key?> value=<?=$value?>></td>
          </tr>
      <?php } ?>
        </tbody>
    </table>
      <input type="submit" value="Valider">
      </form>
    </div>
  </body>
</html>
