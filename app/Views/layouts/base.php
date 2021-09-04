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
        <title>A2Z ENGLISH TIPS</title>
    </head>
    <body>
        <!-- top-header start -->
        <div id="top-header">
            <div class="container">
                <div class="row ">
                    <div class="col-md-3 align-self-center">
                        <div class="text-center text-md-start p-1">
                            <a href="mailto:admin@a2zenglishtips.com"><i class="fas fa-envelope-open-text"></i> admin@a2zenglishtips.com</a>
                        </div>
                    </div>
                    <div class="col-md-2 align-self-center">
                        <div class="text-center p-1">
                            <a href="tel:09731564894"><i class="fas fa-phone-volume"></i> +91 97315 64894</a>
                        </div>
                    </div>
                    <div class="col-md-4 align-self-center">
                        <ul class="d-flex list-unstyled mb-0 justify-content-center">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="social-media-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Social Media
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="social-media-dropdown">

                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/website-solutions/website-design">Website Design</a></li>
                                    
                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/website-solutions/website-developement">Website Development</a></li>
                                    
                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/website-solutions/landing-page-development">Landing Page Development</a></li>
                                    
                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/website-solutions/e-commerce-website-development">E-Commerce Website Development</a></li>
                                    
                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/website-solutions/shopify">Shopify</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="downloads-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-download"></i>
                                    Downloads
                                </a>
                                <ul class="dropdown-menu mb-0 justify-content-center" aria-labelledby="downloads-dropdown">

                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/digital-marketing-services/search-engine-optimization">Search Engine Optimization</a></li>
                                    
                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/digital-marketing-services/search-engine-marketing">Search Engine Marketing</a></li>
                                    
                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/digital-marketing-services/social-media-marketing">Social Media Marketing</a></li>
                                    
                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/digital-marketing-services/pay-per-click">Pay Per Click</a></li>
                                    
                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/digital-marketing-services/content-marketing">Content Marketing</a></li>
                                    
                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/digital-marketing-services/e-mail-marketing">E-mail Marketing</a></li>
                                    
                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/digital-marketing-services/whatsapp-sms-marketing">Whatsapp/SMS Marketing</a></li>
                                    
                                    <li><a class="dropdown-item" href="<?= base_url(); ?>/digital-marketing-services/app-promotions">App Promotions</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 align-self-center">
                        <ul class="d-flex list-unstyled mb-0 justify-content-center justify-content-md-end">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="far fa-address-card"></i> Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><i class="fas fa-sign-in-alt"></i> Login</a>
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
                <a class="navbar-brand" href="<?= base_url(); ?>"> <img src="<?= base_url(); ?>/public/assets/images/logo2.png" alt="" class="img-fluid"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="online-courses-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Online Courses
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="online-courses-dropdown">

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/onlinecourses/spelling-and-basic-english-course">Spelling And Basic English Course</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="<?= base_url(); ?>/onlinecourses/english-grammar-course">English Grammar Course</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="<?= base_url(); ?>/onlinecourses/spoken-english-course">Spoken English Course</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="<?= base_url(); ?>/onlinecourses/translation-course">Translation Course</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="<?= base_url(); ?>/onlinecourses/cursive-handwriting-course">Cursive Handwriting Course</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="<?= base_url(); ?>/onlinecourses/objective-english-course">Objective English Course</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="<?= base_url(); ?>/onlinecourses/jobs-skills-training-course">Jobs Skills Training Course</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="<?= base_url(); ?>/onlinecourses/essay-writing-course">Essay Writing Course</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="<?= base_url(); ?>/onlinecourses/build-your-vocabulary-course">Build Your Vocabulary Course</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="<?= base_url(); ?>/onlinecourses/precis-writing-course">Precis Writing Course</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="blogs-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Blogs
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="blogs-dropdown">

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/blogs/grammar">Grammar</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="<?= base_url(); ?>/blogs/spoken-english">Spoken English</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="<?= base_url(); ?>/blogs/parts-of-speech">Parts Of Speech</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="<?= base_url(); ?>/blogs/vocabulary">Vocabulary</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="<?= base_url(); ?>/blogs/translation">Translation</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="<?= base_url(); ?>/blogs/objective-english">Objective English</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="<?= base_url(); ?>/blogs/interview">Jobs Interview</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="<?= base_url(); ?>/blogs/essays">Essays</a></li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">eBooks</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="more-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                More
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="more-dropdown">

                                <li><a class="dropdown-item" href="<?= base_url(); ?>/blogs/grammar">Grammar</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="<?= base_url(); ?>/blogs/spoken-english">Spoken English</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="<?= base_url(); ?>/blogs/parts-of-speech">Parts Of Speech</a></li>

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
                        <div class="text-center"><img src="<?= base_url(); ?>/public/assets/images/logo2.png" alt="" class="img-fluid"></div>
                        <address class="text-center"> 
                            #485, 10th Cross, 8th Main, 
                            HAL 3rd Stage, Jeevan Bhima Nagar,
                            Bengaluru-560075, Karnataka. <br>
                            P: 097315 64894</address>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="">
                            <h2 class="pt-2 pb-2">Quick Links</h2>
                            <ul>
                                <li><a href="<?= base_url(); ?>">Home</a></li>
                                <li><a href="<?= base_url(); ?>/about">About</a></li>
                                <li><a href="<?= base_url(); ?>/contact">Contact</a></li>
                                <li><a href="<?= base_url(); ?>/blog">Blogs</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <h2 class="pt-2 pt-2">Online Courses</h2>
                        <ul>
                            <li><a href="">Design Solutions</a></li>
                            <li><a href="">Website Solutions</a></li>
                            <li><a href="">Digital Marketing Services</a></li>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="<?= base_url(); ?>/public/assets/js/main.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->
    </body>
</html>