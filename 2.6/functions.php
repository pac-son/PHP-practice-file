<?php
$title = 'functions';

function sum($a, $b) {
  $result = $a + $b;

  return $result;
}

$result = sum(1, 2);

$guitar = [
  'Vela',
  'Explorer',
  'Strat'
];

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
  
    echo $result;

    output($guitar)

    ?>
  </table>
</body>
</html>