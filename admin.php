<?php

session_start();

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
  <?php require_once "navbar.php" ?>

  <div class="container pb-5" id="search">
    <div class="row">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Daftar semua menu</h2>

        <a href="tambah.php" class="btn btn-pink">Tambah menu</a>
      </div>

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