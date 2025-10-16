 <?php $this->load->view('web/include/header-home')?>

<link rel="stylesheet" href="<?= base_url('assets/web') ?>/css/blog.css" />

<section class="breadcrum-banner">
    <div class="breadcrum-img">
        <img src="<?= base_url('uploads/blog/banner/') . $blog->banner ?>" class="img-fluid" alt="<?= $blog->title ?>">
    </div>
    <div class="breadcrum-title side-space">
        
        <h1><?= $blog->title ?></h1>
    </div>
    <div class="breadcrum-overlay"></div>
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
                                        <a href="<?= base_url('blogs')?>" class="back-btn mb-3 text-center fw-medium">Back To All Blog</a>
                                     </div>
                                 </div>
                                
                
                
                                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="blog-details-page pb-5">
                                        <p class="blog-date"><?= date('d M, Y', strtotime($blog->blog_date)) ?></p>
                                        <h3 class="blog-heading"><?= $blog->title ?>
                                        </h3>
                    
                                        <div class="bog-description mt-4">
                    
                                            <?= $blog->description ?>
                    
                                        </div>
                                    </div>
                                        
                
                                 </div>
                
                                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                
                                     <div class="row">
                                         <div class="col-xl- col-lg-6 col-md-12">
                                             <h4 class="common-sub-title mb-0">Recent Blog </h4>
                                         </div>
                                         <div class="col-xl-6 col-lg-6 col-md-12">
                                             <div class="text-end">
                                                 <a href="<?= base_url('blogs')?>" class="view-all fw-medium">View All</a>
                                             </div>
                                         </div>
                                     </div>
                                     <hr>
                                     
                                     <div class="swiper swiper-container-blog">
                                         <div class="swiper-wrapper">
                                              <?php foreach ($recents as $recent) { ?>
                                             <div class="swiper-slide">
                                               <div class="blog-inner mb-3">
                                                  <a  href="<?= base_url('blog-details/').$blog->slug?>">
                                                    <div class="blog-img"><img src="<?=  base_url('uploads/blog/thumbnail/').$blog->thumbnail?>" alt="<?= $blog->title?>" class="img-fluid" /></div>
                                                  </a>
                                                  <div class="blog-overlay">
                                                    <div class="blog-date-info">
                                                      <h1 class="mb-1"> <?= $blog->title?> </h1>
                                                      <span class="blogcard-date"><?= date('d M, Y', strtotime($blog->blog_date))?></span>
                                                    </div>
                                                    <div class="blog-text">
                                                      <div class="bdl-text">
                                                        <a title="Read More" href="<?= base_url('blog-details/').$blog->slug?>" style="display:flex; gap:10px; align-items:center;color:#fff">
                                                           Read More <span>
                                                              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                                              <path
                                                                d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z"></path>
                                                            </svg>
                                                         </span>
                                                        </a>
                                                       
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                             </div>
                                         <?php } ?>
                
                                         </div>
                                        <div class="position-relative swipebtn">
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


<!--<section class="pt-40 pb-40">-->
<!--    <div class="container-fluid side-space">-->
<!--        <div class="row">-->
<!--            <div class="col-xxl-9 col-xl-8 col-lg-8 col-sm-12">-->
<!--                <div class="blog-details-page">-->
<!--                    <p class="blog-date"><?= date('d M, Y', strtotime($blog->blog_date)) ?></p>-->
<!--                    <h3 class="blog-heading"><?= $blog->title ?>-->
<!--                    </h3>-->

<!--                    <div class="bog-description mt-4">-->

<!--                        <?= $blog->description ?>-->

<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-xxl-3 col-xl-4 col-lg-4 col-sm-12">-->
<!--                <div class="blog-details-page">-->
<!--                    <h3 class="common-heading mb-3" style="color:#333">RECENT POST</h3>-->
<!--                    <?php foreach ($recents as $recent) { ?>-->
<!--                        <div class="blog-recent mb-3">-->

<!--                            <div class="recent-blog-img">-->
<!--                                <a href="<?= base_url('blog-details/') . $recent->slug ?>">-->
<!--                                    <img src="<?= base_url('uploads/blog/thumbnail/') . $recent->thumbnail ?>" alt="<?= $recent->title ?>" class="img-fluid" />-->
<!--                                </a>-->
<!--                            </div>-->
<!--                            <h4 class="line-clamp-3"><?= $recent->short_description ?></h4>-->

<!--                        </div>-->
<!--                    <?php } ?>-->

<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

<!--</section>-->

<?php $this->load->view('web/include/footer') ?>

 <script>
     var swiper = new Swiper('.swiper-container-blog', {
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
