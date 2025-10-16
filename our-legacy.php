
 <?php $this->load->view('web/include/header-home')?>
<link href="<?= base_url('assets/web')?>/css/about.css" rel="stylesheet" />

    <!--FOR BANNER-->
    <?php if($banner){
        $url = base_url('uploads/banner/').$banner->image;
    }else{
        $url = base_url('assets/web/images/Slide.jpg');
    } ?>
    <section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= base_url('assets/web')?>/images/5About Us_Our Legacy – The Chronicles.jpg');">
        <div class="breadcrum-overlay bg-black"></div>
        <div class="breadcrum-content">
            <h1 class="title-breadcrum">Our Legacy – The Chronicles  </h1>
            <p class="breadcrum-sub-text mt-2 mb-0"><?= $value->short_description?></p>
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
                           <?= $value->description?>                  
                         </p>
                        <div>
                          <img src="<?= base_url('uploads/school/').$value->image?>" class="img-fluid" alt="Our Legacy – The Chronicles" />
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php $this->load->view('web/include/footer')?>


