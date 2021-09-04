<?= $this->extend("layouts/base");?>
<?= $this->Section("content");?>
<!-- slider starts  -->
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="<?= base_url();?>/public/assets/images/slider/slide1.png" class="d-block w-100" alt="...">
                    
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="<?= base_url();?>/public/assets/images/slider/slide2.png" class="d-block w-100" alt="...">
                    
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url();?>/public/assets/images/slider/slide3.png" class="d-block w-100" alt="...">
                    
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

                <h2>Welcome to A2Z ENGLISH TIPS</h2>
                <P>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet, delectus neque cum reprehenderit vel perferendis expedita accusamus incidunt vitae, aliquid reiciendis fugiat at. Reprehenderit iusto consequuntur nisi cum aperiam dolorem!</P>
            </div>
        </div>
    </div>
</div>
        <!-- Welcome ends  -->

        
        
<?= $this->endSection();?>