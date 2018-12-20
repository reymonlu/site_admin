<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Site d'administration</title>
</head>
<body>
<h1>Liste des services</h1> <a href="index.php?controleur=Deconnexion&action=disconnect">Déconnexion</a>
<table>
  <tr>
    <th>Service</th>
    <th>Adresse</th>
  </tr>
  <?php foreach ($this->list_service as $key => $value) { ?>
    <tr>
      <td><?=$key ?></td>
      <td><?= $server ?>"index.php?controleur=fonctionnalites&action="<?= $value ?></td>
    </tr>
  <?php } ?>
</table>
</body>
</html>
