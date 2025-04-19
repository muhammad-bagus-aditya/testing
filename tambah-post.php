<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $conn = mysqli_connect("localhost", "root", "", "makannes");

  $res = mysqli_query($conn, 'INSERT INTO menu (id, name, price, location, link, contact_person, image) VALUES ("", "' . $_POST['name'] . '", ' . $_POST['price'] . ', "' . $_POST['location'] . '", "' . $_POST['link'] . '", "' . $_POST['contact_person'] . '", "' . $_POST['image'] . '")');

  header('location: admin.php');
}
