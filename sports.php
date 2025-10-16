 <?php $this->load->view('web/include/header-home')?>

<!--FOR BANNER-->
<?php if($banner){
    $url = base_url('uploads/banner/').$banner->image;
}else{
    $url = base_url('assets/web/images/Slide.jpg');
} ?>

 <section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= base_url('assets/web')?>/images/20Beyound Academic_Sports.jpg');">
     <div class="breadcrum-overlay"></div>
     <div class="breadcrum-content">
         <h1 class="title-breadcrum"> Sports </h1>
         <p class="breadcrum-sub-text mt-2 mb-0">
           Separate indoor and outdoor play spaces for foundational & primary students, which encourage age-specific activities for both fun and physical development. 
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
                        <div>
                            <h2>Sports</h2>
                            <p class="mb-0">
                                At The Good Shepherd’s School, Bidrahalli, we believe that a strong mind flourishes in a strong body. Our sports programme is designed not just to build athletic skills, but to shape character, confidence, and teamwork.
By integrating global standards in coaching methods and physical education, we ensure that students develop healthy habits, resilience, and a lifelong appreciation for fitness. From foundational motor skills in early years to competitive play at higher levels, every stage is thoughtfully guided by trained professionals.
Through sports, our learners discover the importance of discipline, leadership, decision-making, and collaboration—values that extend far beyond the field. At Good Shepherd’s, physical education is more than a subject; it’s a way of life that nurtures well-rounded, capable individuals.

                            </p>
                        </div>
                        
                        <!--<br/>-->
                        <!--<br/>-->
                        <!--<div>-->
                        <!--    <h3>Indoor Games</h3>-->
                            <!--<p class="mb-0">Separate Indoor Soft Play Area and Outdoor Play area for Juniors.</p>-->
                        <!--</div>-->
                        <!--<div class="sport-grid mt-4">-->
                        <!--    <div class="sports-card" style="background: #d0e8ff;">-->
                        <!--        <div class="sports-img">-->
                        <!--            <img src="https://tgs.urips.co.in/uploads/sports/1747398429yoga-pose.png" alt="Yoga">-->
                        <!--        </div>-->
                        <!--        <h3> Yoga</h3>-->
                        <!--        <p>Our yoga sessions for a healthier lifestyle.</p>-->
                        <!--    </div>-->
                            
                        <!--    <div class="sports-card" style="background: #d0e9ef;">-->
                        <!--        <div class="sports-img">-->
                        <!--            <img src="https://tgs.urips.co.in/uploads/sports/1747398625badminton-court.png" alt="Squash">-->
                        <!--        </div>-->
                        <!--        <h3> Squash</h3>-->
                        <!--        <p>Play Squash on our professional courts.</p>-->
                        <!--    </div>-->
                            
                        <!--    <div class="sports-card" style="background: #f8f1cf;">-->
                        <!--        <div class="sports-img">-->
                        <!--            <img src="https://tgs.urips.co.in/uploads/sports/1747398685people.png" alt="Table Tennis">-->
                        <!--        </div>-->
                        <!--        <h3> Table Tennis</h3>-->
                        <!--        <p>Improve skills with table tennis training.</p>-->
                        <!--    </div>-->
                            
                            <!--<div class="sports-card" style="background: #f8f1cf;">-->
                            <!--    <div class="sports-img">-->
                            <!--        <img src="https://tgs.urips.co.in/uploads/sports/1747398752skateboarder.png" alt="Skating">-->
                            <!--    </div>-->
                            <!--    <h3> Skating</h3>-->
                            <!--    <p>Experience the thrill of skating.</p>-->
                            <!--</div>-->

                        </div>
                        
                        <!--<div class="sport-grid">-->
                        <!--    <?php foreach($indoor as $in){?>-->
                        <!--    <div class="sports-card" style="background: <?= $in->color?>;">-->
                        <!--        <div class="sports-img">-->
                        <!--            <img src="<?= base_url('uploads/sports/').$in->icon?>" alt="<?= $in->title?>">-->
                        <!--        </div>-->
                        <!--        <h3> <?= $in->title?></h3>-->
                        <!--        <p><?= $in->description?></p>-->
                        <!--    </div>-->
                        <!--    <?php } ?>-->
                            
                        <!--    <div class="sport-grid mt-4">-->
                        <!--        <div class="sports-card" style="background: #e8f7d2;">-->
                        <!--            <div class="sports-img">-->
                        <!--                <img src="<?= base_url('assets/web')?>/images/sports/indoor-play.png" alt="Indoor Play Area">-->
                        <!--            </div>-->
                        <!--            <h3>Indoor Play Area</h3>-->
                        <!--            <p>A safe, engaging indoor play area designed for young learners to explore, play, and grow.</p>-->
                        <!--        </div>-->

                        <!--    </div>-->
                        <!--</div>-->
                        
                        <br/>
                        <br/>
                        <div class="mt-3">
                             <h3>Outdoor Games </h3>
                             <p>
                                 <!--The outdoor playground spread out over 2 acres which in the future will offer multiple sport options and enhances team spirit.-->
                             </p>
                         </div>
                         
                        <div class="sport-grid mt-4">
                            <!--<?php foreach($outdoor as $out){?>-->
                            <!--<div class="sports-card" style="background: <?= $out->color?>;">-->
                            <!--    <div class="sports-img">-->
                            <!--        <img src="<?= base_url('uploads/sports/').$out->icon?>" alt="<?= $out->title?>">-->
                            <!--    </div>-->
                            <!--    <h3> <?= $out->title?></h3>-->
                            <!--    <p><?= $out->description?></p>-->
                            <!--</div>-->
                            <!--<?php } ?>-->
                            <!--<div class="sports-card" style="background: #f8f1cf;">-->
                            <!--    <div class="sports-img">-->
                            <!--        <img src="<?= base_url('assets/web')?>/images/sports/soccer.png" alt="Football Academy">-->
                            <!--    </div>-->
                            <!--    <h3>Football</h3>-->
                            <!--    <p>Train at our football academy and enhance your skills.</p>-->
                            <!--</div>-->
                            <!--<div class="sports-card" style="background: #d0e9ef;">-->
                            <!--    <div class="sports-img">-->
                            <!--        <img src="<?= base_url('assets/web')?>/images/sports/basketball.png" alt="Basketball">-->
                            <!--    </div>-->
                            <!--    <h3>Basketball</h3>-->
                            <!--    <p>Play basketball in our well-equipped courts.</p>-->
                            <!--</div>-->
                            <!--<div class="sports-card" style="background: #d0e9ef;">-->
                            <!--    <div class="sports-img">-->
                            <!--        <img src="<?= base_url('assets/web')?>/images//sports/volleyball-player.png" alt="Volleyball">-->
                            <!--    </div>-->
                            <!--    <h3>Volley Ball</h3>-->
                            <!--    <p>Enjoy playing volley Ball.</p>-->
                            <!--</div>-->
                           
                            <!--<div class="sports-card" style="background: #d0e8ff;">-->
                            <!--    <div class="sports-img">-->
                            <!--        <img src="<?= base_url('assets/web')?>/images/sports/handball.png" alt="Golf Training">-->
                            <!--    </div>-->
                            <!--    <h3>Handball</h3>-->
                            <!--    <p>Handball fosters teamwork, agility, and determination, empowering students both on and off the court.</p>-->
                            <!--</div>-->
                            <!--<div class="sports-card" style="background: #f8f1cf;">-->
                            <!--    <div class="sports-img">-->
                            <!--        <img src="<?= base_url('assets/web')?>/images/sports/martial-arts.png" alt="martial arts">-->
                            <!--    </div>-->
                            <!--    <h3>Martial Arts</h3>-->
                            <!--    <p>Martial arts at TGS instill discipline, confidence, and strength.</p>-->
                            <!--</div>-->
                            
    
                            <!--<div class="sports-card" style="background: #f8f1cf;">-->
                            <!--    <div class="sports-img">-->
                            <!--        <img src="<?= base_url('assets/web')?>/images/sports/yoga-pose.png" alt="Yoga and Gymnastics">-->
                            <!--    </div>-->
                            <!--    <h3>Yoga </h3>-->
                            <!--    <p> our yoga sessions for a healthier lifestyle.</p>-->
                            <!--</div>-->
    
                            <!--<div class="sports-card" style="background: #d0e9ef;">-->
                            <!--    <div class="sports-img">-->
                            <!--        <img src="<?= base_url('assets/web')?>/images/sports/badminton-court.png" alt="Badminton">-->
                            <!--    </div>-->
                            <!--    <h3>Squash</h3>-->
                            <!--    <p>Play Squash on our professional courts.</p>-->
                            <!--</div>-->
                            
                            <!--<div class="sports-card" style="background: #d0e8ff;">-->
                            <!--    <div class="sports-img">-->
                            <!--        <img src="<?= base_url('assets/web')?>/images/sports/people.png" alt="Table Tennis">-->
                            <!--    </div>-->
                            <!--    <h3>Table Tennis </h3>-->
                            <!--    <p>Improve skills with table tennis training.</p>-->
                            <!--</div>-->
                            <!--<div class="sports-card" style="background: #d0e8ff;">-->
                            <!--    <div class="sports-img">-->
                            <!--        <img src="<?= base_url('assets/web')?>/images/sports/skateboarder.png" alt="Skating">-->
                            <!--    </div>-->
                            <!--    <h3>Skating</h3>-->
                            <!--    <p>Experience the thrill of skating.</p>-->
                            <!--</div>-->
                        
                        
                        <!--added as per the requirement-->
                        <div class="sports-card" style="background: #f8f1cf;">
                            <div class="sports-img">
                                <img src="https://tgs.urips.co.in/uploads/sports/1747396910cricket-player-with-bat.png" alt="Cricket">
                            </div>
                            <h3> Cricket</h3>
                            <p>Experience the excitement of cricket.</p>
                        </div>
                        
                        <div class="sports-card" style="background: #d0e8ff;">
                            <div class="sports-img">
                                <img src="https://tgs.urips.co.in/uploads/sports/1747397089soccer.png" alt="Football">
                            </div>
                            <h3> Football</h3>
                            <p>Play basketball in our well-equipped courts.</p>
                        </div>
                        
                        <div class="sports-card" style="background: #d0e9ef;">
                            <div class="sports-img">
                                <img src="https://tgs.urips.co.in/uploads/sports/1747397142basketball.png" alt="Basketbal">
                            </div>
                            <h3> Basketbal</h3>
                            <p>Play basketball in our well-equipped courts.</p>
                        </div>
                        
                        <div class="sports-card" style="background: #d0e9ef;">
                            <div class="sports-img">
                                <img src="https://tgs.urips.co.in/uploads/sports/1747397547volleyball-player.png" alt="Volley Ball">
                            </div>
                            <h3> Volley Ball</h3>
                            <p>Enjoy playing volley Ball.</p>
                        </div>
                        
                        <div class="sports-card" style="background: #f8f1cf;">
                            <div class="sports-img">
                                <img src="https://tgs.urips.co.in/uploads/sports/1747397859handball.png" alt="Handball">
                            </div>
                            <h3> Handball</h3>
                            <p>Handball fosters teamwork, agility, and determination, empowering students both on and off the court.</p>
                        </div>
                        
                        <div class="sports-card" style="background: #d0e8ff;">
                            <div class="sports-img">
                                <img src="https://tgs.urips.co.in/uploads/sports/1747398390martial-arts.png" alt="Martial Arts">
                            </div>
                            <h3> Martial Arts</h3>
                            <p>Martial arts at TGSS instill discipline, confidence, and strength.</p>
                        </div>

                        
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include('include/footer.php'); ?>