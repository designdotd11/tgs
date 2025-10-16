<!--  header -->
 <?php $this->load->view('web/include/header-home')?>
<!--End  header -->

    <?php if($banner){
        $url = base_url('uploads/banner/').$banner->image;
    }else{
        $url = base_url('assets/web/images/Slide.jpg');
    } ?>


    <section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= $url?>');">
        <div class="breadcrum-overlay"></div>
        <div class="breadcrum-content">
            <h1 class="title-breadcrum">Facilities</h1>
            <p class="breadcrum-sub-text mt-2 mb-0"> 
             The Good Shepherd’s serene campus in Bengaluru offers
             spacious classrooms, advanced labs, play areas, and an open-air amphitheatre, creating an ideal learning environment.
             With facilities like arts, music, medical care, ICT, and school transportation, it supports holistic student growth
            </p>
        </div>
    </section>

    <section class="pt-80 pb-80">
    <div class="container-fluid side-space">
        <div class="row">
           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 m-auto">
              <div class="facilites-grid">
                        <div class="facilites-card" style="background: #d0e8ff;">
                            <div class="facilites-img">
                                <img src="<?= base_url('assets/web')?>/images/campus/campus.png" alt="icon" class="img-fluid">
                            </div>
                            <h3>A Serene Campus</h3>
                            <p>Our serene campus provides a peaceful and conducive environment for learning and personal growth.</p>
                        </div>
                        <div class="facilites-card" style="background: #d0e9ef;">
                            <div class="facilites-img">
                                <img src="<?= base_url('assets/web')?>/images/campus/ac.png" alt="icon" class="img-fluid">
                            </div>
                            <h3>Spacious Ventilated Class Rooms</h3>
                            <p>Enjoy learning in our spacious, well-ventilated classrooms designed to provide a comfortable study environment.</p>
                        </div>
                        <div class="facilites-card" style="background: #f8f1cf;">
                            <div class="facilites-img">
                                <img src="<?= base_url('assets/web')?>/images/campus/laboratory.png" alt="icon" class="img-fluid">
                            </div>
                            <h3>Laboratories</h3>
                            <p>Our state-of-the-art laboratories offer hands-on learning experiences in various scientific fields.</p>
                        </div>
                        <div class="facilites-card" style="background: #d0e9ef;">
                            <div class="facilites-img">
                                <img src="<?= base_url('assets/web')?>/images/campus/open-book.png" alt="icon" class="img-fluid">
                            </div>
                            <h3>Library</h3>
                            <p>Access a vast collection of books and digital resources in our well-equipped library.</p>
                        </div>
                        <div class="facilites-card" style="background: #f8f1cf;">
                            <div class="facilites-img">
                                <img src="<?= base_url('assets/web')?>/images/campus/workspace.png" alt="icon" class="img-fluid">
                            </div>
                            <h3>Ergonomic Furniture</h3>
                            <p>Our ergonomic furniture ensures students' comfort during long study sessions.</p>
                        </div>
                        <div class="facilites-card" style="background: #d0e8ff;">
                            <div class="facilites-img">
                                <img src="<?= base_url('assets/web')?>/images/campus/court.png" alt="icon" class="img-fluid">
                            </div>
                            <h3>Multipurpose Court</h3>
                            <p>Engage in various sports activities in our versatile multipurpose court.</p>
                        </div>
                        <div class="facilites-card" style="background: #f8f1cf;">
                            <div class="facilites-img">
                                <img src="<?= base_url('assets/web')?>/images/campus/playground.png" alt="icon" class="img-fluid">
                            </div>
                            <h3>Play Spaces & Grounds</h3>
                            <p>Our extensive play spaces and grounds support a variety of outdoor sports and activities.</p>
                        </div>
                        <div class="facilites-card" style="background: #d0e8ff;">
                            <div class="facilites-img">
                                <img src="<?= base_url('assets/web')?>/images/campus/hospital-facility.png" alt="icon" class="img-fluid">
                            </div>
                            <h3>Medical Facility</h3>
                            <p>We provide comprehensive medical facilities to ensure the health and safety of our students.</p>
                        </div>
                        <div class="facilites-card" style="background: #d0e9ef;">
                            <div class="facilites-img">
                                <img src="<?= base_url('assets/web')?>/images/campus/erp.png" alt="icon" class="img-fluid">
                            </div>
                            <h3>ERP</h3>
                            <p>Our ERP system streamlines administrative processes and enhances learning management.</p>
                        </div>
                        <div class="facilites-card" style="background: #d0e8ff;">
                            <div class="facilites-img">
                                <img src="<?= base_url('assets/web')?>/images/campus/ict.png" alt="icon" class="img-fluid">
                            </div>
                            <h3>ICT</h3>
                            <p>Our ICT facilities provide cutting-edge technology for enhanced learning experiences.</p>
                        </div>
                        <div class="facilites-card" style="background: #d0e9ef;">
                            <div class="facilites-img">
                                <img src="<?= base_url('assets/web')?>/images/campus/ampi.png" alt="icon" class="img-fluid">
                            </div>
                            <h3>Open Air Amphitheatre</h3>
                            <p>Our open-air amphitheatre is perfect for performances, events, and gatherings.</p>
                        </div>
                        <div class="facilites-card" style="background: #f8f1cf;">
                            <div class="facilites-img">
                                <img src="<?= base_url('assets/web')?>/images/campus/music.png" alt="icon" class="img-fluid">
                            </div>
                            <h3>Arts & Music</h3>
                            <p>Explore your creativity with our comprehensive arts and music programs.</p>
                        </div>
                        <div class="facilites-card" style="background: #d0e9ef;">
                            <div class="facilites-img">
                                <img src="<?= base_url('assets/web')?>/images/campus/ai.png" alt="icon" class="img-fluid">
                            </div>
                            <h3>AI & Robotics</h3>
                            <p>Get hands-on experience in AI and robotics with our specialized programs.</p>
                        </div>
                        <div class="facilites-card" style="background: #f8f1cf;">
                            <div class="facilites-img">
                                <img src="<?= base_url('assets/web')?>/images/campus/cctv.png" alt="icon" class="img-fluid">
                            </div>
                            <h3>CCTV</h3>
                            <p>Our campus is monitored by CCTV to ensure safety and security at all times.</p>
                        </div>
                        <div class="facilites-card" style="background: #d0e8ff;">
                            <div class="facilites-img">
                                <img src="<?= base_url('assets/web')?>/images/campus/front-of-bus.png" alt="icon" class="img-fluid">
                            </div>
                            <h3>School Conveyance</h3>
                            <p>We provide reliable school conveyance to ensure safe and convenient transportation for students.</p>
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