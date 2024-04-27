<?php
  if (count($_POST) > 0) {
    $idKelas =$_POST['id_kelas'];
    $namaKelas =$_POST['nama_kelas'];
    $kompetensiKeahlian =$_POST['kompetensi_keahlian'];

    include("../koneksi.php");
    $result =mysqli_query($koneksi,"INSERT INTO kelas(id_kelas,nama_kelas,kompetensi_keahlian) VALUES('$idKelas','$namaKelas','$kompetensiKeahlian')");

    if ($result) {
      echo "<script>alert('Data Kelas berhasil ditambahkan); window.location.href='read.php'</script>";
    } else{
      echo "<script>alert('Data Kelas gagal ditambahkan); window.location.href='read.php'</script>";
    }
  }
?>