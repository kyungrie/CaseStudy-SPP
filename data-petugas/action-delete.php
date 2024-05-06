<?php
  include '../koneksi.php';
  $idPetugas =$_GET['id_petugas'];
  $query_mysqli = mysqli_query($koneksi,"DELETE FROM petugas WHERE id_petugas=$idPetugasx");

  if ($query_mysqli) {
    echo "<script>alert('Data Kelas berhasil diHapus'); window.location.href='read.php'</script>";
    header("location:read.php");
  }else{
    echo "<script>alert('Data Kelas gagal diHapus'); window.location.href='read.php'</script>";
  }
?>