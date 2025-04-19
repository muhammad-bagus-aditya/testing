<?php

require_once "functions.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $res = mysqli_query($conn, 'UPDATE menu SET  name="' . $_POST['name'] . '", price="' . $_POST['price'] . '", location="' . $_POST['location'] . '", link="' . $_POST['link'] . '", contact_person="' . $_POST['contact_person'] . '", image="' . $_POST['image'] . '" WHERE id="' . $_POST['id'] . '"');

  header('location: admin.php');
}
