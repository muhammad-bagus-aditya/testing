<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>makaNNES tambah</title>

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
            <a class="nav-link" href="admin.php">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="tambah.php">Tambah</a>
          </li>
        </ul>
      </div>

    </div>
  </nav>

  <form action="tambah-post.php" method="post">
    <div class="container pb-5" id="search">
      <div class="row">
        <h2 class="text-center mb-3">Tambah produk baru</h2>

        <div class="col-md-4 mx-auto mb-3">
          <label for="name" class="form-label">Nama produk</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="Isi nama produk">
        </div>

        <div class="col-12"></div>

        <div class="col-md-4 mx-auto mb-3">
          <label for="price" class="form-label">Harga</label>
          <select class="form-select" name="price" id="price">
            <option disabled selected>Pilih harga</option>
            <option value="10-15">10rb - 15rb</option>
            <option value="15-20">15rb - 20rb</option>
            <option value="20-25">20rb - 25rb</option>
            <option value="25-30">25rb - 30rb</option>
          </select>
        </div>

        <div class="col-12"></div>

        <div class="col-md-4 mx-auto mb-3">
          <label for="location" class="form-label">Lokasi</label>
          <select class="form-select" name="location" id="location">
            <option disabled selected>Pilih lokasi</option>
            <option value="banaran">Banaran</option>
            <option value="patemon">Patemon</option>
            <option value="sekaran">Sekaran</option>
          </select>
        </div>

        <div class="col-12"></div>

        <div class="col-md-4 mx-auto mb-3">
          <label for="image" class="form-label">Gambar</label>
          <input type="text" name="image" id="image" placeholder="Isi link gambar" class="form-control mb-3">
        </div>

        <div class="col-12"></div>

        <div class="col-md-4 mx-auto mb-3">
          <button type="submit" class="search-btn">
            Tambahkan
            <i class="bi bi-plus"></i>
          </button>
        </div>
      </div>
    </div>
  </form>
</body>

</html>