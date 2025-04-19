<?php

require_once "functions.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $res = mysqli_query($conn, 'DELETE FROM menu WHERE id=' . $_GET['id']);

  header('location: admin.php');
}
