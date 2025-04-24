<nav class="navbar navbar-expand-lg p-3">
  <div class="container d-flex">
    <a href="index.php" class="navbar-brand d-inline-flex align-items-center">
      Makanness
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <?php if (isset($_SESSION['user'])): ?>
          <li class="nav-item">
            <a class="nav-link" href="admin.php">Admin</a>
          </li>

          <form action="logout.php" method="post">
            <li class="nav-item">
              <button type="submit" class="nav-link d-block d-lg-none">Logout</button>
            </li>
          </form>
        <?php else: ?>
          <li class="nav-item d-block d-lg-none">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>

    <ul class="navbar-nav d-none d-lg-block">
      <?php if (!isset($_SESSION['user'])): ?>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
      <?php else: ?>
        <form action="logout.php" method="post">
          <li class="nav-item">
            <button type="submit" class="nav-link">Logout</button>
          </li>
        </form>
      <?php endif; ?>
    </ul>

    <div class="d-none gap-2 d-lg-flex ms-3">
      <img src="logo-unnes.png" alt="" style="height: 50px;">
      <img src="makannes.png" alt="" style="height: 50px;">
    </div>

  </div>
</nav>