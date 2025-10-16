
 <?php $this->load->view('web/include/header-home')?>


    <?php if($banner){
        $url = base_url('uploads/banner/').$banner->image;
    }else{
        $url = base_url('assets/web/images/Slide.jpg');
    } ?>
    
    <section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= base_url('assets/web')?>/images/10Academic_Curriculum  Courses of Study.jpg');">
        <div class="breadcrum-overlay"></div>
        <div class="breadcrum-content">
            <h1 class="title-breadcrum">Curriculum</h1>
            <p class="breadcrum-sub-text mt-2 mb-0"> 
              The wide range of activities and guided tasks support the different learning needs and styles.

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
                   <div class="content-para w-100 ps-lg-3 ps-xl-4 ps-xxl-3">
    <?php 
    $i = 1;
    foreach($curriculums as $curriculum){
        $images = $this->db->where('course_of_study_id', $curriculum->id)->get('course_of_study_images')->result();
    ?>
        <div>
            <h3><?= $curriculum->title ?></h3>
            <p><?= $curriculum->description ?></p>

            <?php if (!empty($images)) { ?>
                <div class="my-4">
                    <div id="courseCarousel<?= $i ?>" class="carousel slide mt-1" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php $isFirst = true; ?>
                            <?php foreach ($images as $image): ?>
                                <div class="carousel-item <?= $isFirst ? 'active' : '' ?>">
                                    <img src="<?= base_url('uploads/academic/course/') . $image->image ?>" alt="<?= $curriculum->title ?>" class="d-block w-100 img-fluid" style="object-fit:cover;height:100%">
                                </div>
                                <?php $isFirst = false; ?>
                            <?php endforeach; ?>
                        </div>

                        <!-- Arrows / Controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#courseCarousel<?= $i ?>" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#courseCarousel<?= $i ?>" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            <?php } ?>
        </div>
    <?php $i++; } ?>
</div>

                </div>
            </div>
        </div>
    </section>


                
    

    <!-- Footer -->
    
<?php $this->load->view('web/include/footer')?>

<!--<script>-->
<!--   $('.carousel-item').first().addClass('active')-->
<!--</script>-->
   

