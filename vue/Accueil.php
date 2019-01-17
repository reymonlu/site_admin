<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <title>Site d'administration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <a href="index.php?controleur=Deconnexion&action=disconnect">Déconnexion | </a>
    <a href="index.php?controleur=FTP&action=validation">Configuration Serveur FTP | </a>
    <a href="index.php?controleur=CPU&action=show">Processeur</a>
<h1>Liste des services</h1>

<table class="table table-striped">
    <thead>
  <tr>
    <th class="col-sm-6">Service</th> <th class="col-sm-6">Etat</th>
  </tr>
    </thead>
    <tbody>
  <?php foreach ($this->list_service as $key => $value) { ?>
    <tr>
      <td><?=$key ?></td> <td class="statut"><?= $value ?></td>
    </tr>
    </tbody>
  <?php } ?>
</table>
</div>
</body>
</html>
