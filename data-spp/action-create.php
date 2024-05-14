<?php
  if (isset($_POST['Submit'])) {
    $idSpp =$_POST['id_spp'];
    $tahun =$_POST['tahun'];
    $nominal =$_POST['nominal'];
    $keterangan =$_POST['keterangan'];

    include("../koneksi.php");
    $result =mysqli_query($koneksi,"INSERT INTO spp(id_spp,tahun,nominal,keterangan) VALUES('$idSpp','$tahun','$nominal','$keterangan')");

    if ($result) {
      echo "<script>alert('Data SPP berhasil ditambahkan'); window.location.href='read.php'</script>";
      header("location:read.php");
    } else{
      echo "<script>alert('Data SPP gagal ditambahkan'); window.location.href='read.php'</script>";
    }
  }
?>