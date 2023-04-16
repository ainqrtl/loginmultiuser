<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = md5($_POST['password']);


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "select * from login where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {




    $data = mysqli_fetch_assoc($login);
    // cek jika user login sebagai admin
    if ($data['level'] == "0") {
        // buat session login dan username
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $data['username'];
        $_SESSION['level'] = "admin";
        // alihkan ke halaman dashboard admin
        header("location:index.php?msg=login");

        // cek jika user login sebagai USER
    } else if ($data['level'] == "1") {
        // buat session login dan username
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $data['username'];
        $_SESSION['level'] = "user";
        // alihkan ke halaman dashboard USER
        header("location:index.php?msg=login");
    } else {

        // alihkan ke halaman login kembali
        header("location:login.php?msg=gagal");
    }
} else {
    // alihkan ke halaman login kembali
    header("location:login.php?msg=gagal");
}
