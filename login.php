<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>makaNNES login</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto pt-5">
        <div class="card mt-5">
          <div class="card-body">
            <h5 class="card-title text-center">Login ke admin page</h5>

            <form action="login-post.php" method="post">
              <div class="col-md-8 mx-auto mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" id="username" placeholder="Isi username anda" class="form-control mb-3">
              </div>

              <div class="col-md-8 mx-auto mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" placeholder="Isi password anda" class="form-control mb-3">
              </div>

              <div class="col-md-8 d-flex mx-auto">
                <button class="btn btn-pink ms-auto" type="submit">
                  Submit
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>