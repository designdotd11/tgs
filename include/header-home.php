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
    :root {
  --brand: #029bbe;
  --brand-hover: #0284a2;
  --text: #111;
  --muted-bg: #f3f3f3;
  --muted-border: #e7e7e7;
  --shadow: 0 4px 14px rgba(0, 0, 0, .06);
}

body {
    overflow-x: clip !important;
    width: 100%;
}

/* ====== LOGOS & BASE ====== */
.logo {
  position: relative;
}
.logo img {
  display: block;
  transition: all .35s ease;
}

.mobile-contact{
    display:none;
}

 .video-content-parent {
    margin-left: 85px;
      
  }

/* Show ONLY default logo on load (non-sticky) */
#header:not(.sticky-active) .logo-default {
  display: block !important;
  height: 180px;
  margin-left: 20px;
  margin-top: 10px;
}


#header:not(.sticky-active) .logo-blue {
  display: none !important;
}

/* Sticky header container */
#header.sticky-active {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1050;
  background: #fff;
  box-shadow: var(--shadow);
  transform: translateY(0)!important;
  transition: transform 0s ease !important; /* Added for smooth hide/show */
}

/* When hidden */
#header.sticky-active.hidden-by-scroll {
  transform: translateY(-100%)!important;
}


/* Swap logos on sticky */
#header.sticky-active .logo-default {
  display: none !important;
}
#header.sticky-active .logo-blue {
  display: block !important;
  height: 80px;
}

/* Prevent logo from shrinking when space is tight */
#header .logo {
  flex-shrink: 0;
}

/* ====== CTAs (CONTACT / APPLY) — compacted ====== */
#header-contact-us-btn,
#header-apply-now-btn {
  padding: 6px 12px;
  font-size: 14px;
  border: 1px solid transparent;
  border-radius: 6px;
  transition: background .25s, color .25s, border-color .25s;
}

#header-contact-us-btn {
  background: var(--muted-bg);
  border-color: var(--muted-border);
  color: var(--text) !important;
}
#header-contact-us-btn:hover {
  background: #eaeaea;
  color: var(--text) !important;
}

#header-apply-now-btn {
  background: var(--brand);
  color: #fff !important;
  font-weight: 600;
  border-color: var(--brand);
}
#header-apply-now-btn:hover {
  background: var(--brand-hover);
  border-color: var(--brand-hover);
}

/* ====== PHONE CHIP (Tel: number) — compacted ====== */
#header .phone-chip {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 0;
  border: 0;
  background: transparent;
  color: #fff !important;
  border-radius: 6px;
  line-height: 1;
  font-size: 14px;
  text-decoration: none;
  transition: background .25s, color .25s, border-color .25s, padding .25s;
}
#header .phone-chip .tel-icon {
  width: 16px;
  height: 16px;
  display: inline-block;
  object-fit: contain;
  transition: filter .25s, opacity .25s;
  filter: invert(1) brightness(2);
  opacity: .95;
}

#header.sticky-active .phone-chip {
  color: var(--text) !important;
  font-size: 13.5px;
}
#header.sticky-active .phone-chip:hover {
  background: #eaeaea;
  color: var(--text) !important;
}
#header.sticky-active .phone-chip .tel-icon {
  filter: none;
  opacity: 1;
  width: 15px;
  height: 15px;
}

/* Keep right-side spacing tidy — compact parent */
#header .cta-wrap {
  display: flex;
  align-items: center;
  gap: 12px;
}

/* Also ensure any plain tel links inside header turn dark on sticky */
#header.sticky-active a[href^="tel"],
#header.sticky-active .phone-link {
  color: var(--text) !important;
}
#header.sticky-active .phone-link img {
  filter: none;
  opacity: 1;
}

/* Modal visibility helper */
.formmodal-overlay {
  display: none;
  position: fixed;
  inset: 0;
  background: rgba(0, 0, 0, .6);
  z-index: 2000;
  align-items: center;
  justify-content: center;
}
.formmodal-overlay.show {
  display: flex;
}

.content-parent{
      margin-top: -246px;
     
  }
  
  
  .header-element-for-small-screen{
      display:none;
  }
  
  
  /* Mobile sticky header height */
  .form-mobile-sticky-header {
    height: auto;
  }

/* ====== Progressive compaction ====== */
@media (max-width: 1200px) {
  #header .cta-wrap {
    gap: 10px;
  }
  #header-contact-us-btn,
  #header-apply-now-btn {
    font-size: 13.5px;
    padding: 5px 10px;
  }
  #header .phone-chip {
    font-size: 13.5px;
  }
}

@media (max-width: 1620px) {

    .video-content-parent{
        margin-left: 15px;
    }
    
}


@media (max-width: 1444px) {

    .video-content-parent{
        margin-left: 42px;
    }
    
}

@media (max-width: 992px) {
  #header .cta-wrap {
    gap: 8px;
  }
  #header-contact-us-btn,
  #header-apply-now-btn {
    font-size: 13px;
    padding: 4px 9px;
  }
  #header .phone-chip {
    font-size: 13px;
  }
  #header .phone-chip .tel-icon {
    width: 14px;
    height: 14px;
  }
  .video-content-parent {
    margin-left: 39px;
      
  }
}

@media (max-width: 860px) {
  #header .cta-wrap {
    transform: scale(.94);
    transform-origin: right center;
  }
}

@media (max-width: 800px) {
  #header .cta-wrap {
    transform: scale(.90);
  }
}

/* ====== RESPONSIVE LOGO SIZES ====== */
#header .mobile-order-2 {
  display: inline-flex !important;
  align-items: center;
}

/* Hide buttons below 763px */
@media (max-width: 763px) {
  #header .phone-chip,
  #header #header-contact-us-btn,
  #header #header-apply-now-btn {
    display: none !important;
  }

  #header #header-cta-right,
  #header .cta-wrap {
    gap: 8px !important;
  }
  
  
  
  
  .formmodal-close {
      top: 5px;
    right: 11px;
  }
  
  
  .header-element-for-small-screen{
      display:block;
  }
  .header-element-hide-for-small-screen{
      display:none;
  }
  #header-cta-right{
      align-self: end;
      transform: translateY(10px);
  }
  .padding-buttom-for-small-screen{
      padding-bottom: 2px;
  }
  
   .logo-blue {
        display: block !important;
        height: 69px !important;
    }
}

@media (max-width: 576px) {
    
    .mobile-contact{
        display:block!important;
    }
    
  /* Hide default logo when header not sticky */
  #header:not(.sticky-active) .logo-default {
    visibility: hidden;
  }


    /*#header.sticky-active .logo-blue {*/
    /*    display: block !important;*/
    /*    height: 69px;*/
    /*}*/
    
  
    .logo-blue {
        display: block !important;
        height: 69px !important;
    }

    
  /* Mobile sticky header height */
  .form-mobile-sticky-header {
    height: 80px;
  }

  /* Adjust content positioning */
  .content-parent {
    margin-top: -246px;
    margin-left:-20px;
  }

  .slide-content {
    margin-left: -26px;
  }

  /* Make sure small video container is relative */
  .video-small-screen-div {
    position: relative;
    height: 80svh!important;
  }

  /* Logo overlay on top of video */
  .video-small-screen-div::before {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 240px;
    height: 184px;
    background: url("https://tgs.urips.co.in/assets/web/images/icon/logo.svg") no-repeat center center;
    background-size: contain;
    z-index: 10;  /* Ensure it’s above video */
  }

  /* Optional: push text content down so logo doesn’t overlap */
  .video-content-parent {
    z-index: 20;
    position: relative;
  }
  
  
  .header-element-for-small-screen{
      display:block;
  }
  .header-element-hide-for-small-screen{
      display:none;
  }
  #header-cta-right{
      align-self: end;
      transform: translateY(10px);
  }
  .padding-buttom-for-small-screen{
      padding-bottom: 2px;
  }
}


/* ===== Center big round logo on mobile ===== */


/* ====== ACCESSIBILITY ====== */
@media (prefers-reduced-motion: reduce) {
  .logo img {
    transition: none;
  }
}

/* Kill the white circle around the hamburger */
#header .btn-white {
  background: transparent !important;
  border: 0 !important;
  border-radius: 0 !important;
  padding: 0 !important;
  box-shadow: none !important;
}

/* Make the SVG visible on dark hero */
#header:not(.sticky-active) .btn-white svg {
  color: #fff;
  width: 40px;
  height: 40px;
}

/* Switch to dark stroke on sticky navbar */
#header.sticky-active .btn-white svg {
  color: var(--text);
}

/* Swap + / – automatically using aria-expanded */
.acc-toggle .icon-minus {
  display: none;
}
.acc-toggle[aria-expanded="true"] .icon-plus {
  display: none;
}
.acc-toggle[aria-expanded="true"] .icon-minus {
  display: inline;
}

</style>





</head>





<body>
<!-- Modal Overlay -->
  <div class="cmodal-overlay" id="cmodal">
    <div class="cmodal-box">
      <span class="cmodal-close" onclick="cmodalClose()">&times;</span>
      
      <div class="cmodal-content">
        <!-- Left Side -->
        <div class="cmodal-left">
          <h2>Visit us at our campus</h2>
          <p>Survey No 86/1,<br>
             Hennur Bagalur Road,<br>
             Baiyappanahalli Village,<br>
             Bidarahalli Hobli, Bengaluru 560049 Karnataka, INDIA
             </p>
             
          <div class="cmodal-map">
            <!-- <img src="https://via.placeholder.com/300x150" alt="Map" width="100%"> -->
            <div style="width: 306px;height: 250px;">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3517.045441390164!2d77.7171568!3d13.0698977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1bf69faf15eb%3A0xa519192dd1ee5683!2sThe%20Good%20Shepherd&#39;s%20School%20%7C%20Top%20CBSE%20Schools%20in%20KR%20Puram%20%7C%20Best%20Cbse%20School%20Near%20KR%20Puram!5e1!3m2!1sen!2sin!4v1758017896788!5m2!1sen!2sin" width="306" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>

        <!-- Right Side -->
        <div class="cmodal-right">
            <div>
            <h3>Call us on</h3>
            <p>Tel: <a href="tel:+917090031100">+91 70900 31100</a> ðŸ“ž</p>
          </div>

          <div>
          <h3>Write to us at</h3>
          <p><a href="mailto:mail@tgss.in">mail@tgss.in</a></p>
          </div>

          <div>
          <h3>Social Links</h3>
          <div class="cmodal-social">
            <a href="#">
                <img src="<?= base_url(
                    "assets/web"
                ) ?>/images/NewExtraImages/contact_facebook.png" alt="">
            </a>
            <a href="#">
                <img src="<?= base_url(
                    "assets/web"
                ) ?>/images/NewExtraImages/instagram.png" alt="">
                
            </a>
            <a href="#">
                <img src="<?= base_url(
                    "assets/web"
                ) ?>/images/NewExtraImages/linkedin.png" alt="">

            </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- form modal -->
   <!-- Admission Enquiry Modal -->
<?php $this->load->view('web/include/admission_enquiry_modal')?>


  
  
  
 <header class="header-home header" id="header">
          
            
            
            
 <nav class="navbar pt-2 padding-buttom-for-small-screen" >
   <div style="width: 75vw;margin:auto;text-align:center;padding-top: 2px;display:none;padding-bottom: 5px; "
   class="header-element-for-small-screen" id="header-above-contact-section">
        
        <div style="margin-bottom: 5px;">
           <a
            class="nav-link font-poppins fw-normal"
            href="tel:+917090031100"
            style="color:red;"
          >
            <img
              class="tel-icon"
              src="https://tgs.urips.co.in/assets/web/images/call-dark.png"
              alt="call"
            />
             +91 70900 31100/22
          </a>
        </div>
        <div style="display: flex;justify-content: center;gap:18px">
            <!-- Contact Us -->
          <button
            class="nav-link font-poppins fw-normal" style="background: var(--muted-bg);border-color: var(--muted-border);color: var(--text) !important;padding: 6px 12px;font-size: 14px;border: 1px solid transparent;border-radius: 6px;transition: background .25s, color .25s, border-color .25s;"
            onclick="window.location.href='/contact-us';"
          >
            CONTACT US
          </button>

          <!-- Apply Now -->
          <button
            class="nav-link font-poppins fw-medium"
            style="background: var(--brand);color: #fff !important;font-weight: 600;border-color: var(--brand);padding: 6px 12px;font-size: 14px;border: 1px solid transparent;border-radius: 6px;transition: background .25s, color .25s, border-color .25s;"
            onclick="openApplyNowForm()"
          >
            APPLY NOW
          </button>
        </div>
        </div>
  <div class="container-fluid side-space side-space-for-header for-mobile-header">
    <div class="d-flex justify-content-between w-100 align-items-center form-mobile-sticky-header">
      <div class="header-element-for-small-screen" id="header-below-contact-section">
                    
                <div style="width: 75vw;margin:auto;text-align:center;padding-top: 2px;" class="header-element-for-small-screen">
        
                <div style="margin-bottom: 5px;">
                   <a
                    class="nav-link font-poppins fw-normal"
                    href="tel:+917090031100"
                    style="color:red;"
                  >
                    <img
                      class="tel-icon"
                      src="https://tgs.urips.co.in/assets/web/images/call-dark.png"
                      alt="call"
                    />
                    +91 70900 31100/22
                  </a>
                </div>
                <div style="display: flex;justify-content: center;gap:18px">
                    <!-- Contact Us -->
                  <button
                    class="nav-link font-poppins fw-normal" style="background: var(--muted-bg);border-color: var(--muted-border);color: var(--text) !important;padding: 6px 12px;font-size: 14px;border: 1px solid transparent;border-radius: 6px;transition: background .25s, color .25s, border-color .25s;"
                    onclick="window.location.href='/contact-us';"
                  >
                    CONTACT US
                  </button>
        
                  <!-- Apply Now -->
                  <button
                    class="nav-link font-poppins fw-medium"
                    style="background: var(--brand);color: #fff !important;font-weight: 600;border-color: var(--brand);padding: 6px 12px;font-size: 14px;border: 1px solid transparent;border-radius: 6px;transition: background .25s, color .25s, border-color .25s;"
                    onclick="openApplyNowForm()"
                  >
                    APPLY NOW
                  </button>
                </div>
                </div>
                    
            </div>

       
      <!-- Logo -->
      <div class="sticky-logo mobile-order-1 header-element-hide-for-small-screen" id="logo-section-for-small-screen">
          <div class="mobile-contact">
              <!-- Phone -->
          <a
            class="nav-link font-poppins fw-normal phone-chip"
            href="tel:+917090031100"
          >
            <img
              class="tel-icon"
              src="https://tgs.urips.co.in/assets/web/images/call-dark.png"
              alt="call"
            />
            +91 70900 31100/22
          </a>

          <!-- Contact Us -->
          <button
            class="nav-link font-poppins fw-normal"
            id="header-contact-us-btn"
            onclick="window.location.href='/contact-us';"
          >
            CONTACT US
          </button>

          <!-- Apply Now -->
          <button
            class="nav-link font-poppins fw-medium"
            id="header-apply-now-btn"
            onclick="openApplyNowForm()"
          >
            APPLY NOW
          </button>
          </div>
        <a href="https://tgs.urips.co.in/">
          <div class="logo">
            <img
              src="https://tgs.urips.co.in/assets/web/images/GoodShep-bluelogo.svg"
              alt="Logo"
              class="logo-blue"
            />
            <img
              src="https://tgs.urips.co.in/assets/web/images/icon/logo.svg"
              alt="Logo"
              class="logo-default"
            />
          </div>
        </a>
      </div>

      <!-- Header CTA Right -->
      <div
        id="header-cta-right"
        style="display: flex; justify-content: flex-end; align-items: center; gap: 20px;"
      >
        <div class="cta-wrap">
          <!-- Phone -->
          <a
            class="nav-link font-poppins fw-normal phone-chip"
            href="tel:+917090031100"
          >
            <img
              class="tel-icon"
              src="https://tgs.urips.co.in/assets/web/images/call-dark.png"
              alt="call"
            />
            +91 70900 31100/22
          </a>

          <!-- Contact Us -->
          <button
            class="nav-link font-poppins fw-normal"
            id="header-contact-us-btn"
            onclick="window.location.href='/contact-us';"
          >
            CONTACT US
          </button>

          <!-- Apply Now -->
          <button
            class="nav-link font-poppins fw-medium"
            id="header-apply-now-btn"
            onclick="openApplyNowForm()"
          >
            APPLY NOW
          </button>

          <!-- Humburger Button -->
          <button
            class="btn btn-text ps-0 mobile-order-2"
            data-bs-toggle="offcanvas"
            data-bs-target="#humburgmenu"
          >
            <span class="btn-white">
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

  <!-- Quick Actions Offcanvas (Mobile) -->
  <div
    class="offcanvas offcanvas-bottom quick-actions-offcanvas"
    tabindex="-1"
    id="quickActions"
    aria-labelledby="quickActionsLabel"
  >
    <div class="offcanvas-header">
      <h6 class="offcanvas-title" id="quickActionsLabel">Quick Actions</h6>
      <button
        type="button"
        class="btn-close"
        data-bs-dismiss="offcanvas"
        aria-label="Close"
      ></button>
    </div>

    <div class="offcanvas-body">
      <div class="list-group">
        <!-- Phone -->
        <a
          href="tel:+917090031100"
          class="list-group-item list-group-item-action d-flex align-items-center justify-content-between"
        >
          <span class="d-flex align-items-center gap-2">
            <i class="bi bi-telephone"></i> Tel: +91 70900 31100
          </span>
          <i class="bi bi-chevron-right"></i>
        </a>

        <!-- Contact Us -->
        <a
          href="/contact-us"
          class="list-group-item list-group-item-action d-flex align-items-center justify-content-between"
        >
          <span class="d-flex align-items-center gap-2">
            <i class="bi bi-chat-left-text"></i> Contact Us
          </span>
          <i class="bi bi-chevron-right"></i>
        </a>

        <!-- Apply Now -->
        <button
          class="list-group-item list-group-item-action d-flex align-items-center justify-content-between"
          onclick="openApplyNowForm()"
        >
          <span class="d-flex align-items-center gap-2">
            <i class="bi bi-pencil-square"></i> Apply Now
          </span>
          <i class="bi bi-chevron-right"></i>
        </button>
      </div>
    </div>
  </div>
</nav>

           
        </header>
<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>





<script>
$(function () {
  const $header = $("#header");
  if (!$header.length) return;

  let lastScrollTop = $(window).scrollTop();
  let upAccum = 0;
  let hideThreshold = $(window).height() * 0.5;
  let isHidden = false;

  function setSticky(active) {
    const isStickyNow = $header.hasClass("sticky-active");
    if (active && !isStickyNow) {
      $header.addClass("sticky-active");
      $("body").css("padding-top", $header.outerHeight() + "px");
    } else if (!active && isStickyNow) {
      $header.removeClass("sticky-active hidden-by-scroll");
      $("body").css("padding-top", "");
      isHidden = false;
      upAccum = 0;
    }
  }

  function handleScroll() {
    const scrollTop = $(window).scrollTop();
    setSticky(scrollTop > 100);

    if (!$header.hasClass("sticky-active")) {
      lastScrollTop = scrollTop;
      upAccum = 0;
      return;
    }

    const delta = scrollTop - lastScrollTop;

    if (delta > 5) {
      if (!isHidden) {
        $header.addClass("hidden-by-scroll");
        isHidden = true;
        upAccum = 0;
      }
    } else if (delta < -5) {
      upAccum += -delta;
      if (upAccum > hideThreshold && isHidden) {
        $header.removeClass("hidden-by-scroll");
        isHidden = false;
      }
    }
    lastScrollTop = scrollTop;
  }

  let ticking = false;
  $(window).on("scroll", function () {
    if (!ticking) {
      window.requestAnimationFrame(function () {
        handleScroll();
        ticking = false;
      });
      ticking = true;
    }
  });

  $(window).on("resize", function () {
    hideThreshold = $(window).height() * 0.5;
    if ($header.hasClass("sticky-active")) {
      $("body").css("padding-top", $header.outerHeight() + "px");
    }
  });
});
</script>



<script>
$(function () {
  $(".accordion-btn").on("click", function () {
    const $this = $(this);
    const $content = $this.next(".accordion-content");

    $(".accordion-content").not($content).slideUp(300);
    $(".accordion-btn").not($this)
      .removeClass("active")
      .find("i")
      .removeClass("fa-minus")
      .addClass("fa-plus");

    $this.toggleClass("active");
    $this.find("i").toggleClass("fa-plus fa-minus");
    $content.stop(true, true).slideToggle(300);
  });
});
</script>




<script>
// Close other accordions when one is opened
document.addEventListener('DOMContentLoaded', function() {
  const accordionButtons = document.querySelectorAll('.accordion-button');
  
  accordionButtons.forEach(button => {
    button.addEventListener('click', function() {
      const isExpanded = this.getAttribute('aria-expanded') === 'true';
      
      if (!isExpanded) {
        // Close all other accordions
        accordionButtons.forEach(otherButton => {
          if (otherButton !== button) {
            otherButton.setAttribute('aria-expanded', 'false');
            otherButton.classList.add('collapsed');
            const targetId = otherButton.getAttribute('data-bs-target');
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
              targetElement.classList.remove('show');
            }
          }
        });
      }
    });
  });
});
</script>

<!-- Single script for Apply Now modal (toggle type) -->
<!-- Single script for Apply Now modal (toggle type using show/hide) -->
<script>
$(function () {
    // Toggle modal using show/hide
    function toggleApplyNowForm() {
        const $modal = $("#formModal");
        if (!$modal.length) {
            console.error("#formModal not found!");
            return;
        }

        if ($modal.is(":visible")) {
            // Hide modal
            $modal.hide();
            $("body").css("overflow", "");
        } else {
            // Show modal
            $modal.show();
            $("body").css("overflow", "hidden");
        }
    }

    // Close modal explicitly
    function closeFormModal() {
        const $modal = $("#formModal");
        if (!$modal.length) return;

        if ($modal.is(":visible")) {
            $modal.hide();
            $("body").css("overflow", "");
        }
    }

    // Button clicks to toggle modal
    $(document).on("click", "#header-apply-now-btn, .header-element-for-small-screen button", function (e) {
        if ($(this).text().trim() === "APPLY NOW") {
            e.preventDefault();
            toggleApplyNowForm();
        }
    });

    $(document).on("click", "a[href='<?= base_url('admission-enquiry') ?>']", function (e) {
        e.preventDefault();
        toggleApplyNowForm();
    });

    $(document).on("click", ".list-group-item-action", function (e) {
        if ($(this).find("i.bi-pencil-square").length) {
            e.preventDefault();
            toggleApplyNowForm();
        }
    });

    $(document).on("click", "[onclick*='openApplyNowForm']", function (e) {
        e.preventDefault();
        toggleApplyNowForm();
    });

    // Close modal by clicking outside
    $(document).on("click", "#formModal", function (e) {
        if (e.target.id === "formModal") closeFormModal();
    });

    // Close modal with Escape key
    $(document).on("keydown", function (e) {
        if (e.key === "Escape") closeFormModal();
    });

    // Close modal with X button
    $(document).on("click", "#formModalSpan", function () {
        closeFormModal();
    });

    // Auto open modal on specific paths
    function shouldAutoOpenModal() {
        const currentPath = window.location.pathname;
        const allowedPaths = ["/", "/index.php", "/home", "/welcome"];
        return allowedPaths.some(path => currentPath === path || currentPath.endsWith(path));
    }

    if (shouldAutoOpenModal()) {
        setTimeout(toggleApplyNowForm, 3000);
    }

    // Make toggle function globally accessible for inline onclick
    window.openApplyNowForm = toggleApplyNowForm;
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



<!--for logo section resizing making visible-->
<script>
    $(document).ready(function() {
    function removeSpecificInlineStyles() {
        var w = $(window).width();

        if (w > 576) { // Desktop screens
            // Remove specific inline styles
            $('.header-element-for-small-screen').css('display', '');
            $('.header-element-hide-for-small-screen').css('display','');
            $('#header-cta-right').css({
                'align-self': '',
                'transform': ''
            });
             $('.header-above-contact-section').hide();
        } 
        
        if(w <= 576){
            $('#header-above-contact-section').css('display', 'none');
        }
    }

    // Run on page load
    removeSpecificInlineStyles();

    // Run on window resize
    $(window).on('resize', function() {
        removeSpecificInlineStyles();
    });
});

</script>

<!--for humbergur meni mobile-->
<script>
//   $(document).ready(function() {
//     var lastScrollTop = 0;
//     var w = $(window).width();

//     function scrollHide(){
//         $(window).on('scroll', function() {
//             var st = $(this).scrollTop();
    
//             if (st > lastScrollTop) {
//                 // Scrolling down – slow hide
//                 $('.btn-white').hide(); // 1000ms = 1 second
//             } else {
//                 // Scrolling up – fast show
//                 $('.btn-white').show(); // 200ms = 0.2 second
//             }
    
//             lastScrollTop = st;
//         });
//      };
 
//      // Run only if screen width <= 576px
//     if ($(window).width() <= 576) {
//         scrollHide();
       
//     }
// });



$(document).ready(function() {
    function adjustHeroForm() {
        var w = $(window).width();
        if (w >= 576 && w <= 800) {
            $('.hero-form-section').css('transform', 'translateY(-540px)');
            $('.hero-form-section').css('margin-left', '-66px');
        } 
        
         if (w >= 801 && w <= 1000) {
            $('.hero-form-section').css('transform', 'translateY(-540px)');
            // $('.btn-white').hide();
            $('.hero-form-section').css('margin-left', '-35px');
        } 
    }
    
    // Run on page load
    adjustHeroForm();

    // Run on window resize
    $(window).resize(function() {
        adjustHeroForm();
    });
});





</script>







