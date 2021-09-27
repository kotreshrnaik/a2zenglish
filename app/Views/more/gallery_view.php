<?= $this->extend("layouts/base"); ?>
<?= $this->Section("content"); ?>
<!-- common header starts -->
<div id="common-header" class="pt-2 pb-2 pt-md-5 pb-md-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h2 class= "pt-2 pb-2 text-white">More</h2>
                    <div class="">
                        <nav aria-label="breadcrumb" >
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="<?= base_url(); ?>">More</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- common header ends -->
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
                <h2>Coming soon...</h2>
            </div>
        </div>
    </div>
</div>
<!-- Welcome ends  -->
<?= $this->endSection(); ?>