<?php

session_start();

require_once "functions.php";

$res = mysqli_query($conn, "SELECT * FROM menu WHERE id=" . $_GET['id']);

$menu = $res->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>makaNNES edit</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php require_once "navbar.php" ?>

  <form action="edit-post.php" method="post">
    <div class="container pb-5" id="search">
      <div class="row">
        <h2 class="text-center mb-3">Edit produk</h2>

        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">

        <div class="col-md-4 mx-auto mb-3">
          <label for="name" class="form-label">Nama produk</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Isi nama produk" value="<?= $menu['name'] ?>">
        </div>

        <div class="col-12"></div>

        <div class="col-md-4 mx-auto mb-3">
          <label for="price" class="form-label">Harga</label>
          <input type="text" placeholder="Isi harga" class="form-control" name="price" id="price" value="<?= $menu['price'] ?>" />
        </div>

        <div class="col-12"></div>

        <div class="col-md-4 mx-auto mb-3">
          <label for="location" class="form-label">Lokasi</label>
          <select class="form-select" name="location" id="location">
            <option disabled selected>Pilih lokasi</option>
            <option value="banaran" <?= $menu['location'] == "banaran" ? 'selected' : ''  ?>>Banaran</option>
            <option value="patemon" <?= $menu['location'] == "patemon" ? 'selected' : ''  ?>>Patemon</option>
            <option value="sekaran" <?= $menu['location'] == "sekaran" ? 'selected' : ''  ?>>Sekaran</option>
          </select>
        </div>

        <div class="col-12"></div>

        <div class="col-md-4 mx-auto mb-3">
          <label for="link" class="form-label">Link Maps</label>
          <input type="url" placeholder="Isi link maps" class="form-control" name="link" id="link" value="<?= $menu['link'] ?>" />
        </div>

        <div class="col-12"></div>

        <div class="col-md-4 mx-auto mb-3">
          <label for="contact_person" class="form-label">Contact Person</label>
          <input type="text" placeholder="Isi CP dari pengusaha" class="form-control" name="contact_person" id="contact_person" value="<?= $menu['contact_person'] ?>" />
        </div>

        <div class="col-12"></div>

        <div class="col-md-4 mx-auto mb-3">
          <label for="image" class="form-label">Gambar</label>
          <input type="text" name="image" id="image" placeholder="Isi link gambar" class="form-control mb-3" value="<?= $menu['image'] ?>">
        </div>

        <div class="col-12"></div>

        <div class="col-md-4 mx-auto mb-3">
          <button type="submit" class="search-btn">
            Ubah
            <i class="bi bi-plus"></i>
          </button>
        </div>
      </div>
    </div>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>