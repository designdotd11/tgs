 <style>
 

@media only screen and (max-width: 600px) {
    .padding-for-footer-in-small-screen{
      padding-left: 33px;
      padding-right: 33px;
    }
    
    .padding-zero-for-very-small-screen{
        padding-left: 0px;
      padding-right: 0px;
    }
}

@media (max-width: 576px) {
    
    .padding-for-mobile-screen{
        padding-right: 22px !important;
        padding-left: 22px !important;
    }
    
    .padding-zero-for-very-small-screen{
        padding-right: 0;
        padding-left: 0;
    }
}
 </style>
 
     
     
<a class="whatsaap" target="_blank" href="https://api.whatsapp.com/send?phone=919019900311&amp;text=Hello!">
    <i class="fab fa-brands fa-whatsapp" class="whatsapp-icon"></i>
    <span class="ps-2">How may I help you?</span>
</a>
<section>
    <footer class="footer footer-about padding-for-footer-in-small-screen padding-for-mobile-screen">
        <div class="footer-overlay"></div>
        <div class="container-fluid side-space position-relative side-space-for-footer padding-zero-for-very-small-screen">
            <div class="row pt-5 pb-3">
                <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="footer-about-content">
                        <p>The Good Shepherd’s cultivates in its students a broad general understanding of the foundational disciplines of humane learning and fosters a capacity for effective critical inquiry and authentic self-expression</p>
                        
                        <hr class="footer-hr display-none-when-small-screen-for-new-newsletter" style="border: 2px solid #d9d9d9">
                        
                        <div style="width:100%;min-height:100px;" class="margin-buttom-when-small-screen-for-new-newsletter">
                            <!-- newsletter -->
                            <?php $this->load->view('web/include/newsletter')?>
                            
                        </div>
                        <div>
                            <div class="mt-3 mt-lg-5 designby-text" style="position: static;">
                                <p class="mb-0 para-text">© 2023 TGSS , All Rights Reserved</b></p>
                                <p class="mb-0 footer-text">Designed by <b>DesignDot</b></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12 pb-4 pb-lg-0">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 ">
                            <div class="footer-link">
                                <h4>The School</h4>
                                <ul>
                                    <li><a href="<?= base_url('the-school')?>">The School</a></li>
                                    <li><a href="<?= base_url('vision-mission-value')?>">Vision, Mission & Values</a></li>
                                    <li><a href="<?= base_url('president-desk')?>">From The President’s Desk</a></li>
                                    <li><a href="<?= base_url('founder-desk')?>">From The Founder’s Desk</a></li>
                                    <li><a href="<?= base_url('director-message')?>">From the Director’s Desk</a></li>
                                    <li><a href="<?= base_url('our-legacy')?>">Our Legacy – The Chronicles</a></li>
                                    <li><a href="<?= base_url('institutions')?>">Our Institutions</a></li>
                                    <!--<li><a href="<?= base_url('associations-and-collaborations')?>">Associations & Collaborations</a></li>-->
                                    <li><a href="<?= base_url('public-disclosure')?>">Mandatory Public Disclosure</a></li>

                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 ">
                            <div class="footer-link">
                                <h4>Academics</h4>
                                <ul>
                                    <li><a href="<?= base_url('academics-overview')?>">Overview</a></li>
                                    <li><a href="<?= base_url('curriculum')?>">Curriculum / Courses of Study</a></li>
                                    <li><a href="<?= base_url('assessment-systems')?>">Examination, Assessment Systems</a></li>
                                    <li><a href="<?= base_url('annual-calendar')?>">Annual Calendar</a></li>
                                    <li><a href="<?= base_url('school-timing')?>">School Timings</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 text-left text-md-right">
                            <div class="footer-link">
                                <h4>Beyond Academics</h4>
                                <ul>
                                    <!--<li><a href="<?= base_url('houses')?>">Houses , Clubs, Visits & Excursions, Student Council</a></li>-->
                                    <li><a href="<?= base_url('guidance-and-counselling')?>">Guidance & Counselling, Workshops and Orientations </a></li>
                                    <li><a href="<?= base_url('creative-arts')?>">Creative Arts</a></li>
                                    <li><a href="<?= base_url('library-systems')?>"> Library </a></li>
                                    <li><a href="<?= base_url('laboratories')?>">Laboratories</a></li>
                                    <li><a href="<?= base_url('ai-and-coding-and-robotics')?>">AI, Coding & Robotics</a></li>
                                    <li><a href="<?= base_url('sports')?>">Sports</a></li>
                                    <!--<li><a href="<?= base_url('#')?>">Health </a></li>-->
                                    <li><a href="<?= base_url('safety-and-security')?>">Safety & Security </a></li>
                                    <li><a href="<?= base_url('building-and-transport')?>">Transport Facilities</a></li>
                                </ul>
                            </div>
                        </div>




                        <div class="col-lg-2 col-md-6 col-sm-6 col-12 text-left text-md-right">
                            <div class="footer-link">
                                <h4>Admission</h4>

                                <ul>
                                    <li><a href="<?= base_url('admission-procedure')?>">Admission Procedure</a></li>
                                    <li><a href="<?= base_url('school-policies-and-handbook')?>">School Policies & Handbook </a></li>
                                    <li><a href="<?= base_url('fees-structure')?>">Fees Structure</a></li>
                                    <!--<li><a href="#">Fee Schedule</a></li>-->
                                    <li><a href="#">Student Transfer</a></li>
                                </ul>
                            </div>

                        </div>


                    </div>
                    <hr  class="footer-hr" style="border: 2px solid #d9d9d9">
                    </hr>
                    <div class="other-links">
                        <ul>
                            <li><a href="<?= base_url('career')?>">Career </a></li>
                            <li><a href="<?= base_url('contact-us')?>">Contact Us </a></li>
                            <li><a href="#"> Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>
 </div>
 
 
 <script src="https://unpkg.com/@studio-freight/lenis@1.0.42/dist/lenis.min.js"></script> 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>


</body>




<script>
$(document).ready(function () {
    // ===== Swiper Initialization =====
    var swiper = new Swiper(".addmySwiper", {
        loop: true,
        spaceBetween: 0,
        slidesPerView: 1,
        navigation: {
            nextEl: '.custom-next',
            prevEl: '.custom-prev',
        },
        breakpoints: {
            576: { slidesPerView: 1 },
            700: { slidesPerView: 2 },
            992: { slidesPerView: 3 },
            1250: { slidesPerView: 4 }
        }
    });

    // ===== Lenis Smooth Scroll =====
    if (typeof Lenis !== 'undefined') {
        var lenis = new Lenis({
            duration: 1,
            easing: t => t * (2 - t),
        });
        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }
        requestAnimationFrame(raf);
    }

    // ===== Sticky Header =====
    var $header = $('.header');
    $(window).on('scroll', function() {
        var scrollTop = $(this).scrollTop();
        $header.toggleClass('sticky', scrollTop > 350);
    });

    // ===== Sidebar Sticky & Toggle =====
    var $blogContent = $('#industry-box');
    var $sidebar = $('#sidebar1');
    var $toggleButton = $('#toggleSidebar');

    if ($blogContent.length && $sidebar.length) {
        $(window).on('scroll', function() {
            var blogBottom = $blogContent[0].getBoundingClientRect().bottom;
            var sidebarBottom = $sidebar[0].getBoundingClientRect().bottom;
            $sidebar.toggleClass('sticky-hidden', blogBottom < sidebarBottom + 10);
        });
    }

    if ($toggleButton.length && $sidebar.length) {
        $toggleButton.on('click', function() {
            $sidebar.toggleClass('open');
        });

        $(document).on('click', function(event) {
            if (!$sidebar.is(event.target) && $sidebar.has(event.target).length === 0 &&
                !$toggleButton.is(event.target) && $sidebar.hasClass('open')) {
                $sidebar.removeClass('open');
            }
        });
    }

    // ===== Sidebar Active Link & Submenu =====
    var currentPath = window.location.pathname + window.location.search; // include query string
    currentPath = currentPath.split("/").pop(); // only filename with query

    // Function to normalize links (ignore query strings)
    function normalizeHref(href) {
        return href.split("/").pop().split("?")[0];
    }
    var normalizedCurrent = currentPath.split("?")[0];

    // Submenu links
    $('.submenu .nav-link2').each(function () {
        var linkHref = $(this).attr('href');
        if (normalizeHref(linkHref) === normalizedCurrent) {
            $(this).addClass('active');
            var $submenu = $(this).closest('.collapse');
            $submenu.addClass('show');
            $submenu.prev('.dropdown-toggle').addClass('active');
        }
    });

    // Top-level links
    $('.nav > .nav-item > .nav-link2:not(.dropdown-toggle)').each(function () {
        var linkHref = $(this).attr('href');
        if (normalizeHref(linkHref) === normalizedCurrent) $(this).addClass('active');
    });

    // ===== Prevent top-level navigation for collapse toggle =====
    $('.nav-link2.dropdown-toggle').on('click', function(e) {
        var target = $(this).attr('href');
        if (target.startsWith('#')) {
            e.preventDefault();
            $(target).collapse('toggle');
        }
    });

    // Toggle 'active' class on dropdown toggle when opening/collapsing
    $('.collapse').on('show.bs.collapse', function () {
        $(this).prev('.dropdown-toggle').addClass('active');
    }).on('hide.bs.collapse', function () {
        if ($(this).find('.nav-link2.active').length === 0) {
            $(this).prev('.dropdown-toggle').removeClass('active');
        }
    });
});
</script>





</html>