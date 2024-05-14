<?php
  if (isset($_POST['Submit'])) {
    $idPetugas =$_POST['id_petugas'];
    $username =$_POST['username'];
    $password = md5($_POST['password']);
    $namaPetugas =$_POST['nama_petugas'];
    $level =$_POST['level'];

    include("../koneksi.php");
    $result =mysqli_query($koneksi,"INSERT INTO petugas(id_petugas,username,password,nama_petugas,level) VALUES('$idPetugas','$username','$password','$namaPetugas','$level')");

    if ($result) {
      echo "<script>alert('Data Petugas berhasil ditambahkan'); window.location.href='read.php'</script>";
      header("location:read.php");
    } else{
      echo "<script>alert('Data Petugas gagal ditambahkan'); window.location.href='read.php'</script>";
    }
  }
?>