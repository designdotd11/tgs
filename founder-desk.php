<!--  header -->
 <?php $this->load->view('web/include/header-home')?>
<!--End  header -->

<?php if($banner){
    $url = base_url('uploads/banner/').$banner->image;
}else{
    $url = base_url('assets/web/images/Slide.jpg');
} ?>

<section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= base_url('assets/web')?>/images/3About Us_From The Founder’s Desk.jpg');">
    <div class="breadcrum-overlay bg-black"></div>
    <div class="breadcrum-content">
        <h1 class="title-breadcrum">From The Founder’s Desk</h1>

        <p class="breadcrum-sub-text mt-2 mb-0">
          <?= $value->short_description?>
        </p>

</section>


<section class="pt-80 pb-80">
    <div class="container side-space">
            <div class="row">
             <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-5 col-sm-12">
                  <?php include('include/sidebar.php') ?>

                </div>
                <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7 col-sm-12" id="indusrty-box">
                <div class="content-para  w-100 ps-lg-3 ps-xl-4 ps-xxl-3">
                   <div class="grid-2">
                        <div class="profile-image text-start">
                            <!--<img src="<?= base_url('uploads/school/').$value->founder_image?>" class="img-fluid" alt="<?= $value->founder_name?>" style="width: inherit;"/>-->
                            <!--static image as admin panel creating problem-->
                            <img src="<?= base_url('assets/web')?>/images/Thomaskutty.png" class="img-fluid" alt="<?= $value->founder_name?>" style="width: inherit;"/>
                                  <!--static image end as admin panel creating problem-->
                                  <div class="profile-content">
                                   <h4 class="mb-0"><?= $value->founder_name?>  </h4>
                                   <p><?= $value->founder_post?> </p>
                                   
                                   
                                   
                                </div>
                        </div>
                   
                        <div>

                          <!--<?= $value->founder_desk?> -->
                                   <!--static content as admin panel creating problem-->
                                                                      <p>It took many philosophers and educationists to create the system of
education that we are a part of today. Vivekananda, Radhakrishna,
Gandhi, Dewey, Ambedkar - the names and the efforts were large. The
system was not willing to be broken and social change was no easy task.</p>

<p>But what kept them going? A vision, a mission and a dream, a need for something
better, unwillingness to complacency and reluctance to fit into something easy. They
were not willing to give up till they reached what was close to perfection to them.</p>


<p>About 60 years later, we moved on in a system created by our forefathers unwilling to
change, not ready to mobilize and thoroughly satisfied. Does that mean that we have succeeded to be a part of something perfect? Or does that mean that somewhere down the lane
we have lost out on visionaries - men and women willing to question the system and help us
move towards something better?</p>

<p>So today in this school of future educationists, entrepreneurs and professionals. I put across a challenge to make visionaries of students. People unwilling to settle for anything but the best, futurist not
willing to fall in a rut, citizens aware of where they stand and where they need to reach and thinkers who
question every choice they make. I wish all of you luck in this new zeal that I put forth.
</p>


                                   
                                   <!--static content end as admin panel creating problem-->
                    </div>
                   </div>
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


