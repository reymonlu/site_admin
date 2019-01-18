<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

      <title>Status du serveur</title>
  </head>
  <body>
  <div class="container">
      <a href="index.php?controleur=Deconnexion&action=disconnect">Déconnexion</a>
    <h1>Status du serveur</h1>
    <h2>Configuration</h2>
    <table class="table table-striped">
      <thead>
      <tr>
        <th>Libellé</th><th>Valeur</th>
      </tr>
      </thead>
      <?php foreach ($this->tab_cpu as $key => $value) { ?>
          <tr>
          <td class="col-sm-6"><?=$key?></td>
          <td class="col-sm-6"><?=$value?></td>
          </tr>
        <?php } ?>
    </table>
    <h2>Mémoire</h2>
    <table class="table table-striped">
      <thead>
      <tr>
        <th>Total</th><th>Utilisé</th><th>Libre</th>
      </tr>
      </thead>
        <tr>
        <?php foreach ($this->tab_memoire as $key => $value) { ?>
          <td><?=$value ?></td>
        <?php } ?>
        </tr>
    </table>
      </div>
  </body>
</html>
