
 <?php $this->load->view('web/include/header-home')?>

<!--FOR BANNER-->
<?php if($banner){
    $url = base_url('uploads/banner/').$banner->image;
}else{
    $url = base_url('assets/web/images/Slide.jpg');
} ?>

 <section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= $url?>');">
     <div class="breadcrum-overlay"></div>
     <div class="breadcrum-content">
         <h1 class="title-breadcrum">  <?= $news->title?> </h1>
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
                           <div class="row align-items-center justify-content-center">
                                <div class="col-xl-12 col-lg-12 col-md-12 mb04">
                                     <div class="d-flex justify-content-end align-items-center">
                                        <a href="<?= base_url('news')?>" class="back-btn mb-3 text-center fw-medium">Back To All News</a>
                                     </div>
                                 </div>
                                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                  <div class="news-details-img image-section">
                                    <img src="<?= base_url('uploads/news/thumbnail/').$news->thumbnail?>" 
                                         class="img-fluid scroll-image" 
                                         alt="<?= $news->title?>">
                                </div>


                                 </div>
                
                
                                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12  mt-4">
                                    <div class="about-content-section pb-5">
                                        <h3 class="mb-2"><?= $news->title?> </h3>
                                        <?= $news->description?>
                                    </div>
                                        
                
                                 </div>
                
                                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                
                                     <div class="row">
                                         <div class="col-xl- col-lg-6 col-md-12">
                                             <h4 class="common-sub-title mb-0">Recent News </h4>
                                         </div>
                                         <div class="col-xl-6 col-lg-6 col-md-12">
                                             <div class="text-end">
                                                 <a href="<?= base_url('news')?>" class="view-all fw-medium">View All</a>
                                             </div>
                                         </div>
                                     </div>
                                     <hr>
                                     
                                     <div class="swiper swiper-container-news">
                                         <div class="swiper-wrapper">
                                            <?php foreach($recents as $recent){?>
                                             <div class="swiper-slide">
                                                <div class="news-event-card position-relative mb-3 ">
                                                    <div class="edgt-events-list-item-date-holder">
                                                        <div class="edgt-events-list-item-date-inner">
                                                            <h3 class="edgt-events-list-item-date-day text-white"><?= date('d', strtotime($recent->added_date))?></h3>
                                                            <h5 class="edgt-events-list-item-date-month"><?= date('M', strtotime($recent->added_date))?></h5>
                                                        </div>
                                                    </div>
                                                    <div class="news-img image-section">
                                                        <img src="<?= base_url('uploads/news/thumbnail/').$recent->thumbnail?>" class="img-fluid scroll-image" alt="<?= $recent->title?>">
                                                    </div>
                                                    <div class="news-content">
                                                        <ul>
                                                            <!-- <li><i class="fas fa-tag"></i> Painting</li> -->
                                                            <li><i class="fas fa-calendar"></i> <?= date('d M, Y', strtotime($recent->added_date))?></li>
                                                        </ul>
                                                        <hr>
                                                        <h4><?= $recent->title?></h4>
                                                        <p><?= $recent->short_description?></p>
                                                        <div>
                                                            <a href="<?= base_url('news-details/').$recent->slug?>" class="read-more-1 text-decoration-none">Read More <i class="fas fa-caret-right" style="color:#333;"></i></a>
                                                        </div>
                                                    </div>
                                                 </div>
                                             </div>
                                         <?php } ?>
                
                                         </div>
                                        <div class="position-relative">
                                             <div class="custom-next"></div>
                                             <div class="custom-prev"></div>
                                          </div>
                                     </div>
                                 </div>
                             </div>

                    </div>
                </div>
            </div>
        </div>
    </section>



<?php $this->load->view('web/include/footer')?>

<style>
.swiper-container-news .news-img img {
    width: 100%;
    height: 200px; /* fixed height for all swiper images */
    object-fit: cover; /* scales and crops image to fill container */
    display: block;
    border-radius: 8px; /* optional, matches card style */
}

.news-details-img {
    width: 100%;
    height: 400px; /* fixed height in px, adjust as needed */
    overflow: hidden; /* ensures no overflow */
    border-radius: 8px; /* optional */
}

.news-details-img img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* fills container without distortion */
    display: block;
}



</style>

 <script>
     var swiper = new Swiper('.swiper-container-news', {
         slidesPerView: 2,
         spaceBetween: 10,
         navigation: {
             nextEl: '.custom-next',
             prevEl: '.custom-prev',
         },
         pagination: {
             el: '.swiper-pagination',
             clickable: true,
         },
         breakpoints: {
             0: {
                 slidesPerView: 1,
                 spaceBetween: 20,
             },
             500: {
                 slidesPerView: 1,
                 spaceBetween: 20,
             },
             
            767: {
                 slidesPerView: 1,
                 spaceBetween: 20,
             },
             999: {
                 slidesPerView: 2,
                 spaceBetween: 20,
             },
             1299: {
                 slidesPerView: 2,
                 spaceBetween: 20,
             },
             1500: {
                 slidesPerView: 2,
                 spaceBetween: 20,
             },
         }
     });
 </script>


