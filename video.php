<?php $this->load->view('web/include/header-home')?>
<!--FOR BANNER-->
<?php 
if($banner){
    $url = base_url('uploads/banner/').$banner->image;
}else{
    $url = base_url('assets/web/images/Slide.jpg');
}

// Function to convert any YouTube link to embed
function convert_to_embed_url($url) {
    if (strpos($url, 'watch?v=') !== false) {
        return str_replace('watch?v=', 'embed/', $url);
    } elseif (strpos($url, 'youtu.be/') !== false) {
        return str_replace('youtu.be/', 'www.youtube.com/embed/', $url);
    } elseif (strpos($url, 'youtube.com/shorts/') !== false) {
        return str_replace('youtube.com/shorts/', 'youtube.com/embed/', $url);
    } else {
        return $url;
    }
}
?>

<section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= base_url('assets/web')?>/images/28Media Coverage_Video.jpg');">
    <div class="breadcrum-overlay"></div>
    <div class="breadcrum-content">
        <h1 class="title-breadcrum">Video</h1>
        <p>Welcome to the Video Gallery of The Good Shepherd's (TGSS), showcasing the vibrant spirit of our school. Explore curated videos that highlight our educational philosophy, dynamic environment, and moments of learning, growth, and collaboration.</p>
    </div>
</section>

<section class="pt-80 pb-80">
    <div class="container side-space">
        <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-5 col-sm-12">
                <?php include('include/sidebar.php') ?>
            </div>
            <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7 col-sm-12" id="indusrty-box">
                <div class="content-para w-100 ps-lg-3 ps-xl-4 ps-xxl-3">
                    <div class="row">
                        <?php $i = 1; foreach($videos as $video){ 
                            $embedUrl = convert_to_embed_url($video->video_url);
                        ?>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="watch-card mb-4">
                                <div class="video-card">
                                    <img src="<?= base_url('uploads/video/').$video->thumbnail?>" 
                                         alt="<?= $video->title?>" 
                                         class="thumbnail" 
                                         data-url="<?= $embedUrl ?>">

                                    <div class="video-overlay">
                                        <div class="play-icon-video" data-url="<?= $embedUrl ?>">
                                            <i class="fas fa-play"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $i++; } ?>
                    </div>
                    
                    <!-- Pagination -->
                    <?php if($totalPages > 1): ?>
                        <div class="d-flex justify-content-center mt-4" id="news-pagination">
                            <?php if($page > 1): ?>
                                <a href="<?= base_url('video?page='.($page-1)) ?>" class="btn btn-outline-primary me-1">Prev</a>
                            <?php else: ?>
                                <button class="btn btn-secondary me-1" disabled>Prev</button>
                            <?php endif; ?>

                            <?php for($i=1;$i<=$totalPages;$i++): ?>
                                <?php if($i == $page): ?>
                                    <button class="btn btn-primary mx-1" disabled><?= $i ?></button>
                                <?php else: ?>
                                    <a href="<?= base_url('video?page='.$i) ?>" class="btn btn-outline-primary mx-1"><?= $i ?></a>
                                <?php endif; ?>
                            <?php endfor; ?>

                            <?php if($page < $totalPages): ?>
                                <a href="<?= base_url('video?page='.($page+1)) ?>" class="btn btn-outline-primary ms-1">Next</a>
                            <?php else: ?>
                                <button class="btn btn-secondary ms-1" disabled>Next</button>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video Popup Modal -->
<div id="video-popup" class="video-popup">
    <div class="video-popup-content">
        <span class="video-close">&times;</span>
        <iframe id="popup-video" width="100%" height="100%" src="" frameborder="0" allow="autoplay; encrypted-media; fullscreen" allowfullscreen></iframe>
    </div>
</div>

<?php $this->load->view('web/include/footer')?>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const popup = document.getElementById('video-popup');
    const popupVideo = document.getElementById('popup-video');
    const closeBtn = document.querySelector('.video-popup .video-close');

    // Open modal on thumbnail/play click
    document.querySelectorAll('.play-icon-video, .thumbnail').forEach(item => {
        item.addEventListener('click', function() {
            const videoUrl = this.getAttribute('data-url');
            if (!videoUrl) return;
            let finalUrl = videoUrl.includes('?') ? videoUrl + '&autoplay=1&rel=0' : videoUrl + '?autoplay=1&rel=0';
            popupVideo.src = finalUrl;
            popup.style.display = 'flex';
        });
    });

    // Close modal on close button
    closeBtn.addEventListener('click', function() {
        popupVideo.src = '';
        popup.style.display = 'none';
    });

    // Close modal on clicking outside the content
    popup.addEventListener('click', function(e) {
        if(e.target === popup){
            popupVideo.src = '';
            popup.style.display = 'none';
        }
    });
});
</script>

<style>
.video-popup {
    display: none;
    justify-content: center;
    align-items: center;
    position: fixed;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: rgba(0,0,0,0.8);
    z-index: 9999;
}
.video-popup-content {
    position: relative;
    width: 80%;
    max-width: 900px;
    height: 70%;
    background: #000;
    border-radius: 0;
    z-index: 10000;
}
.video-close {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 30px;
    color: #fff;
    cursor: pointer;
    z-index: 10001;
}
#popup-video {
    width: 100%;
    height: 100%;
    border: 0;
    z-index: 1;
    pointer-events: auto;
}

/* Responsive full screen on mobile */
@media (max-width: 768px){
    .video-popup-content {
        width: 100%;
        height: 100%;
        border-radius: 0;
    }
}
</style>
