<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style.css">
    <title>Formulaire d'identification</title>
</head>
<body>
<form action="index.php?controleur=Identification&action=controleForm" method="POST">
    <label for="ID">ID :</label>
    <input id="ID" name="identifiant" type="text" required="true">
    <br>
    <label for="mdp">Mot de passe :</label>
    <input id="mdp" name="motDePasse" type="password">
    <br>
    <?php if(isset($this->error_identification)):?>
        <strong><?= $this->error_identification ?></strong>
    <?php endif; ?>
    <br>


    <input type="submit" value="Connexion">
</form>
</body>
</html>
