<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TELOS | FEASIBILITY TEST</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href=<?=base_url("assets/img/favicon.png")?> rel="icon">
    <link href=<?=base_url("assets/img/User_V_i_P-Home.png")?> rel="User_V_i_P-Home">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href=<?=base_url("assets/vendor/aos/aos.css")?> rel="stylesheet">
    <link href=<?=base_url("assets/vendor/bootstrap/css/bootstrap.min.css")?> rel="stylesheet">
    <link href=<?=base_url("assets/vendor/bootstrap-icons/bootstrap-icons.css")?> rel="stylesheet">
    <link href=<?=base_url("assets/vendor/boxicons/css/boxicons.min.css")?> rel="stylesheet">
    <link href=<?=base_url("assets/vendor/glightbox/css/glightbox.min.css")?> rel="stylesheet">
    <link href=<?=base_url("assets/vendor/swiper/swiper-bundle.min.css")?> rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href=<?=base_url("assets/css/style.css")?> rel="stylesheet">


</head>

<body>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                    <form action="<?= base_url('Auth/regis');?>" method="POST" id="contactForm" enctype="multipart/form-data">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="nama_lengkap" id="nama_lengkap" required="required" type="text" placeholder="Masukkan Nama Lengkap anda..." value="<?= set_value('nama_lengkap'); ?>" />
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <?= form_error('nama_lengkap', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                           <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="email" id="email" required="required" type="text" placeholder="Masukkan NO HP anda..." value="<?= set_value('email'); ?>" />
                                <label for="email">Email</label>
                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                             <div class="form-floating mb-3">
                                <input class="form-control" name="username" id="username" required="required" type="text" placeholder="Masukkan Username anda..." value="<?= set_value('username'); ?>" />
                                <label for="username">Username</label>
                                <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <!-- Username input-->
                             <div class="form-floating mb-3">
                                <input class="form-control" name="password" id="password" required="required" type="password" placeholder="Masukkan Password anda..." value="<?= set_value('password'); ?>" />
                                <label for="password">Password</label>
                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                    
                         
                            <div class="d-grid">
         
                                <button type="submit" class="btn btn-primary" name="tambah" >Daftar</button>
        
                            </div>
                            
                        </form>

                                </div>
                               
                                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image">
                </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Vendor JS Files -->
    <script src=<?=base_url("assets/vendor/purecounter/purecounter_vanilla.js")?>></script>
    <script src=<?=base_url("assets/vendor/aos/aos.js")?>></script>
    <script src=<?=base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")?>></script>
    <script src=<?=base_url("assets/vendor/glightbox/js/glightbox.min.js")?>></script>
    <script src=<?=base_url("assets/vendor/isotope-layout/isotope.pkgd.min.js")?>></script>
    <script src=<?=base_url("assets/vendor/swiper/swiper-bundle.min.js")?>></script>
    <script src=<?=base_url("assets/vendor/waypoints/noframework.waypoints.js")?>></script>
    <script src=<?=base_url("assets/vendor/php-email-form/validate.js")?>></script>

    <!-- Template Main JS File -->
    <script src=<?=base_url("assets/js/main.js")?>></script>

</body>

</html>