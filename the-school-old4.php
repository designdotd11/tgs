
<?php $this->load->view('web/include/header')?>
<link href="<?= base_url('assets/web')?>/css/about.css" rel="stylesheet" />

<style>
    body {
    overflow-x: clip !important;
    width: 100%;
}
</style>

<div class="about-wraper">

    <section class="breadcrum-us-section top-space-subpage bottom-space">
        <div class="breadcrum-overlay"></div>
        <div class="breadcrum-content">
            <h1 class="title-breadcrum">Toil & Perseverance</h1>
            <p class="breadcrum-sub-text mt-2 mb-0">The Good Shepherd’s (TGS) is a private, minority, co-educational school, Kindergarten onwards dedicated to the intellectual and personal growth of every child.</p>
        </div>
    </section>

    <section class="pt-80 pb-80" id="section-1">
        <div class="container-fluid side-space">
            <div class="row">
                <div class="col-xl-12">
                    <div class="the-school-top">
                        <p>TGSS instills in its students intellectual enthusiasm, leadership, and an appreciation of discovery. We encourage students to focus on achievement with a willingness to explore varied paths to reach their goals. Because the TGS community revels in scholarly, athletic, and artistic adventure, day-to-day life at The Good Shepherd’s is filled with the joy of learning and doing, both for students and for faculty.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-80">
        <div class="work side-space">
            <div class="work-left">
                <div class="work-info mission-info">
                    <h3>Mission</h3>
                    <p>At TGS, we are dedicated to creating a nurturing and responsive environment that is rooted in strong ethics and values.
                        Our expansive and well-equipped learning spaces are designed to inspire curiosity, creativity,
                        and intellectual growth. We focus on the holistic development of our students, fostering their intellectual, emotional,
                        social, and physical growth. By embracing innovative teaching methods and promoting lifelong learning, we empower our
                        students to navigate and succeed in today’s dynamic world. We are committed to building an inclusive community that celebrates
                        diversity and instills strong ethical principles, preparing our students to become responsible global citizens.</p>
                </div>

                <div class="work-info mission-info">
                    <h3>Vision</h3>
                    <p>At TGS, we are dedicated to creating a nurturing and responsive environment that is rooted in strong ethics and values.
                        Our expansive and well-equipped learning spaces are designed to inspire curiosity, creativity,
                        and intellectual growth. We focus on the holistic development of our students, fostering their intellectual, emotional,
                        social, and physical growth. By embracing innovative teaching methods and promoting lifelong learning, we empower our
                        students to navigate and succeed in today’s dynamic world. We are committed to building an inclusive community that celebrates
                        diversity and instills strong ethical principles, preparing our students to become responsible global citizens.</p>
                </div>
            </div>

            <div class="work-right">
                <div class="work-right-bl">
                    <div class="work-photo">
                        <div class="work-photo-item">
                            <img src="<?= base_url('assets/web')?>/images/mission.png">
                        </div>

                        <div class="work-photo-item">
                            <img src="<?= base_url('assets/web')?>/images/vission.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!-- Footer -->
    <div class="mt-120">
        <?php $this->load->view('web/include/footer')?>
    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  document.addEventListener("DOMContentLoaded", function () {

    // Lenis smooth scroll
    const lenis = new Lenis({
        duration: 1.2
    });

    function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
    }

    requestAnimationFrame(raf);

    lenis.on('scroll', ScrollTrigger.update);
    gsap.ticker.add((time) => {
        lenis.ref(time * 1000);
    });

    gsap.registerPlugin(ScrollTrigger);

    // Only trigger animations on screens wider than 1024px
    gsap.matchMedia().add("(min-width: 1025px)", () => {
        let workinfoItems = document.querySelectorAll('.work-photo-item');
        let sectionColors = ['#F5F4F2', '#fff'];

        workinfoItems.forEach(function (item, index) {
            item.style.zIndex = workinfoItems.length - index;
        });

        gsap.set(".work-photo-item", {
            clipPath: function () {
                return "inset(0px 0px 0px 0px)";
            }
        });

        const animation = gsap.to('.work-photo-item:not(:last-child)', {
            clipPath: function () {
                return "inset(0px 0px 100% 0px)";
            },
            stagger: .5,
            ease: "none"
        });

        ScrollTrigger.create({
            trigger: ".work",
            start: "top top",
            end: 'bottom bottom',
            animation: animation,
            scrub: 1,
            onUpdate: (self) => {
                let progress = self.progress;
                document.querySelector('.work').style.backgroundColor = progress >= 0.4 ? sectionColors[1] : sectionColors[0];
            }
        });
    });

});

</script>

 <script>
//     document.addEventListener("DOMContentLoaded", function() {

//         // lenis smoth scoll

//         const lenis = new Lenis({
//             duration: 1.2
//         })

//         function raf(time) {
//             lenis.raf(time)
//             requestAnimationFrame(raf)
//         }

//         requestAnimationFrame(raf)


//         lenis.on('scroll', ScrollTrigger.update)
//         gsap.ticker.add((time) => {
//             lenis.ref(time * 1000)
//         });

//         gsap.registerPlugin(ScrollTrigger);

//         let workinfoItems = document.querySelectorAll('.work-photo-item');
//         let sectionColors = ['#F5F4F2', '#fff'];

//         workinfoItems.forEach(function(item, index) {
//             item.style.zIndex = workinfoItems.length - index;

//         });

//         gsap.set(".work-photo-item", {
//             clipPath: function() {
//                 return "inset(0px 0px 0px 0px)"
//             }
//         });

//         const animation = gsap.to('.work-photo-item:not(:last-child)', {
//             clipPath: function() {
//                 return "inset(0px 0px 100% 0px)"
//             },
//             stagger: .5,
//             ease: "none"

//         });

//         ScrollTrigger.create({
//             trigger: ".work",
//             start: "top top",
//             end: 'bottom bottom',
//             animation: animation,
//             scrub: 1,
//             onUpdate: (self) => {

//                 let progress = self.progress;
//                 if (progress >= 0.4) {
//                     document.querySelector('.work').style.backgroundColor = sectionColors[1];
//                 } else {
//                     document.querySelector('.work').style.backgroundColor = sectionColors[0];
//                 }
//             }
//         });

//     });
// </script>