 <?php $this->load->view('web/include/header-home')?>
 
<link rel="stylesheet" href="<?= base_url('assets/web')?>/css/blog.css" />

<!--FOR BANNER-->
<?php if($banner){
    $url = base_url('uploads/banner/').$banner->image;
}else{
    $url = base_url('assets/web/images/Slide.jpg');
} ?>

 <section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= base_url('assets/web')?>/images/29Media Coverage_Blog.jpg');">
     <div class="breadcrum-overlay"></div>
     <div class="breadcrum-content">
         <h1 class="title-breadcrum">  Blog </h1>
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
                     <div class="row">
                        <?php foreach($blogs as $blog){?>
                              <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                <div class="blog-inner mb-3">
                                  <a title="Read More" href="<?= base_url('blog-details/').$blog->slug?>">
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
                    </div>
                </div>
            </div>
        </div>
    </section>


<!--<section class="pt-40 pb-40">-->
<!--  <div class="container-fluid side-space">-->
<!--    <div class="justify-content-center row">-->
<!--        <?php foreach($blogs as $blog){?>-->
<!--      <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">-->
<!--        <div class="blog-inner mb-3">-->
<!--          <a title="Read More" href="<?= base_url('blog-details/').$blog->slug?>">-->
<!--            <div class="blog-img"><img src="<?=  base_url('uploads/blog/thumbnail/').$blog->thumbnail?>" alt="<?= $blog->title?>" class="img-fluid" /></div>-->
<!--          </a>-->
<!--          <div class="blog-overlay">-->
<!--            <div class="blog-date-info">-->
<!--              <h1 class="mb-1"> <?= $blog->title?> </h1>-->
<!--              <span class="blogcard-date"><?= date('d M, Y', strtotime($blog->blog_date))?></span>-->
<!--            </div>-->
<!--            <div class="blog-text">-->
<!--              <div class="bdl-text">-->
<!--                <a title="Read More" href="<?= base_url('blog-details/').$blog->slug?>" style="display:flex; gap:10px; align-items:center;color:#fff">-->
<!--                   Read More <span>-->
<!--                      <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">-->
<!--                      <path-->
<!--                        d="M313.941 216H12c-6.627 0-12 5.373-12 12v56c0 6.627 5.373 12 12 12h301.941v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.569 0-33.941l-86.059-86.059c-15.119-15.119-40.971-4.411-40.971 16.971V216z"></path>-->
<!--                    </svg>-->
<!--                 </span>-->
<!--                </a>-->
               
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--        <?php } ?>-->
    
<!--    </div>-->

<!--  </div>-->

<!--</section>-->

 <?php $this->load->view('web/include/footer')?>