<?php

session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  unset($_SESSION['user']);

  header('location: login.php');
}
