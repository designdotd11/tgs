 <?php $this->load->view('web/include/header-home')?>

<?php if($banner){
    $url = base_url('uploads/banner/').$banner->image;
}else{
    $url = base_url('assets/web/images/Slide.jpg');
} ?>
    
 <section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= $url?>');">
     <div class="breadcrum-overlay"></div>
     <div class="breadcrum-content">
         <h1 class="title-breadcrum">  Classrooms </h1>
         <p class="breadcrum-sub-text mt-2 mb-0">
           Our well-equipped classrooms promote interactive learning, encouraging creativity and collaboration among students. With modern technology 
           and a student-centered design, we ensure a comfortable and engaging educational experience.
         </p>
     </div>
 </section>


<section class="pt-80 pb-80">
          <div class="side-space">
            <div class="row">
                <div class="col-xl-10 col-lg-12 col-md-12 m-auto">
                    <div class=" text-center">
                        <p class="mb-0 para-big-text">
                            At The Good Shepherd's, our classrooms are designed to provide a stimulating and inclusive environment for all students. Each classroom is equipped with
                            modern teaching aids, including interactive whiteboards and projectors, to enhance the learning experience. With a focus on student engagement and collaboration,
                            our spacious classrooms foster both independent and group learning. Comfortable seating arrangements and natural lighting contribute to a positive atmosphere,
                            ensuring that students can focus and excel in their academic pursuits.
                            Additionally, our classrooms are designed to accommodate diverse learning styles, ensuring every child receives the support they need to thrive.
                        </p>
                    </div>
                </div>
                
                
                <div class="m-auto d-flex justify-content-center pt-80">
                    <div class="masonry-grid">
                         <div class="item-a position-relative">
                            <img src="https://tg.tgss.in/assets/web/images/news.jpg">
                            <h4 class="title-name">Title Here</h4>
                          </div>
                          <div class="position-relative">
                            <img src="https://tg.tgss.in/assets/web/images/news.jpg">
                             <h4 class="title-name">Title Here</h4>
                          </div>
                          <div class="item-b position-relative">
                            <img src="https://tg.tgss.in/assets/web/images/news.jpg">
                             <h4 class="title-name">Title Here</h4>
                          </div>
                          <div class="item-c position-relative">
                            <img src="https://tg.tgss.in/assets/web/images/news.jpg">
                             <h4 class="title-name">Title Here</h4>
                          </div>
                         
                           <div class="position-relative">
                            <img src="https://tg.tgss.in/assets/web/images/news.jpg">
                             <h4 class="title-name">Title Here</h4>
                          </div>
                
                         
                     </div>
                </div>
            </div>
            
            
         </div>
    </section>
    
    

<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Title Here</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img id="modalImage" src="" alt="Modal Image" class="img-fluid w-100">
            </div>
        </div>
    </div>
</div>

         
    

    <!-- Footer -->
    
<?php $this->load->view('web/include/footer')?>

<script>
    // Get all images in the masonry grid
    var images = document.querySelectorAll(".masonry-grid img");

    // Get the modal elements
    var modal = new bootstrap.Modal(document.getElementById('imageModal'));
    var modalImg = document.getElementById("modalImage");

    // Add click event to each image
    images.forEach(function(image) {
        image.addEventListener("click", function() {
            modalImg.src = this.src; // Set the clicked image's src to the modal image
            modal.show(); // Show the modal
        });
    });
</script>
   

   


    