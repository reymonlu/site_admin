<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Status du serveur</title>
  </head>
  <body>
    <h1>Status du serveur</h1>
    <h2>Configuration</h2>
    <table>
      <tr>
        <th>Libellé</th><th>Valeur</th>
      </tr>
      <?php
      require_once('../test.php');
      $tab_cpu = launchCommandLscpuReturnKeyValueArray();
      ?>
      <?php foreach ($tab_cpu as $key => $value) { ?>
          <tr>
          <td><?=$key?></td>
          <td><?=$value?></td>
          </tr>
        <?php } ?>
    </table>
    <h2>Mémoire</h2>
    <table>
      <tr>
        <th>Total</th><th>Utilisé</th><th>Libre</th>
      </tr>
      <?php
        require_once('../test.php');
        $tab_memoire = launchCommandFreeMemoryReturnKeyValueArray();
        ?>
        <tr>
        <?php foreach ($tab_memoire as $key => $value) { ?>
          <td><?=$value ?></td>
        <?php } ?>
        </tr>
    </table>
  </body>
</html>
