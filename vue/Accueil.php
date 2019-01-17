<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
<link rel="stylesheet" href="../style.css">
    <title>Site d'administration</title>
    <link rel="stylesheet" type="text/css" href="modele/data/theme.css">
</head>
<body>
<a href="index.php?controleur=Deconnexion&action=disconnect">Déconnexion</a>
<h1>Liste des services</h1>
<a href="index.php?controleur=FTP&action=validation">Configuration Serveur FTP</a>
<table>
  <tr>
    <th>Service</th> <th>Etat</th>
  </tr>
  <?php foreach ($this->list_service as $key => $value) { ?>
    <tr>
      <td><?=$key ?></td> <td class="statut"><?= $value ?></td>
    </tr>
  <?php } ?>
</table>
</body>
</html>
