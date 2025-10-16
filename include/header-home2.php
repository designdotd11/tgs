<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view("web/include/meta"); ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url("assets/web") ?>/images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15. Start humburg menu4/css/all.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= base_url("assets/web") ?>/css/style.css" />
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.1.9/dist/lenis.css">
    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Hurricane&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url("assets/web") ?>/css/NewExtraCss.css" />
     
<style>
:root{
  --brand:#029bbe;
  --brand-hover:#0284a2;
  --text:#111;
  --muted-bg:#f3f3f3;
  --muted-border:#e7e7e7;
  --shadow:0 4px 14px rgba(0,0,0,.06);
}

/* ====== LOGOS & BASE ====== */
.logo{ position:relative; }
.logo img{ display:block; transition:all .35s ease; }

/* Show ONLY default logo on load (non-sticky) */
#header:not(.sticky-active) .logo-default{ display:block !important; height:180px; margin-left:20px; margin-top:10px;}
#header:not(.sticky-active) .logo-blue{ display:none !important; }

/* Sticky header container */
#header.sticky-active{
  position:fixed; top:0; left:0; right:0; z-index:1050;
  background:#fff; box-shadow:var(--shadow);
}

/* Swap logos on sticky */
#header.sticky-active .logo-default{ display:none !important; }
#header.sticky-active .logo-blue{ display:block !important; height:80px; }

/* Prevent logo from shrinking when space is tight */
#header .logo{ flex-shrink:0; }

/* ====== CTAs (CONTACT / APPLY) — compacted ====== */
#header-contact-us-btn,
#header-apply-now-btn{
  padding:6px 12px;            /* was 6px 14px */
  font-size:14px;              /* was 15px */
  border:1px solid transparent;
  border-radius:6px;
  transition:background .25s,color .25s,border-color .25s;
}

#header-contact-us-btn{
  background:var(--muted-bg); border-color:var(--muted-border);
  color:var(--text) !important;
}
#header-contact-us-btn:hover{
  background:#eaeaea; color:var(--text) !important;
}

#header-apply-now-btn{
  background:var(--brand); color:#fff !important; font-weight:600; border-color:var(--brand);
}
#header-apply-now-btn:hover{
  background:var(--brand-hover); border-color:var(--brand-hover);
}

/* ====== PHONE CHIP (Tel: number) — compacted ====== */
/* Default over hero (non-sticky): white text, no box */
#header .phone-chip{
  display:inline-flex; align-items:center; gap:8px; /* was 10px */
  padding:0; border:0; background:transparent;
  color:#fff !important; border-radius:6px; line-height:1;
  font-size:14px;                 /* was 15px */
  text-decoration:none;
  transition:background .25s,color .25s,border-color .25s, padding .25s;
}
#header .phone-chip .tel-icon{
  width:16px; height:16px;       /* was 18x18 */
  display:inline-block; object-fit:contain;
  transition:filter .25s, opacity .25s;
  filter:invert(1) brightness(2); opacity:.95;
}

/* When sticky (white navbar): match CONTACT US boxed style */
#header.sticky-active .phone-chip{
  /*padding:5px 10px;     */
  /*background:var(--muted-bg);*/
  /*border:1px solid var(--muted-border);*/
  color:var(--text) !important;
  font-size:13.5px;              /* smaller in sticky */
}
#header.sticky-active .phone-chip:hover{
  background:#eaeaea; color:var(--text) !important;
}
#header.sticky-active .phone-chip .tel-icon{
  filter:none; opacity:1; width:15px; height:15px; /* slightly smaller icon */
}

/* Keep right-side spacing tidy — compact parent */
#header .cta-wrap{ display:flex; align-items:center; gap:12px; } /* was 20px */

/* Also ensure any plain tel links inside header turn dark on sticky */
#header.sticky-active a[href^="tel"], 
#header.sticky-active .phone-link{
  color:var(--text) !important;
}
#header.sticky-active .phone-link img{ filter:none; opacity:1; }

/* Modal visibility helper */
.formmodal-overlay{ display:none; position:fixed; inset:0; background:rgba(0,0,0,.6);
  z-index:2000; align-items:center; justify-content:center; }
.formmodal-overlay.show{ display:flex; }


/* ====== Progressive compaction so logo keeps room ====== */
@media (max-width:1200px){
  #header .cta-wrap{ gap:10px; }
  #header-contact-us-btn, #header-apply-now-btn{ font-size:13.5px; padding:5px 10px; }
  #header .phone-chip{ font-size:13.5px; }
}
@media (max-width:992px){
  #header .cta-wrap{ gap:8px; }
  #header-contact-us-btn, #header-apply-now-btn{ font-size:13px; padding:4px 9px; }
  #header .phone-chip{ font-size:13px; }
  #header .phone-chip .tel-icon{ width:14px; height:14px; }
}
/* Optional gentle scale if space still tight */
@media (max-width:860px){
  #header .cta-wrap{ transform:scale(.94); transform-origin:right center; }
}
@media (max-width:800px){
  #header .cta-wrap{ transform:scale(.90); }
}

/* ====== RESPONSIVE LOGO SIZES ====== */
/*@media (max-width:768px){*/
/*  #header:not(.sticky-active) .logo-default{ height:66px; }*/
/*  #header.sticky-active .logo-blue{ height:30px; }*/
/*  #header.sticky-active .phone-chip{ padding:6px 12px; font-size:14px; }*/
/*  #header .cta-wrap{ gap:12px; }*/
/*}*/

/*@media (min-width: 764px){*/
/*  #header .mobile-order-2{*/
/*    display: none !important;*/
/*  }*/
/*}*/

/* ✅ Always show hamburger button */
#header .mobile-order-2{
  display: inline-flex !important;
  align-items: center;
}

/* ✅ On ≤ 763px: hide Tel / Contact Us / Apply Now buttons */
@media (max-width: 763px){
  #header .phone-chip,
  #header #header-contact-us-btn,
  #header #header-apply-now-btn{
    display: none !important;
  }

  /* adjust spacing when only hamburger is visible */
  #header #header-cta-right,
  #header .cta-wrap{
    gap: 8px !important;
  }
}


/* ===== Center big round logo on mobile, keep hamburger in place ===== */
@media (max-width: 576px){
  /* Make header a positioning context */
  #header{ position: relative; }
  
  .side-space-for-header{
      display:none;
  }

  /* Center the logo block only when NOT sticky */
  #header:not(.sticky-active) .sticky-logo{
    position: absolute;
    top: 50vh;                 /* vertical center of the viewport */
    left: 50%;
    transform: translate(-50%, -50%);
    display: block;
    width: auto;
    min-height: 0;
    z-index: 2;                /* sits above hero but below the menu button */
    text-align: center;
    pointer-events: none;      /* so floating widgets/buttons remain clickable */
  }

  /* The actual logo image size */
  #header:not(.sticky-active) .logo-default{
    height: 230px;
    margin: 0 auto;
    display: block;
  }

  /* When sticky, revert to normal flow */
  #header.sticky-active .sticky-logo{
    position: static;
    transform: none;
    top: auto; left: auto;
    min-height: auto;
    pointer-events: auto;
  }

  /* Keep hamburger visible and clickable above the centered logo */
  #header .mobile-order-2{
    position: relative;
    z-index: 3;          /* above centered logo */
    display: inline-flex !important;
    align-items: center;
  }
  
}




/* ====== ACCESSIBILITY ====== */
@media (prefers-reduced-motion:reduce){
  .logo img{ transition:none; }
}

/* Kill the white circle around the hamburger */
#header .btn-white{
  background: transparent !important;
  border: 0 !important;
  border-radius: 0 !important;
  padding: 0 !important;
  box-shadow: none !important;
}

/* Make the SVG visible on dark hero */
#header:not(.sticky-active) .btn-white svg{
  color: #fff;          /* stroke follows currentColor */
  width: 40px; height: 40px; /* same as your inline font-size */
}

/* Switch to dark stroke on white sticky navbar */
#header.sticky-active .btn-white svg{
  color: var(--text);   /* #111 from your vars */
}

/* Swap + / – automatically using aria-expanded */
.acc-toggle .icon-minus { display:none; }
.acc-toggle[aria-expanded="true"] .icon-plus { display:none; }
.acc-toggle[aria-expanded="true"] .icon-minus { display:inline; }

</style>




</head>

<script>
/* Sticky toggle + prevent layout jump */
(function(){
  const header = document.getElementById('header');
  if(!header) return;

  let ticking = false;

  function setSticky(yes){
    const isSticky = header.classList.contains('sticky-active');
    if(yes && !isSticky){
      header.classList.add('sticky-active');
      document.body.style.paddingTop = header.offsetHeight + 'px';
    }else if(!yes && isSticky){
      header.classList.remove('sticky-active');
      document.body.style.paddingTop = '';
    }
  }

  function onScroll(){ setSticky(window.scrollY > 50); }

  document.addEventListener('DOMContentLoaded', onScroll);
  window.addEventListener('scroll', () => {
    if(!ticking){ requestAnimationFrame(() => { onScroll(); ticking = false; }); ticking = true; }
  });
  window.addEventListener('resize', () => {
    if(header.classList.contains('sticky-active')){
      document.body.style.paddingTop = header.offsetHeight + 'px';
    }
  });
})();
</script>

<!-- Keep Bootstrap bundle for offcanvas/close buttons -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>



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
   <!-- Modal -->
  <div class="formmodal-overlay" id="formModal">
    <div class="formmodal-box">
      <span class="formmodal-close" onclick="closeFormModal()">&times;</span>

      <!-- Left content -->
      <div class="formmodal-left">
        <h2>Fill this form to help us personalise your experience</h2>
        <form class="formmodal-form" method="post" action="<?= base_url(
            "save-enquiry"
        ) ?>">
          <div>
            <label>Session <span>*</span></label>
            <select>
              <option>Select Session</option>
              <option>2025-26</option>
              <option>2026-27</option>
            </select>
          </div>
          <div>
            <label>Name of the Student <span>*</span></label>
            <input type="text" placeholder="Enter student name">
          </div>
          <div>
            <label>Father's Name <span>*</span></label>
            <input type="text" placeholder="Enter father's name">
          </div>
          <div>
            <label>Phone Number <span>*</span></label>
            <input type="tel" placeholder="Ex. +91 111 111 1111">
          </div>
          <!--<div class="formmodal-full">-->
          <!--  <label>Email ID <span>*</span></label>-->
          <!--  <input type="email" placeholder="Enter email">-->
          <!--</div>-->
          <!--<div class="formmodal-full">-->
          <!--  <label>Admission for Grade <span>*</span></label>-->
          <!--  <select>-->
          <!--    <option>Select Grade</option>-->
          <!--    <option>Nursery</option>-->
          <!--    <option>Grade 1</option>-->
          <!--    <option>Grade 2</option>-->
          <!--  </select>-->
          <!--</div>-->
        </form>
        <div class="formmodal-submit">
          <button type="submit">Submit</button>
        </div>
      </div>

      <!-- Right side image -->
      <div class="formmodal-right"></div>
    </div>
  </div>
  
  
 <header class="header-home header" id="header">
            <!--<nav class="navbar pt-2">-->
            <!--    <div class="container-fluid side-space for-mobile-header">-->
            <!--        <div class="d-flex justify-content-between w-100 align-items-center  form-mobile-sticky-header">-->
            <!--            <div class="d-flex gap-4 align-items-center order-mobile-3">-->
                           <!--<button class="btn btn-text ps-0 mobile-order-2" data-bs-toggle="offcanvas" data-bs-target="#humburgmenu">-->
                           <!--     <span class="btn-white">-->
                           <!--         <img src="<?= base_url("assets/web") ?>/images/humburg.png" alt="humburger">-->
                           <!--     </span>-->
                           <!--     <span class="hide-mobile">Menu</span>-->
                           <!-- </button>-->


                            <!--<button class="btn btn-text ps-0">-->
                            <!--    <span>-->
                            <!--        <img src="<?= base_url(
                                "assets/web"
                            ) ?>/images/user.png" width="30" height="30" alt="Login" class="light">-->
                            <!--        <img src="<?= base_url(
                                "assets/web"
                            ) ?>/images/user-dark.png" width="30" height="30" alt="Login" class="dark">-->
                            <!--       </span> <saan class="hide-mobile">Login</saan>-->
                            <!--</button>-->

                            <!--<button class="btn btn-text ps-0" data-bs-toggle="offcanvas" data-bs-target="#search">-->
                            <!--    <span><img src="<?= base_url(
                                "assets/web"
                            ) ?>/images/search.png" width="30" height="30" alt="Search" class="light">-->
                            <!--    <img src="<?= base_url(
                                "assets/web"
                            ) ?>/images/search-dark.png" width="30" height="30" alt="Search" class="dark">-->
                            
                            <!--</span>-->
                            <!--</button>-->
            <!--            </div>-->

            <!--            <div class="sticky-logo mobile-order-1">-->
            <!--                <a href="<?= base_url("") ?>">-->
            <!--                    <div class="logo">-->
            <!--                        <img src="<?= base_url(
                "assets/web"
            ) ?>/images/TGS-circle-logo.svg" alt="Logo" class="logo-1">-->
            <!--                        <img src="<?= base_url(
                "assets/web"
            ) ?>/images/GoodShep-bluelogo.svg" alt="Logo"  class="logo-2">-->
            <!--                    </div>-->
            <!--                </a>-->
            <!--            </div>-->


            <!--            <div class="right-section">-->
            <!--                <ul class="navbar-nav flex-row gap-3 gap-xl-5">-->
            <!--                    <li class="nav-item">-->
            <!--                        <a class="nav-link font-poppins fw-normal" href="tel:+91 70900 31100">-->
            <!--                            <span>-->
            <!--                                <img src="<?= base_url(
                "assets/web"
            ) ?>/images/call.png" alt="call" class="light">-->
            <!--                                <img src="<?= base_url(
                "assets/web"
            ) ?>/images/call-dark.png" alt="call" class="dark">-->
            <!--                        </span> +91 70900 31100</a>-->
            <!--                    </li>-->
            <!--                    <li class="nav-item">-->
            <!--                        <a class="nav-link font-poppins fw-medium" href="<?= base_url(
                "admission-enquiry"
            ) ?>"><b>APPLY NOW</b></a>-->
            <!--                    </li>-->
            <!--                </ul>-->

            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            
            
            
            
 <nav class="navbar pt-2">
                <div class="container-fluid side-space side-space-for-header for-mobile-header">
                    <div class="d-flex justify-content-between w-100 align-items-center  form-mobile-sticky-header">
                        <div class="sticky-logo mobile-order-1">
                            <a href="https://tgs.urips.co.in/">
                                <div class="logo">
                                    <img src="https://tgs.urips.co.in/assets/web/images/GoodShep-bluelogo.svg" 
                                         alt="Logo" 
                                         class="logo-blue">
                                    
                                    <img src="https://tgs.urips.co.in/assets/web/images/icon/logo.svg" 
                                         alt="Logo"  
                                         class="logo-default">
                                </div>
                            </a>
                        </div>

                      <div id="header-cta-right" style="display: flex; justify-content: flex-end; align-items: center; gap: 20px;">

                        

                           <div class="cta-wrap">
  <!-- Phone -->
  <a class="nav-link font-poppins fw-normal phone-chip" href="tel:+917090031100">
    <img class="tel-icon" src="https://tgs.urips.co.in/assets/web/images/call-dark.png" alt="call">
    Tel: +91 70900 31100
  </a>

  <!-- Contact Us -->
  <button class="nav-link font-poppins fw-normal" id="header-contact-us-btn"
          onclick="window.location.href='/contact-us';">
    CONTACT US
  </button>

  <!-- Apply Now -->
  <button class="nav-link font-poppins fw-medium" id="header-apply-now-btn"
          onclick="openApplyNowForm()">
    APPLY NOW
  </button>
<button class="btn btn-text ps-0 mobile-order-2" data-bs-toggle="offcanvas" data-bs-target="#humburgmenu">
  <span class="btn-white">
    <svg xmlns="http://www.w3.org/2000/svg" stroke="currentColor" fill="none" stroke-width="1.5"
         viewBox="0 0 24 24" aria-hidden="true" width="40" height="40">
      <path stroke-linecap="round" stroke-linejoin="round"
            d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
    </svg>
  </span>
</button>



</div>

                        </div>

                    </div>
                </div>

                <!-- saerch -->

                <!--<div class="offcanvas offcanvas-top offcanvas-bg" id="search">-->
                <!--    <div class="offcanvas-header pb-4">-->
                <!--        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" style="filter: invert(1);"></button>-->
                <!--    </div>-->
                <!--    <div class="offcanvas-body side-space">-->
                <!--        <div class="w-75 m-auto">-->
                <!--            <form action="#" class="pt-3 mt-5">-->
                <!--                <div class="search">-->
                <!--                    <div class="input-group">-->
                <!--                        <input type="text" class="form-control form-search border-end-0" placeholder="Search..." style="height: 60px; border-radius:4px 0 0 4px">-->
                <!--                        <span class="input-group-text border-0" style="background-color:#e2e2e2;"><i class="fas fa-search" style="color:#029bbe;font-size:24px;"></i></span>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </form>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->



                <!-- Start humburg menu -->

                   <div class="offcanvas offcanvas-end" id="humburgmenu">
                      
                      <div class="offcanvas-body">
                            <div class="row">

                                <div class="col-xl-3 col-lg-4  col-md-12 px-0  header-left-side">
                                    <div id="content-box" class="px-5">
                                        <div class="pre-menu">
                                            <div class="sideoverlay-content">
                                                <div class="menu-container">
        
                                                            <div class="logo pt-3 humburg-logo">
                                                                <a href="<?= base_url(
                                                                    ""
                                                                ) ?>" class="px-0">
                                                                <img src="<?= base_url(
                                                                    "assets/web"
                                                                ) ?>/images/logo.svg" alt="Logo" class="img-fluid">
                                                                </a>
                                                            </div>
                                                             <h1 class="logo-text" >The Good Shepherd's School </h1> 
                                                        
        
                                                    <ul class="menu-list mt-3">
                                                        <li class="d-flex gap-3 align-items-center py-2" style="line-height: 24px;  border-bottom: 1px solid #6666664a;">
                                                            <span>
                                                                <i class="fas fa-regular fa-paper-plane"></i>
                                                            </span>
                                                            <div>
                                                                <a href="<?= base_url(
                                                                    "admission-enquiry"
                                                                ) ?>" class="slide-menu p-0">Apply Now</a>
                                                            </div>
                                                        </li>
        

                                                        <li class="d-flex gap-3 align-items-center py-2">
                                                            <span>
                                                                <i class="fas fa-envelope"></i>
                                                            </span>
        
                                                            <div>
                                                                <a class="slide-menu p-0" href="mailto:mail@tgss.in">
                                                                    Request Information
                                                                </a>
                                                            </div>
        
                                                        </li>
        
                                                    </ul>
        
                                                </div>
                                            </div>
        
        
                                            <div class="more-info mt-5">
                                                <h4> Info For</h4>
                                                <div class="more-info-menu">
                                                    <ul class="more-info-list">
                                                        <li><a href="<?= base_url(
                                                            "the-school"
                                                        ) ?>">About</a></li>
                                                        <li><a href="<?= base_url(
                                                            "news"
                                                        ) ?>">News</a></li>
                                                        <li><a href="<?= base_url(
                                                            "curriculum"
                                                        ) ?>">Classes</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
        
                                    </div>
                                </div>
        
                                <div class="col-xl-9 col-lg-8 col-md-12  px-0 pt-5 header-humburg-logo">
                                    <div class="humurg-cross">
                                        <span class="btn-span-close">CLOSE</span>
                                         <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                                    </div>
                                    <div class="menu-list-left side-space side-space-for-header">
                                        <div class="scroll-container">
                                        <div class="accordion" id="accordionPanelsStayOpenExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
        
                                                        The School
                                                        About Us
                                                    </button>
                                                </h2>
                                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                                                    <div class="accordion-body p-0">
                                                        <div class="sideoverlay-content content-box-1">
                                                            <div class="sub-menu-container">
                                                                 <ul class="menu-list">
                                                                    <li><a href="/">Home</a></li>
                                                                    <li><a href="<?= base_url(
                                                                        "the-school"
                                                                    ) ?>">The School</a></li>
                                                                    <li><a href="<?= base_url(
                                                                        "the-school"
                                                                    ) ?>">The School</a></li>
                                                                    <li><a href="<?= base_url(
                                                                        "vision-mission-value"
                                                                    ) ?>">Vision, Mission & Values</a></li>
                                                                     <li><a href="<?= base_url(
                                                                         "president-desk"
                                                                     ) ?>">From The President's Desk</a></li>
                                                                    <li><a href="<?= base_url(
                                                                        "founder-desk"
                                                                    ) ?>">From The Founder's Desk</a></li>
                                                                    <li><a href="<?= base_url(
                                                                        "director-message"
                                                                    ) ?>">From the Director's Desk</a></li>
                                                                    <li><a href="<?= base_url(
                                                                        "our-legacy"
                                                                    ) ?>">Our Legacy of The Chronicles</a></li>
                                                                    <li><a href="<?= base_url(
                                                                        "institutions"
                                                                    ) ?>">Our Institutions</a></li>
                                                                     <li><a href="<?= base_url(
                                                                         "associations-and-collaborations"
                                                                     ) ?>">Associations & Collaborations</a></li>
                                                                    <li><a href="<?= base_url(
                                                                        "public-disclosure"
                                                                    ) ?>">Mandatory Public Disclosure</a></li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                        Academics
                                                    </button>
                                                </h2>
                                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                                    <div class="accordion-body p-0">
                                                        <div class="sideoverlay-content content-box-1">
                                                            <div class="sub-menu-container">
                                                                <ul class="menu-list">
                                                                    <li><a href="<?= base_url(
                                                                        "academics-overview"
                                                                    ) ?>">Overview</a></li>
                                                                    <li><a href="<?= base_url(
                                                                        "curriculum"
                                                                    ) ?>">Curriculum / Courses of Study</a></li>
                                                                    <li><a href="<?= base_url(
                                                                        "assessment-systems"
                                                                    ) ?>">Examination, Assessment Systems</a></li>
                                                                    <li><a href="<?= base_url(
                                                                        "annual-calendar"
                                                                    ) ?>">Annual Calendar</a></li>
                                                                    <li><a href="<?= base_url(
                                                                        "school-timing"
                                                                    ) ?>">School Timings</a></li>
                                                                    <li><a href="#">Learning Support</a></li>
                                                                    <li><a href="#">Technology</a></li>
        
                                                                    <li><a href="#">Library</a></li>
        
                                                                    <li><a href="#">Career Guidance</a></li>
                                                                    <li><a href="#">Results</a></li>
        
                                                                    <li><a href="#">Transfer Certificates</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                                        Beyond
                                                        Academics
                                                    </button>
                                                </h2>
                                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                                    <div class="accordion-body p-0">
                                                        <div class="sideoverlay-content content-box-1">
                                                            <div class="sub-menu-container">
                                                                <ul class="menu-list">
                                                                    <li><a href="<?= base_url(
                                                                        "houses"
                                                                    ) ?>">Houses , Clubs, Visits & Excursions, Student Council</a></li>
                                                                      <li><a href="<?= base_url(
                                                                          "guidance-and-counselling"
                                                                      ) ?>">Guidance & Counselling, Workshops and Orientations </a></li>
                                                                    <li><a href="<?= base_url(
                                                                        "creative-arts"
                                                                    ) ?>">Creative Arts</a></li>
                                                                    <li><a href="<?= base_url(
                                                                        "library-systems"
                                                                    ) ?>"> Library </a></li>
                                                                    <li><a href="<?= base_url(
                                                                        "laboratories"
                                                                    ) ?>">Laboratories</a></li>
                                                                    <li><a href="<?= base_url(
                                                                        "ai-and-coding-and-robotics"
                                                                    ) ?>">AI, Coding & Robotics</a></li>
                                                                    <li><a href="<?= base_url(
                                                                        "sports"
                                                                    ) ?>">Sports</a></li>
                                                                     <li><a href="<?= base_url(
                                                                         "#"
                                                                     ) ?>">Health </a></li>-->
                                                                      <li><a href="<?= base_url(
                                                                          "safety-and-security"
                                                                      ) ?>">Safety & Security </a></li>
                                                                    <li><a href="<?= base_url(
                                                                        "building-and-transport"
                                                                    ) ?>">Transport Facilities</a></li>
                                                                  
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="panelsStayOpen-heading5">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse5" aria-expanded="false" aria-controls="panelsStayOpen-collapse5">
                                                        Admission
                                                    </button>
                                                </h2>
                                                <div id="panelsStayOpen-collapse5" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading5">
                                                    <div class="accordion-body p-0">
                                                        <div class="sideoverlay-content content-box-1">
                                                            <div class="sub-menu-container">
                                                                <ul class="menu-list">
                                                                    <li><a href="<?= base_url(
                                                                        "admission-procedure"
                                                                    ) ?>">Admission Procedure</a></li>
                                                                    <li><a href="<?= base_url(
                                                                        "school-policies-and-handbook"
                                                                    ) ?>">School Policies & Handbook </a></li>
                                                                     <li><a href="<?= base_url(
                                                                         "fees-structure"
                                                                     ) ?>">Fees Structure</a></li>
                                                                    <li><a href="#">Fee Schedule</a></li>
                                                                    <li><a href="#">Student Transfer</a></li>
                                                                    
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
        
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="panelsStayOpen-heading6">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse6" aria-expanded="false" aria-controls="panelsStayOpen-collapse6">
                                                        Media
                                                        Coverage
                                                    </button>
                                                </h2>
                                                <div id="panelsStayOpen-collapse6" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading6">
                                                    <div class="accordion-body p-0">
                                                        <div class="sideoverlay-content content-box-1">
                                                            <div class="sub-menu-container">
                                                                <ul class="menu-list">
                                                                    <li><a href="<?= base_url(
                                                                        "news"
                                                                    ) ?>">News / Events</a></li>
                                                                    <li><a href="<?= base_url(
                                                                        "gallery"
                                                                    ) ?>">Gallery</a></li>
                                                                     <li><a href="<?= base_url(
                                                                         "video"
                                                                     ) ?>">Video</a></li>
                                                                    <li><a href="<?= base_url(
                                                                        "blogs"
                                                                    ) ?>">Blog</a></li>
                                                                    <li><a href="<?= base_url(
                                                                        "alumni"
                                                                    ) ?>">Alumni</a></li>
                                                                    <li><a href="#">Calendar</a></li>
        
                                                                    <li><a href="<?= base_url(
                                                                        "parent-speak"
                                                                    ) ?>">Parent's Speak</a></li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
        
                                                </div>
                                            </div>
        
        
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <a href="<?= base_url(
                                                        "career"
                                                    ) ?>" class="accordion-button1">
                                                        Career
                                                    </a>
                                                </h2>
                                            </div>
        
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <a href="<?= base_url(
                                                        "contact-us"
                                                    ) ?>" class="accordion-button1">
                                                        Contact Us
                                                    </a>
                                                </h2>
                                            </div>
                                        </div>
                                      




                                        <div class="header-social-icon mt-3 ">
                                            <div class="contact-info mt-3 d-block d-md-flex gap-md-5 align-items-baseline border-0 ps-0 pe-0 pb-0" >
                                                <div class="flex-grow-custom">
                                                    <p class="fw-medium mt-3"> <i class="fas fa-map-marker-alt"></i> Survey No 86/1, Baiyappanahalli Village,
                                                        Bidarahalli Hobli, Bengaluru 560049
                                                        <br>Karnataka, INDIA
                                                    </p>
        
                                                </div>
                                                <div class="flex-grow-custom">
                                                    <p class="fw-medium"><i class="fas fa-solid fa-phone" style="transform: rotate(132deg);"></i><a href="tel:7090031100" class="text-decoration-none text-dark"> +91-7090031100</a></p>
                                                    <p class="fw-medium"> <i class="fas fa-envelope"></i> <a href="mail:mail@tgss.in" class="text-decoration-none text-dark">mail@tgss.in</a></p>
                                                </div>
                                                <div class="flex-grow-custom">
                                                    <!--<ul class="social-icon-humburg">-->
                                                    <!--    <li class="header-social-link">-->
                                                    <!--        <a href="#"><i class="fab fa-facebook-f" style="margin-top: 5px;"></i></a>-->
                                                    <!--    </li>-->
                                                    <!--    <li class="header-social-link">-->
                                                    <!--        <a href="#"><i class="fab fa-linkedin-in" style="margin-top: 5px;"></i></a>-->
                                                    <!--    </li>-->
                                                    <!--    <li class="header-social-link">-->
                                                    <!--        <a href="#"><i class="fab fa-youtube" style="margin-top: 5px;"></i></a>-->
                                                    <!--    </li>-->
                                                    <!--    <li class="header-social-link">-->
                                                    <!--        <a href="#"><i class="fab fa-instagram" style="margin-top: 5px;"></i></a>-->
                                                    <!--    </li>-->
                                                    <!--</ul>-->
                                                </div>
        
                                            </div>
                                        </div>
                                        </div>
                                    </div>
        
                                </div>

                            </div>
                      </div>
                    </div>     
                   
                   
                   
                   
                  
                <!-- End humburg menu -->
                <!-- Quick Actions Offcanvas (mobile) -->
<div class="offcanvas offcanvas-bottom quick-actions-offcanvas" tabindex="-1" id="quickActions" aria-labelledby="quickActionsLabel">
  <div class="offcanvas-header">
    <h6 class="offcanvas-title" id="quickActionsLabel">Quick Actions</h6>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="list-group">
      <!-- Phone -->
      <a href="tel:+917090031100" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">
        <span class="d-flex align-items-center gap-2">
          <i class="bi bi-telephone"></i>
          Tel: +91 70900 31100
        </span>
        <i class="bi bi-chevron-right"></i>
      </a>

      <!-- Contact Us -->
      <a href="/contact-us" class="list-group-item list-group-item-action d-flex align-items-center justify-content-between">
        <span class="d-flex align-items-center gap-2">
          <i class="bi bi-chat-left-text"></i>
          Contact Us
        </span>
        <i class="bi bi-chevron-right"></i>
      </a>

      <!-- Apply Now -->
      <button class="list-group-item list-group-item-action d-flex align-items-center justify-content-between"
              onclick="openApplyNowForm()">
        <span class="d-flex align-items-center gap-2">
          <i class="bi bi-pencil-square"></i>
          Apply Now
        </span>
        <i class="bi bi-chevron-right"></i>
      </button>
    </div>
  </div>
</div>


            </nav>
           
        </header>
<script>
/* Sticky header without layout jump */
(function(){
  const header = document.getElementById('header');
  if(!header) return;

  let ticking = false;

  function applyStickyState(shouldStick){
    const isSticky = header.classList.contains('sticky-active');
    if(shouldStick && !isSticky){
      header.classList.add('sticky-active');
      // prevent content jump by padding body with header height
      document.body.style.paddingTop = header.offsetHeight + 'px';
    } else if(!shouldStick && isSticky){
      header.classList.remove('sticky-active');
      document.body.style.paddingTop = '';
    }
  }

  function onScroll(){
    const shouldStick = window.scrollY > 50;
    applyStickyState(shouldStick);
  }

  function rafScroll(){
    if(!ticking){
      requestAnimationFrame(() => { onScroll(); ticking = false; });
      ticking = true;
    }
  }

  document.addEventListener('DOMContentLoaded', onScroll);
  window.addEventListener('scroll', rafScroll);
  window.addEventListener('resize', () => {
    if(header.classList.contains('sticky-active')){
      // keep body padding in sync with header height
      document.body.style.paddingTop = header.offsetHeight + 'px';
    }
  });
})();
</script>

<script>
  function openApplyNowForm() {
    const m = document.getElementById('formModal');
    if (!m) return;
    m.classList.add('show');
    document.body.style.overflow = 'hidden';
  }
  function closeFormModal() {
    const m = document.getElementById('formModal');
    if (!m) return;
    m.classList.remove('show');
    document.body.style.overflow = '';
  }

  // Close when clicking the dark overlay (outside the box)
  document.addEventListener('click', function(e){
    if (e.target && e.target.id === 'formModal') closeFormModal();
  });

  // Close on ESC
  document.addEventListener('keydown', function(e){
    if (e.key === 'Escape') closeFormModal();
  });
</script>


<!-- Make sure Bootstrap JS is loaded (for offcanvas/close controls) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>


