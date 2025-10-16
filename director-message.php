<!--  header -->
 <?php $this->load->view('web/include/header-home')?>
<!--End  header -->

<!--FOR BANNER-->
<?php if ($banner) {
    $url = base_url('uploads/banner/') . $banner->image;
} else {
    $url = base_url('assets/web/images/Slide.jpg');
} ?>

<section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= base_url('assets/web')?>/images/4About Us_From the Director’s Desk.jpg');">
    <div class="breadcrum-overlay bg-black"></div>
    <div class="breadcrum-content">
        <h1 class="title-breadcrum">From the Director’s Desk</h1>

        <p class="breadcrum-sub-text mt-2 mb-0">
            Welcome to our vibrant learning community,
        </p>

</section>



<section class="pt-80 pb-80">
    <div class="container side-space">
            <div class="row">
             <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-5 col-sm-12">
                  <?php include('include/sidebar.php') ?>

                </div>
                <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7 col-sm-12" id="indusrty-box">
                <div class="content-para  w-100 ps-lg-3 ps-xl-4 ps-xxl-3">
                   <div class="grid-2">
                        <div class="profile-image text-start">
                            <img src="<?= base_url('uploads/school/').$director->director_image ?>" class="img-fluid" alt="<?= $director->director_name?> " style="width: inherit;" />
                            <div class="profile-content">
                                <h4 class="h4-title mb-0"><?= $director->director_name?> </h4>
                                <p><?= $director->director_post?> </p>
                            </div>
                        </div>
                   
                        <div>

                        <?= $director->description?>
                    </div>
                   </div>
                </div>
           </div>
        </div>
    </div>
</div>
</section>


<!-- Footer -->
<div>
    <?php $this->load->view('web/include/footer') ?>
</div>
<!-- end footer -->