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

                <h2 class="text-center">Welcome to A2Z ENGLISH TIPS</h2>
                <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h4 class="side-line text-center">
                    <span class="line"><i class="fas fa-book-reader"></i></span>
                </h4>
            </div>
            <div class="col-md-4"></div>
        </div>
                <P>Learn English Online with the free learning English videos and materials from A2Z ENGLISH TIPS. This channel will help you to learn English and improve your Pronunciation, Grammar, Spoken English, Communication Skills, Interview Skills, Life Skills, Motivations and vocabulary knowledge.</P>
            </div>
        </div>
    </div>
</div>
<!-- Welcome ends  -->
<!-- Intor of A2Z ENGLISH TIPS STARTS -->
<!-- <div id="intro" class="pt-2 pb-2 pt-md-5 pb-md-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video" allowfullscreen></iframe>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>
</div> -->

<!-- Intor of A2Z ENGLISH TIPS ends -->

<!-- Daily learning starts -->
<div id="learnonlinedaily" class="pt-2 pb-2 pt-md-5 pb-md-5">
    <div class="container">
        <h2 class="text-center pt-2 pb-2"> Learn English Online with A2Z ENGLISH TIPS daily </h2>
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
                            <p>Learn English Online with the free learning English videos and materials from A2Z ENGLISH TIPS.</p>
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
                            <p>Learn English Online with the free learning English videos and materials from A2Z ENGLISH TIPS.</p>
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
                            <p>Learn English Online with the free learning English videos and materials from A2Z ENGLISH TIPS.</p>
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
                            <p>Learn English Online with the free learning English videos and materials from A2Z ENGLISH TIPS.</p>
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
                            <p>Learn English Online with the free learning English videos and materials from A2Z ENGLISH TIPS.</p>
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
                            <p>Learn English Online with the free learning English videos and materials from A2Z ENGLISH TIPS.</p>
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
                            <p>Learn English Online with the free learning English videos and materials from A2Z ENGLISH TIPS.</p>
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
                            <p>Learn English Online with the free learning English videos and materials from A2Z ENGLISH TIPS.</p>
                            <a href="#" class="btn custom-button">Continue Reading... </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Daily learning ends -->

<!-- Online courses starts -->
<div id="online-courses" class="pt-2 pb-2 pt-md-5 pb-md-5">
    <div class="container">
        <h2 class="text-center pt-2 pb-2"> Online Courses </h2>
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
                            <h5 class="pt-2 pb-2">Spelling And BasicEnglish Course</h5>
                            <strong class="date"><?= date('Y-m-d') ?></strong>
                            <p>Learn English Online with the free learning English videos and materials from A2Z ENGLISH TIPS.</p>
                            <h5 class="pt-2 pb-2">Rs.1000/-</h5>
                            <a href="#" class="btn custom-button">Buy Course</a>

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
                            <h5 class="pt-2 pb-2">English Grammar Course</h5>
                            <strong class="date"><?= date('Y-m-d') ?></strong>
                            <p>Learn English Online with the free learning English videos and materials from A2Z ENGLISH TIPS.</p>
                            <h5 class="pt-2 pb-2">Rs.3000/-</h5>
                            <a href="#" class="btn custom-button">Buy Course</a>

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
                            <h5 class="pt-2 pb-2">Spoken English Course</h5>
                            <strong class="date"><?= date('Y-m-d') ?></strong>
                            <p>Learn English Online with the free learning English videos and materials from A2Z ENGLISH TIPS.</p>
                            <h5 class="pt-2 pb-2">Rs.3000/-</h5>
                            <a href="#" class="btn custom-button">Buy Course</a>

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
                            <h5 class="pt-2 pb-2">Translation Course</h5>
                            <strong class="date"><?= date('Y-m-d') ?></strong>
                            <p>Learn English Online with the free learning English videos and materials from A2Z ENGLISH TIPS.</p>
                            <h5 class="pt-2 pb-2">Rs.2000/-</h5>
                            <a href="#" class="btn custom-button">Buy Course</a>

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
                            <h5 class="pt-2 pb-2">Cursive Handwriting Course</h5>
                            <strong class="date"><?= date('Y-m-d') ?></strong>
                            <p>Learn English Online with the free learning English videos and materials from A2Z ENGLISH TIPS.</p>
                            <h5 class="pt-2 pb-2">Rs.1000/-</h5>
                            <a href="#" class="btn custom-button">Buy Course</a>

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
                            <h5 class="pt-2 pb-2">Objective English Course</h5>
                            <strong class="date"><?= date('Y-m-d') ?></strong>
                            <p>Learn English Online with the free learning English videos and materials from A2Z ENGLISH TIPS.</p>
                            <h5 class="pt-2 pb-2">Rs.2000/-</h5>
                            <a href="#" class="btn custom-button">Buy Course</a>

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
                            <h5 class="pt-2 pb-2">Jobs Skills Training Course</h5>
                            <strong class="date"><?= date('Y-m-d') ?></strong>
                            <p>Learn English Online with the free learning English videos and materials from A2Z ENGLISH TIPS.</p>
                            <h5 class="pt-2 pb-2">Rs.3000/-</h5>
                            <a href="#" class="btn custom-button">Buy Course</a>

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
                            <h5 class="pt-2 pb-2">Essay Writing Course</h5>
                            <strong class="date"><?= date('Y-m-d') ?></strong>
                            <p>Learn English Online with the free learning English videos and materials from A2Z ENGLISH TIPS.</p>
                            <h5 class="pt-2 pb-2">Rs.1000/-</h5>
                            <a href="#" class="btn custom-button">Buy Course</a>

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
                            <h5 class="pt-2 pb-2">Build Your Vocabulary Course</h5>
                            <strong class="date"><?= date('Y-m-d') ?></strong>
                            <p>Learn English Online with the free learning English videos and materials from A2Z ENGLISH TIPS.</p>
                            <h5 class="pt-2 pb-2">Rs.1000/-</h5>
                            <a href="#" class="btn custom-button">Buy Course</a>

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
                            <h5 class="pt-2 pb-2">Precis Writing Course</h5>
                            <strong class="date"><?= date('Y-m-d') ?></strong>
                            <p>Learn English Online with the free learning English videos and materials from A2Z ENGLISH TIPS.</p>
                            <h5 class="pt-2 pb-2">Rs.1000/-</h5>
                            <a href="#" class="btn custom-button">Buy Course</a>

                        </div>
                        
                    </div>
                </div>
                
            </div>
            
        </div>
        </div>
    </div>
</div>
<!-- Online courses starts -->

<?= $this->endSection(); ?>