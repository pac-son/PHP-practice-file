<?php
$title = 'scope';

include('./../inc/header.php');
require_once('./../inc/functions.php');

$guitars = [
  ['name' => 'Vela', 'manufacturer' => 'PRS'],
  ['name' => 'Explore', 'manufacturer' => 'Gibson'],
  ['name' => 'Strat', 'manufacturer' => 'Fender']
];

$guitar_names = array_column($guitars, 'name');


?>

  <table>
    <?php
    output($guitar_names)
    ?>
  </table>

  <?php include('./../inc/footer.php'); ?>
