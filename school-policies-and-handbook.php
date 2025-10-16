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

 <section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= base_url('assets/web')?>/images/24Admission_School Policies & Handbook.jpg');">
     <div class="breadcrum-overlay"></div>
     <div class="breadcrum-content">
         <h1 class="title-breadcrum"> School Policy & Guidelines  </h1>
         <p class="breadcrum-sub-text mt-2 mb-0">
          The almanac has to be brought to school daily. All students and their parents must acquaint themselves with the rules and regulations of the school and are bound to obey them.
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
                            <ul class="nav nav-pills" role="tablist">
          <li class="tab-itme">
            <a class="nav-link tab-link active" data-bs-toggle="pill" href="#discipline"> About Discipline</a>
          </li>
          <li class="tab-itme">
            <a class="nav-link tab-link" data-bs-toggle="pill" href="#instruction">Information For Parents</a>
          </li>
          <li class="tab-itme">
            <a class="nav-link tab-link" data-bs-toggle="pill" href="#uniform">Uniform & Dress Code</a>
          </li>
            <li class="tab-itme">
            <a class="nav-link tab-link" data-bs-toggle="pill" href="#visiting">Visiting Hours</a>
          </li>
          <li class="tab-itme">
            <a class="nav-link tab-link" data-bs-toggle="pill" href="#absence">Leave of Absence</a>
          </li>
          
           <li class="tab-itme">
            <a class="nav-link tab-link" data-bs-toggle="pill" href="#certificates">Certificates</a>
          </li>
          
          
        </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                
                                <div id="discipline" class=" tab-pane active">
                                    <?= $value->discipline?>
                                </div>
                              
                                <div id="instruction" class=" tab-pane fade">
                                    <?= $value->parents_information?>
                                </div>
             
                    
                                <div id="visiting" class=" tab-pane fade">
                                    <?= $value->visiting_hours?>
                                 
                                </div>
                    
                                <div id="uniform" class=" tab-pane fade">
                                
                                    <?= $value->uniform_dress_code?>
                                </div>
                              
                                <div id="absence" class=" tab-pane fade">
                                
                                    <?= $value->leave_of_absence?>
                                </div>
                    
                                <div id="certificates" class=" tab-pane fade">
                                    <?= $value->certificates?>
                                </div>
                    
                                <!--<div>-->
                                <!--  <h3 class="bold-heading ">General Rule-->
                                <!--  </h3>-->
                                <!--  <div class="about-content-section text-justify">-->
                                <!--    <p>This almanac has to be brought to school daily. All students and their parents must acquaint themselves with the rules and regulations of the school and are bound to obey them. </p>-->
                                <!--  </div>-->
                                <!--</div>-->
                    
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


    