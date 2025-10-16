 <?php $this->load->view('web/include/header-home')?>
    <?php if($banner){
        $url = base_url('uploads/banner/').$banner->image;
    }else{
        $url = base_url('assets/web/images/Slide.jpg');
    } ?>

    <section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= $url?>');">
        <div class="breadcrum-overlay"></div>
        <div class="breadcrum-content">
            <h1 class="title-breadcrum">Awards & Achievements</h1>
            <p class="breadcrum-sub-text mt-2 mb-0"> 
             The Good Shepherd's (TGS) has earned recognition for its excellence in academics, co-curricular activities, and community involvement.
            </p>
        </div>
    </section>

   <section class="pt-80 pb-80">
    <div class="container-fluid side-space">

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 m-auto">
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