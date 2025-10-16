 <?php $this->load->view('web/include/header-home')?>
<style>
    body {
    overflow-x: clip !important;
    width: 100%;
}
</style>

<?php if($banner){
    $url = base_url('uploads/banner/').$banner->image;
}else{
    $url = base_url('assets/web/images/Slide.jpg');
} ?>
    
 <section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= base_url('assets/web')?>/images/19Beyound Academic_AI, Coding & Robotics.jpg');">
     <div class="breadcrum-overlay"></div>
     <div class="breadcrum-content">
         <h1 class="title-breadcrum"> AI, Coding & Robotics </h1>
         <p class="breadcrum-sub-text mt-2 mb-0">
           <?= $value->title?>
         </p>
     </div>
 </section>


    <section class="pt-80 pb-80">
        <div class="container side-space">
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-5 col-sm-12">
                  <?php include('include/sidebar.php') ?>

                </div>
                <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7 col-sm-12" id="indusrty-box">
                    <div class="content-para  w-100 ps-lg-3 ps-xl-4 ps-xxl-3">
                        
                        <?= $value->description?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    
<?php $this->load->view('web/include/footer')?>
   


   