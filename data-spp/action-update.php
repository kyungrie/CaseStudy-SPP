<?php
  if (count($_POST) >= 3) {
    $idSpp =$_POST['id_spp'];
    $tahun =$_POST['tahun'];
    $nominal =$_POST['nominal'];
    $keterangan =$_POST['keterangan'];

    include("../koneksi.php");
    $result =mysqli_query($koneksi,"UPDATE kelas SET tahun='$tahun',nominal='$nominal',keterangan='$keterangan' WHERE id_spp='$idSpp'");

    if ($result) {
      echo "<script>alert('Data Spp berhasil diUpdate'); window.location.href='read.php'</script>";
      header("location:read.php");
    } else{
      echo "<script>alert('Data Spp gagal diUpdate'); window.location.href='read.php'</script>";
    }
  }
?>