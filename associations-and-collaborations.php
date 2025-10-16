<!--  header -->
 <?php $this->load->view('web/include/header-home')?>
<!--End  header -->

<!--FOR BANNER-->
<?php if($banner){
    $url = base_url('uploads/banner/').$banner->image;
}else{
    $url = base_url('assets/web/images/Slide.jpg');
} ?>

<section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= base_url('assets/web')?>/images/7About Us_Associations & Collaborations.jpg');">
    <div class="breadcrum-overlay"></div>
    <div class="breadcrum-content">
        <h1 class="title-breadcrum">Associations & Collaborations</h1>
         <p class="breadcrum-sub-text mt-2 mb-0">
                The Good Shepherd’s (TGSS) is a private, minority, co-educational school, Kindergarten onwards dedicated 
                to the intellectual and personal growth of every child.
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
                   <div class="row g-3">
                        
                        <?php foreach($collaborations as $col) { ?>
                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                <div class="card collab-card p-4 content-para">
                                    <img src="<?= base_url('uploads/collaboration/logo/' . $col->logo) ?>" alt="<?= $col->title ?>" class="card-img-top">
                                    <h4 class="h4-title text-center"><?= $col->title ?></h4>
                                    
                                    <?php
                                        $fullContent = strip_tags($col->description); // remove any HTML
                                        $words = explode(' ', $fullContent);
                                        $first50 = implode(' ', array_slice($words, 0, 50));
                                        $remaining = implode(' ', array_slice($words, 50));
                                    ?>
                        
                                    <p>
                                        <?= $first50 ?><span class="dots">...</span>
                                        <?php if (!empty($remaining)) : ?>
                                            <span class="more-text d-none"><?= $remaining ?></span>
                                        <?php endif; ?>
                                    </p>
                        
                                    <?php if (!empty($remaining)) : ?>
                                        <button class="read-more-btn btn ">Read More</button>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php } ?>

                        
                        
                        
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

<script>
    // document.querySelectorAll('.read-more-btn').forEach(btn => {
    //     btn.addEventListener('click', function() {
    //         const card = this.parentElement;
    //         const moreContent = card.querySelector('.show-more');
    //         const btnText = this;

    //         if (moreContent.style.display === "none" || moreContent.style.display === "") {
    //             moreContent.style.display = "block";
    //             btnText.innerText = "Read Less";
    //         } else {
    //             moreContent.style.display = "none";
    //             btnText.innerText = "Read More";
    //         }
    //     });
    // });
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const buttons = document.querySelectorAll(".read-more-btn");

    buttons.forEach(function(button) {
        button.addEventListener("click", function() {
            const card = button.closest(".card");
            const moreText = card.querySelector(".more-text");
            const dots = card.querySelector(".dots");

            if (moreText.classList.contains("d-none")) {
                moreText.classList.remove("d-none");
                dots.style.display = "none";
                button.textContent = "Read Less";
            } else {
                moreText.classList.add("d-none");
                dots.style.display = "inline";
                button.textContent = "Read More";
            }
        });
    });
});
</script>