
 <?php $this->load->view('web/include/header-home')?>
<link href="<?= base_url('assets/web')?>/css/about.css" rel="stylesheet" />

<style>
    body {
    overflow-x: clip !important;
    width: 100%;
}
</style>

<div class="about-wraper">
    <!--FOR BANNER-->
    <?php if($banner){
        $url = base_url('uploads/banner/').$banner->image;
    }else{
        $url = base_url('assets/web/images/Slide.jpg');
    } ?>
    <section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= $url?>');">
        <div class="breadcrum-overlay bg-black" style="background-color:#02020273"></div>
        <div class="breadcrum-content">
            <h1 class="title-breadcrum">Vision Mission & Values</h1>
            <p class="breadcrum-sub-text mt-2 mb-0">The Good Shepherd’s (TGSS) is a private, minority, co-educational school, Kindergarten onwards dedicated to the intellectual and personal growth of every child.</p>
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
                      <h3 class="">Discover The Essence Of A TGSS Student</h3>
                      <p>
                            <?= $value->discover?>                 
                     </p>
                     
                      <div>
                        <h3>Mission</h3>
                        <p><?= $value->mission?></p>
                        <img src="<?= base_url('uploads/school/').$value->mission_image?>" alt="Mission" class="img-fluid" laoding="lazy">
                    </div>
                    
                     <div>
                        <h3>Vision</h3>
                        <p>
                           <?= $value->vision?>
                        </p>
                        
                        <img src="<?= base_url('uploads/school/').$value->vision_image?>" alt="Vision" class="img-fluid" laoding="lazy">
                    </div>
                    
                    <div>
                    <h3 class="my-4">Our TGSS Values </h3>
                   
                        <h4 class="h4-title">Leadership </h4>
                        <p>
                           <?= $value->leadership?>
                        </p>

                         <h4 class="h4-title">Ethics </h4>
                        <p>
                           <?= $value->ethics?>
                        </p>
               
                  
                         <h4 class="h4-title">Trust </h4>
                        <p>
                           <?= $value->trust?>
                        </p>
                  
                     <h4 class="h4-title">Growth </h4>
                    <p>
                       <?= $value->growth?>
                </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <!-- Footer -->
    <div class="">
        <?php $this->load->view('web/include/footer')?>
    </div>
</div>


