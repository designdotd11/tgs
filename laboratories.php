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

 <section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= base_url('assets/web')?>/images/18Beyound Academic_Laboratories.jpg');">
     <div class="breadcrum-overlay"></div>
     <div class="breadcrum-content">
         <h1 class="title-breadcrum"> Laboratories </h1>
         <p class="breadcrum-sub-text mt-2 mb-0">
             At TGSS, we believe in fostering a hands-on approach to learning.
             Our state-of-the-art laboratories provide students with the opportunity to engage in practical experiments,
             making learning both immersive and enjoyable. We are proud to offer fully equipped labs in various disciplines:
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
                        <p> 
                         The school’s state-of-the-art Physics, Biology, Chemistry, Composite, Coding, AI and Robotics Laboratories emphasise hands-on learning for students of Grade VI and above. 
                        </p>
                        
                          <div class="mt-4">
                         <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                              <div class="carousel-inner">
                                <?php foreach($laboratories as $lab){?>
                                <div class="carousel-item">
                                    <img src="<?= base_url('uploads/laboratories/').$lab->image?>" class="d-block w-100" alt="<?= $lab->title?>">
                                </div>
                                <?php } ?>
                                <!--<div class="carousel-item">-->
                                <!--  <img src="https://tgs.urips.co.in/assets/web/images/Slide.jpg" class="d-block w-100" alt="...">-->
                                <!--</div>-->
                               
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                              </button>
                            </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- Footer -->
    
<?php $this->load->view('web/include/footer')?>

<script>
   $('.carousel-item').first().addClass('active')
</script>
