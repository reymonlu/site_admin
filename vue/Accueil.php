<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Site d'administration</title>
</head>
<body>
<h1>Liste des services</h1> <a href="index.php?controleur=Deconnexion&action=disconnect">Déconnexion</a>
<br/><br/>

<?php if (isset($_POST['msg_error_form'])) {
    echo $_POST['msg_error_form'];
}  ?>
<br/>

<form action="../controller/start-stop-service.php" method="post">
<select name="state">
    <option value="start">start</option>
    <option value="stop">stop</option>
</select>

<select name="servicename">
    <?php foreach ($this->list_service as $key => $value) { ?>

        <option value="<?php echo "$key"; ?>"> <?php echo "$key"; ?></option>
    <?php } ?>
</select>
    <input type="submit" value="Valider" />

</form>

<br/><br/>


<table>
  <tr>
    <th>Service</th> <th>Etat</th>
  </tr>
  <?php foreach ($this->list_service as $key => $value) { ?>
    <tr>
      <td><?=$key ?></td> <td><?= $value ?></td>
    </tr>
  <?php } ?>
</table>

</body>
</html>
