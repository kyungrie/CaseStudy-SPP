<?php
  if (isset($_POST['Submit'])) {
    $idKelas =$_POST['id_kelas'];
    $namaKelas =$_POST['nama_kelas'];
    $kompetensiKeahlian =$_POST['kompetensi_keahlian'];

    include("../koneksi.php");
    $result =mysqli_query($koneksi,"INSERT INTO kelas(id_kelas,nama_kelas,kompetensi_keahlian) VALUES('$idKelas','$namaKelas','$kompetensiKeahlian')");

    if ($result) {
      echo "<script>alert('Data Kelas berhasil ditambahkan'); window.location.href='read.php'</script>";
      header("location:read.php");
    } else{
      echo "<script>alert('Data Kelas gagal ditambahkan'); window.location.href='read.php'</script>";
    }
  }
?>