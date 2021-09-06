<?= $this->extend("layouts/base"); ?>
<?= $this->Section("content"); ?>
<!-- slider starts  -->
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="<?= base_url(); ?>/public/assets/images/slider/slide1.png" class="d-block w-100" alt="...">

        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="<?= base_url(); ?>/public/assets/images/slider/slide2.png" class="d-block w-100" alt="...">

        </div>
        <div class="carousel-item">
            <img src="<?= base_url(); ?>/public/assets/images/slider/slide3.png" class="d-block w-100" alt="...">

        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- slider ends  -->

<!-- Welcome starts  -->
<div id="welcome" class="pt-2 pb-2 pt-md-5 pb-md-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2 class="text-center"><strong>ರುದ್ರಾವಧೂತ ಮಠಕ್ಕೆ ಸ್ವಾಗತ</strong></h2>
                <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h4 class="side-line text-center">
                    <span class="line"><i class="fas fa-book-reader"></i></span>
                </h4>
            </div>
            <div class="col-md-4"></div>
        </div>
                <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet, delectus neque cum reprehenderit vel perferendis expedita accusamus incidunt vitae, aliquid reiciendis fugiat at. Reprehenderit iusto consequuntur nisi cum aperiam dolorem!</P>
            </div>
        </div>
    </div>
</div>
<!-- Welcome ends  -->

<!-- Daily learning starts -->
<div id="learnonlinedaily" class="pt-2 pb-2 pt-md-5 pb-md-5">
    <div class="container">
        <h2 class="text-center pt-2 pb-2"> ಉಪದೇಶಗಳು </h2>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h4 class="side-line text-center">
                    <span class="line"><i class="fas fa-book-reader"></i></span>
                </h4>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row">

            <div class="col-md-4">
                <div class="small-blog m-2 p-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center">
                                <img src="<?= base_url(); ?>/public/assets/images/blogs/blog.png" alt="" class="img-fluid rounded">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h5 class="pt-2 pb-2">English Grammar</h5>
                            <strong class="date"><?= date('Y-m-d') ?></strong class="date">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                            <a href="#" class="btn custom-button">Continue Reading... </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="small-blog m-2 p-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center">
                                <img src="<?= base_url(); ?>/public/assets/images/blogs/blog.png" alt="" class="img-fluid rounded">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h5 class="pt-2 pb-2">Spoken English</h5>
                            <strong class="date"><?= date('Y-m-d') ?></strong>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                            <a href="#" class="btn custom-button">Continue Reading... </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="small-blog m-2 p-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center">
                                <img src="<?= base_url(); ?>/public/assets/images/blogs/blog.png" alt="" class="img-fluid rounded">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h5 class="pt-2 pb-2">Parts of Speech</h5>
                            <strong class="date"><?= date('Y-m-d') ?></strong>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                            <a href="#" class="btn custom-button">Continue Reading... </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="small-blog m-2 p-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center">
                                <img src="<?= base_url(); ?>/public/assets/images/blogs/blog.png" alt="" class="img-fluid rounded">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h5 class="pt-2 pb-2">Vocabulary</h5>
                            <strong class="date"><?= date('Y-m-d') ?></strong>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                            <a href="#" class="btn custom-button">Continue Reading... </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="small-blog m-2 p-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center">
                                <img src="<?= base_url(); ?>/public/assets/images/blogs/blog.png" alt="" class="img-fluid rounded">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h5 class="pt-2 pb-2">Translation</h5>
                            <strong class="date"><?= date('Y-m-d') ?></strong>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                            <a href="#" class="btn custom-button">Continue Reading... </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="small-blog m-2 p-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center">
                                <img src="<?= base_url(); ?>/public/assets/images/blogs/blog.png" alt="" class="img-fluid rounded">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h5 class="pt-2 pb-2">Objective English</h5>
                            <strong class="date"><?= date('Y-m-d') ?></strong>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                            <a href="#" class="btn custom-button">Continue Reading... </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="small-blog m-2 p-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center">
                                <img src="<?= base_url(); ?>/public/assets/images/blogs/blog.png" alt="" class="img-fluid rounded">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h5 class="pt-2 pb-2">Jobs Interview</h5>
                            <strong class="date"><?= date('Y-m-d') ?></strong>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                            <a href="#" class="btn custom-button">Continue Reading... </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="small-blog m-2 p-3">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center">
                                <img src="<?= base_url(); ?>/public/assets/images/blogs/blog.png" alt="" class="img-fluid rounded">
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h5 class="pt-2 pb-2">Essays</h5>
                            <strong class="date"><?= date('Y-m-d') ?></strong>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.</p>
                            <a href="#" class="btn custom-button">Continue Reading... </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Daily learning ends -->

<?= $this->endSection(); ?>