<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../modele/data/style/style.css">
    <title>Site d'administration</title>
</head>
<body>

<form action="cible.php" method="post">
<select name="cars">
    <option value="start">start</option>
    <option value="stop">stop</option>
</select>


<select name="test2">
     <?php foreach ($this->list_service as $key => $value) { ?>

    <option value="rfrfgrgr"> tesfrgrdegrdgfrdt</option>
    <?php } ?>
</select>
</form>

</body>
</html>

