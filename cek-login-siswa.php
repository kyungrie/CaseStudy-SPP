<?php
session_start();
include 'koneksi.php';
$username = $_POST['telepon'];
$password = md5($_POST['nisn']);
$login = mysqli_query($koneksi,"select * from siswa where no_telp='$username' and nisn='$password'");

$cek = mysqli_num_rows($login);
if ($cek > 0) {
  $data = mysqli_fetch_assoc($login);
  if($data['nisn']==$data['nisn']){
    $_SESSION['nama'] = $data['nama'];
    header("location:dashboard");
  }elseif ($data['level']=="petugas") {
    $_SESSION['nama'] = $data['nama_petugas'];
    $_SESSION['level']= "petugas";
    header("location:dashboard");
  } else {
    header("location:auth-login-siswa.php?pesan=gagal");
  }
}else{
  header("location:auth-login-siswa.php?pesan=gagal");
} 
?> 
