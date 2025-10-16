 <?php $this->load->view('web/include/header-home')?>

<?php if($banner){
    $url = base_url('uploads/banner/').$banner->image;
}else{
    $url = base_url('assets/web/images/Slide.jpg');
} ?>
    
 <section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= $url?>');">
     <div class="breadcrum-overlay"></div>
     <div class="breadcrum-content">
         <h1 class="title-breadcrum"> Faculty</h1>
         <p class="breadcrum-sub-text mt-2 mb-0">
           The Good Shepherd's (TGS) has a caring faculty that helps students grow and creates a lively learning environment.
           Our faculty is highly qualified, skilled, and dedicated. They go above and beyond to support and encourage every student.
         </p>
     </div>
 </section>



 <section class="pt-80 pb-80">
     <div class="container-fluid side-space">
             <div class="row">
             <div class="col-lg-3 col-md-6 mb-4">
                 <div class="team-member">
                     <div class="team-img">
                         <img src="<?= base_url('assets/web')?>/images/no-image.jpg" alt="Name Here">
                         <div class="social-icons">
                             <a href="#"><i class="fab fa-facebook-f"></i></a>
                             <a href="#"><i class="fab fa-twitter"></i></a>
                             <a href="#"><i class="fab fa-linkedin-in"></i></a>
                         </div>
                     </div>
                     <div class="team-details mt-3">
                         <div>
                             <h3>Name Here</h3>
                             <p>Faculty</p>
                         </div>
                         <!-- <div>
                             <button class="btn show-more-btn" data-bs-toggle="modal" data-bs-target="#leadership-details">
                                 <i class="fas fa-plus mx-2 show-more-icon"></i>
                             </button>
                         </div> -->
                     </div>

                 </div>
             </div>


             <div class="col-lg-3 col-md-6 mb-4">
                 <div class="team-member">
                     <div class="team-img">
                         <img src="<?= base_url('assets/web')?>/images/no-image.jpg" alt="Name Here">
                         <div class="social-icons">
                             <a href="#"><i class="fab fa-facebook-f"></i></a>
                             <a href="#"><i class="fab fa-twitter"></i></a>
                             <a href="#"><i class="fab fa-linkedin-in"></i></a>
                         </div>
                     </div>
                     <div class="team-details mt-3">
                         <div>
                             <h3>Name Here</h3>
                             <p>Faculty</p>
                         </div>
                         <!-- <div>
                             <button class="btn show-more-btn" data-bs-toggle="modal" data-bs-target="#leadership-details">
                                 <i class="fas fa-plus mx-2 show-more-icon"></i>
                             </button>
                         </div> -->
                     </div>

                 </div>
             </div>


             <div class="col-lg-3 col-md-6 mb-4">
                 <div class="team-member">
                     <div class="team-img">
                         <img src="<?= base_url('assets/web')?>/images/no-image.jpg" alt="Name Here">
                         <div class="social-icons">
                             <a href="#"><i class="fab fa-facebook-f"></i></a>
                             <a href="#"><i class="fab fa-twitter"></i></a>
                             <a href="#"><i class="fab fa-linkedin-in"></i></a>
                         </div>
                     </div>
                     <div class="team-details mt-3">
                         <div>
                             <h3>Name Here</h3>
                             <p>Faculty</p>
                         </div>
                         <!-- <div>
                             <button class="btn show-more-btn" data-bs-toggle="modal" data-bs-target="#leadership-details">
                                 <i class="fas fa-plus mx-2 show-more-icon"></i>
                             </button>
                         </div> -->
                     </div>

                 </div>
             </div>


             <div class="col-lg-3 col-md-6 mb-4">
                 <div class="team-member">
                     <div class="team-img">
                         <img src="<?= base_url('assets/web')?>/images/no-image.jpg" alt="Name Here">
                         <div class="social-icons">
                             <a href="#"><i class="fab fa-facebook-f"></i></a>
                             <a href="#"><i class="fab fa-twitter"></i></a>
                             <a href="#"><i class="fab fa-linkedin-in"></i></a>
                         </div>
                     </div>
                     <div class="team-details mt-3">
                         <div>
                             <h3>Name Here</h3>
                             <p>Faculty</p>
                         </div>
                         <!-- <div>
                             <button class="btn show-more-btn" data-bs-toggle="modal" data-bs-target="#leadership-details">
                                 <i class="fas fa-plus mx-2 show-more-icon"></i>
                             </button>
                         </div> -->
                     </div>

                 </div>
             </div>

         </div>
           
     </div>
 </section>



    <!-- Footer -->
    <div>
        <?php $this->load->view('web/include/footer')?>
    </div>
<!-- end footer -->
