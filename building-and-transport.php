 <?php $this->load->view('web/include/header-home')?>
<style>
    body {
    overflow-x: clip !important;
    width: 100%;
}
</style>

    <?php if($banner){
        $url = base_url('uploads/banner/').$banner->image;
    }else{
        $url = base_url('assets/web/images/Slide.jpg');
    } ?>

 <section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= base_url('assets/web')?>/images/22Beyoun Academic_Transport Facilities.jpg');">
     <div class="breadcrum-overlay"></div>
     <div class="breadcrum-content">
         <h1 class="title-breadcrum"> Building & Transport </h1>
         <p class="breadcrum-sub-text mt-2 mb-0">
            Our state-of-the-art school building provides a safe, comfortable learning environment, designed to foster creativity and collaboration. Additionally, our well-maintained transport system ensures reliable and secure transportation for all students.
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
                         <p class="mb-0 para-big-text">
                            At The Good Shepherd’s School, Bidrahalli, we understand that the school journey is more than just travel—it’s where friendships bloom, stories are shared, and lasting memories are made.
With well-planned routes and a dedicated team, our transport service ensures that each child’s ride to and from school is smooth, safe, and enjoyable. Our fleet of modern, GPS-enabled buses operates across multiple routes within a 15 km radius, allowing for efficient pickups and timely drop-offs.
Each vehicle is maintained to high safety standards and supervised by trained staff, giving parents confidence and children a comfortable, friendly environment from the moment they leave home until they return.

                        </p>
                        
                        <div class="mt-4">
                         <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                              <div class="carousel-inner">
                                <?php foreach($transport as $bt){?>
                                <div class="carousel-item">
                                    <img src="<?= base_url('uploads/transport/').$bt->image?>" class="d-block w-100" alt="<?= $bt->title?>">
                                </div>
                                <?php } ?>
                                <!--<div class="carousel-item">-->
                                <!--  <img src="https://tgs.urips.co.in/assets/web/images/Slide.jpg" class="d-block w-100" alt="...">-->
                                <!--</div>-->
                               
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" style="display: none;">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" style="display: none;">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                              </button>
                            </div>
                      </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer -->
    
<?php $this->load->view('web/include/footer')?>

<script>
   $('.carousel-item').first().addClass('active')
</script>