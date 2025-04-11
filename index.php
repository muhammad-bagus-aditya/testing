<?php

$data = [];

if (isset($_GET['price']) && isset($_GET['location'])) {
  $conn = mysqli_connect("localhost", "root", "", "makannes");

  $res = mysqli_query($conn, 'SELECT * FROM menu WHERE price="' . $_GET['price'] . '" AND location="' . $_GET['location'] . '"');

  while ($row = $res->fetch_assoc()) {
    $data[] = $row;
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>makaNNES</title>

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
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin.php">Admin</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>

  <div class="jumbotron">
    <div class="jumbotron-content">
      <div class="container">
        <div class="card" style="width: 30%; margin: auto;">
          <div class="card-body">
            <h3 class="card-title">Cari menu berdasarkan</h3>

            <form action="?" class="search-form">
              <div>
                <label for="price" class="form-label">Harga</label>
                <select class="form-select" name="price" id="price">
                  <option disabled <?= isset($_GET['price']) ? '' : 'selected' ?>>Pilih harga</option>
                  <option value="10-15" <?= isset($_GET['price']) && $_GET['price'] == "10-15" ? 'selected' : ''  ?>>10rb - 15rb</option>
                  <option value="15-20" <?= isset($_GET['price']) && $_GET['price'] == "15-20" ? 'selected' : ''  ?>>15rb - 20rb</option>
                  <option value="20-25" <?= isset($_GET['price']) && $_GET['price'] == "20-25" ? 'selected' : ''  ?>>20rb - 25rb</option>
                  <option value="25-30" <?= isset($_GET['price']) && $_GET['price'] == "25-30" ? 'selected' : ''  ?>>25rb - 30rb</option>
                </select>
              </div>

              <div>
                <label for="location" class="form-label">Lokasi</label>
                <select class="form-select" name="location" id="location">
                  <option disabled <?= isset($_GET['location']) ? '' : 'selected' ?>>Pilih lokasi</option>
                  <option value="banaran" <?= isset($_GET['location']) && $_GET['location'] == "banaran" ? 'selected' : ''  ?>>Banaran</option>
                  <option value="patemon" <?= isset($_GET['location']) && $_GET['location'] == "patemon" ? 'selected' : ''  ?>>Patemon</option>
                  <option value="sekaran" <?= isset($_GET['location']) && $_GET['location'] == "sekaran" ? 'selected' : ''  ?>>Sekaran</option>
                </select>
              </div>

              <button type="submit" class="search-btn">
                Cari menu relevan
                <i class="bi bi-search"></i>
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php if (count($data) > 0): ?>
    <div class="container mt-5 pb-5" id="search">
      <div class="row">
        <h2 class="text-center mb-3">Menu sesuai pencarian</h2>

        <?php foreach ($data as $menu): ?>
          <div class="col-md-3">
            <div class="card">
              <img src="<?= $menu['image'] ?>" class="card-img-top" alt="">

              <div class="card-body">
                <h5 class="card-title">
                  <?= $menu['name'] ?>
                </h5>

                <p><?= $menu['location'] ?></p>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  <?php endif ?>
</body>

</html>