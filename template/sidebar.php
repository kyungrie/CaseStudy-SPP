<div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown active">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="index-0.html">General Dashboard</a></li>
                <li class=active><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
              </ul>
            </li>

            <?php if ($_SESSION['level'] == "admin" ) { ?>
            <li class="menu-header">Pengolahan Data</li>
            <li><a class="nav-link" href="../data-petugas/read.php"><i class="far fa-square"></i><span>DATA PETUGAS</span></a></li>
            <li><a class="nav-link" href="../data-kelas/read.php"><i class="far fa-square"></i><span>DATA KELAS</span></a></li>
            <li><a class="nav-link" href="../data-siswa/read.php"><i class="far fa-square"></i><span>DATA SISWA</span></a></li>
            <li><a class="nav-link" href="../data-spp/read.php"><i class="far fa-square"></i><span>DATA SPP</span></a></li>
            <li class="menu-header">Transaksi</li>
            <li><a class="nav-link" href=""><i class="far fa-square"></i><span>Transaksi Pembayaran</span></a></li>
            <li><a class="nav-link" href=""><i class="far fa-square"></i><span>History Pembayaran</span></a></li>
            <?php } elseif ($_SESSION['level']=="petugas") { ?>
            <li><a class="nav-link" href=""><i class="far fa-square"></i><span>Transaksi Pembayaran</span></a></li>
            <li><a class="nav-link" href=""><i class="far fa-square"></i><span>History Pembayaran</span></a></li>
            <?php } else {?>
              <li><a class="nav-link" href=""><i class="far fa-square"></i><span>History Pembayaran</span></a></li>
            <?php }?>
          
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i> <span>Login</span></a>
              <ul class="dropdown-menu">
                <li><a href="../auth-login-petugas.php" class="btn btn-primary btn-lg btn-block btn-icon-split text-white">Login Petugas</a></li>
                <li><br></li>
                <li><a href="../auth-login-siswa.php" class="btn btn-primary btn-lg btn-block btn-icon-split text-white">Login siswa</a></li>
              </ul>
            </li>
          </ul>
          </ul>



          <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="../logout.php" class="btn btn-danger btn-lg btn-block btn-icon-split">
              <i class="fas fa-sign-out-alt"></i>Log Out
            </a>
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
              <i class="fas fa-rocket"></i> Documentation
            </a>
          </div>
      </div>
