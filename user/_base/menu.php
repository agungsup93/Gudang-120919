  <header class="main-header">
    <a href="_controller/index2.html" class="logo">
      <span class="logo-mini"><b>GNI</b></span>
      <span class="logo-lg"><b>Global</b>nine</span>
    </a>
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
		   <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../_controller/img/global1.png" class="user-image" alt="User Image">
              <span class="hidden-xs">
				<?php
						include '../koneksi.php';
						$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM user WHERE nik ='$_SESSION[nik]'"));
						echo "<b> $data[nama]</b>";
				?>
			  </span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="../_controller/img/global1.png" class="img-circle" alt="User Image">

                <p>
					<?php
						include '../koneksi.php';
						$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM user WHERE nik ='$_SESSION[nik]'"));
						echo "<b> $data[nama] $data[pjg] </b>";
					?>
                  <small>
					<?php
						include '../koneksi.php';
						$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM user WHERE nik ='$_SESSION[nik]'"));
						echo "<b> $data[jabatan] </b>";
					?>
				  </small>
                </p>

              <li class="user-footer">
                <div class="pull-left">
				<?php include '../koneksi.php';
					echo"
                  <a href='gantipass.php?nik=$data[nik]' class='btn btn-info btn-flat'>Ganti Password</a>
                </div>
				 ";?>
                <div class="pull-right">
                  <a class="btn btn-danger btn-flat" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../_controller/img/global1.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>
			<?php
				include '../koneksi.php';
				$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM user WHERE nik ='$_SESSION[nik]'"));
				echo "<b> $data[nama] $data[pjg] </b>";
			?>
		  </p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
	  <!------------------------------------------------------------------------------------------------------------>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><center>MAIN NAVIGATION</center></li>
        <li>
          <a href="home-user.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <!------------------------------------------------------------------------------------------------------------>
        <li class="header"><center>INVENTORY</center></li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-bank"></i>
            <span>Inventory</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="soh.php"><i class="fa fa-circle-o"></i> Stock On Hand</a></li>
            <li><a href="lap-in.php"><i class="fa fa-circle-o"></i>Masuk</a></li>
            <li><a href="lap-out.php"><i class="fa fa-circle-o"></i>Keluar</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-chain-broken"></i>
            <span>Broken Stock</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="blank.php"><i class="fa fa-circle-o"></i> Material</a></li>
            <li><a href="blank.php"><i class="fa fa-circle-o"></i> Tools</a></li>
          </ul>
        </li>
		<!------------------------------------------------------------------------------------------------------------>
        <li class="header"><center>PROJECT RECORD</center></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-street-view"></i>
            <span>Sales Order</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="po.php"><i class="fa fa-circle-o"></i>G Number</a></li>
            <li><a href="so.php"><i class="fa fa-circle-o"></i>So Number</a></li>
          </ul>
        </li>
		<!------------------------------------------------------------------------------------------------------------>
        <li class="header"><center>ENGINEERING</center></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-wrench"></i>
            <span>Admin Engineering</span>
            <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="blank.php"><i class="fa fa-circle-o"></i>Request For Purchase</a></li>
            <li><a href="blank.php"><i class="fa fa-circle-o"></i>SN Panel</a></li>
            <li><a href="blank.php"><i class="fa fa-circle-o"></i>Peminjaman Tools</a></li>
            <li><a href="blank.php"><i class="fa fa-circle-o"></i>Nomor Dokumen GNL</a></li>
            <li><a href="blank.php"><i class="fa fa-circle-o"></i>Data Inventaris</a></li>
          </ul>
        </li>
      </ul>
    </section>
  </aside>
  
  
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body">Yakin Ingin Keluar? Jika "IYA" silahkan Klik Logout</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger" href="../logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

