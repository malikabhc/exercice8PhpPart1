<?php
  $first = 3 + 4;
  $second = 5 * 20;
  $third = 45 / 5;
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 8</title>
  </head>
  <body>
    <p>
    <?php echo $first . ' ' . $second . ' ' . $third; ?>
    <!-- AUTRE POSSIBILITE
    <?= $first . ' ' . $second . ' ' . $third; ?>
    -->
    </p>
  </body>
</html>
