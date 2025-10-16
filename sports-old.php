 <?php $this->load->view('web/include/header-home')?>

<!--FOR BANNER-->
<?php if($banner){
    $url = base_url('uploads/banner/').$banner->image;
}else{
    $url = base_url('assets/web/images/Slide.jpg');
} ?>

 <section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url(<?= $url?>);">
     <div class="breadcrum-overlay"></div>
     <div class="breadcrum-content">
         <h1 class="title-breadcrum"> Sports </h1>
         <p class="breadcrum-sub-text mt-2 mb-0">
            Games and sports are compulsory parts of the school Curriculum. A full scale emphasis is laid on physical activities of the students,
            for which all the possible facilities are being provided.
         </p>
     </div>
 </section>


<section class="pt-80 pb-80">
    <div class="container-fluid side-space">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 m-auto">
                <div class="sport-grid">
                        <div class="sports-card" style="background: #d0e8ff;">
                            <div class="sports-img">
                                <img src="<?= base_url('assets/web')?>/images//sports/cricket-player-with-bat.png" alt="Box Cricket">
                            </div>
                            <h3>Box Cricket</h3>
                            <p>Experience the excitement of box cricket.</p>
                        </div>
                        <div class="sports-card" style="background: #d0e9ef;">
                            <div class="sports-img">
                                <img src="<?= base_url('assets/web')?>/images//sports/darts.png" alt="Archery">
                            </div>
                            <h3>Archery</h3>
                            <p>Improve your archery skills with our training sessions.</p>
                        </div>
                        <div class="sports-card" style="background: #f8f1cf;">
                            <div class="sports-img">
                                <img src="<?= base_url('assets/web')?>/images//sports/shooetr.png" alt="Pistol Shooting">
                            </div>
                            <h3>Shooting</h3>
                            <p>Join our shooting classes and learn precision shooting.</p>
                        </div>
                  
                        <div class="sports-card" style="background: #d0e9ef;">
                            <div class="sports-img">
                                <img src="<?= base_url('assets/web')?>/images//sports/badminton-court.png" alt="Badminton">
                            </div>
                            <h3>Badminton</h3>
                            <p>Play badminton on our professional indoor courts.</p>
                        </div>
                        <div class="sports-card" style="background: #f8f1cf;">
                            <div class="sports-img">
                                <img src="<?= base_url('assets/web')?>/images//sports/golf-player.png" alt="Golf Training">
                            </div>
                            <h3>Golf</h3>
                            <p>Enhance your golf skills with our comprehensive training.</p>
                        </div>
                        <div class="sports-card" style="background: #d0e8ff;">
                            <div class="sports-img">
                                <img src="<?= base_url('assets/web')?>/images//sports/runner.png" alt="Athletics">
                            </div>
                            <h3>Athletics</h3>
                            <p>Participate in various athletic activities and events.</p>
                        </div>
                        <div class="sports-card" style="background: #f8f1cf;">
                            <div class="sports-img">
                                <img src="<?= base_url('assets/web')?>/images//sports/soccer.png" alt="Football Academy">
                            </div>
                            <h3>Football</h3>
                            <p>Train at our football academy and enhance your skills.</p>
                        </div>
                        <div class="sports-card" style="background: #d0e8ff;">
                            <div class="sports-img">
                                <img src="<?= base_url('assets/web')?>/images//sports/basketball.png" alt="Basketball">
                            </div>
                            <h3>Basketball</h3>
                            <p>Play basketball in our well-equipped indoor courts.</p>
                        </div>
                        <div class="sports-card" style="background: #d0e9ef;">
                            <div class="sports-img">
                                <img src="<?= base_url('assets/web')?>/images//sports/volleyball-player.png" alt="Volleyball">
                            </div>
                            <h3>Volleyball</h3>
                            <p>Enjoy playing volleyball in our indoor facilities.</p>
                        </div>

                        <div class="sports-card" style="background: #d0e8ff;">
                            <div class="sports-img">
                                <img src="<?= base_url('assets/web')?>/images//sports/yoga-pose.png" alt="Yoga and Gymnastics">
                            </div>
                            <h3>Yoga and Gymnastics</h3>
                            <p> our yoga and gymnastics sessions for a healthier lifestyle.</p>
                        </div>


                        <div class="sports-card" style="background: #d0e9ef;">
                            <div class="sports-img">
                                <img src="<?= base_url('assets/web')?>/images//sports/people.png" alt="Table Tennis">
                            </div>
                            <h3>Table Tennis </h3>
                            <p>Improve skills with table tennis training.</p>
                        </div>
                        <div class="sports-card" style="background: #f8f1cf;">
                            <div class="sports-img">
                                <img src="<?= base_url('assets/web')?>/images//sports/skateboarder.png" alt="Skating">
                            </div>
                            <h3>Skating</h3>
                            <p>Experience the thrill of skating with our indoor rink.</p>
                        </div>

                       
                        
                    </div>
            </div>
        </div>
    </div>
</section>

<?php include('include/footer.php'); ?>