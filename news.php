<?php $this->load->view('web/include/header-home')?>

<!--FOR BANNER-->
<?php if($banner){
    $url = base_url('uploads/banner/').$banner->image;
}else{
    $url = base_url('assets/web/images/Slide.jpg');
} ?>

<section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= base_url('assets/web')?>/images/26Media coverage_News & Events.jpg');">
    <div class="breadcrum-overlay"></div>
    <div class="breadcrum-content">
        <h1 class="title-breadcrum">News</h1>
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
                    <div class="row" id="news-list">
                        <?php foreach($news as $nw){ ?>
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                                <div class="news-event-card position-relative mb-4">
                                    <div class="edgt-events-list-item-date-holder">
                                        <div class="edgt-events-list-item-date-inner">
                                            <h3 class="edgt-events-list-item-date-day text-white"><?= date('d', strtotime($nw->added_date))?></h3>
                                            <h5 class="edgt-events-list-item-date-month"><?= date('M', strtotime($nw->added_date))?></h5>
                                        </div>
                                    </div>
                                    <div class="news-img image-section">
                                        <img src="<?= base_url('uploads/news/thumbnail/').$nw->thumbnail?>" class="img-fluid scroll-image" alt="<?= $nw->title?>">
                                    </div>
                                    <div class="news-content">
                                        <ul>
                                            <li class="news-badge"><?= $nw->category?></li>
                                            <li><i class="fas fa-calendar"></i> <?= date('d M, Y', strtotime($nw->added_date))?></li>
                                        </ul>
                                        <hr>
                                        <h4><?= $nw->title?></h4>
                                        <p><?= $nw->short_description?></p>
                                        <div>
                                            <a href="<?= base_url('news-details/').$nw->slug?>" class="read-more-1 text-decoration-none">Read More <i class="fas fa-caret-right" style="color:#333;"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                    <!-- Pagination -->
                    <?php if($totalPages > 1): ?>
                        <div class="d-flex justify-content-center mt-4" id="news-pagination">
                            <?php if($page > 1): ?>
                                <a href="<?= base_url('news?page='.($page-1)) ?>" class="btn btn-outline-primary me-1">Prev</a>
                            <?php else: ?>
                                <button class="btn btn-secondary me-1" disabled>Prev</button>
                            <?php endif; ?>

                            <?php for($i=1;$i<=$totalPages;$i++): ?>
                                <?php if($i == $page): ?>
                                    <button class="btn btn-primary mx-1" disabled><?= $i ?></button>
                                <?php else: ?>
                                    <a href="<?= base_url('news?page='.$i) ?>" class="btn btn-outline-primary mx-1"><?= $i ?></a>
                                <?php endif; ?>
                            <?php endfor; ?>

                            <?php if($page < $totalPages): ?>
                                <a href="<?= base_url('news?page='.($page+1)) ?>" class="btn btn-outline-primary ms-1">Next</a>
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

<style>
.news-img img {
    width: 100%;
    height: 250px; /* fixed height for all images, adjust as needed */
    object-fit: cover; /* ensures image fills container without distortion */
    display: block;
    border-radius: 8px; /* optional, matches card style */
}
</style>


<?php $this->load->view('web/include/footer')?>
