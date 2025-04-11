<?php

$conn = mysqli_connect("localhost", "root", "", "makannes");

$res = mysqli_query($conn, 'INSERT INTO menu (id, name, price, image) VALUES ("", "' . $_POST['name'] . '", "' . $_POST['price'] . '", "' . $_POST['image'] . '")');

header('location: admin.php');
