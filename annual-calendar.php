<!--  header -->
 <?php $this->load->view('web/include/header-home')?>
<!--End  header -->

<!--FOR BANNER-->
<?php if($banner){
    $url = base_url('uploads/banner/').$banner->image;
}else{
    $url = base_url('assets/web/images/Slide.jpg');
} ?>

<section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= base_url('assets/web')?>/images/12Academic_Annual Calendar.jpg');">
    <div class="breadcrum-overlay"></div>
    <div class="breadcrum-content">
        <h1 class="title-breadcrum">Annual Calendar</h1>
         <p class="breadcrum-sub-text mt-2 mb-0">
            The Good Shepherd’s (TGSS) is a private, minority, co-educational school, Kindergarten onwards dedicated 
            to the intellectual and personal growth of every child.
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
                          <p class="para-big-text">
                              <?= $value->title?>
                          </p>
                          
                        <div class="mt-4">
                            <!--<img src="<?= base_url('uploads/academic/').$value->annual_calendar_image?>" class="img-fluid" alt="Annual Calendar" />-->
                            <img src="https://tgs.urips.co.in/assets/web/extraImage/TGSS_Calendar%202025-26_page-0001.jpg" class="img-fluid" alt="Annual Calendar" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
        <?php $this->load->view('web/include/footer')?>
<!-- end footer -->