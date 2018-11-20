<?php

#session_destroy();
session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /FestivalChin-/agregar.php');
  }
  require 'database.php';

  if (!empty($_POST['user']) && !empty($_POST['pass'])) {
    $records = $conn->prepare('SELECT id, user, pass FROM user WHERE user = :user');
    $records->bindParam(':user', $_POST['user']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['pass'], $results['pass'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /FestivalChin-/agregar.php");
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="styleshee$_SESSION['user_id']t" href="assets/css/style.css">
  </head>
  <body>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Login</h1>
    

    <form action="login.php" method="POST">
      <input name="user" type="text" placeholder="Enter Username">
      <input name="pass" type="password" placeholder="Enter your Password">
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
