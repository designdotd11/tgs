 <?php $this->load->view('web/include/header-home')?>

<?php if($banner){
    $url = base_url('uploads/banner/').$banner->image;
}else{
    $url = base_url('assets/web/images/Slide.jpg');
} ?>

 <section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= $url?>');">
     <div class="breadcrum-overlay"></div>
     <div class="breadcrum-content">
         <h1 class="title-breadcrum">Extra Curricular Activities </h1>
         <p class="breadcrum-sub-text mt-2 mb-0">
           Explore Your Passions Beyond the Classroom.
         </p>
     </div>
 </section>



<section class="pt-80 pb-80">
    <div class="side-space">
        <div class="row">
            <div class="col-xl-10 col-lg-12 col-md-12 m-auto">
                <div class="text-center">
                    <p class="mb-0 para-big-text">
                       At TGS, we believe that learning extends far beyond textbooks. Our diverse range of co-curricular activities offers students the opportunity to 
                       discover and develop their talents beyond academics. These activities foster creativity, teamwork, leadership, and personal growth.
                    </p>
                </div>
                
               
            </div>
            
             <div class="row pt-80 justify-content-center">
                  <div class="mb-4 text-center">
                       <h2 class="common-sub-title">Our Extra Curricular Programs</h2>
                  </div>
           
                <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 mb-4">
                    <div class="club-card">
                        <h3>Sports and Athletics</h3>
                        <p>Engage in healthy competition and teamwork through our variety of sports programs, catering to all skill levels and interests.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 mb-4">
                    <div class="club-card">
                        <h3>Arts and Culture</h3>
                        <p>Unleash your creativity in our vibrant arts community, including visual arts, music, drama, and dance.</p>
                    </div>
                </div>

              <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 mb-4">
                <div class="club-card">
                    <h3>Artography</h3>
                    <p>Explore creative mediums like Resin Art, Canvas Art, Portrait Painting, and Lippan Art through after-school classes that nurture your artistic talent.</p>
                </div>
              </div>
              
              <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 mb-4">
                <div class="club-card">
                    <h3>Dance Academy</h3>
                    <p>Our Dance Academy provides a platform to explore various dance forms, enhancing creativity, discipline, and a love for the performing arts.</p>
                </div>
            </div>

             <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 mb-4">
                <div class="club-card">
                    <h3>Clubs and Organizations</h3>
                    <p>Join clubs catering to diverse interests such as debate, robotics, environmental stewardship, and community service.</p>
                </div>
            </div>

             <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 mb-4">
                <div class="club-card">
                    <h3>Leadership and Service</h3>
                    <p>Develop leadership skills and give back to the community through service-learning opportunities and the student council.</p>
                </div>
            </div>

            </div>
        </div>

         </div>
    </div>
</section>
                
    

    <!-- Footer -->
    
<?php $this->load->view('web/include/footer')?>
   


    