
 <?php $this->load->view('web/include/header-home')?>




<div class="about-wraper">
    
    <?php if($banner){
        $url = base_url('uploads/banner/').$banner->image;
    }else{
        $url = base_url('assets/web/images/Slide.jpg');
    } ?>
    
    <section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= base_url('assets/web')?>/images/6About Us_Our Institutions.jpg');">
        <div class="breadcrum-overlay bg-black"></div>
        <div class="breadcrum-content">
            <h1 class="title-breadcrum">Our Institutions </h1>
            <p class="breadcrum-sub-text mt-2 mb-0">
                <?= $institution->short_description?>
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
                         <div>
                        <h3>St. Thomas School</h3>
                        <p class="mt-3 mb-0">
                            <?= $institution->school_1_description?>
                        </p>

                        <div class="card-img">
                             <img src="<?= base_url('uploads/school/').$institution->school_1_logo?>" alt="<?= $institution->school_1_name?>" class="img-fluid w-100 h-100">
                        </div>
                        </div>
                        <hr>
                        <div>
                             <h3>Trinity School</h3>
                            <p class="mt-3 mb-0"> 
                              <?= $institution->school_2_description?>
                            </p>
                            
                              
                            
                              <div class="card-img">
                                  <img src="<?= base_url('uploads/school/').$institution->school_2_logo?>" alt="<?= $institution->school_2_name?>" class="img-fluid w-100  h-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    
<?php $this->load->view('web/include/footer')?>
   
