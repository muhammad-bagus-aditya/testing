<?php

session_start();

require_once "functions.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $res = mysqli_query($conn, 'SELECT * FROM admin WHERE username="' . $_POST['username'] . '" AND password="' . $_POST['password'] . '"');
  $user = $res->fetch_assoc();

  if ($user !== null) {
    $_SESSION['user'] = $user;

    header('location: admin.php');
    return;
  }

  header('location: login.php');
}
