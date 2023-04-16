<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOGIN | LOGIN </title>
  <!-- bootstrap -->
  <link rel="stylesheet" href="assets/bts5/css/bootstrap.min.css">
  <!-- style -->
  <style>
    * {
      font-family: 'Quicksand';
    }

    .gradient-custom {
      background: #6a11cb;
      background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
      background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
    }
  </style>

  <!-- Dependencies sweet alert -->
  <script src="assets/bts5/js/jquery-3.4.1.slim.min.js"></script>
  <script src="assets/bts5/js/popper.min.js"></script>
  <script src="assets/bts5/js/sweetalert.min.js"></script>
</head>

<body>
  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
              <div class="mb-md-5 mt-md-4">
                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                <p class="text-white-50 mb-5">Please enter your login and password!</p>
                <form action="cek_login.php" method="POST">
                  <div class="form-floating mb-4">
                    <input type="text" name="username" placeholder="Username"  class="form-control form-control-lg bg-dark text-white">
                    <label for="username">Username</label>
                  </div>

                  <div class="form-floating mb-4">
                    <input type="password" name="password" placeholder="Password" id="typePasswordX" class="form-control form-control-lg bg-dark text-white">
                    <label for="typePasswordX">Password</label>
                  </div>

                  <button class="btn btn-outline-light btn-lg px-5 py-3 my-3" type="submit" name="btn_login">Login</button>
              </div>
              </form>

              <div>
                <p class="mb-0">Don't have an account? <a href="registrasi.php" class="text-white-50 fw-bold">Sign Up</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- script -->
  <script src="assets/bts5/js/bootstrap.bundle.min.js"></script>
</body>

<!-- alert jika login gagal -->
<?php if (isset($_GET['msg']) && $_GET['msg'] === 'gagal') : ?>
  <script>
    swal({
      title: "Failed!",
      text: "Login Gagal!",
      icon: "error",
      button: false,
      timer: 2000
    });
  </script>
<?php endif; ?>
<!-- akhir alert login gagal -->

<!-- alert jika logout -->
<?php if (isset($_GET['msg']) && $_GET['msg'] === 'logout') : ?>
  <script>
    swal({
      title: "Success!",
      text: "Logout Berhasil!",
      icon: "success",
      button: false,
      timer: 2000
    });
  </script>
<?php endif; ?>
<!-- akhir alert logout -->

</html>