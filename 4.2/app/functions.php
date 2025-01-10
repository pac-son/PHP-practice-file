<?php

function redirect($url) {
  header("Location: $url");
}

function view($name, $model = ''){
  global $view_bag;
  require("views/layout.view.php");
}