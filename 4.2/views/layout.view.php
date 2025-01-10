<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals: <?= $view_bag['title']; ?> </title>
  </head>
  <body>

  <nav>
    <div>
      <a href="#">PHP Fundamentals: <?= $view_bag['title']; ?></a>
    </div>
  </nav>

    <?php require("$name.view.php"); ?>

  </body>
</html>