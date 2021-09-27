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
<!-- Whats new starts -->
<div id="whats-new">
    <div class="container pt-2 pb-2 pt-md-5 pb-d-5">
        <div class="row">
            <p>
                <a class="btn" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Inspire before your expire</a>
                <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Learn English Daily</button>
                <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">UPSC Compulsory English</button>
                <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample4" aria-expanded="false" aria-controls="multiCollapseExample4">KAS Compulsory English</button>
                <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample5" aria-expanded="false" aria-controls="multiCollapseExample5">What's New</button>
                <button class="btn" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2 multiCollapseExample3 multiCollapseExample4 multiCollapseExample5">See All</button>
            </p>
            <div class="row">
                <div class="col-md-3">
                    <div class="collapse multi-collapse" id="multiCollapseExample1">
                        <div class="card card-body">
                            <h4 class="side-line pt-3 pb-3 text-center">
                                <span class="line">Inspire before your expire</span>

                            </h4>
                            <i>In a day, if you don't come across any problem, make sure that you are travelling in a wrong path.</i> <br> <strong>_APJ Abdul Kalam</strong>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="collapse multi-collapse" id="multiCollapseExample2">
                        <div class="card card-body">
                            <div class="pt-3 pb-3">
                                <h4 class="side-line pt-3 pb-3 text-center">
                                    <span class="line">Learn English Daily</span>
                                </h4>
                                <ul class="list-unstyled">
                                    <li><a href="#">1. A2Z Vocab Made Easy Daily</a></li>
                                    <li><a href="#">2. A2Z Phrasal Verbs Made Easy Daily</a></li>
                                    <li><a href="#">3. A2Z Idioms Made Easy Daily</a></li>
                                    <li><a href="#">4. A2Z Root Words Made Easy Daily</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="collapse multi-collapse" id="multiCollapseExample3">
                        <div class="card card-body">
                            <div class="pt-3 pb-3">
                                <h4 class="side-line pt-3 pb-3 text-center">
                                    <span class="line">UPSC Compulsory English</span>

                                </h4>
                                <ul class="list-unstyled">
                                    <li>Syllabus-<a href="https://www.upsc.gov.in/exams-related-info/exam-notification">Click Here</a></li>
                                    <li>Materials-<a href="https://www.upsc.gov.in/exams-related-info/exam-notification">Click Here</a></li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="collapse multi-collapse" id="multiCollapseExample4">
                        <div class="card card-body">
                            <div class="pt-3 pb-3">
                                <h4 class="side-line pt-3 pb-3 text-center">
                                    <span class="line">KAS Compulsory English</span>
                                </h4>
                                <ul class="list-unstyled">
                                    <li>Syllabus-<a href="#">Download</a></li>
                                    <li>Materials-<a href="#">Download</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="collapse multi-collapse" id="multiCollapseExample5">
                        <div class="card card-body">
                            <div class="pt-3 pb-3">
                                <h4 class="side-line pt-3 pb-3 text-center">
                                    <span class="line">What's New</span>
                                </h4>
                                <ul class="list-unstyled">
                                    <li><a href="#">1. A2Z Vocab Made Easy Daily</a></li>
                                    <li><a href="#">2. A2Z Phrasal Verbs Made Easy Daily</a></li>
                                    <li><a href="#">3. A2Z Idioms Made Easy Daily</a></li>
                                    <li><a href="#">4. A2Z Root Words Made Easy Daily</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Whats new ends  -->
<!-- Intor of A2Z ENGLISH TIPS STARTS -->
<!-- <div id="intro" class="pt-2 pb-2 pt-md-5 pb-md-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ratio ratio-16x9">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/viOE5SZI4AE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                            <a href="<?= base_url(); ?>/blogs/english-grammar" class="btn custom-button">Continue Reading... </a>
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
                            <a href="<?= base_url(); ?>/blogs/spoken-english" class="btn custom-button">Continue Reading... </a>
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
                            <a href="<?= base_url(); ?>/blogs/parts-of-speech" class="btn custom-button">Continue Reading... </a>
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
                            <a href="<?= base_url(); ?>/blogs/vocabulary" class="btn custom-button">Continue Reading... </a>
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
                            <a href="<?= base_url(); ?>/blogs/translation" class="btn custom-button">Continue Reading... </a>
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
                            <a href="<?= base_url(); ?>/blogs/objective-english" class="btn custom-button">Continue Reading... </a>
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
                            <a href="<?= base_url(); ?>/blogs/interview" class="btn custom-button">Continue Reading... </a>
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
                            <a href="<?= base_url(); ?>/blogs/essays" class="btn custom-button">Continue Reading... </a>
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
                            <a href="<?= base_url(); ?>/onlinecourses/spelling-and-basic-english-course" class="btn custom-button">Buy Course</a>

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
                            <a href="<?= base_url(); ?>/onlinecourses/english-grammar-course" class="btn custom-button">Buy Course</a>

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
                            <a href="<?= base_url(); ?>/onlinecourses/spoken-english-course" class="btn custom-button">Buy Course</a>

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
                            <a href="<?= base_url(); ?>/onlinecourses/translation-course" class="btn custom-button">Buy Course</a>

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
                            <a href="<?= base_url(); ?>/onlinecourses/cursive-handwriting-course" class="btn custom-button">Buy Course</a>

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
                            <a href="<?= base_url(); ?>/onlinecourses/objective-english-course" class="btn custom-button">Buy Course</a>

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
                            <a href="<?= base_url(); ?>/onlinecourses/jobs-skills-training-course" class="btn custom-button">Buy Course</a>

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
                            <a href="<?= base_url(); ?>/onlinecourses/essay-writing-course" class="btn custom-button">Buy Course</a>

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
                            <a href="<?= base_url(); ?>/onlinecourses/build-your-vocabulary-course" class="btn custom-button">Buy Course</a>

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
                            <a href="<?= base_url(); ?>/onlinecourses/precis-writing-course" class="btn custom-button">Buy Course</a>

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