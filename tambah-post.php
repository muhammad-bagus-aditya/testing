<?php

$conn = mysqli_connect("localhost", "root", "", "makannes");

$res = mysqli_query($conn, 'INSERT INTO menu (id, name, price, location, image) VALUES ("", "' . $_POST['name'] . '", "' . $_POST['price'] . '", "' . $_POST['location'] . '", "' . $_POST['image'] . '")');

header('location: admin.php');
