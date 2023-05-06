<!-- End of Topbar -->

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-black-800">Welcome, 
    <?= ucwords($this->session->userdata('nama_lengkap')) ?>
    </h1>
    <h3> <b> TELOS | FEASIBILITY TEST FOR YOUR OWN BUSINESS </h3>
    <br>

    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg font-weight-bolder text-info text-uppercase mb-1">
                                Master Data</div>
                            <a class="collapse-item"
                                href="<?= site_url('user/dataprojek'); ?>">View</a>

                        </div>
                        <div class="col-auto">
                            <i class="fas fa-fw fa-book fa-2x text-black-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg font-weight-bolder text-info text-uppercase mb-1">
                                Technological </div>
                            <a class="collapse-item"
                                href="<?= site_url('user/technological'); ?>">View</a>

                        </div>
                        <div class="col-auto">
                            <i class="fas fa-fw fa-desktop fa-2x text-black-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg font-weight-bolder text-info text-uppercase mb-1">
                                Economic</div>
                            <a class="collapse-item"
                                href="<?= site_url('user/economic'); ?>">View</a>

                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-black-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg font-weight-bolder text-info text-uppercase mb-1">
                                Legal</div>
                            <a class="collapse-item"
                                href="<?= site_url('user/economic'); ?>">View</a>

                        </div>
                        <div class="col-auto">
                            <i class="fas fa-fw fa-credit-card fa-2x text-black-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg font-weight-bolder text-info text-uppercase mb-1">
                                Operational</div>
                            <a class="collapse-item"
                                href="<?= site_url('user/operational'); ?>">View</a>

                        </div>
                        <div class="col-auto">
                            <i class="fas fa-fw fa-cogs fa-2x text-black-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg font-weight-bolder text-info text-uppercase mb-1">
                                Schedule</div>
                            <a class="collapse-item"
                                href="<?= site_url('user/schedule'); ?>">View</a>

                        </div>
                        <div class="col-auto">
                            <i class="fas fa-fw fa-tasks fa-2x text-black-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg font-weight-bolder text-success text-uppercase mb-1">
                                Status Kelulusan</div>
                            <?php foreach ($cek as $pendaftaran): ?>
                                <?= $pendaftaran->status ?>
                            <?php endforeach ?>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check fa-2x text-black-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-dark shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-lg font-weight-bolder text-dark text-uppercase mb-1">
                                Bukti Pendaftaran</div>
                            <a class="collapse-item" href="<?= site_url('cetak'); ?>">Cetak</a>

                        </div>
                        <div class="col-auto">
                            <i class="fas fa-file fa-2x text-black-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>



</div>