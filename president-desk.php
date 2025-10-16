<!--  header -->
<?php $this->load->view('web/include/header-home')?>
<!--End  header -->

<style>
    body {
    overflow-x: clip !important;
    width: 100%;
}
</style>

<!--FOR BANNER-->
<?php if($banner){
    $url = base_url('uploads/banner/').$banner->image;
}else{
    $url = base_url('assets/web/images/Slide.jpg');
} ?>

<section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= base_url('assets/web')?>/images/2About Us_From The President’s Desk.jpg');">
    <div class="breadcrum-overlay bg-black"></div>
    <div class="breadcrum-content">
        <!--<h1 class="title-breadcrum">From The President’s Desk</h1>-->
        <h1 class="title-breadcrum">Achievements and Accolades</h1>
        <!--<p class="breadcrum-sub-text mt-2 mb-0"><?= $president->short_description?>  </p>-->
        <p class="breadcrum-sub-text mt-2 mb-0">
            A proud moment in our journey — when our excellence was recognized by none other than Dr. A.P.J. Abdul Kalam. In a letter dated 18th July 2007, the former President of India commended our students for securing national ranks in the All India Secondary School Examination. A true testament to our commitment to bridging the rural-urban divide through quality education.
        </p>
        </div>
</section>


<!--contact  us-->
<section class="pt-80 pb-80">
    <div class="container side-space">
        <div class="row">
                  <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-5 col-sm-12">
                  <?php include('include/sidebar.php') ?>

                </div>
                <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7 col-sm-12" id="indusrty-box">
                    <div class="content-para  w-100 ps-lg-3 ps-xl-4 ps-xxl-3">
                        <div class=" text-center w-100 m-auto">
                            <img src="<?= base_url('uploads/school/').$president->president_desk_image?>" class="img-fluid" alt="The President" style="width: inherit;" />
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>




    <!-- Footer -->
    <div>
        <?php $this->load->view('web/include/footer')?>
    </div>
<!-- end footer -->