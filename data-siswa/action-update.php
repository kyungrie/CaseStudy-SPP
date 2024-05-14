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
    $result =mysqli_query($koneksi,"UPDATE siswa SET nisn='$nisn',nis='$nis',nama='$nama',id_kelas='$idKelas',alamat='$alamat',no_telp='$noTelp',id_spp='$idSpp' where nisn='$ni'");

    if ($result) {
      echo "<script>alert('Data Siswa berhasil diUpdate'); window.location.href='read.php'</script>";
      header("location:read.php");
    } else{
      echo "<script>alert('Data Siswa gagal diUpdate'); window.location.href='read.php'</script>";
    }
  }
?>