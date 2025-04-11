<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Hemat Mahasiswa</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- Navbar  -->
  <nav class="navbar navbar-expand-lg navbar-sticky">
    <div class="container">
      <a href="/" class="navbar-brand">Brand</a>

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
  <!-- End Navbar  -->

  <!-- Jumbotron  -->
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
                  <option disabled selected>Pilih harga</option>
                  <option value="10,15">10rb - 15rb</option>
                  <option value="15,20">15rb - 20rb</option>
                  <option value="20,25">20rb - 25rb</option>
                  <option value="25,30">25rb - 30rb</option>
                </select>
              </div>

              <div>
                <label for="location" class="form-label">Lokasi</label>
                <select class="form-select" name="location" id="location">
                  <option disabled selected>Pilih lokasi</option>
                  <option value="banaran">Banaran</option>
                  <option value="patemon">Patemon</option>
                  <option value="sekaran">Sekaran</option>
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
  <!-- End Jumbotron  -->

  <div class="container mt-5 pb-5" id="search">
    <div class="row">
      <h2 class="text-center mb-3">Menu sesuai pencarian</h2>

      <div class="col-md-3">
        <div class="card">
          <img src="banner.jpg" class="card-img-top" alt="">

          <div class="card-body">
            <h5 class="card-title">Padang rendang murah</h5>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card">
          <img src="banner.jpg" class="card-img-top" alt="">

          <div class="card-body">
            <h5 class="card-title">Padang rendang murah</h5>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card">
          <img src="banner.jpg" class="card-img-top" alt="">

          <div class="card-body">
            <h5 class="card-title">Padang rendang murah</h5>
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card">
          <img src="banner.jpg" class="card-img-top" alt="">

          <div class="card-body">
            <h5 class="card-title">Padang rendang murah</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>