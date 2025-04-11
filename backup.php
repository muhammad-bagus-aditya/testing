<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Hemat Mahasiswa</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- Navbar  -->
  <nav class="navbar">
    <div class="container">
      <a href="/" class="navbar-brand">Brand</a>
    </div>
  </nav>
  <!-- End Navbar  -->

  <!-- Jumbotron  -->
  <div class="jumbotron">
    <div class="jumbotron-content">
      <div class="container">
        <h3 class="jumbotron-subtitle">Cari menu berdasarkan budget di</h3>
        <h1 class="jumbotron-title">WebHematMahasiswa</h1>

        <form action="?" class="search-form">
          <div>
            <label for="min-input">Budget anda</label>
            <input type="text" class="min-input" placeholder="Masukkan budget minimal anda...">
          </div>

          <div>
            <label for="max-input">Maksimal budget anda</label>
            <input type="text" class="max-input" placeholder="Masukkan budget maksimal anda...">
          </div>

          <button type="submit" class="search-btn">
            Cari menu relevan
            <i class="bi bi-search"></i>
          </button>
        </form>
      </div>
    </div>
  </div>
  <!-- End Jumbotron  -->
</body>

</html>