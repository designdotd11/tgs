 <?php $this->load->view('web/include/header-home')?>
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

 <section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= base_url('assets/web')?>/images/16Beyound Academic_Creative Arts.jpg');">
     <div class="breadcrum-overlay"></div>
     <div class="breadcrum-content">
         <h1 class="title-breadcrum"> Creative Arts </h1>
         <p class="breadcrum-sub-text mt-2 mb-0">
          <?= $value->short_description?>
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
                        
                    <h3 class="mb-4"> Art & Craft </h3>
                    
                     <?= $value->art_craft?>
                      
                      <div class="mt-4">
                         <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                              <div class="carousel-inner">/
                                <?php foreach($art_images as $art_img){?>
                                <div class="carousel-item">
                                  <img src="<?= base_url('uploads/beyond/arts/').$art_img->image?>" class="d-block w-100" alt="Art & Craft">
                                </div>
                                <?php } ?>
                                
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
                      
                      <h3 class="mb-4 mt-4"> Music & Dance  </h3>
                    
                        <?= $value->music_dance?>

                          <div class="mt-4">
                         <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
                              <div class="carousel-inner">
                                  
                                <?php foreach($music_images as $music_img){?>
                                <div class="carousel-item carousel-item1">
                                  <img src="<?= base_url('uploads/beyond/arts/').$music_img->image?>" class="d-block w-100" alt="Music & Dance">
                                </div>
                                <?php } ?>
                               
                               
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                              </button>
                            </div>
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
     $('.carousel-item1').first().addClass('active')
</script>


    