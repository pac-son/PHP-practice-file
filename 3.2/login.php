<?php
session_start();
$title ='POST input' ;

require_once('../inc/config.php');
require_once('../inc/functions.php');

if (is_user_authenticated()){
  redirect('admin.php');
  die();
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
  $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $password = $_POST['password']; //TODO: validate this!

  //compared to stored data
  if (authenticate_user($email, $password)){
    $_SESSION['email'] = $email;
    redirect('admin.php');
    //header('Location: admin.php');
    die();
  } else {
    $status = "The provided credentials do not match any user";
  }

  if($email == false){
    $status = 'Please enter a valid email address';
  }
}

include('../inc/header.php');
?>

<div>
  <div>
    <div>
      <h1>POST Input</h1>
    </div>
  </div>
  <div class="row">
    <form action="" method="POST">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
      </div>

      <div class="form-group">
        <input type="submit" value="Login">
      </div>
    </form>
  </div>
  <div>
    <?php
    if(isset($status)){
      echo '<p style="color: red">'.$status.'</p>';
    }
    ?>
  </div>
</div>

<?php include('./../inc/footer.php'); ?>