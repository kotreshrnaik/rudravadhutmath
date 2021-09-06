<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href ="<?= base_url(); ?>/public/assets/scss/style.css">

        <title>Rudravadhut Math</title>
    </head>
    <body>
        <!-- top-header start -->
        <div id="top-header">
            <div class="container">
                <div class="row ">
                    <div class="col-md-4 align-self-center">
                        <div class="text-center text-md-start p-1">
                            <a href="mailto:help@rudravadhutmath.com"><i class="fas fa-envelope-open-text"></i>  help@rudravadhutmath.com</a>
                        </div>
                    </div>
                    <div class="col-md-4 align-self-center">
                        <div class="text-center p-1">
                            <a href="tel:09945257512"><i class="fas fa-phone-volume"></i> +91 99452 57512</a>
                        </div>
                    </div>

                    <div class="col-md-4 align-self-center">
                        <ul class="d-flex list-unstyled mb-0 justify-content-center justify-content-md-end">
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url(); ?>"><i class="far fa-address-card"></i> Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url(); ?>"><i class="fas fa-sign-in-alt"></i> Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- top-header-end -->

        <!-- navbar starts  -->
        <nav class="navbar navbar-expand-lg navbar-light sticky-top" id="navbar">
            <div class="container">

                <a class="navbar-brand" href="<?= base_url(); ?>"> <img src="<?= base_url(); ?>/public/assets/images/logo.png" alt="" class="img-fluid"></a> <h4 class="text-center"><strong>ರುದ್ರಾವಧೂತ ಮಠ <br> ಜಮಖಂಡಿ,ಮುಂಬಯಿ</strong></h4>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>/about">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>/services">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>/ebooks">eBooks</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="more-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                More
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="more-dropdown">

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/more/youtube">Youtube</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="<?= base_url(); ?>/more/facebook-page">Facebook Page</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="<?= base_url(); ?>/more/gallery">Gallery</a></li>


                            </ul>
                        </li>

                    </ul>
                    <form class="search d-flex">
                        <input class="form-control  ms-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn search-btn" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <!-- navbar ends  -->

        <?= $this->renderSection("content"); ?>

        <!--Footer starts -->
        <footer id="footer" class="pt-2 pb-2 pt-md-2 pb-md-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="text-center"><img src="<?= base_url(); ?>/public/assets/images/logo.png" alt="" class="img-fluid"></div>
                        <address class="text-center"> 
                            Sri Rudravadhut Math,
                            Rurdraswami peth, Jamkhandi,
                            Jmakhandi Tq., 
                            Bagalakot-587301, Karnataka. <br>
                            P: 0 99452 57512</address>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="">
                            <h2 class="pt-2 pb-2">Quick Links</h2>
                            <ul>
                                <li><a href="<?= base_url(); ?>">Home</a></li>
                                <li><a href="<?= base_url(); ?>/about">About</a></li>
                                <li><a href="<?= base_url(); ?>/contact">Contact</a></li>

                                <li><a href="<?= base_url(); ?>/">eBooks</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <h2 class="pt-2 pt-2">Services</h2>
                        <ul>
                            <li><a href="<?= base_url(); ?>/"></a>Spelling And BasicEnglish Course</li>
                            <li><a href="<?= base_url(); ?>/"></a>English Grammar Course</li>
                            <li><a href="<?= base_url(); ?>/"></a>Spoken English Course</li>
                            <li><a href="<?= base_url(); ?>/"></a>Translation Course</li>


                        </ul>
                    </div>
                    <div class="col-md-3">
                        <h2 class="pt-2 pb-2 text-center text-md-start">Social Media</h2>
                        <div class="align-self-center col-md-4">
                            <div class="text-center p-2 fs-5">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="<?= base_url(); ?>/public/assets/js/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->
    </body>
</html>