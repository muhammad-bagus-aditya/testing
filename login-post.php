<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $conn = mysqli_connect("localhost", "root", "", "makannes");

  $res = mysqli_query($conn, 'SELECT * FROM admin WHERE username="' . $_POST['username'] . '" AND password="' . $_POST['password'] . '"');
  $user = $res->fetch_assoc();

  if ($user !== null) {
    $_SESSION['user'] = $user;

    header('location: admin.php');
    return;
  }

  header('location: login.php');
}
