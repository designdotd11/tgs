 <!-- start header -->

 <?php $this->load->view('web/include/header-home')?>




 <!--Right Side Buttons Start-->

 <div class="sticky-social">
     <ul class="social">
         <li class="text-apply1"><a href="<?= base_url('admission-enquiry')?>" title="Online Registration "><i class="fas fa-pencil-alt" style="font-size:13px;"></i>
                 &nbsp; Online Enquiry </a></li>
         <li class="linkdin"><a href="tel:7090031100" title="Click to call"> <i class="fas fa-phone" style="transform: rotate(134deg);"></i></a></li>
         <li class="vim"><a target="_blank" title="Whtasapp" href="https://api.whatsapp.com/send?phone=917090031100&amp;text=Hello!"> <i class="fab fa-whatsapp"></i></a></li>
     </ul>
 </div>

 <!--Right Side Buttons End-->

 <!-- end header -->



 <!-- video  or baneer-->

 <section class="section" id="wrapper">
     <div class="cursor"> </div>
     <div class="cursor-follower"></div>
     <div class="container-fluid px-0 position-relative">
         <div class="swiper-container">
             <div class="swiper-wrapper">
                 <!-- First Slide -->
                 <?php foreach($sliders as $slider){?>
                 <div class="swiper-slide cursor-notify">
                     <a href="#" data-bs-toggle="modal" data-bs-target="#myModal" data-video-link="<?= $slider->video ?>">
                         <div class="video-section position-relative overflow-hidden">
                             <div class="overlay_video">
                                 <img src="<?= base_url('uploads/slider/').$slider->image?>" alt="<?= $slider->title?>" class="img-fluid">
                             </div>
                              
                             <div class="video-content-parent">
                               
                                 <div class="content-parent">
                                     <div class="slide-content">
                                          <div class="logo-slider mb-3">
                                                <img src="<?= base_url('assets/web')?>/images/logo.png" alt="Logo" class="logo-slider">
                                            </div>
                                         <h1 class="mb-0">TGS</h1>
                                         <h3 class="mb-0"><?= $slider->title?></h3>
                                         <p class="mb-0"> <?= $slider->short_description?></p>
                                     </div>
                                     <!-- <div class="play-icon" data-video="https://studioegretwest.com/assets/video/Studio.mp4">
                                     <div class="wave-animation"></div>
                                     <img src="<?= base_url('assets/web')?>/images/play-button.png" alt="paly">
                                 </div> -->


                                 </div>
                             </div>

                            

                             <!--<video class="video-player d-none" controls>-->
                             <!--    <source src="" type="video/mp4" />-->
                             <!--    Your browser does not support the video tag.-->
                             <!--</video>-->
                         </div>
                     </a>
                 </div>
                 <?php } ?>
                  
             </div>
             <div class="position-relative me-65 swipe-btn-mobile">
                 <div class="swiper-button-prev"></div>
                 <div class="swiper-button-next"></div>
             </div>
         </div>
         <?php if($announcement){?>
             <div class="announcement-box">
                 <div class="announcement-text">
                    <p class="mb-0"><span class="fw-medium">Announcements :</span>
                        <!--<a href="<?= $announcement->link?>" target="_blank">-->
                        <!--    <?= $announcement->title?>-->
                        <!--</a>-->
                        
                         <a href="<?= base_url('admission-enquiry')?>" target="_blank">
                            <?= $announcement->title?>
                        </a>
                    </p>
                    
                 </div>
             </div>
             <?php } ?>
     </div>

<!-- modal popup for slider video -->


<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-close">
                <button type="button" class="btn-close btn-close-popup" data-bs-dismiss="modal"><span style="margin-top:-5px;">&times;</span></button>
            </div>
            <div class="modal-body p-0">
                <div>
                     <!--<video class="video-player d-none" controls>-->
                     <!--        <source src="https://studioegretwest.com/assets/video/Studio.mp4" type="video/mp4" />-->
                     <!--        Your browser does not support the video tag.-->
                     <!--    </video>-->
                    <iframe id="youtubeVideo" width="100%" height="400px" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>




 </section>

 <section class="section">
     <div class="container-fluid px-0">
         <div class="position-relative">
             <div class="top-box">
                 <div class="top-card">
                    <a href="<?= base_url('curriculum')?>" class="text-decoration-none">
                        <div class="icon"><i class="fas fa-info"></i></div>
                     <p>FIND YOUR <br> CURRICULUM</p>
                    </a>
                 </div>
                 <div class="top-card top-card2">
                     <a href="<?= base_url('contact-us')?>" class="text-decoration-none">
                     <div class="icon b-red"><i class="fas fa-map-marker-alt"></i></div>
                     <p>SCHEDULE <br>A VISIT</p>
                     </a>
                 </div>
                 <div class="top-card top-card3">
                      <a href="<?= base_url('admission-enquiry')?>" class="text-decoration-none">
                     <div class="icon b-blue"> <i class="fas fa-pen-nib"></i></div>
                     <p>APPLY <br> TODAY</p>
                     </a>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <section class="py-80 section">
     <div class="container-fluid px-0">
         <div class="row side-space">
             <div class="col-md-12">
                 <p class="sub-heading-para">In addition to these fundamental qualities, we envision The Good Shepherd’s as a nurturing ground for holistic development, where students are equipped with essential life skills such as innovation and creativity, community engagement, ethical integrity, global awareness, communication skills, resilience and adaptability, and critical thinking and problem-solving.</p>
             </div>
         </div>

         <div class="additional-information row px-0 mt-3 justify-content-center">
             <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 px-0">
                 <div class="addition-card ">
                     <img src="<?= base_url('assets/web')?>/images/1.png" alt="Leadership">
                     <div class="addiont-content">
                         <h2 style="color: #333;">LEADERSHIP</h2>
                     </div>
                    
                         <div class="overlay">
                         <div class="description">
                             <p>Guiding Vision and Future Aspirations: Our vision is rooted in the belief that every leader should have...</p>
                             <a href="#" class="read-more" data-bs-toggle="modal" data-bs-target="#leadership">Read More &#8594;</a>
                         </div>
                    
                     </div>
                 </div>
             </div>
             <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 px-0">
                 <div class="addition-card ">
                     <img src="<?= base_url('assets/web')?>/images/2.png" alt="Ethics">
                     <div class="addiont-content">
                         <h2>ETHICS</h2>
                     </div>
                     <div class="overlay">
                         <div class="description">
                             <p>Ethical Leadership and Action-Oriented Approach: We value the importance of clear boundaries as...</p>
                             <a href="#" class="read-more" data-bs-toggle="modal" data-bs-target="#ethics">Read More &#8594;</a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 px-0">
                 <div class="addition-card ">
                     <img src="<?= base_url('assets/web')?>/images/3.png" alt="Trust">
                     <div class="addiont-content">
                         <h2>TRUST</h2>
                     </div>
                     <div class="overlay">

                         <div class="description">
                             <p>Trust-Based Relationships and Community Building: Trust, the cornerstone of meaningful...</p>
                             <a href="#" class="read-more" data-bs-toggle="modal" data-bs-target="#trust">Read More &#8594;</a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 px-0">
                 <div class="addition-card ">
                     <img src="<?= base_url('assets/web')?>/images/4.png" alt="Growth">
                     <div class="addiont-content">
                         <h2>GROWTH</h2>
                     </div>
                     <div class="overlay">

                         <div class="description">
                             <p>Growth-Focused Leadership and Selfless Provision: Within the heart of The Good Shepherd’s lies the...</p>
                             <a href="#" class="read-more" data-bs-toggle="modal" data-bs-target="#growth">Read More &#8594;</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

     </div>
 </section>



 <!-- about us -->
 <section class="pb-80 section" id="about-us">
     <h3 class="legacy-title text-center text-dark">Toil &amp; Perseverance - <span class="text-blue">Since 1995</span></h3>
     <div class="about-us side-space">
         <div class="about-content">
             <p>The Good Shepherd’s (TGS) is a private, minority, co-educational school, Kindergarten onwards dedicated to the intellectual and personal growth of every child.</p>
             <p class="mb-0">
                 TGS instills in its students intellectual enthusiasm, leadership, and an appreciation of discovery. We encourage students to focus on achievement with a willingness to explore varied paths to reach their goals. Because the
                 TGS community revels in scholarly, athletic, and artistic adventure, day-to-day life at The Good Shepherd’s is filled with the joy of learning and doing, both for students and for faculty.
             </p>
         </div>
     </div>
 </section>

 <!-- end about us -->

 <!-- legacy -->

 <section class="pb-80 section">
     <div class="">

         <div class="legacy-title-container">
             <h3 class="legacy-title text-center text-white">OUR INSTITUTIONS</h3>
             <div class="border-b"></div>
         </div>
         <div class="legacy-logo-container position-relative">
             <div class="our-legacy" style="background-image: url('<?= base_url('assets/web')?>/images/stthomas.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 947px; width: 100%;">
                 <div class="overlay-legacy"></div>
                 <div class="legacy-logo">
                     <div class="legacy-item">
                         <img src="<?= base_url('assets/web')?>/images/st.png" alt="ST. THOMAS SCHOOL" loading="lazy" width="350" height="0" decoding="async" data-nimg="1" class="img-fluid" style="color: transparent;" />
                         <div class="mt-2">
                             <p>
                                 St. Thomas School, established in 1995, is a private, minority, co-educational institution which aimed at, and successfully bridged the urban-rural divide that is very much a part of our Indian society. The success
                                 rate of the students in the Secondary School Examination and Senior School Certificate Examination each year is a public statement about the school's commitment to education.
                             </p>
                             <a class="mt-5 read-more-2 text-decoration-none" target="_blank" href="http://stthomasschool.in/">
                                 View Website <i class="fas fa-caret-right text-white"></i>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="our-legacy" style="background-image: url('<?= base_url('assets/web')?>/images/trinity.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 947px; width: 100%;">
                 <div class="overlay-legacy-right"></div>
                 <div class="legacy-logo">
                     <div class="legacy-item">
                         <img src="<?= base_url('assets/web')?>/images/trinity.png" alt="TRINITY SCHOOL" loading="lazy" width="350" height="0" decoding="async" data-nimg="1" class="img-fluid" style="color: transparent;" />
                         <div class="mt-2">
                             <p>
                                 Trinity School is a private, minority, co-educational school which aims to be a centre for inspired teaching and learning to provide quality education to every child. The school is located at Sec 3, 3A &amp; 14,
                                 Omaxe City (Jhajjar Road) in Bahadurgarh. The school aspires to provide a positive and holistic environment to students so that they excel in life as well as in their domain of choice. The school is affiliated to the
                                 CBSE [ Affiliation No. 532003 ; School No. 42008 ] upto Senior Secondary {Class XII}. The school for the session 2023-24 currently caters to students upto Class VIII.
                             </p>
                             <a class="mt-5 read-more-2 text-decoration-none" target="_blank" href="https://www.trinityschool.in/">
                                 View Website <i class="fas fa-caret-right text-white"></i>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>

 </section>

 <!-- end legacy -->

 <!-- achievement -->

 <section class="pb-80 section">
     <div class="side-space">
         <div class="achievement-box">
             <div class="our-value-item blue-shade-1">
                 <div class="achievement-icon"><img alt="Software and Services," class="img-fluid" style="color: transparent;" src="<?= base_url('assets/web')?>/images/icon//black-graduation.png" /></div>
                 <div class="mt-3 text-center">
                     <h3 class="mb-3">29+</h3>
                     <p class="height-60 trim-last-word mb-1">Years</p>
                 </div>
             </div>
             <div class="our-value-item blue-shade-1">
                 <div class="achievement-icon"><img alt="Software and Services," class="img-fluid" style="color: transparent;" src="<?= base_url('assets/web')?>/images/icon//globe.png" /></div>
                 <div class="mt-3 text-center">
                     <h3 class="mb-3">5000+</h3>
                     <p class="height-60 trim-last-word mb-1">Alumni</p>
                 </div>
             </div>
             <div class="our-value-item blue-shade-1">
                 <div class="achievement-icon"><img alt="Software and Services," class="img-fluid" style="color: transparent;" src="<?= base_url('assets/web')?>/images/icon//enroll.png" /></div>
                 <div class="mt-3 text-center">
                     <h3 class="mb-3">2500+</h3>
                     <p class="height-60 trim-last-word mb-1">Enrolled Students</p>
                 </div>
             </div>
             <div class="our-value-item blue-shade-1">
                 <div class="achievement-icon"><img alt="Software and Services," class="img-fluid" style="color: transparent;" src="<?= base_url('assets/web')?>/images/icon//course.png" /></div>
                 <div class="mt-3 text-center">
                     <h3 class="mb-3">125+</h3>
                     <p class="height-60 trim-last-word mb-1">Faculty</p>
                 </div>
             </div>
             <div class="our-value-item blue-shade-1">
                 <div class="achievement-icon"><img alt="Software and Services," class="img-fluid" style="color: transparent;" src="<?= base_url('assets/web')?>/images/icon//competition.png" /></div>
                 <div class="mt-3 text-center">
                     <h3 class="mb-3">3+</h3>
                     <p class="height-60 trim-last-word mb-1">All India CBSE Rank Holder’s</p>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- school -->

 <section class="pb-80 pt-80 section" style="background: #4e6626;">
     <h3 class="legacy-title text-center text-white">Scholastic Programme</h3>
     <div class="school side-padding">
         <div class="school-content">
             <p>
                 The Good Shepherd’s cultivates in its students a broad general understanding of the foundational disciplines of humane learning and fosters a capacity for effective critical inquiry and authentic self-expression. Our core
                 curriculum consists of comprehensive, traditional course sequences in Mathematics, Science, Language and Social Sciences complemented by courses in the Arts , Music, Dance, Computer Science &amp; Robotics, Guidance, and
                 Physical Education.
             </p>
         </div>
         <div class="side-space mt-5">
             <div class="swiper-container-school overflow-hidden">
                 <div class="swiper-wrapper">
                     <div class="swiper-slide">
                         <div>
                             <div class="flip-box ">
                                 <div class="flip-box-inner">
                                     <div class="flip-box-front">
                                         <img alt="Foundational stage" loading="lazy" width="368" height="557" decoding="async" data-nimg="1" style="color: transparent; width: 100%; height: 100%;" src="<?= base_url('assets/web')?>/images/school/school-1.jpg" />
                                     </div>
                                     <div class="flip-box-back">
                                         <h3>Foundational stage</h3>
                                         <p class="mb-1 text-center"><b>Ages : 3 to 8</b></p>
                                         <p class="text-center"><b>Classes : Pre-school, Class 1, Class 2</b></p>
                                         <p class="text-justify">
                                             The foundational stage of education as per the national education policy will comprise 3 years or preschool ( M1/M2/M3 ) followed by two years of primary classes (Grade 1 and 2).This
                                             stage will focus on teaching in play-based or activity-based methods and on the development of language skills.
                                         </p>
                                     </div>
                                 </div>
                             </div>
                             <div class="flip-deatils mt-2 text-center">
                                 <h3 class="mb-1">Foundational stage</h3>
                                 <p class="mb-1"><b>Ages : 3 to 8</b></p>
                                 <p class="mb-1"><b>Classes : Pre-school, Class 1, Class 2</b></p>
                             </div>
                         </div>
                     </div>
                     <div class="swiper-slide">
                         <div>
                             <div class="flip-box ">
                                 <div class="flip-box-inner">
                                     <div class="flip-box-front">
                                         <img alt="Preparatory Primary stage" loading="lazy" width="368" height="557" decoding="async" data-nimg="1" style="color: transparent; width: 100%; height: 100%;" src="<?= base_url('assets/web')?>/images/school/school-2.jpg" />
                                     </div>
                                     <div class="flip-box-back">
                                         <h3>Preparatory Primary stage</h3>
                                         <p class="mb-1 text-center"><b>Ages : 8 to 11</b></p>
                                         <p class="text-center"><b>Classes : 3 to 5</b></p>
                                         <p class="text-justify">
                                             The focus in the preparatory Primary stage will remain on language development and numeracy skills. Here, the method of teaching and learning would be play and activity-based, and also
                                             include classroom interactions and the element of discovery.
                                         </p>
                                     </div>
                                 </div>
                             </div>
                             <div class="flip-deatils mt-2 text-center">
                                 <h3 class="mb-1">Preparatory Primary stage</h3>
                                 <p class="mb-1"><b>Ages : 8 to 11</b></p>
                                 <p class="mb-1"><b>Classes : 3 to 5</b></p>
                             </div>
                         </div>
                     </div>
                     <div class="swiper-slide">
                         <div>
                             <div class="flip-box ">
                                 <div class="flip-box-inner">
                                     <div class="flip-box-front">
                                         <img alt="Middle stage" loading="lazy" width="368" height="557" decoding="async" data-nimg="1" style="color: transparent; width: 100%; height: 100%;" src="<?= base_url('assets/web')?>/images/school/school-3.jpg" />
                                     </div>
                                     <div class="flip-box-back">
                                         <h3>Middle stage</h3>
                                         <p class="mb-1 text-center"><b>Ages : 11 to 14</b></p>
                                         <p class="text-center"><b>Classes : 6 to 8</b></p>
                                         <p class="text-justify">
                                             This stage of school education will focus on critical learning objectives, on experiential learning in the sciences, mathematics, arts, social sciences and humanities.
                                         </p>
                                     </div>
                                 </div>
                             </div>
                             <div class="flip-deatils mt-2 text-center">
                                 <h3 class="mb-1">Middle stage</h3>
                                 <p class="mb-1"><b>Ages : 11 to 14</b></p>
                                 <p class="mb-1"><b>Classes : 6 to 8</b></p>
                             </div>
                         </div>
                     </div>
                     <!--<div class="swiper-slide">-->
                     <!--    <div>-->
                     <!--        <div class="flip-box ">-->
                     <!--            <div class="flip-box-inner">-->
                     <!--                <div class="flip-box-front">-->
                     <!--                    <img alt="Secondary stage" loading="lazy" width="368" height="557" decoding="async" data-nimg="1" style="color: transparent; width: 100%; height: 100%;" src="<?= base_url('assets/web')?>/images/school/school-4.jpg" />-->
                     <!--                </div>-->
                     <!--                <div class="flip-box-back">-->
                     <!--                    <h3>Secondary stage</h3>-->
                     <!--                    <p class="mb-1 text-center"><b>Ages : 14 to 16</b></p>-->
                     <!--                    <p class="text-center"><b>Classes : 9 to 10</b></p>-->
                     <!--                    <p class="text-justify">-->
                     <!--                        This stage will cover two phases classes 9 and 10, and classes 11 and 12. This is a multidisciplinary system where students will have access to a variety of subject combinations that-->
                     <!--                        they can choose as per their skills and interest areas. This stage will again push for greater critical thinking and flexibility in the thought process.-->
                     <!--                    </p>-->
                     <!--                </div>-->
                     <!--            </div>-->
                     <!--        </div>-->
                     <!--        <div class="flip-deatils mt-2 text-center">-->
                     <!--            <h3 class="mb-1">Secondary stage</h3>-->
                     <!--            <p class="mb-1"><b>Ages : 14 to 16</b></p>-->
                     <!--            <p class="mb-1"><b>Classes : 9 to 10</b></p>-->
                     <!--        </div>-->
                     <!--    </div>-->
                     <!--</div>-->
                     <div class="swiper-slide">
                         <div>
                             <div class="flip-box ">
                                 <div class="flip-box-inner">
                                     <div class="flip-box-front">
                                         <img alt="Senior Secondary stage" loading="lazy" width="368" height="557" decoding="async" data-nimg="1" style="color: transparent; width: 100%; height: 100%;" src="<?= base_url('assets/web')?>/images/school/school-5.jpg" />
                                     </div>
                                     <div class="flip-box-back">
                                         <h3>Secondary / Senior Secondary Stage</h3>
                                         <p class="mb-1 text-center"><b>Ages : 14 to 18</b></p>
                                         <p class="text-center"><b>Classes : 9 to 12</b></p>
                                         <p class="text-justify">
                                             This stage will cover two phases classes 9 and 10, and classes 11 and 12. This is a multidisciplinary system where students will have access to a variety of subject combinations that
                                             they can choose as per their skills and interest areas. This stage will again push for greater critical thinking and flexibility in the thought process.
                                         </p>
                                     </div>
                                 </div>
                             </div>
                             <div class="flip-deatils mt-2 text-center">
                                 <h3 class="mb-1">Senior Secondary stage</h3>
                                 <p class="mb-1"><b>Ages : 14 to 18</b></p>
                                 <p class="mb-1"><b>Classes : 9 to 12</b></p>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- Add Arrows -->
                 <div class="position-relative">
                     <div class="custom-next"></div>
                     <div class="custom-prev"></div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- facilites -->

 <section class="pb-80 pt-80 side-space section" style="background:#36454F;">
     <div class="row">
         <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 ">
             <div class="facilities-content">
                 <h3 class="mb-3">TGS Campus & Facilities in a Glance</h3>
                 <p class="mb-2">The Good Shepherd’s is an ideal setting for learning: a diverse community knit together by its physical environment as well as by its commitment to the highest standards of excellence, integrity, free expression and inquiry. The school sprawls over a nearly four acre campus nestled on the outskirts of Bengaluru.</p>
                 <p class="mb-0"> A 4 Acre Serene Campus, Spacious Ventilated Class Rooms, Laboratories, Library, Ergonomic Furniture, Multipurpose Court, Play Spaces & Grounds, Learning Spaces, Open Air Amphitheatre, Arts & Music, Medical Facility, ERP, ICT, School Conveyance etc.</p>
                 
             </div>
         </div>

         <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12 ">
             <div class="facilites-list">
                 <div class="facilities-box">
                     <div class="facilities-icon">
                         <img src="<?= base_url('assets/web')?>/images//campus/campus.png" alt="icon" class="img-fluid">
                     </div>
                     <h4 class="pt-3 mb-0">A Serene Campus</h4>
                 </div>
                 <div class="facilities-box">
                     <div class="facilities-icon">
                         <img src="<?= base_url('assets/web')?>/images//campus/ac.png" alt="icon" class="img-fluid">
                     </div>
                     <h4 class="pt-3 mb-0">Spacious Ventilated Class Rooms</h4>
                 </div>

                 <div class="facilities-box">
                     <div class="facilities-icon">
                         <img src="<?= base_url('assets/web')?>/images//campus/laboratory.png" alt="icon" class="img-fluid">
                     </div>
                     <h4 class="pt-3 mb-0">Laboratories</h4>
                 </div>

                 <div class="facilities-box">
                     <div class="facilities-icon">
                         <img src="<?= base_url('assets/web')?>/images//campus/open-book.png" alt="icon" class="img-fluid">
                     </div>
                     <h4 class="pt-3 mb-0">Library</h4>
                 </div>

                 <div class="facilities-box">
                     <div class="facilities-icon">
                         <img src="<?= base_url('assets/web')?>/images//campus/workspace.png" alt="icon" class="img-fluid">
                     </div>
                     <h4 class="pt-3 mb-0">Ergonomic Furniture</h4>
                 </div>

                 <div class="facilities-box">
                     <div class="facilities-icon">
                         <img src="<?= base_url('assets/web')?>/images//campus/court.png" alt="icon" class="img-fluid">
                     </div>
                     <h4 class="pt-3 mb-0">Multipurpose Court</h4>
                 </div>
                 <div class="facilities-box">
                     <div class="facilities-icon">
                         <img src="<?= base_url('assets/web')?>/images//campus/playground.png" alt="icon" class="img-fluid">
                     </div>
                     <h4 class="pt-3 mb-0">Play Spaces & Grounds</h4>
                 </div>
                 <div class="facilities-box">
                     <div class="facilities-icon">
                         <img src="<?= base_url('assets/web')?>/images//campus/hospital-facility.png" alt="icon" class="img-fluid">
                     </div>
                     <h4 class="pt-3 mb-0">Medical Facility</h4>
                 </div>
                 <div class="facilities-box">
                     <div class="facilities-icon">
                         <img src="<?= base_url('assets/web')?>/images//campus/erp.png" alt="icon" class="img-fluid">
                     </div>
                     <h4 class="pt-3 mb-0">ERP</h4>
                 </div>
                 <div class="facilities-box">
                     <div class="facilities-icon">
                         <img src="<?= base_url('assets/web')?>/images//campus/ict.png" alt="icon" class="img-fluid">
                     </div>
                     <h4 class="pt-3 mb-0">ICT</h4>
                 </div>
                 <div class="facilities-box">
                     <div class="facilities-icon">
                         <img src="<?= base_url('assets/web')?>/images//campus/ampi.png" alt="icon" class="img-fluid">
                     </div>
                     <h4 class="pt-3 mb-0">Open Air Amphitheatre</h4>
                 </div>
                 <div class="facilities-box">
                     <div class="facilities-icon">
                         <img src="<?= base_url('assets/web')?>/images//campus/music.png" alt="icon" class="img-fluid">
                     </div>
                     <h4 class="pt-3 mb-0">Arts & Music</h4>
                 </div>
                 <div class="facilities-box">
                     <div class="facilities-icon">
                         <img src="<?= base_url('assets/web')?>/images//campus/ai.png" alt="icon" class="img-fluid">
                     </div>
                     <h4 class="pt-3 mb-0">AI & Robotics</h4>
                 </div>
                 <div class="facilities-box">
                     <div class="facilities-icon">
                         <img src="<?= base_url('assets/web')?>/images//campus/cctv.png" alt="icon" class="img-fluid">
                     </div>
                     <h4 class="pt-3 mb-0">CCTV</h4>
                 </div>
                 <div class="facilities-box">
                     <div class="facilities-icon">
                         <img src="<?= base_url('assets/web')?>/images//campus/front-of-bus.png" alt="icon" class="img-fluid">
                     </div>
                     <h4 class="pt-3 mb-0">School Conveyance</h4>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- news and event  -->

 <section class="pb-80 pt-80 side-space section">
     <div class="row">
         <div class="col-xl-7 col-lg-6 col-md-12 col-sm-12 ">
             <div class="news-event-box">
                 <h3 class="legacy-title text-dark">NEWS & EVENTS</h3>
                 <div class="border-b-3 mb-3"></div>

                 <div class="news-event">
                     <div class="swiper-container-news overflow-hidden">
                         <div class="swiper-wrapper">
                            <?php foreach($news as $nw){?>
                             <div class="swiper-slide">
                                 <div class="news-event-card position-relative ">
                                     <div class="edgt-events-list-item-date-holder">
                                         <div class="edgt-events-list-item-date-inner">
                                             <h3 class="edgt-events-list-item-date-day"><?= date('d', strtotime($nw->added_date))?></h3>
                                             <h5 class="edgt-events-list-item-date-month"><?= date('M', strtotime($nw->added_date))?></h5>
                                         </div>
                                     </div>
                                     <div class="news-img">
                                         <img src="<?= base_url('uploads/news/thumbnail/').$nw->thumbnail?>" class="img-fluid" alt="<?= $nw->title?>">
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
                                             <a href="<?= base_url('news-details/').$nw->slug?>"  class="read-more-1 text-decoration-none">Read More <i class="fas fa-caret-right" style="color:#333;"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>

                             <?php } ?>

                         </div>
                         <!-- Add more swiper slides as needed -->
                     </div>


                     <!-- <div class="position-relative">
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div> -->
                 </div>

             </div>
         </div>

         <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 ">
             <div class="calendar-box ps-lg-5">
                 <h3 class="legacy-title text-dark">CALENDAR</h3>
                 <div class="border-b-3 mb-3"></div>


                 <div class="calendar-list">
                    <?php foreach($calendars as $cl){?>
                     <div class="stm-event stm-event_view_grid mb-4">
                         <div class="stm-event__body">
                             <div class="stm-event__left">
                                 <div class="stm-event__date">
                                     <div class="stm-event__date-day"><?= date('d', strtotime($cl->added_date))?></div>
                                     <div class="stm-event__date-month"><?= date('F', strtotime($cl->added_date))?></div>
                                 </div>
                             </div>
                             <div class="stm-event__content">
                                 <h5 class="stm-event__title">
                                     <a href="https://smartyschool.stylemixthemes.com/university/meeting/the-global-politics-of-lgbtq-debating-international-perspectives/"><?= $cl->title?></a>
                                 </h5>
                                 <p><?= $cl->description?></p>
                             </div>
                         </div>
                     </div>
                    <?php } ?>
                 </div>
             </div>
         </div>
    </div>
 </section>


 <section class="bg-sky-blue pt-80 pb-80 section">
     <div class="about-us side-space">
         <div class="text-center pb-4">
             <img src="<?= base_url('assets/web')?>/images/education-bag-learning.svg" class="img-fluid" style="width:135px;" />
         </div>
         <div class="schedul-content">
             <p class="mb-0">
                 In developing leaders for tomorrow, TGS is mindful of the fact that it exists because of the generosity of its founders and seeks to build upon that same spirit of philanthropy today. From current students, to faculty and
                 staff, to parents and alumni, the TGS community instills the importance of giving back.
             </p>
             <p class="mb-0">To sponsor the education of a child or to make a gift, please contact us at <a class="text-decoration-underline text-white" href="mailto:iSupport@tgss.in">iSupport@tgss.in</a></p>
             <div class="text-center mt-5">
                 <p>Want to know more about TGS? Have more specific queries?</p>
                 <p class="mt-4 mb-3 fw-medium">For enquiry please contact : <a class="text-white text-decoration-none" href="tel:7090031100">7090031100</a></p>
                 <a href="<?= base_url('admission-enquiry')?>" class="box-info-btn mt-4"><span>SCHEDULE YOUR VISIT</span> <i class="fas fa-arrow-right"></i></a>
             </div>
         </div>
     </div>
 </section>

 <!-- contct info -->

 <section id="contact-us" class="loaction-section justify-content-center align-items-center  section" style="background-image: url(<?= base_url('assets/web')?>/images/banner.webp);">
     <div class="side-space">
         <div class="row justify-content-center">
             <div class="col-lg-6 col-md-6 col-sm-12">
                 <div class="location">
                     <div class="icon1"><img alt="icon" loading="lazy" width="115" height="115" decoding="async" data-nimg="1" style="color: transparent; height: auto;" src="<?= base_url('assets/web')?>/images/map.png" /></div>
                     <div class="location-content">
                         <h3>The Good Shepherd's School</h3>
                         <p>
                             Survey No 86/1, Baiyappanahalli Village,<br />
                             Bidarahalli Hobli, Bengaluru 560049 <br />
                             Karnataka, INDIA<br />
                             <a class="text-decoration-underline text-white" href="mailto:mail@tgss.in"> mail@tgss.in</a>
                         </p>
                         <div class="text-center mt-5"><a class="btn btn-tranparent" target="_blank" href="https://maps.app.goo.gl/NwmmcrTWdd6RBBAA9">VIEW GOOGLE MAP</a></div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-6 col-md-6 col-sm-12">
                 <div class="location">
                     <div class="icon1"><img alt="icon" loading="lazy" width="115" height="99" decoding="async" data-nimg="1" style="color: transparent; height: auto;" src="<?= base_url('assets/web')?>/images/job.png" /></div>
                     <div class="location-content">
                         <p class="" style="margin-top: 30px;">
                             Are you ready to elevate your <br />
                             career to new heights at TGS?
                         </p>
                         <p class="visibility-hidden">
                             Are you ready to elevate your <br />
                             career to new heights at TGS? Are you ready to elevate your mail@
                         </p>
                         <div class="mt-5 m-auto text-center">
                           
                               <a class="btn btn-tranparent" href="<?= base_url('career')?>">SUBMIT YOUR RESUME</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>


 <!-- modal popup for banner -->
 <?php if($popup){?>
 <div class="modal fade" id="banner">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-transparent border-0">

            <div class="modal-close">
                <button type="button" class="btn-close btn-close-popup" data-bs-dismiss="modal"><span style="margin-top:-5px;">&times;</span></button>
            </div>


            <div class="modal-body p-0">
                <a href="<?= $popup->link?>" target="_blank">
                    <img src="<?= base_url('uploads/popup/').$popup->banner?>" alt="<?= $popup->title?>" class="img-fluid" style="border: 2px solid  #fff;">
                </a>
            </div>
        </div>
    </div>
</div>
<?php } ?>



<!-- leader ship -->

<div class="modal fade" id="leadership">
    <div class="modal-dialog">
        <div class="modal-content bg-transparent border-0">
            <!-- Modal Header -->
            <div class="modal-close">
                <button type="button" class="btn-close btn-close-popup" data-bs-dismiss="modal"><span style="margin-top:-5px;">&times;</span></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body p-4" style="background-color: #fff;">
                <div class="modal-para">
                    <h3>Leadership</h3>
                    <div class="blue-line"></div>
                    <p class="mb-0 mt-3"> Guiding Vision and Future Aspirations: Our vision is rooted in the belief that every leader should have a clear,
                        purpose-driven vision for the future. This vision serves as a guiding star, propelling us forward into
                        a promising future, fueled by hard work and perseverance.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ethic -->

<div class="modal fade" id="ethics" tabindex="-1" aria-labelledby="leadershipModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-transparent border-0">
            <!-- Modal Header -->
            <div class="modal-close">
                <button type="button" class="btn-close btn-close-popup" data-bs-dismiss="modal"><span style="margin-top:-5px;">&times;</span></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body p-4" style="background-color: #fff;">
                <div class="modal-para">
                    <h3>Ethics</h3>
                    <div class="blue-line"></div>
                    <p class="mb-0 mt-3"> Ethical Leadership and Action-Oriented Approach: We value the importance of clear boundaries as the foundation of exceptional leadership. These boundaries foster an environment where ethical, moral, and personal growth can flourish. Leaders at The Good Shepherd’s are pathfinders, illuminating the way through remarkable actions. We believe in leadership that speaks volumes not only through eloquent words but also through actions that embody our core values.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- growth -->

<div class="modal fade" id="growth">
    <div class="modal-dialog">
        <div class="modal-content bg-transparent border-0">
            <!-- Modal Header -->
            <div class="modal-close">
                <button type="button" class="btn-close btn-close-popup" data-bs-dismiss="modal"><span style="margin-top:-5px;">&times;</span></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body p-4" style="background-color: #fff;">
                <div class="modal-para">
                    <h3>Growth</h3>
                    <div class="blue-line"></div>
                    <p class="mb-0 mt-3"> Growth-Focused Leadership and Selfless Provision: Within the heart of The Good Shepherd’s lies the cherished art of selfless provision—a quality revered among our leaders. Much like a guide providing for the needs of their group, our leaders prioritize the genuine needs of those they lead. This exemplifies our commitment to prioritize well-being over profit margins, fueled by unswerving dedication and enduring perseverance. Sacrifice, an indelible mark of true leadership, finds its true essence within our community. Our leaders wholeheartedly embrace the spirit of toil and perseverance, acknowledging that authentic leadership propels collective progress and shared triumph.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- trust -->

<div class="modal fade" id="trust">
    <div class="modal-dialog">
        <div class="modal-content bg-transparent border-0">
            <!-- Modal Header -->
            <div class="modal-close">
                <button type="button" class="btn-close btn-close-popup" data-bs-dismiss="modal"><span style="margin-top:-5px;">&times;</span></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body p-4 position-realtive" style="background-color: #fff;">
                <div class="modal-para">
                    <h3>Trust</h3>
                    <div class="blue-line"></div>
                    <p class="mb-0 mt-3">Trust-Based Relationships and Community Building: Trust, the cornerstone of meaningful relationships, is carefully nurtured within the hallowed halls of The Good Shepherd’s. Here, we aspire to cultivate leaders who place trust at the forefront, fostering genuine connections that resonate with unwavering care and authenticity, fortifying the very essence of trust within our vibrant community.</p>
                </div>
                <div class="circle"></div>
            </div>
        </div>
    </div>
</div>

 <!-- start footer -->
 <?php $this->load->view('web/include/footer')?>
 <!-- end footer -->


 <script>
    //  var cursor = $(".cursor"),
    //      follower = $(".cursor-follower");

    //  var posX = 0,
    //      posY = 0,
    //      mouseX = 0,
    //      mouseY = 0;

    //  TweenMax.to({}, 0.016, {
    //      repeat: -1,
    //      onRepeat: function() {
    //          posX += (mouseX - posX) / 9;
    //          posY += (mouseY - posY) / 9;

    //          TweenMax.set(follower, {
    //              css: {
    //                  left: posX - 20,
    //                  top: posY - 20
    //              }
    //          });

    //          TweenMax.set(cursor, {
    //              css: {
    //                  left: mouseX,
    //                  top: mouseY
    //              }
    //          });
    //      }
    //  });

    //  $(document).on("mousemove", function(e) {
    //      mouseX = e.pageX;
    //      mouseY = e.pageY;
    //  });

    //  $(".overlay_video").on("mouseenter", function() {
    //      cursor.addClass("active");
    //      follower.addClass("active");
    //  });

    //  $(".overlay_video").on("mouseleave", function() {
    //      cursor.removeClass("active");
    //      follower.removeClass("active");
    //  });
    
    $(document).ready(function () {
        var cursor = $(".cursor"),
            follower = $(".cursor-follower"),
            posX = 0,
            posY = 0,
            mouseX = 0,
            mouseY = 0;

        // Mouse move event to track cursor position
        $(document).on("mousemove", function (e) {
            mouseX = e.pageX;
            mouseY = e.pageY;
        });

        // Smooth cursor movement
        setInterval(function () {
            posX += (mouseX - posX) / 9;
            posY += (mouseY - posY) / 9;

            cursor.css({
                left: posX,
                top: posY
            });
            follower.css({
                left: posX - 15, // Center follower behind cursor
                top: posY + 10 // Position it below the cursor
            });
        }, 16);

        // Show cursor only when hovering over the slider
        $(".cursor-notify").on("mouseenter", function () {
            cursor.css("display", "block"); // Show cursor
            follower.css("display", "block"); // Show follower
        });

        $(".cursor-notify").on("mouseleave", function () {
            cursor.css("display", "none"); // Hide cursor
            follower.css("display", "none"); // Hide follower
        });

        // Initialize Swiper
        const swiper = new Swiper('.swiper-container', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
        });
    });
 </script>

 <script>
     // for slider
     var swiper = new Swiper('.swiper-container', {
         loop: false,
         pagination: {
             el: '.swiper-pagination',
             clickable: true,
         },
         navigation: {
             nextEl: '.swiper-button-next',
             prevEl: '.swiper-button-prev',
         },
         // autoplay: {
         //     delay: 5000,
         //     disableOnInteraction: false,
         // },
     });

     document.addEventListener("DOMContentLoaded", function() {
         var playIcons = document.querySelectorAll(".play-icon");

         playIcons.forEach(function(icon) {
             icon.addEventListener("click", function() {
                 var videoSrc = this.getAttribute("data-video");
                 var videoPlayer = this.parentElement.parentElement.parentElement.querySelector(".video-player");
                 videoPlayer.querySelector("source").src = videoSrc;
                 videoPlayer.load();
                 videoPlayer.classList.remove("d-none");
                 videoPlayer.play();

                 // Hide the overlay and play icon when video is playing
                 this.parentElement.parentElement.previousElementSibling.style.display = 'none';
                 this.style.display = 'none';
             });
         });

         // Hide video player and show overlay again when video ends
         var videoPlayers = document.querySelectorAll(".video-player");
         videoPlayers.forEach(function(videoPlayer) {
             videoPlayer.addEventListener('ended', function() {
                 videoPlayer.classList.add("d-none");
                 videoPlayer.closest(".video-section").querySelector(".overlay_video").style.display = 'block';
                 videoPlayer.closest(".video-section").querySelector(".play-icon").style.display = 'block';
             });
         });
     });


     //  for school

     document.addEventListener('DOMContentLoaded', function() {
         var swiper = new Swiper('.swiper-container-school', {
             slidesPerView: 4,
             spaceBetween: 20,
             navigation: {
                 nextEl: '.custom-next',
                 prevEl: '.custom-prev',
             },
             breakpoints: {
                 1600: {
                     slidesPerView: 4,
                     spaceBetween: 20
                 },

                 1300: {
                     slidesPerView: 4,
                     spaceBetween: 20
                 },

                 1250: {
                     slidesPerView: 3.5,
                     spaceBetween: 20
                 },
                 770: {
                     slidesPerView: 3,
                     spaceBetween: 20
                 },
                 700: {
                     slidesPerView: 2,
                     spaceBetween: 15
                 },
                 640: {
                     slidesPerView: 1.6,
                     spaceBetween: 15
                 },
                 450: {
                     slidesPerView: 1.3,
                     spaceBetween: 0
                 },
                 0: {
                     slidesPerView: 1,
                     spaceBetween: 0
                 }

             }
         });
     });
 </script>

 <!-- news letter -->

 <script>
     var swiper = new Swiper('.swiper-container-news', {
         slidesPerView: 1,
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
                 slidesPerView: 1.3,
                 spaceBetween: 20,
             },
             
            767: {
                 slidesPerView: 2,
                 spaceBetween: 20,
             },
             999: {
                 slidesPerView: 2,
                 spaceBetween: 20,
             },
             1299: {
                 slidesPerView: 2.2,
                 spaceBetween: 20,
             },
             1500: {
                 slidesPerView: 3,
                 spaceBetween: 20,
             },
         }
     });
 </script>

 <script>
     $(document).ready(function() {
         $('#banner').modal('show');
     });
 </script>
 
 <script>
     $(document).ready(function() {
        $('.swiper-slide a').on('click', function(e) {
            e.preventDefault(); // Prevent the default action
    
            var videoLink = $(this).data('video-link'); 
            var videoId = getYouTubeVideoId(videoLink); 
    
            if (videoId) {
                var embedUrl = 'https://www.youtube.com/embed/' + videoId;
    
                $('#youtubeVideo').attr('src', embedUrl);
    
                $('#myModal').modal('show');
            }
        });
    
        $('#myModal').on('hidden.bs.modal', function() {
            $('#youtubeVideo').attr('src', ''); 
        });
    
        function getYouTubeVideoId(url) {
            var regExp = /^.*(youtu.be\/|v\/|\/u\/\w\/|embed\/|watch\?v=|\&v=|v=)([^#\&\?]*).*/;
            var match = url.match(regExp);
    
            if (match && match[2].length == 11) {
                return match[2];
            } else {
                return null; 
            }
        }
    });
 </script>