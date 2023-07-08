<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TELOS | FEASIBILITY TEST</title>

    <!-- Custom fonts for this template-->
    <link href=<?= base_url("assets2/vendor/fontawesome-free/css/all.min.css") ?> rel="stylesheet" type="text/css">
    <link href=https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href=<?= base_url("assets2/css/sb-admin-2.min.css") ?> rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href=<?= base_url("assets2/vendor/datatables/dataTables.bootstrap4.min.css") ?> rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content">
                <div class="sidebar-brand-icon rotate-n-15">

                </div>
                <div class="sidebar-brand-text mx-3">TELOS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">


            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= site_url('User/Home'); ?>">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="<?= site_url('User/DataProjek'); ?>">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Data Project</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= site_url('User/technological'); ?>">
                    <i class="fas fa-fw fa-desktop"></i>
                    <span>Technological</span></a>
            </li>
            

            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1"
                    aria-expanded="true" aria-controls="collapsePages1">
                     <i class="fas fa-fw fa-calculator"></i>
                    <span>Economic</span>
                </a>
                <div id="collapsePages1" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="<?=site_url('user/economic');?>">Economic</a>
                        <a class="collapse-item" href="<?=site_url('user/dataperusahaan');?>">Data Perusahaan</a>
                        <a class="collapse-item" href="<?=site_url('user/investasi');?>">Investasi Awal</a>
                        <a class="collapse-item" href="<?=site_url('user/keuntungan');?>">Keuntungan</a>
                        <a class="collapse-item" href="<?=site_url('user/biaya');?>">Komponen Biaya</a>
                        <!-- <a class="collapse-item" href="<?=site_url('user/totalpajak');?>">Total Keuangan</a> -->
                        <!-- <a class="collapse-item" href="<?=site_url('user/totalsetelahpajak');?>">Total Nilai Setelah Pajak</a>
                        <a class="collapse-item" href="<?=site_url('user/totalaruskas');?>">Total Arus Kas</a>
                        <a class="collapse-item" href="<?=site_url('user/aruskaskumulatif');?>">Total Arus kas Kumulatif</a> -->
                    </div>
                </div>
            </li>


            <li class="nav-item active">
                <a class="nav-link" href="<?= site_url('User/legal'); ?>">
                    <i class="fas fa-fw fa-credit-card"></i>
                    <span>Legal</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="<?= site_url('User/Operational'); ?>">
                    <i class="fas fa-fw fa-cogs"></i>
                    <span>Operational</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= site_url('User/Schedule'); ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Schedule</span></a>
            </li>
            <!-- <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-address-book"></i>
                    <span>Test Kelayakan</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">

                        <a class="collapse-item" href="<?= site_url('User/TestKelayakan/Form_Technological'); ?>">Form Uji Technological</a>
                        <a class="collapse-item" href="<?= site_url('user/TestKelayakan/Form_Economic'); ?>">Form Uji Economic</a>
                        <a class="collapse-item" href="<?= site_url('user/TestKelayakan/Form_Legal'); ?>">Form Uji Legal</a>
                        <a class="collapse-item" href="<?= site_url('user/TestKelayakan/Form_Operational'); ?>">Form Uji Operational</a>
                        <a class="collapse-item" href="<?= site_url('user/TestKelayakan/Form_Schedule'); ?>">Form Uji Schedule</a>

                    </div>
                </div>
            </li> -->
            <li class="nav-item active">
                <a class="nav-link" href="<?= site_url('user/Summary'); ?>">
                    <i class="fas fa-fw fa-tasks"></i>
                    <span>Summary</span></a>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>




                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= ucwords($this->session->userdata('nama_lengkap')) ?></span>
                                <img class="img-profile rounded-circle" src="<?= base_url('assets2/img/'); ?>user.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>