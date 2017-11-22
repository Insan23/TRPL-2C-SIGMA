<?php
/**
 * Created by PhpStorm.
 * User: Aleq
 * Date: 31/10/2017
 * Time: 23:55
 */
?>

<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="assets/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p id="user-name"><?php echo $_SESSION['Nama'] ?></p>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="?controller=home&action=manajerHome"><i class="fa fa-home"></i> <span>Beranda</span></a></li>
            <li><a href="?controller=pemetaan&action=manajerPemetaan"><i class="fa fa-map-pin"></i> <span>Pemetaan</span></a></li>
            <li><a href="?controller=penjualan&action=manajerPenjualan"><i class="fa fa-dollar"></i> <span>Penjualan</span></a></li>
            <li><a href="?controller=laporan&action=manajerLaporan"><i class="fa fa-line-chart"></i><span>Laporan</span></a></li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>


