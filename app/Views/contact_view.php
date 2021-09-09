<?= $this->extend('layouts/base'); ?>
<?= $this->Section("content"); ?>
<!-- common header starts -->
<div id="common-header" class="pt-2 pb-2 pt-md-5 pb-md-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h2 class= "pt-2 pb-2 text-white">Contact Us</h2>
                    <div class="">
                        <nav aria-label="breadcrumb" >
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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
            </div>
        </div>
    </div>
</div>
<!-- Welcome ends  -->
<!-- Contact form starts  -->
<div id="contact-form" class="pt-2 pb-2 pt-md-5 pb-md-5 m-2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                
            </div>
            <div class="col-md-6">
            <h1 class="text-center">How can I help you?</h1>
            <!-- <?php if(isset($validation)): ?>
                <div class="alert alert-danger"><?= $validation->listErrors();?></div>
                <?php endif; ?> -->

                <?= form_open(); ?>
                <div class="form-group">
                    <label for="">Name</label>
                    <input type='text' name='uname' class="form-control" value='<?= set_value('uname') ?>'>
                    <span class='text-danger'><?= display_error($validation, 'uname');?></span>
                </div>
                <div class="form-group">
                    <label for="">E-Mail</label>
                    <input type='text' name='email' class="form-control" value='<?= set_value('email') ?>'>
                    <span class='text-danger'><?= display_error($validation, 'email');?></span>
                </div>
                <div class="form-group">
                    <label for="">Contact Number</label>
                    <input type='text' name='mobile' class="form-control" value='<?= set_value('mobile') ?>'>
                    <span class='text-danger'><?= display_error($validation, 'mobile');?></span>
                </div>
                <div class="form-group">
                    <label for="">Message</label>
                    <textarea name='msg' class="form-control" value='<?= set_value('msg') ?>'></textarea>
                    <span class='text-danger'><?= display_error($validation, 'msg');?></span>
                </div>
                <div class="form-group">

                    <input type='submit' name='save' class="custom-button" value='Send'>
                </div>
                <?= form_close(); ?>
            </div>
        </div>
    </div>

</div>
<!-- Contact form ends  -->
<?= $this->endSection(); ?>