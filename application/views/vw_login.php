<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>TELOS | FEASIBILITY TEST</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href=<?= base_url("assets/img/favicon.png") ?> rel="icon">
    <link href=<?= base_url("assets/img/User_V_i_P-Home.png") ?> rel="User_V_i_P-Home">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href=<?= base_url("assets/vendor/aos/aos.css") ?> rel="stylesheet">
    <link href=<?= base_url("assets/vendor/bootstrap/css/bootstrap.min.css") ?> rel="stylesheet">
    <link href=<?= base_url("assets/vendor/bootstrap-icons/bootstrap-icons.css") ?> rel="stylesheet">
    <link href=<?= base_url("assets/vendor/boxicons/css/boxicons.min.css") ?> rel="stylesheet">
    <link href=<?= base_url("assets/vendor/glightbox/css/glightbox.min.css") ?> rel="stylesheet">
    <link href=<?= base_url("assets/vendor/swiper/swiper-bundle.min.css") ?> rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href=<?= base_url("assets/css/style.css") ?> rel="stylesheet">
</head>

<body>


    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form>
                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3">Sign in</p>

                        </div>

                        <div class="divider d-flex align-items-center my-4">

                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form3Example3" class="form-control form-control-lg"
                                placeholder="Enter a valid email address" />
                            <label class="form-label" for="form3Example3">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" id="form3Example4" class="form-control form-control-lg"
                                placeholder="Enter password" />
                            <label class="form-label" for="form3Example4">Password</label>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">


                            <div class="text-center text-lg-start mt-4 pt-2">
                                <button type="button" class="btn btn-primary btn-lg"
                                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                                <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a
                                        href="<?= base_url('Auth/regis/'); ?>" class="link-danger">Register</a></p>
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Vendor JS Files -->
    <script src=<?= base_url("assets/vendor/purecounter/purecounter_vanilla.js") ?>> </script>
    <script src=<?= base_url("assets/vendor/aos/aos.js") ?>> </script>
    <script src=<?= base_url("assets/vendor/bootstrap/js/bootstrap.bundle.min.js") ?>></script>
    <script src=<?= base_url("assets/vendor/glightbox/js/glightbox.min.js") ?>> </script>
    <script src=<?= base_url("assets/vendor/isotope-layout/isotope.pkgd.min.js") ?>></script>
    <script src=<?= base_url("assets/vendor/swiper/swiper-bundle.min.js") ?>> </script>
    <script src=<?= base_url("assets/vendor/waypoints/noframework.waypoints.js") ?>></script>
    <script src=<?= base_url("assets/vendor/php-email-form/validate.js") ?>></script>

    <!-- Template Main JS File -->
    <script src=<?= base_url("assets/js/main.js") ?>></script>

</body>

</html>