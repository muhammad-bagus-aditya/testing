<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $conn = mysqli_connect("localhost", "root", "", "makannes");

  $res = mysqli_query($conn, 'DELETE FROM menu WHERE id=' . $_GET['id']);

  header('location: admin.php');
}
