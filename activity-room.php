 <?php $this->load->view('web/include/header-home')?>



</style>
    
    <?php if($banner){
        $url = base_url('uploads/banner/').$banner->image;
    }else{
        $url = base_url('assets/web/images/Slide.jpg');
    } ?>
    
 <section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= $url?>');">
     <div class="breadcrum-overlay"></div>
     <div class="breadcrum-content">
         <h1 class="title-breadcrum"> Activity Room </h1>
         <p class="breadcrum-sub-text mt-2 mb-0">
            Our Activity Room at The Good Shepherd's (TGS) provides a creative space where students can explore, learn, and engage in hands-on activities. It fosters curiosity and encourages holistic development through fun and interactive experiences.         </p>
     </div>
 </section>

    <section class="pt-80 pb-80">
          <div class="side-space">
            <div class="row">
                <div class="col-xl-10 col-lg-12 col-md-12 m-auto">
                    <div class=" text-center">
                        <p class="mb-0 para-big-text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap 
                            into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum 
                            passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div>
                </div>
                
                
                <div class="m-auto d-flex justify-content-center pt-80">
                    <div class="masonry-grid">
                         <div class="item-a">
                            <img src="https://tg.tgss.in/assets/web/images/news.jpg">
                          </div>
                          <div>
                            <img src="https://tg.tgss.in/assets/web/images/news.jpg">
                          </div>
                          <div class="item-b">
                            <img src="https://tg.tgss.in/assets/web/images/news.jpg">
                          </div>
                          <div>
                            <img src="https://tg.tgss.in/assets/web/images/news.jpg">
                          </div>
                          <!--<div class="item-c">-->
                          <!--  <img src="https://picsum.photos/200/400/?random">-->
                          <!--</div>-->
                          <div>
                            <img src="https://tg.tgss.in/assets/web/images/news.jpg">
                          </div>
                          <div>
                            <img src="https://tg.tgss.in/assets/web/images/news.jpg">
                          </div>
                          <!--<div class="item-d">-->
                          <!--  <img src="https://picsum.photos/200/600/?random">-->
                          <!--</div>-->
                </div>
                </div>
            </div>
            
            
         </div>
    </section>
    
    

<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Activity Rooms</h5>
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
   
