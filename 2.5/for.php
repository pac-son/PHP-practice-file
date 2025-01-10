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

    for ($i = 0; $i < count($favouriteGuitars); $i++) {
      $guitar = $favouriteGuitars[$i];
      echo "<tr><td>$guitar</td></tr>";
    }

    //foreach($favouriteGuitars as $guitar){
    //  echo "<tr><td>$guitar</td></tr>";
    //}

    ?>
  </table>
</body>
</html>