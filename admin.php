<?php

require_once "functions.php";

$data = [];

$res = mysqli_query($conn, "SELECT * FROM menu");

while ($row = $res->fetch_assoc()) {
  $data[] = $row;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>makaNNES admin</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <link rel="stylesheet" href="style.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg ">
    <div class="container">
      <a href="index.php" class="navbar-brand">makaNNES</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="admin.php">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tambah.php">Tambah</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>

  <div class="container pb-5" id="search">
    <div class="row">
      <h2 class="text-center mb-3">Daftar semua menu</h2>

      <?php if (count($data) > 0): ?>
        <?php foreach ($data as $menu): ?>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card">
              <img src="<?= $menu['image'] ?>" class="card-img-top" alt="">

              <div class="card-body">
                <h5 class="card-title">
                  <?= $menu['name'] ?>
                </h5>

                <table class="mb-3">
                  <tbody>
                    <tr>
                      <td>
                        Harga
                      </td>
                      <td class="ps-1">
                        : Rp. <?= $menu['price'] ?>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        Lokasi
                      </td>
                      <td class="ps-1">
                        : <?= $menu['location'] ?>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        CP
                      </td>
                      <td class="ps-1">
                        : <?= $menu['contact_person'] ?>
                      </td>
                    </tr>
                  </tbody>
                </table>

                <a href="<?= $menu['link'] ?>" class="btn btn-pink">
                  Cek di Maps
                </a>

                <a href="edit.php?id=<?= $menu['id'] ?>" class="btn btn-warning">
                  Edit
                </a>

                <form action="hapus.php?id=<?= $menu['id'] ?>" method="post" class="d-inline">
                  <button class="btn btn-danger" type="submit">Hapus</button>
                </form>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <p class="text-center">Tidak ada menu</p>
      <?php endif; ?>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>