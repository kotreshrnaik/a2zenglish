<?= $this->extend('layouts/base'); ?>
<?= $this->Section('content'); ?>
<!-- common header starts -->
<div id="common-header" class="pt-2 pb-2 pt-md-5 pb-md-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h2 class= "pt-2 pb-2 text-white">About Us</h2>
                    <div class="">
                        <nav aria-label="breadcrumb" >
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- common header ends -->
<div id="about-content" class="pt-2 pb-2 pt-md-5 pb-md-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ea aut sed odio corporis deleniti voluptates! Pariatur ad dolorum eveniet? Non officia a omnis consectetur pariatur at doloremque suscipit atque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ea aut sed odio corporis deleniti voluptates! Pariatur ad dolorum eveniet? Non officia a omnis consectetur pariatur at doloremque suscipit atque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ea aut sed odio corporis deleniti voluptates! Pariatur ad dolorum eveniet? Non officia a omnis consectetur pariatur at doloremque suscipit atque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ea aut sed odio corporis deleniti voluptates! Pariatur ad dolorum eveniet? Non officia a omnis consectetur pariatur at doloremque suscipit atque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ea aut sed odio corporis deleniti voluptates! Pariatur ad dolorum eveniet? Non officia a omnis consectetur pariatur at doloremque suscipit atque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ea aut sed odio corporis deleniti voluptates! Pariatur ad dolorum eveniet? Non officia a omnis consectetur pariatur at doloremque suscipit atque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ea aut sed odio corporis deleniti voluptates! Pariatur ad dolorum eveniet? Non officia a omnis consectetur pariatur at doloremque suscipit atque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ea aut sed odio corporis deleniti voluptates! Pariatur ad dolorum eveniet? Non officia a omnis consectetur pariatur at doloremque suscipit atque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ea aut sed odio corporis deleniti voluptates! Pariatur ad dolorum eveniet? Non officia a omnis consectetur pariatur at doloremque suscipit atque!</p> -->
            </div>
        </div>
    </div>
</div>
<div id="about-team" class="pt-2 pb-2 pt-md-5 pb-md-5">
    <div class="container">
        <div class="text-center">
            <h2 class="pt-2 pb-2">Our Director and team</h2>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card text-center">
                    <h2 class="pt-2 pb-2">Director</h2>
                    <img src="<?= base_url(); ?>/public/assets/images/team/t1.png" class="" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">Kotresh R. Naik</h3>
                        <h5 class="text-end">M.Tech</h5>
                        <p class="card-text">Author - Corporate Trainer - Motivational Speaker - UI Developer</p>
                    </div>

                </div>
            </div>
            <div class="col-md-9">
                <div class="card  text-justify">
                    <h5 class="pt-2 pb-2 text-center">Director's Message</h5>
                    <!-- <img src="<?= base_url(); ?>/public/assets/images/team/t1.png" class="" alt="..."> -->
                    <!-- <div class="card-body">
                        <h5 class="card-title">CEO</h5> -->
                    <p class="card-text p-3"> A passion of a person makes the difference between the world and the dream. The fear, responsibility and accountability of every individual are the real and necessary values of the future where one can create fortunate of the society. Being the resposible citizen of the world, we must have the accountability of the deeds where we can really differentiate among us without comparison. This is the platform called <a href="https://a2zenglishtips.com/">"A2Z ENGLISH TIPS"</a> came with the responsibility of giving you the opportunity to learn English Online without fear of being the beginner of the language.</p>
                    <h5 class="pt-2 pb-2 text-center">About Us</h5>
                    <p class="card-text p-3"> The organization called <a href="https://a2zenglishtips.com/">SS SET</a> ie Sri Sainath Social Education Trust(R.), Dharwad, Karnataka, India, started in 2006, reached more than one million learners in the country. Now it came with the platform called <a href="https://a2zenglishtips.com/">"A2Z ENGLISH TIPS"</a> to heal the pain of every individual of learning English all over the world. The director, being a software engineer, built it with his team during lockdown with his experience for 15 years of teaching learing English with the creative and simple techniques. This platform surely reaches every individual to fulfil the vision and the mission of the organization.</p>

                    <!-- </div> -->

                </div>
            </div>

        </div>
    </div>
</div>
<div id="about-vision" class="pt-2 pb-2 pt-md-5 pb-md-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card text-center">
                    <h2 class="pt-2 pb-2">Vision</h2>
                    <a href=""><i class="fas fa-eye fs-1"></i></a>
                    <div class="card-body">

                        <p class="card-text">To reach every individual of the world to overcome the fear of learning English. It's not the wish of the director but the responsibility, accountability and work of the director.</p>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-center">
                    <h2 class="pt-2 pb-2">Mision</h2>
                    <a href=""><i class="fas fa-bullseye fs-1"></i></a>
                    <div class="card-body">

                        <p class="card-text">To enrich everyone's dream come true of learning English, this platform is with an objective of "One Stop Solution for English". The simple and creative techniques of the director make everyone to learn English online.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>