<?php
  if (count($_POST) >= 3) {
    $idPetugas =$_POST['id_petugas'];
    $username =$_POST['username'];
    $password = md5($_POST['password']);
    $namaPetugas =$_POST['nama_petugas'];
    $level =$_POST['level'];

    include("../koneksi.php");
    $result =mysqli_query($koneksi,"UPDATE petugas SET username='$username', password='$password', nama_petugas='$namaPetugas', level='$level' WHERE id_petugas='$idPetugas'");

    if ($result) {
      echo "<script>alert('Data Petugas berhasil diUpdate'); window.location.href='read.php'</script>";
      header("location:read.php");
    } else{
      echo "<script>alert('Data Petugas gagal diUpdate'); window.location.href='read.php'</script>";
    }
  }
?>