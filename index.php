<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOME | LOGIN </title>
  <!-- bootstrap -->
  <link rel="stylesheet" href="assets/bts5/css/bootstrap.min.css">
  <!-- style -->
  <style>
    * {
      font-family: 'Quicksand';
    }
  </style>

   <!-- Dependencies sweet alert -->
   <script src="assets/bts5/js/jquery-3.4.1.slim.min.js"></script>
  <script src="assets/bts5/js/popper.min.js"></script>
  <script src="assets/bts5/js/sweetalert.min.js"></script>

</head>

<body class="bg-dark text-light">
  <!-- untuk cek apakah sudah login -->
  <?php
  session_start();

  // cek apakah yang mengakses halaman ini sudah ada session levelnya
  if ($_SESSION['level'] == "") {
    header("location:login.php");
  }

  ?>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color: purple;">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">NAVBAR</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Profile</a>
          </li>

          <!-- khusus admin -->
          <?php if($_SESSION['level']=="admin") { ?>

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Tambah Data Buku</a>
          </li>
          <?php } ?>

            <!-- khusus user -->
            <?php if($_SESSION['level']=="user") { ?>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Pinjam Buku</a>
          </li>
          <?php } ?>


        </ul>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle fw-bold" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $_SESSION['username']; ?>
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Profil</a></li>
                <li>
                  <hr class="m-0">
                </li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- endNavbar -->

  <!-- Main -->

  <div class="container py-5">
    <p class="display-5 fw-bold">SELAMAT DATANG, 
       <?php echo $_SESSION['username']; ?></p>
    <p class="display-6">Pada Aplikasi Sistem Perpustakaan XYZ</p>

    <p class="fs-5">Anda Login Sebagai <span class="fw-bold">
      <?php echo $_SESSION['level']; ?></span></p>
  </div>
  <!-- endMain -->

  <!-- script -->
  <script src="assets/bts5/js/bootstrap.bundle.min.js"></script>
</body>
<!-- alert jika login berhasil -->
<?php if (isset($_GET['msg']) && $_GET['msg'] === 'login') : ?>
  <script>
    swal({
      title: "Good Job!",
      text: "Login Berhasil!",
      icon: "success",
      button: false,
      timer: 2000
    });
  </script>
<?php endif; ?>
<!-- akhir alert login berhasil -->

</html>