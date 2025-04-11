<?php

$conn = mysqli_connect("localhost", "root", "", "makannes");

$res = mysqli_query($conn, 'UPDATE menu SET  name="' . $_POST['name'] . '", price="' . $_POST['price'] . '", image="' . $_POST['image'] . '" WHERE id="' . $_POST['id'] . '"');

header('location: admin.php');
