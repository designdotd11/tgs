<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("web/include/meta"); ?>
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url("assets/web") ?>/images/favicon.ico">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" crossorigin="anonymous" />
  <link rel="stylesheet" href="<?= base_url("assets/web") ?>/css/style.css" />
  <link rel="stylesheet" href="https://unpkg.com/lenis@1.1.9/dist/lenis.css">
  <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Hurricane&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Satisfy&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="<?= base_url("assets/web") ?>/css/NewExtraCss.css" />

  <style>
      body {
          overflow-x: hidden!important;
      }
  </style>
</head>

<body style="overflow-x: hidden;">

    
     <!-- Admission Enquiry Modal -->
 <?php $this->load->view('web/include/admission_enquiry_modal') ?>
 
  <!--Desktop Header -->
  <header class="header-home" id="desktop-header">
      <nav class="navbar py-2" style="padding-left:30px; padding-right:40px;">
          <div class="container-fluid p-0 m-0">
              <div class="row w-100 m-0 p-0">
                  <div class="col-sm-4 col-md-4 col-lg-4 col-lg-4 m-0 p-0">
                      <div class="d-flex d-flex justify-content-start align-items-center m-0 p-0">
                          <a href="https://tgs.urips.co.in/" class="d-flex align-items-start m-0 p-0">
                          <!-- Default logo -->
                          <img src="https://tgs.urips.co.in/assets/web/images/icon/logo.svg" 
                               alt="Logo" 
                               class="logo-default img-fluid m-0 ps-2 pe-0 pt-0 pb-0" style="height: 180px;">
                          <!-- Blue logo hidden initially -->
                          <img src="https://tgs.urips.co.in/assets/web/images/GoodShep-bluelogo.svg" 
                               alt="Logo" 
                               class="logo-blue img-fluid m-0 ps-1 pe-0 pt-0 pb-0 d-none" style="height: 80px;">
                      </a>
                      </div>
                  </div>
                  <div class="col-sm-8 col-md-8 col-lg-8 col-xl-8 d-flex justify-content-end align-items-center p-0">
                      <div class="d-flex justify-content-end align-items-center gap-3 p-0 m-0" style='font-weight: 500;font-family: poppins;'>
                          <a class="nav-link d-flex align-items-center gap-1 text-white tel-no" href="tel:+917090031100" style="font-size: 13.5px;" >
                              <img class="tel-icon" src="https://tgs.urips.co.in/assets/web/images/call-dark.png" alt="call">
                              <span class="text-white">+91 70900 31100/22</span>
                          </a>
                          <button class="btn btn-light contact-us" onclick="window.location.href='/contact-us'">CONTACT US</button>
                          <button class="btn" style="background:#029bbe;color:white;" onclick="openApplyNowForm()">APPLY NOW</button>
                          
                          <!-- Humburger Button -->
                          <button
                            class="btn text-white p-0"
                            data-bs-toggle="offcanvas"
                            data-bs-target="#humburgmenu"
                          
                          >
                            <span class="btn text-white p-0 menu-icon" >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                stroke="currentColor"
                                fill="none"
                                stroke-width="1.5"
                                viewBox="0 0 24 24"
                                aria-hidden="true"
                                width="40"
                                height="40"
                              >
                                <path
                                  stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5"
                                />
                              </svg>
                            </span>
                          </button>
                      </div>
                  </div>
              </div>
          </div>
      </nav>
  </header>
  
<!-- Mobile Header -->
<header class="header-home" id="mobile-header" style="display:none;">
  <nav class="navbar pt-4 pb-2 " style="padding-left:25px; padding-right:35px;">
    <div class="container-fluid p-0">
      <div class="row w-100 m-0 p-0">

        <!-- Top Row: Phone Number -->
        <div class="col-12 col-sm-12 d-flex justify-content-center align-items-center " style="padding-right: 3.5rem !important;">
          <a class="nav-link d-flex align-items-center gap-1 tel-mobile-no" href="tel:+917090031100" style="font-size: 13.5px;">
            <img class="tel-icon" src="https://tgs.urips.co.in/assets/web/images/call-dark.png" alt="call" width="18">
            <span>+91 70900 31100/22</span>
          </a>
        </div>

        <!-- Second Row: Buttons -->
        <div class="col-12 col-sm-12 d-flex justify-content-center align-items-center mt-2 p-0 gap-3" >
          <div class="d-flex justify-content-center align-items-center gap-2 button-group p-0 w-100 ms-2" >
            <button class="btn btn-light py-2 contact-mobile-us w-100" onclick="window.location.href='/contact-us'">CONTACT US</button>
            <button class="btn btn-apply py-2 w-100" onclick="openApplyNowForm()">APPLY NOW</button>
           
          </div>
           <button class="btn p-0 menu-btn menu-btn-1" data-bs-toggle="offcanvas" data-bs-target="#humburgmenu">
              <svg xmlns="http://www.w3.org/2000/svg" stroke="currentColor" fill="none" stroke-width="1.5" viewBox="0 0 24 24" width="32" height="32">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
              </svg>
            </button>
        </div>

        <!-- Logo Row (hidden by default, shown on scroll up) -->
        <div class="col-12 col-sm-12 d-flex justify-content-center align-items-center gap-3 logo-row d-none  p-0">
          <a href="https://tgs.urips.co.in/" class="d-flex align-items-center">
            <img src="https://tgs.urips.co.in/assets/web/images/GoodShep-bluelogo.svg" alt="Logo"
            class="logo-mobile-blue img-fluid" style="width: 343px;height: 80px;">
          </a>
           <button class="btn p-0 menu-btn menu-btn-2" data-bs-toggle="offcanvas" data-bs-target="#humburgmenu">
              <svg xmlns="http://www.w3.org/2000/svg" stroke="currentColor" fill="none" stroke-width="1.5" viewBox="0 0 24 24" width="40" height="40">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
              </svg>
            </button>
        </div>

      </div>
    </div>
  </nav>
 
</header>

    <!-- Offcanvas Menu -->
  <div class="offcanvas offcanvas-end" id="humburgmenu">
    <div class="offcanvas-body">
      <div class="row">
        <!-- Left Side -->
        <div class="col-xl-3 col-lg-4 col-md-12 px-0 header-left-side">
          <div id="content-box" class="px-5">
            <div class="pre-menu">
              <div class="sideoverlay-content">
                <div class="menu-container">
                  <!-- Logo -->
                  <div class="logo pt-3 humburg-logo">
                    <a href="<?= base_url('') ?>" class="px-0">
                      <img
                        src="<?= base_url('assets/web/images/logo.svg') ?>"
                        alt="Logo"
                        class="img-fluid"
                      />
                    </a>
                  </div>

                  <!--<h1 class="logo-text">The Good Shepherd's School</h1>-->

                  <!-- Menu List -->
                  <ul class="menu-list mt-3">
                    <li
                      class="d-flex gap-3 align-items-center py-2"
                      style="line-height: 24px; border-bottom: 1px solid #6666664a;"
                    >
                      <span><i class="fas fa-regular fa-paper-plane"></i></span>
                      <div>
                        <a href="<?= base_url('admission-enquiry') ?>" class="slide-menu p-0">
                          Apply Now
                        </a>
                      </div>
                    </li>

                    <li class="d-flex gap-3 align-items-center py-2">
                      <span><i class="fas fa-envelope"></i></span>
                      <div>
                        <a class="slide-menu p-0" href="mailto:mail@tgss.in">
                          Request Information
                        </a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>

              <!-- More Info -->
              <div class="more-info mt-4">
                <h4>Info For</h4>
                <div class="more-info-menu">
                  <ul class="more-info-list">
                    <li><a href="<?= base_url('the-school') ?>">About</a></li>
                    <li><a href="<?= base_url('news') ?>">News</a></li>
                    <li><a href="<?= base_url('curriculum') ?>">Classes</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Right Side -->
        <div class="col-xl-9 col-lg-8 col-md-12 px-0 pt-5 header-humburg-logo">
          <div class="humurg-cross">
            <span class="btn-span-close">CLOSE</span>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
          </div>

          <div class="menu-list-left side-space side-space-for-header">
              <div>
                <!-- Changed the accordion wrapper div -->
                <div class="accordion" id="mainAccordion"> <!-- Added unique ID -->
                
                  <!-- The School -->
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseOne"
                        aria-expanded="false"
                        aria-controls="collapseOne">
                        The School
                      </button>
                    </h2>
                    <div
                      id="collapseOne"
                      class="accordion-collapse collapse"
                      aria-labelledby="headingOne"
                      data-bs-parent="#mainAccordion"> <!-- Added data-bs-parent -->
                      <div class="accordion-body p-0">
                        <div class="sideoverlay-content content-box-1">
                          <div class="sub-menu-container">
                            <ul class="menu-list">
                              <li><a href="/">Home</a></li>
                              <li><a href="<?= base_url('the-school') ?>">The School</a></li>
                              <li><a href="<?= base_url('vision-mission-value') ?>">Vision, Mission & Values</a></li>
                              <li><a href="<?= base_url('president-desk') ?>">From The President's Desk</a></li>
                              <li><a href="<?= base_url('founder-desk') ?>">From The Founder's Desk</a></li>
                              <li><a href="<?= base_url('director-message') ?>">From the Director's Desk</a></li>
                              <li><a href="<?= base_url('our-legacy') ?>">Our Legacy of The Chronicles</a></li>
                              <li><a href="<?= base_url('institutions') ?>">Our Institutions</a></li>
                              <li><a href="<?= base_url('associations-and-collaborations') ?>">Associations & Collaborations</a></li>
                              <li><a href="<?= base_url('public-disclosure') ?>">Mandatory Public Disclosure</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                
                  <!-- Academics -->
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo"
                        aria-expanded="false"
                        aria-controls="collapseTwo">
                        Academics
                      </button>
                    </h2>
                    <div
                      id="collapseTwo"
                      class="accordion-collapse collapse"
                      aria-labelledby="headingTwo"
                      data-bs-parent="#mainAccordion"> <!-- Added data-bs-parent -->
                      <div class="accordion-body p-0">
                        <div class="sideoverlay-content content-box-1">
                          <div class="sub-menu-container">
                            <ul class="menu-list">
                              <li><a href="<?= base_url('academics-overview') ?>">Overview</a></li>
                              <li><a href="<?= base_url('curriculum') ?>">Curriculum / Courses of Study</a></li>
                              <li><a href="<?= base_url('assessment-systems') ?>">Examination, Assessment Systems</a></li>
                              <li><a href="<?= base_url('annual-calendar') ?>">Annual Calendar</a></li>
                              <li><a href="<?= base_url('school-timing') ?>">School Timings</a></li>
                              <!--<li><a href="#">Learning Support</a></li>-->
                              <!--<li><a href="#">Technology</a></li>-->
                              <!--<li><a href="#">Library</a></li>-->
                              <!--<li><a href="#">Career Guidance</a></li>-->
                              <!--<li><a href="#">Results</a></li>-->
                              <!--<li><a href="#">Transfer Certificates</a></li>-->
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                
                  <!-- Beyond Academics -->
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseThree"
                        aria-expanded="false"
                        aria-controls="collapseThree">
                        Beyond Academics
                      </button>
                    </h2>
                    <div
                      id="collapseThree"
                      class="accordion-collapse collapse"
                      aria-labelledby="headingThree"
                      data-bs-parent="#mainAccordion"> <!-- Added data-bs-parent -->
                      <div class="accordion-body p-0">
                        <div class="sideoverlay-content content-box-1">
                          <div class="sub-menu-container">
                            <ul class="menu-list">
                              <li><a href="<?= base_url('houses') ?>">Houses, Clubs, Visits & Excursions, Student Council</a></li>
                              <li><a href="<?= base_url('guidance-and-counselling') ?>">Guidance & Counselling, Workshops and Orientations</a></li>
                              <li><a href="<?= base_url('creative-arts') ?>">Creative Arts</a></li>
                              <li><a href="<?= base_url('library-systems') ?>">Library</a></li>
                              <li><a href="<?= base_url('laboratories') ?>">Laboratories</a></li>
                              <li><a href="<?= base_url('ai-and-coding-and-robotics') ?>">AI, Coding & Robotics</a></li>
                              <li><a href="<?= base_url('sports') ?>">Sports</a></li>
                              <li><a href="<?= base_url('safety-and-security') ?>">Safety & Security</a></li>
                              <li><a href="<?= base_url('building-and-transport') ?>">Transport Facilities</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                
                  <!-- Admission -->
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseFour"
                        aria-expanded="false"
                        aria-controls="collapseFour">
                        Admission
                      </button>
                    </h2>
                    <div
                      id="collapseFour"
                      class="accordion-collapse collapse"
                      aria-labelledby="headingFour"
                      data-bs-parent="#mainAccordion"> <!-- Added data-bs-parent -->
                      <div class="accordion-body p-0">
                        <div class="sideoverlay-content content-box-1">
                          <div class="sub-menu-container">
                            <ul class="menu-list">
                              <li><a href="<?= base_url('admission-procedure') ?>">Admission Procedure</a></li>
                              <li><a href="<?= base_url('school-policies-and-handbook') ?>">School Policies & Handbook</a></li>
                              <li><a href="<?= base_url('fees-structure') ?>">Fees Structure</a></li>
                              <!--<li><a href="#">Fee Schedule</a></li>-->
                              <!--<li><a href="#">Student Transfer</a></li>-->
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                
                  <!-- Media Coverage -->
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                      <button
                        class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseFive"
                        aria-expanded="false"
                        aria-controls="collapseFive">
                        Media Coverage
                      </button>
                    </h2>
                    <div
                      id="collapseFive"
                      class="accordion-collapse collapse"
                      aria-labelledby="headingFive"
                      data-bs-parent="#mainAccordion"> <!-- Added data-bs-parent -->
                      <div class="accordion-body p-0">
                        <div class="sideoverlay-content content-box-1">
                          <div class="sub-menu-container">
                            <ul class="menu-list">
                              <li><a href="<?= base_url('news') ?>">News / Events</a></li>
                              <li><a href="<?= base_url('gallery') ?>">Gallery</a></li>
                              <li><a href="<?= base_url('video') ?>">Video</a></li>
                              <li><a href="<?= base_url('blogs') ?>">Blog</a></li>
                              <!--<li><a href="<?= base_url('alumni') ?>">Alumni</a></li>-->
                              <!--<li><a href="#">Calendar</a></li>-->
                              <!--<li><a href="<?= base_url('parent-speak') ?>">Parent's Speak</a></li>-->
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                
                  <!-- Career (No changes needed - it's a direct link) -->
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <a href="<?= base_url('career') ?>" class="accordion-button1">Career</a>
                    </h2>
                  </div>
                
                  <!-- Contact Us (No changes needed - it's a direct link) -->
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <a href="<?= base_url('contact-us') ?>" class="accordion-button1">Contact Us</a>
                    </h2>
                  </div>
                
                </div>
            
                <!-- Contact Info -->
                <div class="header-social-icon mt-3">
                  <div class="contact-info mt-3 d-block d-md-flex gap-md-5 align-items-baseline border-0 ps-0 pe-0 pb-0">
                    <div class="flex-grow-custom">
                      <p class="fw-medium mt-3">
                        <i class="fas fa-map-marker-alt"></i>
                        Survey No 86/1, Baiyappanahalli Village, Bidarahalli Hobli, Bengaluru 560049<br>
                        Karnataka, INDIA
                      </p>
                    </div>
                    <div class="flex-grow-custom">
                      <p class="fw-medium">
                        <i class="fas fa-solid fa-phone" style="transform: rotate(132deg);"></i>
                        <a href="tel:7090031100" class="text-decoration-none text-dark">+91-7090031100</a>
                      </p>
                      <p class="fw-medium">
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:mail@tgss.in" class="text-decoration-none text-dark">mail@tgss.in</a>
                      </p>
                    </div>
                  </div>
                </div>
            
              
              </div>
           </div>

        </div>
        <!-- End Right Side -->
      </div>
    </div>
  </div>







  <!-- jQuery & SweetAlert -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Scroll Logo Script using jQuery -->
<!-- Scroll Logo Script using jQuery -->
<script>
$(function () {
    let lastScrollTop = 0;

    // Helper: check if desktop mode
    function isDesktop() {
        return $(window).width() > 576;
    }

    function handleDesktopScroll() {
        if (!isDesktop()) return; // only run for screens > 576px

        let scrollTop = $(this).scrollTop();

        if (scrollTop < 100) {
            // At top
            $('.logo-default').removeClass('d-none');
            $('.logo-blue').addClass('d-none');
            $('#desktop-header').removeClass('fixed-header').stop(true, true).slideDown(200);
        } else if (scrollTop < lastScrollTop) {
            // Scrolling up
            $('.logo-default').addClass('d-none');
            $('.logo-blue').removeClass('d-none');
            $('#desktop-header').addClass('fixed-header').stop(true, true).slideDown(200);
        } else {
            // Scrolling down
            $('.logo-default').removeClass('d-none');
            $('.logo-blue').addClass('d-none');
            $('#desktop-header').removeClass('fixed-header').stop(true, true).slideUp(200);
        }

        lastScrollTop = scrollTop;
    }

    // Run only in desktop view
    $(window).on('scroll', handleDesktopScroll);

    // Handle resize — disable behavior below 577px
    $(window).on('resize', function () {
        if (!isDesktop()) {
            // Reset desktop header styles when switching to mobile
            $('#desktop-header').show().removeClass('fixed-header');
            $('.logo-default').removeClass('d-none');
            $('.logo-blue').addClass('d-none');
            $('#mobile-header').css('display','none!important');
        }
    });
});
</script>



<!--Mobile version-->
<!--Mobile version-->
<script>
$(function () {
    // Run only for mobile screens
    function isMobile() {
        return $(window).width() <= 576;
    }

    let lastScrollTop = 0;

    function handleScroll() {
        if (!isMobile()) return; // Exit if not mobile

        let scrollTop = $(this).scrollTop();

        if (scrollTop < 100) {
            // At top
            $('.logo-row').removeClass('fade-in').addClass('fade-out');
            $('#mobile-header').removeClass('fixed-header').stop(true, true).slideDown(200);
            $('.menu-btn-1').removeClass('d-none');
        } else if (scrollTop < lastScrollTop) {
            // Scrolling up
            $('.logo-row').removeClass('fade-out').addClass('fade-in');
            $('.menu-btn-1').addClass('d-none');
            $('.logo-row').removeClass('d-none');
            $('#mobile-header').addClass('fixed-header').stop(true, true).slideDown(200);
        } else {
            // Scrolling down
            $('.logo-row').removeClass('fade-in').addClass('fade-out');
            $('#mobile-header').removeClass('fixed-header').stop(true, true).slideUp(200);
        }

        lastScrollTop = scrollTop;
    }

    // Bind scroll event only when on mobile
    $(window).on('scroll', handleScroll);

    // Handle window resize (to enable/disable dynamically)
    $(window).on('resize', function () {
        if (!isMobile()) {
            // Reset mobile header states when switching to desktop
            $('#mobile-header').show().removeClass('fixed-header');
            $('.logo-row').removeClass('fade-in fade-out');
            $('.menu-btn-1').removeClass('d-none');
        }
    });
});
</script>



<!--Model-->
<script>
$(function() {
    const offcanvas = $('#humburgmenu');
    let scrollPosition = 0;

    // Lock body scroll
    function lockBodyScroll() {
        scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
        $('body').css({
            position: 'fixed',
            top: `-${scrollPosition}px`,
            width: '100%',
            overflow: 'hidden'
        }).addClass('offcanvas-open');
    }

    // Unlock body scroll
    function unlockBodyScroll() {
        $('body').css({
            position: '',
            top: '',
            width: '',
            overflow: ''
        }).removeClass('offcanvas-open');
        window.scrollTo(0, scrollPosition);
    }

    // Desktop Accordion - only toggle accordion, DO NOT touch body scroll
    const accordionButtons = document.querySelectorAll('#mainAccordion .accordion-button');

    accordionButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();

            const targetId = button.dataset.bsTarget;
            if (!targetId) return;

            const collapseTarget = document.querySelector(targetId);
            if (!collapseTarget) return;

            const bsCollapse = bootstrap.Collapse.getOrCreateInstance(collapseTarget);

            // Close other accordions
            document.querySelectorAll('#mainAccordion .accordion-collapse.show').forEach(openCollapse => {
                if (openCollapse !== collapseTarget) {
                    bootstrap.Collapse.getOrCreateInstance(openCollapse).hide();
                }
            });

            // Toggle current accordion
            bsCollapse.toggle();
        });
    });

    // Offcanvas events - control body scroll
    offcanvas.on('show.bs.offcanvas', function () {
        lockBodyScroll();
    });

    offcanvas.on('hidden.bs.offcanvas', function () {
        unlockBodyScroll();
    });
});
</script>



</script>







<!-- Single script for Apply Now modal (toggle type) -->
<!-- Single script for Apply Now modal (toggle type using show/hide) -->
<script>
$(document).ready(function() {
    const $modal = $("#formModal");

    if (!$modal.length) {
        console.error("#formModal not found!");
        return;
    }

    // Show modal
    function openApplyNowForm() {
        $modal.fadeIn(300);
        $("body").css("overflow", "hidden");
    }

    // Close modal
    function closeApplyNowForm() {
        $modal.fadeOut(300);
        $("body").css("overflow", "");
    }

    // Toggle modal
    function toggleApplyNowForm() {
        if ($modal.is(":visible")) {
            closeApplyNowForm();
        } else {
            openApplyNowForm();
        }
    }

    // Global function for inline onclick
    window.openApplyNowForm = openApplyNowForm;

    // Button/link triggers
    $(document).on("click", "#header-apply-now-btn, .header-element-for-small-screen button, a[href='<?= base_url('admission-enquiry') ?>'], [onclick*='openApplyNowForm'], .list-group-item-action i.bi-pencil-square", function(e) {
        e.preventDefault();
        openApplyNowForm();
    });

    // Close modal on X button
    $(document).on("click", "#formModalSpan, #formModal .btn-close", function() {
        closeApplyNowForm();
    });

    // Close modal on clicking outside
    $modal.on("click", function(e) {
        if (e.target === this) closeApplyNowForm();
    });

    // Close modal on Escape key
    $(document).on("keydown", function(e) {
        if (e.key === "Escape") closeApplyNowForm();
    });

    // Auto open modal after 3 seconds (change condition as needed)
    function shouldAutoOpenModal() {
        // Example: auto-open on homepage only
        const allowedPaths = ["/", "/index.php", "/home", "/welcome", "/Web/Home/test"];
        const path = window.location.pathname.toLowerCase();
        return allowedPaths.some(p => path === p || path.endsWith(p));
    }

    if (shouldAutoOpenModal()) {
        setTimeout(openApplyNowForm, 3000);
    }
});
</script>





<script>
let currentStep = 1;

// Attach the button click
document.getElementById('modalFormButton').addEventListener('click', handleForm);

function handleForm() {
    if (currentStep === 1) {
        sendOTP();
    } else if (currentStep === 2) {
        verifyOTP();
    } else if (currentStep === 3) {
        submitForm();
    }
}

// Step 1: Send OTP
function sendOTP() {
    let phone = document.getElementById('phone').value;
    let phonePattern = /^\+?[0-9]{10,15}$/;

    if (!phonePattern.test(phone)) {
        alert('Please enter a valid phone number.');
        return;
    }

    $.ajax({
        url: '<?= base_url("Web/Enquiry/send_otp") ?>',
        type: 'POST',
        data: { phone: phone },
        dataType: 'json',
        success: function(response) {
            if (response.status === 'success') {
                Swal.fire('OTP sent to ' + phone);
                $('#modalStep1').hide();
                $('#modalStep2').show();
                currentStep = 2;
                document.getElementById('modalFormButton').innerText = 'Verify OTP';
            } else {
                Swal.fire('Error', response.message, 'error');
            }
        },
        error: function(xhr) {
            console.error(xhr.responseText);
            alert('Error sending OTP. Try again.');
        }
    });
}

// Step 2: Verify OTP
function verifyOTP() {
    let otp = Array.from(document.querySelectorAll('.otp-box')).map(i => i.value).join('');
    let phone = $('#phone').val();

    if (otp.length !== 4) {
        Swal.fire('Error', 'Enter a valid 4-digit OTP', 'error');
        return;
    }

    $.ajax({
        url: '<?= base_url("Web/Enquiry/verify_otp") ?>',
        type: 'POST',
        data: { otp: otp, phone: phone },
        dataType: 'json',
        success: function(res) {
            // ✅ Check res.status instead of res
            if (res.status === 'success') {
                Swal.fire('Success', 'OTP Verified!', 'success');
                $('#modalStep2').hide();
                $('#modalStep3').show();
                currentStep = 3;
                document.getElementById('modalFormButton').innerText = 'Submit';
            } else {
                Swal.fire('Error', res.message || 'Invalid OTP. Try again.', 'error');
            }
        },
        error: function(xhr) {
            console.error(xhr.responseText);
            Swal.fire('Error', 'OTP verification failed. Try again.', 'error');
        }
    });
}

// Step 3: Submit Form
function submitForm() {
    let formData = $('#modalEnquiryForm').serialize();
    $.ajax({
        url: $('#modalEnquiryForm').attr('action'),
        type: 'POST',
        data: formData,
        success: function(res) {
            Swal.fire('Success', 'Form submitted successfully!', 'success');
            $('#modalEnquiryForm')[0].reset();
            $('#formModal').hide();
        }
    });
}

// OTP auto-focus
document.querySelectorAll('.otp-box').forEach((box, index, boxes) => {
    box.addEventListener('input', () => {
        if (box.value.length === 1 && index < boxes.length - 1) boxes[index + 1].focus();
    });
    box.addEventListener('keydown', (e) => {
        if (e.key === 'Backspace' && box.value.length === 0 && index > 0) boxes[index - 1].focus();
    });
});

// CAPTCHA validation
$('#captcha-input').on('input', function() {
    let inputCaptcha = $(this).val();
    let captchaCode = $('#captcha-code').text().trim();
    if (inputCaptcha !== captchaCode) $('#captcha-error').text('CAPTCHA does not match').css('color','red');
    else $('#captcha-error').text('CAPTCHA matched').css('color','green');
});

// Close modal
function closeFormModal() {
    $('#formModal').hide();
}
</script>




<!--Desktop Header CSS-->
<style>
/* === Desktop Header === */
#desktop-header.fixed-header {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 9999;
  background-color: rgba(255, 255, 255, 0.95);
  transition: background-color 0.3s ease, box-shadow 0.3s ease;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
}

/* === Phone Icon === */
.tel-icon {
  width: 16px;
  height: 16px;
  display: inline-block;
  object-fit: contain;
  transition: filter 0.25s, opacity 0.25s;
  filter: invert(1) brightness(2); /* white by default */
  opacity: 0.95;
}

/* When header becomes fixed (scroll) */
#desktop-header.fixed-header .tel-icon {
  filter: invert(0) brightness(1); /* black */
}

/* Phone number color transition */
#desktop-header.fixed-header .tel-no,
#desktop-header.fixed-header .tel-no span {
  color: black !important;
  font-size: 13.5px;
}

/* === Buttons === */
button.contact-us {
  background-color: white !important;
  color: black !important;
  font-size: 14px;
  border: 1px solid #ccc;
}

#desktop-header.fixed-header button.contact-us {
  background-color: #d3d3d3 !important;
  color: black !important;
  border: none !important;
}

/* === Menu Icon === */
span.menu-icon {
  color: white;
  transition: color 0.25s;
}

#desktop-header.fixed-header span.menu-icon {
  color: black !important;
}

/* === Responsive visibility === */
#mobile-header {
  display: none!important;
}
</style>

<!--Mobile Header CSS-->
<style>
@media (max-width: 991px) {
  /* === Hide Desktop / Show Mobile === */
  #desktop-header {
    display: none !important;
  }

  #mobile-header {
    display: block !important;
  }

  /* === Fixed Header Behavior === */
  #mobile-header.fixed-header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 9999;
    background-color: rgba(255, 255, 255, 0.95);
    transition: background-color 0.3s ease;
  }

  /* === Phone Number === */
  #mobile-header .tel-mobile-no {
    font-size: 13.5px;
    font-weight: 500;
    text-decoration: none;
    color: #fff;
    transition: color 0.3s ease;
  }

  /* ✅ FIXED TYPO HERE (was .tel-mobile--no) */
  #mobile-header.fixed-header .tel-mobile-no span {
    color: #333333;
  }

  /* === Buttons === */
  .button-group {
    font-family: 'Poppins', sans-serif;
    font-weight: 500;
    gap: 10px;
  }

  .contact-mobile-us {
    background-color: #d3d3d3;
    color: #000000;
    border: 1px solid #ccc;
    padding: 5px 12px;
    font-size: 15px;
    border-radius: 6px;
  }

  .btn-apply {
    background-color: #029bbe;
    color: #ffffff;
    border: none;
    padding: 5px 12px;
    font-size: 15px;
    border-radius: 6px;
  }

  .btn-apply:hover {
    background-color: #018cb0;
  }

  /* === Menu Button === */
  .menu-btn svg {
    width: 40px;
    height: 40px;
    color: #ffffff;
    transition: color 0.3s ease;
  }

  #mobile-header.fixed-header .menu-btn svg {
    color: #333333;
  }

  /* === Logo Row Animation === */
  .logo-row {
    opacity: 0;
    visibility: hidden;
    transition: opacity 0.4s ease, visibility 0.4s ease;
  }

  .logo-row.fade-in {
    opacity: 1 !important;
    visibility: visible !important;
  }

  .logo-row.fade-out {
    opacity: 0 !important;
    visibility: hidden !important;
  }
}
</style>

<!--side bar-->
<style>
/* Body scroll lock */
body.offcanvas-open {
    overflow: hidden !important;
    position: fixed;
    width: 100%;
}

/* Offcanvas scrollable */
.offcanvas.offcanvas-end {
    width: 100%; /* adjust as needed */
}

.offcanvas-body {
    max-height: 100vh;
    overflow-y: auto;
    -webkit-overflow-scrolling: touch; /* smooth scroll on mobile */
}

/* Accordion plus/minus icons */
.acc-toggle .icon-minus { display: none; }
.acc-toggle[aria-expanded="true"] .icon-plus { display: none; }
.acc-toggle[aria-expanded="true"] .icon-minus { display: inline; }


</style>

</body>
</html>
