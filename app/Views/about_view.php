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
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ea aut sed odio corporis deleniti voluptates! Pariatur ad dolorum eveniet? Non officia a omnis consectetur pariatur at doloremque suscipit atque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ea aut sed odio corporis deleniti voluptates! Pariatur ad dolorum eveniet? Non officia a omnis consectetur pariatur at doloremque suscipit atque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ea aut sed odio corporis deleniti voluptates! Pariatur ad dolorum eveniet? Non officia a omnis consectetur pariatur at doloremque suscipit atque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ea aut sed odio corporis deleniti voluptates! Pariatur ad dolorum eveniet? Non officia a omnis consectetur pariatur at doloremque suscipit atque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ea aut sed odio corporis deleniti voluptates! Pariatur ad dolorum eveniet? Non officia a omnis consectetur pariatur at doloremque suscipit atque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ea aut sed odio corporis deleniti voluptates! Pariatur ad dolorum eveniet? Non officia a omnis consectetur pariatur at doloremque suscipit atque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ea aut sed odio corporis deleniti voluptates! Pariatur ad dolorum eveniet? Non officia a omnis consectetur pariatur at doloremque suscipit atque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ea aut sed odio corporis deleniti voluptates! Pariatur ad dolorum eveniet? Non officia a omnis consectetur pariatur at doloremque suscipit atque! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ea aut sed odio corporis deleniti voluptates! Pariatur ad dolorum eveniet? Non officia a omnis consectetur pariatur at doloremque suscipit atque!</p>
            </div>
        </div>
    </div>
</div>
<div id="about-team" class="pt-2 pb-2 pt-md-5 pb-md-5">
    <div class="container">
        <div class="text-center">
            <h2 class="pt-2 pb-2">Our Director</h2>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card text-center">
                    <h2 class="pt-2 pb-2">Director</h2>
                    <img src="<?= base_url();?>/public/assets/images/team/t1.png" class="" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">Kotresh R. Naik</h3>
                        <h5 class="text-end">M.Tech</h5>
                        <p class="card-text">Author - Corporate Trainer - Motivational Speaker - UI Developer</p>
                    </div>

                </div>
            </div>
            <div class="col-md-9">
                <div class="card  text-center">
                    <h5 class="pt-2 pb-2">About Director</h5>
                    <!-- <img src="<?= base_url();?>/public/assets/images/team/t1.png" class="" alt="..."> -->
                    <!-- <div class="card-body">
                        <h5 class="card-title">CEO</h5> -->
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
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
                        
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
            <div class="card text-center">
                    <h2 class="pt-2 pb-2">Mision</h2>
                    <a href=""><i class="fas fa-bullseye fs-1"></i></a>
                    <div class="card-body">
                        
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
            <?= $this->endSection(); ?>