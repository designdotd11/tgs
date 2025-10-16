
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
         <h1 class="title-breadcrum">  Parent's Speak </h1>
         <p> 
             At The Good Shepherd's (TGSS), we take pride in fostering a supportive and enriching environment for our students, 
             and the feedback from parents reflects this. Here's what our parents have to say
         </p>
     </div>
 </section>


<section class="pt-80 pb-80">
    <div class="container-fluid side-space">

        <div class="row">
        <?php foreach($videos as $video){?>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                 <div class="watch-card mb-4 ">
                        <div class="video-card">
                            <img src="<?= base_url('uploads/video/').$video->thumbnail?>" alt="<?= $video->title?>" class="thumbnail" data-id="1">
                            <div class="video-overlay" data-id="1">
                                <div class="play-icon-video" data-id="1">
                                    <i class="fas fa-play"></i>
                                </div>
                            </div>
                            <div class="video-container" data-id="1">
                                <iframe class="youtube-video" data-id="1" width="500" height="680" src="<?= $video->video_url?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                        </div>
                  </div>
            </div>
            <?php } ?>
           
       </div>
    </div>
</section>


 <!-- Popup structure -->
 <div id="video-popup" class="video-popup">
     <div class="video-popup-content">
         <span class="video-close"><span style="margin-top: -5px;">&times;</span></span>
         <iframe id="popup-video" width="100%" height="100%" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
     </div>
 </div>

<?php $this->load->view('web/include/footer')?>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>

<script>
     // Handle play icon click event
     document.querySelectorAll('.play-icon-video').forEach(item => {
             item.addEventListener('click', function() {
                 const videoId = this.getAttribute('data-id');
                 const videoSrc = document.querySelector(`.youtube-video[data-id="${videoId}"]`).src;
                 const popup = document.getElementById('video-popup');
                 const popupVideo = document.getElementById('popup-video');
                 popupVideo.src = videoSrc + '&autoplay=1';
                 popup.style.display = 'flex';
             });
         });

         // Close the popup
         document.querySelector('.video-popup .video-close').addEventListener('click', function() {
             const popup = document.getElementById('video-popup');
             const popupVideo = document.getElementById('popup-video');
             popupVideo.src = '';
             popup.style.display = 'none';
         });
</script>
