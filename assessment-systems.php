
<!--  header -->
 <?php $this->load->view('web/include/header-home')?>
<!--End  header -->
<style>
.assi-para p {
    color: #333 !important;
}
    
</style>

<link rel="stylesheet" href="<?= base_url('assets/web')?>/css/contact.css" />

<?php if($banner){
    $url = base_url('uploads/banner/').$banner->image;
}else{
    $url = base_url('assets/web/images/Slide.jpg');
} ?>

<section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= base_url('assets/web')?>/images/11Academic_Examination, Assessment Systems.jpg');">
    <div class="breadcrum-overlay"></div>
    <div class="breadcrum-content">11Academic_Examination, Assessment Systems.jpg
        <h1 class="title-breadcrum">
           Assessment Systems</h1>
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
                     
                      <div class="mt-4 ">
                            <div class="bg-blue mb-3 content-para assi-para"> 
                                 <?= $value->paragraph_1?>
                             </div>
                             
                             <div class="bg-yellow content-para assi-para"> 
                                 <?= $value->paragraph_2?> 
                             </div>
                          </div>

                          
                       <!--</div>-->
                    </div>
                    
                    <div style="display: flex; flex-wrap: wrap; width: 100%; gap: 16px; margin-top: 30px;padding: 20px;">
                      <img
                        src="<?= base_url('assets/web')?>/extraImage/examination1.jpeg"
                        alt="Examination 1"
                        style="flex: 1 1 calc(45% - 16px); max-width: calc(45% - 16px); width: 100%; border-radius: 12px; object-fit: cover;"
                      />
                      <img
                        src="<?= base_url('assets/web')?>/extraImage/examination2.jpeg"
                        alt="Examination 2"
                        style="flex: 1 1 calc(45% - 16px); max-width: calc(45% - 16px); width: 100%; border-radius: 12px; object-fit: cover;"
                      />
                    </div>


                    
                </div>
                
                

                
                
            </div>
        </div>
    </section>




    <!-- Footer -->
        <?php $this->load->view('web/include/footer')?>
<!-- end footer -->