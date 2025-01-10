<?php
$title = 'scope';

include('./../inc/header.php')

$guitars = [
  ['name' => 'Vela', 'manufacturer' => 'PRS'],
  ['name' => 'Explore', 'manufacturer' => 'Gibson'],
  ['name' => 'Strat', 'manufacturer' => 'Fender']
];

//$guitar_names = array_column($guitar, 'name');

function pluck($arr, $key){
  $result = array_map(function($item) use($key){
    return $item[$key];
  }, $arr);
  return $result;
};

$guitar_names = pluck($guitars, 'manufacturer');

function output ($value) {
  echo '<pre>';
  print_r($value);
  echo '</pre>';
};

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
    output($guitar_names)
    ?>
  </table>
</body>
</html>