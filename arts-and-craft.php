 <?php $this->load->view('web/include/header-home')?>

<?php if($banner){
    $url = base_url('uploads/banner/').$banner->image;
}else{
    $url = base_url('assets/web/images/Slide.jpg');
} ?>

 <section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= $url?>');">
     <div class="breadcrum-overlay"></div>
     <div class="breadcrum-content">
         <h1 class="title-breadcrum">  Art & Craft </h1>
         <p class="breadcrum-sub-text mt-2 mb-0">
            We encourage expression. Artists, Sportsmen, Leaders, Policy makers, Mystical beings, story tellers and animal lovers – our students are the future of tomorrow and we take the job of getting them ready for the world seriously.
         </p>
     </div>
 </section>


<section class="pt-80 pb-80">
          <div class="side-space">
            <div class="row">
                <div class="col-xl-10 col-lg-12 col-md-12 m-auto">
                    <div class=" text-center">
                        <p class="mb-0 para-big-text">
                           Through personalised activity sessions, we include making, drawing, colours and building in their curriculum in as many ways as possible. Our focus is to engage kids in the process and encourage them to enjoy the process more than the outcome. We intend to develop kids who appreciate different perspective, consider viewpoints and work towards understanding history, culture and philosophy. These learnings are intrinsic to devoloping a sensitive and responsible human being.
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
   

   


    