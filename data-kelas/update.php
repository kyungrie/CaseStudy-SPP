<?php
  session_start();
  if ($_SESSION['level']=="") {
    header("location:../auth-login-petugas.php?pesan=gagal");
  }
?>

<?php require('../template/header.php');?>

<?php require('../template/nav.php');?>

<?php require('../template/sidebar.php');?>

<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Update Data Kelas</h1>
    </div>
    <div class="section-body">
      <div class="row d-flex justify-content-center">
        <div class="col-4">
          <div class="card w-auto">
            <div class="card-header">
              <p class="h3">Update Data Kelas</p>
            </div>
              <?php
              include"../koneksi.php";
              $idKelas= $_GET['id_kelas'];
              $query_mysql = mysqli_query($koneksi,"SELECT * FROM kelas WHERE id_kelas=$idKelas");
              $data= mysqli_fetch_array($query_mysql); ?>
              <form action="action-update.php" method="POST">
                <div class="card-body">
                    <div class="form-group">
                      <label for="id_kelas" class="from-label">ID Kelas</label> <br>
                      <input type="text" class="from-control w-75" id="id_kelas" name="id_kelas" value="<?php echo $data['id_kelas']; ?>" readonly>
                    </div>
                    <div class="mb-3">
                      <label for="nama_kelas" class="from-label">Nama Kelas</label> <br>
                      <input type="text" class="from-control w-75" id="nama_kelas" name="nama_kelas" value="<?php echo $data['nama_kelas']; ?>">
                    </div>
                    <div class="mb-3">
                      <label for="kompetensi_keahlian" class="from-label">Kompetensi Keahlian</label> <br>
                      <select class="from-control w-75" aria-label="select" id="kompetensi_keahlian" name="kompetensi_keahlian">
                        <option selected value="<?php echo $data['kompetensi_keahlian']; ?>">
                            <?php echo $data['kompetensi_keahlian']; ?>
                        </option>
                        <option value="RPL">RPL</option>
                        <option value="TAV">TAV</option>
                        <option value="DPIB">DPIB</option>
                        <option value="TKR">TKR</option>
                        <option value="TBSM">TBSM</option>
                      </select>
                    </div>
                    <button type="submit" class="btn btn-primary w-75">Submit</button>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<?php require('../template/footer.php');?>