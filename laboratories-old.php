 <?php $this->load->view('web/include/header-home')?>
<style>
    body {
    overflow-x: clip !important;
    width: 100%;
}
</style>

<?php if($banner){
    $url = base_url('uploads/banner/').$banner->image;
}else{
    $url = base_url('assets/web/images/Slide.jpg');
} ?>

 <section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url(<?= $url?>);">
     <div class="breadcrum-overlay"></div>
     <div class="breadcrum-content">
         <h1 class="title-breadcrum"> Laboratories </h1>
         <p class="breadcrum-sub-text mt-2 mb-0">
             At TGS, we believe in fostering a hands-on approach to learning.
             Our state-of-the-art laboratories provide students with the opportunity to engage in practical experiments,
             making learning both immersive and enjoyable. We are proud to offer fully equipped labs in various disciplines:
         </p>
     </div>
 </section>

    <section class="stack">
    <div class="stack__card side-space">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6 col-md-12">
                <div class="card-info">
                    <h3>Maths Lab </h3>
                    <p class="mt-3 mb-0">
                        The school’s state-of-the-art Physics, Biology, Chemistry, Composite, Coding, AI and Robotics Laboratories emphasise hands-on learning for students of Grade VI and above. 
                    </p>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 col-md-12">
                <div class="card-img ps-5">
                     <img src="<?= base_url('assets/web')?>/images/dummy-img.jpg" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </div>

    <div class="stack__card  side-space">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6 col-md-12">
                <div class="card-info">
                    <h3>Physics Lab </h3>
                    <p class="mt-3 mb-0"> 
                      The Physics Lab at TGS offers students the chance to perform experiments that demonstrate key principles of physics, from mechanics to electromagnetism.
                      Equipped with the latest tools and apparatus, the lab provides a solid foundation for understanding the physical world through experiential learning.
                    </p>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 col-md-12">
                <div class="card-img ps-5">
                      <img src="<?= base_url('assets/web')?>/images/dummy-img.jpg" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </div>


    <div class="stack__card  side-space">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6 col-md-12">
                <div class="card-info">
                    <h3>Biology Lab </h3>
                    <p class="mt-3 mb-0"> 
                        Our Biology Lab is designed to deepen students' understanding of the living world. With access to microscopes,
                        specimen samples, and advanced tools, students can explore the structure, function, and processes of various life forms.
                        This hands-on approach fosters curiosity and supports the theoretical learning in biology.
                    </p>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 col-md-12">
                <div class="card-img ps-5">
                      <img src="<?= base_url('assets/web')?>/images/dummy-img.jpg" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="stack__card  side-space">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6 col-md-12">
                <div class="card-info">
                    <h3>Chemistry Lab
</h3>
                    <p class="mt-3 mb-0"> 
                      The Chemistry Lab at TGS enables students to perform chemical experiments in a safe and controlled environment.
                      Students are encouraged to experiment, observe, and understand the nature of substances and chemical reactions.
                      The lab is fully equipped with modern apparatus, ensuring that students gain practical skills and a deeper appreciation for chemistry.
                    </p>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 col-md-12">
                <div class="card-img ps-5">
                      <img src="<?= base_url('assets/web')?>/images/dummy-img.jpg" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </div>
    
    <div class="stack__card  side-space">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6 col-md-12">
                <div class="card-info">
                    <h3>Robotics Lab

</h3>
                    <p class="mt-3 mb-0"> 
                      The Robotics Lab at TGS offers students a chance to dive into the world of automation and artificial intelligence. 
                      With access to robotics kits, coding platforms, and other essential tools, students can design, build, and program robots. This lab nurtures innovation, 
                      critical thinking, and teamwork as students explore the future of technology.
                    </p>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6 col-md-12">
                <div class="card-img ps-5">
                      <img src="<?= base_url('assets/web')?>/images/dummy-img.jpg" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </div>

</section>
                
    

    <!-- Footer -->
    
<?php $this->load->view('web/include/footer')?>
   


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.stack__card');
    
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                    } else {
                        entry.target.classList.remove('active');
                    }
                });
            }, {
                threshold: 0.5 
            });
    
            cards.forEach(card => {
                observer.observe(card);
            });
        });
    </script>