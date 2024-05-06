<?php
  include '../koneksi.php';
  $idKelas =$_GET['id_kelas'];
  $query_mysqli = mysqli_query($koneksi,"DELETE FROM kelas WHERE id_kelas=$idKelas");

  if ($query_mysqli) {
    echo "<script>alert('Data Kelas berhasil diHapus'); window.location.href='read.php'</script>";
    header("location:read.php");
  }else{
    echo "<script>alert('Data Kelas gagal diHapus'); window.location.href='read.php'</script>";
  }
?>