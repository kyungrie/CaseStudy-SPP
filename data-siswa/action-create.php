<?php
  if (isset($_POST['Submit'])) {
    $nisn =$_POST['nisn'];
    $nis =$_POST['nis'];
    $nama =$_POST['nama'];
    $idKelas =$_POST['id_kelas'];
    $alamat =$_POST['alamat'];
    $noTelp =$_POST['no_telp'];
    $idSpp =$_POST['id_spp'];

    include("../koneksi.php");
    $result =mysqli_query($koneksi,"INSERT INTO siswa(nisn,nis,nama,id_kelas,alamat,no_telp,id_spp) VALUES('$nisn','$nis','$nama','$idKelas','$alamat','$noTelp','$idSpp')");

    if ($result) {
      echo "<script>alert('Data Kelas berhasil ditambahkan'); window.location.href='read.php'</script>";
      header("location:read.php");
    } else{
      echo "<script>alert('Data Kelas gagal ditambahkan'); window.location.href='read.php'</script>";
    }
  }
?>