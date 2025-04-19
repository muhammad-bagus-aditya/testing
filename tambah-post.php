<?php

require_once "functions.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $res = mysqli_query($conn, 'INSERT INTO menu (id, name, price, location, link, contact_person, image) VALUES ("", "' . $_POST['name'] . '", ' . $_POST['price'] . ', "' . $_POST['location'] . '", "' . $_POST['link'] . '", "' . $_POST['contact_person'] . '", "' . $_POST['image'] . '")');

  header('location: admin.php');
}
