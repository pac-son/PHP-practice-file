<?php

function redirect($url) {
  header("Location: $url");
}

function view($name, $model = ''){
  global $view_bag;
  require(APP_PATH . "views/layout.view.php");
}