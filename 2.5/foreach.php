<?php
$title = 'foreach Loop';
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

    foreach($favouriteGuitars as $guitar){
      echo "<tr><td>$guitar</td></tr>";
    }

    ?>
  </table>
</body>
</html>