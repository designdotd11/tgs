 <?php $this->load->view('web/include/header-home')?>

<?php if($banner){
    $url = base_url('uploads/banner/').$banner->image;
}else{
    $url = base_url('assets/web/images/Slide.jpg');
} ?>

<section class="top-space-subpage pt-80  side-space" style="background-image: url('<?= $url?>');">
    <div class="row">
        <div class="col-12">
            <div class="breadcrum__header">
                <div class="breadcrum__title">
                    <p data-aos="fade-up" data-aos-duration="1800">The School</p>
                    <h1 data-aos="fade-right" data-aos-duration="3000">Awards & Achievements</h1>
                    <div class="breadcrum__subtitle">
                        <div class="badge contact__badge" data-aos="fade-left" data-aos-duration="3000">
                            <h4 class="animated-text">Your Future Begins Here, Reach for the Stars</h4>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-80 pb-80">
    <div class="container-fluid side-space">

    <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12 m-auto">
       <div class="awards-container">
            <div class="awards-cards" data-bs-toggle="modal" data-bs-target="#awards">
                <img src="<?= base_url('assets/web')?>/images/President.jpg" alt="Award" class="img-fluid">
                <div class="award-overlay">

                    <i class="fas fa-plus"></i>
                    <h3 class="award-title">Letter From Dr. A.P.J. Abdul Kalam</h3>
                </div>
            </div>
            <div class="awards-cards" data-bs-toggle="modal" data-bs-target="#awards">
                <img src="<?= base_url('assets/web')?>/images/President.jpg" alt="Award" class="img-fluid">
                <div class="award-overlay"><i class="fas fa-plus"></i>
                    <h3 class="award-title">Letter From Dr. A.P.J. Abdul Kalam</h3>
                </div>
            </div>
            <div class="awards-cards" data-bs-toggle="modal" data-bs-target="#awards">
                <img src="<?= base_url('assets/web')?>/images/President.jpg" alt="Award" class="img-fluid">
                <div class="award-overlay"><i class="fas fa-plus"></i>
                    <h3 class="award-title">Letter From Dr. A.P.J. Abdul Kalam</h3>
                </div>
            </div>
            <div class="awards-cards" data-bs-toggle="modal" data-bs-target="#awards">
                <img src="<?= base_url('assets/web')?>/images/President.jpg" alt="Award" class="img-fluid">
                <div class="award-overlay"><i class="fas fa-plus"></i>
                    <h3 class="award-title">Letter From Dr. A.P.J. Abdul Kalam</h3>
                </div>
            </div>
            <div class="awards-cards" data-bs-toggle="modal" data-bs-target="#awards">
                <img src="<?= base_url('assets/web')?>/images/President.jpg" alt="Award" class="img-fluid">
                <div class="award-overlay"><i class="fas fa-plus"></i>
                    <h3 class="award-title">Letter From Dr. A.P.J. Abdul Kalam</h3>
                </div>
            </div>
            <div class="awards-cards" data-bs-toggle="modal" data-bs-target="#awards">
                <img src="<?= base_url('assets/web')?>/images/President.jpg" alt="Award" class="img-fluid">
                <div class="award-overlay"><i class="fas fa-plus"></i>
                    <h3 class="award-title">Letter From Dr. A.P.J. Abdul Kalam</h3>
                </div>
            </div>
            <div class="awards-cards" data-bs-toggle="modal" data-bs-target="#awards">
                <img src="<?= base_url('assets/web')?>/images/President.jpg" alt="Award" class="img-fluid">
                <div class="award-overlay"><i class="fas fa-plus"></i>
                    <h3 class="award-title">Letter From Dr. A.P.J. Abdul Kalam</h3>
                </div>
            </div>
            <div class="awards-cards" data-bs-toggle="modal" data-bs-target="#awards">
                <img src="<?= base_url('assets/web')?>/images/President.jpg" alt="Award" class="img-fluid">
                <div class="award-overlay"><i class="fas fa-plus"></i>
                    <h3 class="award-title">Letter From Dr. A.P.J. Abdul Kalam</h3>
                </div>
            </div>

        </div>
       </div>


    </div>

    <div class="modal fade" id="awards">
        <div class="modal-dialog">
            <div class="modal-content bg-transparent border-0">
                <!-- Modal Header -->
                <div class="modal-close">
                    <button type="button" class="btn-close btn-close-popup" data-bs-dismiss="modal"><span style="margin-top:-5px;">×</span></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body p-4" style="background-color: #fff;">
                    <div class="modal-para">
                        <h3>Letter From Dr. A.P.J. Abdul Kalam</h3>
                        <div class="blue-line"></div>
                        <div class="mt-4">
                            <img src="<?= base_url('assets/web')?>/images/President.jpg" alt="Award" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('include/footer.php'); ?>