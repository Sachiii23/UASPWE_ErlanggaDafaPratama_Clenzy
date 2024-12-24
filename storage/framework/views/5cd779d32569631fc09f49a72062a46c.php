<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clenzy Laundry</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(asset('landing/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('landing/style.css')); ?>" rel="stylesheet">

    <!-- Javascript -->
    <script defer src="<?php echo e(asset('vendor/jquery/jquery.min.js')); ?>"></script>
    <script defer src="<?php echo e(asset('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href=""> Clenzy Laundry </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-sm-3 mb-2 mb-sm-0">
                        <a href="<?php echo e(route('login')); ?>" class="btn btn-primary">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="bg-blue py-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-5">
                    <h1 class="display-4 text-white mt-5 mb-2 border-bottom border-white">
                        <span class="clenzy">Selamat Datang Di</span>
                        <span class="laundry">Clenzy Laundry</span>
                      </h1>
                    <p class="lead mb-5 text-white mt-5 mb-2">Rasakan Layanan Laundry Premium dengan Pengalaman Tak Tertandingi, Hanya Untuk Anda!</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid d-none d-lg-block" src="<?php echo e(asset('admin/images/landing/header.png')); ?>" alt="" srcset="">
                </div>
            </div>
        </div>
    </header>

    <section class="text-center p-3" style="background: linear-gradient(to right, #3aecfc, #c053ff);">
        <h3>Mengapa Pilih Jasa kami?</h3>
    </section>

    <!-- Page Content -->
    <section class="kelebihan bg-blue text-white">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Peralatan Lengkap dan Canggih</h4>
                    <p>Laundry kami menggunakan peralatan yang cukup lengkap dan canggih. Peralatan kami memungkinkan
                        baju tidak perlu dijemur dan mengurangi debu pada baju</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid d-none d-lg-block" src="<?php echo e(asset('admin/images/landing/alat.png')); ?>" alt="" srcset="">
                </div>
            </div>
        </div>
    </section>

    <section class="kelebihan bg-blue text-white">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid d-none d-lg-block" src="<?php echo e(asset('admin/images/landing/tipebaju.png')); ?>" alt=""
                        srcset="">
                </div>
                <div class="col-lg-6">
                    <h4>Segala Tipe Pakaian</h4>
                    <p>Laundry kami menerima segala tipe pakaian mulai dari baju, celana, jas, gorden, bed cover,
                        selimut, seprei, karpet, dan lain lain.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="kelebihan bg-blue text-white">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-6">
                    <h4>Pegawai Profesional</h4>
                    <p>Laundry kami terdiri dari pegawai-pegawai yang profesional yang mampu bekerja dalam tim dengan
                        cukup baik dan handal di bidangnya sehingga membuat laundry kami minim kesalahan</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid d-none d-lg-block" src="<?php echo e(asset('admin/images/landing/pegawai.png')); ?>" alt=""
                        srcset="">
                </div>
            </div>
        </div>
    </section>

    <section class="text-center p-3" style="background: linear-gradient(to right, #3aecfc, #c053ff);">
        <h3>Apa saja yang bisa kami laundry?</h3>
    </section>

    <section class="bg-blue p-5 text-center">
        <div class="container">
            <div class="row flex-row flex-nowrap kategori">
                <div class="col-4 mb-2">
                    <div class="card">
                        <img src="<?php echo e(asset('admin/images/landing/Baju.png')); ?>" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Baju</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-2">
                    <div class="card">
                        <img src="<?php echo e(asset('admin/images/landing/Celana.png')); ?>" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Celana</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-2">
                    <div class="card">
                        <img src="<?php echo e(asset('admin/images/landing/Jaket.png')); ?>" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Jaket</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-2">
                    <div class="card">
                        <img src="<?php echo e(asset('admin/images/landing/Selimut.png')); ?>" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <p class="card-text">Selimut</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-center p-3" style="background: linear-gradient(to right, #3aecfc, #c053ff);">
        <h3>Temukan kami!</h3>
    </section>

    <section class="text-white bg-blue">
        <div class="container p-5">
            <div class="row">
                <div class="col-md-6 mb-4 mb-sm-0">
                    <h5>Alamat</h5>
                    <p>Jalan Raya Palmerah Jakarta Barat</p>
                    <br>
                    <h5>Kontak</h5>
                    <p>clenzylaundry@gmail.com</p>
                    <p>(0361)937382</p>
                    <p>086423142365</p>
                </div>
                <div class="col-md-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7904.9685810833835!2d106.79055894831073!3d-6.193628287262537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f69311eb86b5%3A0xab58258c1322e0d4!2sPalmerah%2C%20West%20Jakarta%20City%2C%20Jakarta!5e0!3m2!1sen!2sid!4v1731939214129!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Clenzy Laundry Kelompok 9 2024</p>
        </div>
        <!-- /.container -->
    </footer>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\applaundry\resources\views/landing.blade.php ENDPATH**/ ?>