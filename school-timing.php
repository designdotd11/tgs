
<?php $this->load->view('web/include/header-home')?>
<link href="<?= base_url('assets/web')?>/css/about.css" rel="stylesheet" />

    <!--FOR BANNER-->
    <?php if($banner){
        $url = base_url('uploads/banner/').$banner->image;
    }else{
        $url = base_url('assets/web/images/Slide.jpg');
    } ?>

    <section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= base_url('assets/web')?>/images/13Academic_School Timings.jpg');">
        <div class="breadcrum-overlay"></div>
        <div class="breadcrum-content">
            <h1 class="title-breadcrum">School Timings </h1>
            <p class="breadcrum-sub-text mt-2 mb-0"> 
             At The Good Shepherd School, our well-balanced schedule ensures that students have sufficient time for academic excellence as well as personal growth, fostering a holistic development environment.
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
                        <p class="mb-1">Tgss School is dedicated to providing a structured and enriching learning environment. 
                            Our school day is designed to balance academic instruction, co-curricular activities, and personal development.</p>

                    <div class="row g-4 mt-2">
                    <!-- Grade I-IV -->
                    <?php foreach($timings as $timing){?>
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="time-card">
                            <div class="time-card-header">
                                <?= $timing->grade?>
                            </div>
                            <div class="time-card-body">
                                <div class="time-info-row">
                                    <span class="time-info-label">Working Days:</span>
                                    <span><?= $timing->working_days?></span>
                                </div>
                                <div class="time-info-row">
                                    <span class="time-info-label">School Timing:</span>
                                    <span><span class="time-time-prefix">⏰</span><?= $timing->school_timing?></span>
                                </div>
                                <div class="time-info-row">
                                    <span class="time-info-label">Reporting Time:</span>
                                    <span><span class="time-time-prefix">📅</span><?= $timing->reporting_time?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                        <!-- Grade M1-M3 -->
                    <!--<div class="col-xl-6 col-lg-12 col-md-12">-->
                    <!--        <div class="time-card">-->
                    <!--            <div class="time-card-header">-->
                    <!--                Grade M1-M3-->
                    <!--            </div>-->
                    <!--            <div class="time-card-body">-->
                    <!--                <div class="time-info-row">-->
                    <!--                    <span class="time-info-label">Working Days:</span>-->
                    <!--                    <span>Monday to Friday</span>-->
                    <!--                </div>-->
                    <!--                <div class="time-info-row">-->
                    <!--                    <span class="time-info-label">School Timing:</span>-->
                    <!--                    <span><span class="time-time-prefix">⏰</span>9:00 A.M. – 1:00 P.M.</span>-->
                    <!--                </div>-->
                    <!--                <div class="time-info-row">-->
                    <!--                    <span class="time-info-label">Reporting Time:</span>-->
                    <!--                    <span><span class="time-time-prefix">📅</span>8:50 A.M.</span>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    
    <?php $this->load->view('web/include/footer')?>



