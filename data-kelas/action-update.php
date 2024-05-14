<?php
  if (isset($_POST['Submit'])) {
    $idKelas =$_POST['id_kelas'];
    $namaKelas =$_POST['nama_kelas'];
    $kompetensiKeahlian =$_POST['kompetensi_keahlian'];

    include("../koneksi.php");
    $result =mysqli_query($koneksi,"UPDATE kelas SET nama_kelas='$namaKelas',kompetensi_keahlian='$kompetensiKeahlian' WHERE id_kelas=$idKelas");

    if ($result) {
      echo "<script>alert('Data Kelas berhasil diUpdate'); window.location.href='read.php'</script>";
      header("location:read.php");
    } else{
      echo "<script>alert('Data Kelas gagal diUpdate'); window.location.href='read.php'</script>";
    }
  }
?>