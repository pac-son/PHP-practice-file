<?php
$title = 'for Loop';
$favouriteGuitars = [
  'Vela',
  'Explorer',
  'Strat'
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Fundamentals <?= $title; ?></title>
</head>
<body>
  <table>
    <?php
    $i = 0;

    while ($i < count($favouriteGuitars)) {
      $guitar = $favouriteGuitars[$i];
      echo "<tr><td>$guitar</td></tr>";

      $i++;
    }

    ?>
  </table>
</body>
</html>