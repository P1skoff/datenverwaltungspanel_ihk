<?php

include '/var/www/html/src/views/login.view.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = htmlspecialchars($_POST['username']);
  $password = htmlspecialchars($_POST['password']);

  // TODO: Validate input

  // TODO: Check if username and password match a user in your database

  if ($valid) {
    $_SESSION['username'] = $username;
    header('Location: protected.php');
    exit;
  } else {
    $error = 'Invalid username or password';
  }
}

