
 <?php $this->load->view('web/include/header-home')?>

    <!--FOR BANNER-->
    <?php if($banner){
        $url = base_url('uploads/banner/').$banner->image;
    }else{
        $url = base_url('assets/web/images/Slide.jpg');
    } ?>
    
    <section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= base_url('assets/web')?>/images/1About Us_The School.jpg');">
        <div class="breadcrum-overlay" style="background:#02020273"></div>
        <div class="breadcrum-content">
            <h1 class="title-breadcrum">Overview </h1>
            <p class="breadcrum-text mt-2 mb-0"><?= $school->short_description?></p>
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
                        <?= $school->description?>
                        
                        
                        <!--content start-->
                        
<!--                        <h2>The Good Shepherd’s School (TGSS)</h2>-->
<!--                        <h4 style="color:#5a4f4c;">Byappanahalli Village, Bidarahalli Hobli, Bengaluru</h4>-->
                        
                        
<!--                        <br/>-->
<!--                        <br/>-->
                        
<!--                        <h5>Overview</h5>-->
                        
<!--                        <p>-->
<!--                            The Good Shepherd’s (TGSS) is a private, minority, co-educational school, Kindergarten onwards dedicated to the intellectual and personal growth of every child.-->
<!--                        </p>-->
                        
<!--                        <p>-->
<!--                            TGSS instils in its students intellectual enthusiasm, leadership, and an appreciation of discovery. We encourage students to focus on achievement with a willingness to explore varied paths to reach their goals. Because the TGSS community revels in scholarly, athletic, and artistic adventure, day-to-day life at The Good Shepherd’s is filled with the joy of learning and doing, both for students and for faculty.-->
<!--                        </p>-->
                        
<!--                        <br/>-->
<!--                        <h5>Vision & Values</h5>-->
<!--                        <p>-->
<!--                            TGSS encourages students to pursue their goals through curiosity, discipline, and exploration. The school fosters a joyful and balanced life enriched with academics, sports, and arts, while promoting integrity, free expression, and inquiry.-->
<!--                        </p>-->
                        
                        
<!--                        <br/>-->
<!--                        <h5>Campus & Infrastructure</h5>-->
<!--                        <p>-->
<!--                            Located on a spacious four-acre campus near Bangalore’s Central Business District, TGSS blends old Bengaluru charm with modern facilities. The campus includes:-->
<!--                        </p>-->
<!--                        <ul>-->
<!--                        	<li>Digital classrooms with Hitachi Interactive Panels</li>-->
<!--                        	<li>Library, art, and music rooms</li>-->
<!--                        	<li>Indoor and outdoor play areas</li>-->
<!--                        	<li>Smart ERP system (School Canvas) for efficient school operations</li>-->
<!--                        	<li>GPS and CCTV-enabled school bus fleet</li>-->
<!--                        </ul>-->
                        
<!--                        <br/>-->
<!--                        <h5>Scholastic Programme</h5>-->
<!--                        <p>-->
<!--                            TGSS follows the <b>National Curriculum Framework (NCF) 2023 </b> aligned with the <b>National Education Policy (NEP) 2020</b>.The Good Shepherd’s cultivates in its students a broad general understanding of the foundational disciplines of humane learning and fosters a capacity for effective critical inquiry and authentic self-expression. Our core curriculum consists of comprehensive, traditional course sequences in Mathematics, Science, Language and Social Sciences complemented by courses in the Arts, Music, Dance, Computer Science & Robotics, Guidance, and Physical Education.-->
<!--                        </p>-->
                        
<!--                        <p>-->
<!--                            <ul>-->
<!--                            	<li>-->
<!--                            	    <b>Foundational Stage: </b>Ages 3–8 (M1–Class II)<br/>The foundational stage of education as per the national education policy will comprise 3 years or preschool ( M1/M2/M3) followed by two years of primary classes (Grade 1 and 2).This stage will focus on teaching in play-based or activity-based methods and on the development of language skills.-->
<!--                            	</li>-->
<!--                            	<li>-->
<!--                            	    <b>Preparatory Primary Stage</b>: Ages 8–11 (Classes III–V)<br/>-->
<!--The focus in the preparatory Primary stage will remain on language development and numeracy skills.Here, the method of teaching and learning would be play and activity-based and also include classroom Interactions and the element of discovery.-->

<!--                            	</li>-->
<!--                            	<li>-->
<!--                            	    <b>Middle Stage</b>: Ages: 11 to 14 (Classes: 6 to 8)<br/>-->
<!--This stage of school education will focus on critical learning objectives, on experiential learning in the sciences, mathematics, arts, social sciences and humanities.-->

<!--                            	</li>-->
<!--                            	<li>-->
<!--                            	    <b>Secondary Stage</b>: Ages: 14 to 16 (Classes: 9 to 10)<br/>-->
<!--This stage will cover two phases classes 9 and 10, and classes 11 and 12. This is a multidisciplinary system where students will have access to a variety of subject combinations that they can choose as per their skills and interest areas. This stage will again push for greater critical thinking and flexibility in the thought process.-->

<!--                            	</li>-->
<!--                            	<li>-->
<!--                            	    <b>Senior Secondary Stage</b>: Ages: 16 to 18 (Classes: 11 to 12) <br/>-->
<!--This stage will cover two phases classes 9 and 10, and classes 11 and 12. This is a multidisciplinary system where students will have access to a variety of subject combinations that they can choose as per their skills and interest areas. This stage will again push for greater critical thinking and flexibility in the thought process.-->

<!--                            	</li>-->
                            	
<!--                            </ul>-->
                            
<!--                            <b>Faculty & Community</b><br/>-->
<!--The school boasts well-qualified and committed educators and an administrative team focused on excellence and continuous improvement. Together with parents, TGSS ensures a nurturing space for every child.-->

<!--                        </p>-->
                        
<!--                        <br/>-->
<!--                        <h5>Connectivity</h5>-->
<!--                        <p>-->
<!--                            TGSS is strategically connected to key Bengaluru localities including K.R. Puram, Budigere Cross, Hennur, Horamavu, Whitefield, and Ramamurthy Nagar. It is within 20–30 minutes from townships like Prestige Tranquility, Sattva East Crest, Godrej Woodscapes, Brigade Buena Vista, and others.-->
<!--                        </p>-->
                        
                        
                        
                        
                        <!--content end -->
                        
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
        <?php $this->load->view('web/include/footer')?>




