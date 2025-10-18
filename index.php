 <!-- start header -->


<?php $this->load->view('web/include/header-home')?>





 <!--Right Side Buttons Start-->

 <!--<div class="sticky-social">-->
 <!--    <ul class="social">-->
 <!--        <li class="text-apply1"><a href="<?= base_url('admission-enquiry')?>" title="Online Registration "><i class="fas fa-pencil-alt" style="font-size:13px;"></i>-->
 <!--                &nbsp; Online Enquiry </a></li>-->
 <!--        <li class="linkdin"><a href="tel:7090031100" title="Click to call"> <i class="fas fa-phone" style="transform: rotate(134deg);"></i></a></li>-->
 <!--        <li class="vim"><a target="_blank" title="Whtasapp" href="https://api.whatsapp.com/send?phone=917090031100&amp;text=Hello!"> <i class="fab fa-whatsapp"></i></a></li>-->
 <!--    </ul>-->
 <!--</div>-->

 <!--Right Side Buttons End-->

 <!-- end header -->



 <!-- video  or baneer-->

<style>
/* =========================
   THEME TOKENS (required)
   ========================= */
:root{
  --brand-bg: #029bbe;                 /* section blue */
  --text-white: #fff;                  /* white text */
  --card-border: rgba(255,255,255,.30);/* card outline */
}

/* =========================
   HERO VIDEO / BANNER
   ========================= */
.overlay_video::after{
  content:"";
  position:absolute; inset:0;
  background:rgba(0,0,0,.5);
  pointer-events:none; z-index:2;
}
.video-section video{ width:100%; height:100%; object-fit:cover; }
.video-section .video-for-small-screen{ display:none; }
.video-small-screen-div{ display:none; }
.video-description-show-hide-condition{ display:none; }
.padding-for-normal-screen-new{ padding:80px 80px; }
.swiperBtn-condition-for-screen{ display:none; }
.video-big-screen-div{ height: 100vh; }

@media (max-width:1440px){
  .video-section .video-big-screen-div{ height: 750px; }
}

@media (max-width:988px){
  .swiperBtn-condition-for-screen{ display:block; }
}
@media (max-width:768px){
  .video-section{ overflow:hidden; }
  .video-section .video-for-big-screen{ display:none; height:100%; width:100%; object-fit:cover; }
  .overlay_video::after{ background:rgba(0,0,0,.6); }
  .video-description-show-hide-condition{ display:block; }
  .video-section .video-for-small-screen{ display:block; height: 950px; width:100%; object-fit:cover; }
  .video-big-screen-div{ display:none; }
  .video-small-screen-div{ display:block; }
  .swiperBtn-condition-for-screen{ display:block; }
}
@media (max-width:600px){
  .overlay_video::after{ background:rgba(0,0,0,.7); }
  .padding-for-small-screen{ padding:40px 36px; }
  .padding-for-small-screen-for-facilites{ padding:40px 36px; }
  .video-big-screen-div{ display:none; }
  .video-small-screen-div{ display:block; }
  .extra-padding-for-achivment-in-mobile{ padding-top:110px; }
  .swiperBtn-condition-for-screen{ display:block; }
   /* .video-section{
      height:1000px!important;
  } */
}

/* =========================
   ADDITION CARD (overlay tiles)
   ========================= */
.addition-card{ position:relative; overflow:hidden; height:300px; }
.addition-card img{ width:100%; height:100%; object-fit:cover; display:block; }
.addition-card .overlay{
  position:absolute; inset:0; z-index:2;
  background:rgba(0,155,191,.92); color:#fff;
  padding:24px; display:flex; flex-direction:column; justify-content:center;
  transform:translateY(100%); transition:transform .3s ease-in-out;
}
.addition-card:hover .overlay{ transform:translateY(0); }
.addition-card .description{ text-align:left; }
.addition-card .read-more{ color:#fff; text-decoration:none; font-weight:700; display:inline-block; margin-top:10px; }
.addition-card .read-more:hover{ opacity:.9; }
@media (hover:none){ .addition-card .overlay{ transform:none; } }

/* Bottom-centered label for swiper tiles */
.addmySwiper .addition-card .addiont-content,
.addmySwiper .addition-card .addition-content{
  position:absolute !important; left:50% !important; top:auto !important; bottom:12px !important;
  transform:translateX(-50%) !important; width:auto !important; padding:0 !important; background:transparent !important;
  text-align:center !important; z-index:3 !important;
}
.addmySwiper .addition-card .addiont-content h3,
.addmySwiper .addition-card .addition-content h3{
  margin:0 !important; color:#fff !important; font-size:18px !important; font-weight:800 !important; text-transform:uppercase !important; letter-spacing:.4px !important;
}

/* =========================
   FLIP CARDS (Scholastic)
   ========================= */
.swiper-container-school .flip-box{ perspective:1200px; overflow:hidden; }
.swiper-container-school .flip-box-back{
  display:flex; flex-direction:column; justify-content:flex-start;
  overflow-y:auto; height:100%; box-sizing:border-box; padding:22px 18px;
}
/* custom scroll */
.swiper-container-school .flip-box-back::-webkit-scrollbar{ width:6px; }
.swiper-container-school .flip-box-back::-webkit-scrollbar-thumb{ background:rgba(0,0,0,.2); border-radius:3px; }



/* ==== FONT FAMILY POPPINS FOR ENTIRE SECTION ==== */
.bg-sky-blue,
.bg-sky-blue * {
  font-family: "Poppins", sans-serif !important;
}

/* Let next slide peek on very small screens */
@media (max-width: 450px){
  .swiper-container-school { overflow: visible !important; }

  /* Compact flip card size */
  .swiper-container-school .flip-box { height: 280px; }   /* smaller card */
  .swiper-container-school .flip-box-front img { object-fit: cover; }

  /* Optional: smaller texts inside details/back */
  .swiper-container-school .flip-deatils h3 { font-size: 16px; }
  .swiper-container-school .flip-deatils p  { font-size: 14px; }

  .swiper-container-school .flip-box-back h3 { font-size: 16px; }
  .swiper-container-school .flip-box-back p  { font-size: 14px; line-height: 1.4; }
}


</style>


<!--this is for green leadership section-->
<style>

      .top-border-blue {
        border-top: 4px solid #009bbf;
      }
      .pb-6 {
        padding-bottom: 6rem;
      }
      .pt-6,
      .py-6 {
        padding-top: 6rem;
      }
      .bg-sky-blue {
        background: #009bbf !important;
      }
      .side-padding {
        padding-left: 90px;
        padding-right: 90px;
        
      }

      .card-data {
        display: grid;
        padding: 30px 0px;
        grid-gap: 20px;
        gap: 20px;
        position: relative;
        scroll-behavior: auto;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        grid-column-gap: 36px;
        column-gap: 36px;
        width: 100%;
      }

      .banner-card-description,
      .banner-card-para {
        color: #fff;
        font-family: Poppins;
        font-size: 18px;
        font-style: normal;
        font-weight: 200;
        line-height: normal;
        margin: 0;
      }
      .banner-card-description {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
      }
      @media (min-width: 768px) {
        .text-md-center {
          text-align: center !important;
        }
      }
      .text-white {
        --bs-text-opacity: 1;
        color: rgba(var(--bs-white-rgb), var(--bs-text-opacity)) !important;
      }
      .text-start {
        text-align: left !important;
      }
      .pb-4 {
        padding-bottom: 1.5rem !important;
      }
      .mb-0 {
        margin-bottom: 0 !important;
      }
      .m-auto {
        margin: auto !important;
      }
      .w-100 {
        width: 100% !important;
      }

      .banner-card {
        border: 1px solid #ffffff30;
        padding: 10px;
        transition: all 0.3s linear;
        cursor: pointer;
        border-radius: 4px;
      }

      .banner-card-title {
        color: #fff;
        font-family: Poppins;
        font-size: 24px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        letter-spacing: 8.4px;
      }

      @media (min-width: 1200px) {
        .h4,
        h4 {
          font-size: 1.5rem;
        }
      }
      .h4,
      h4 {
        font-size: calc(1.275rem + 0.3vw);
      }
      .h1,
      .h2,
      .h3,
      .h4,
      .h5,
      .h6,
      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
        margin-top: 0;
        margin-bottom: 0.5rem;
        font-weight: 500;
        line-height: 1.2;
        color: var(--bs-heading-color);
      }

      .banner-card-description,
      .banner-card-para {
        color: #fff;
        font-family: Poppins;
        font-size: 18px;
        font-style: normal;
        font-weight: 200;
        line-height: normal;
        margin: 0;
      }

      .banner-card-description {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
      }

      .read-more-slider {
        padding-bottom: 3px;
        margin-top: 10px;
        display: block;
        color: #fff !important;
        font-weight: 500;
        position: relative;
        font-size: 16px;
        width: -moz-fit-content;
        width: fit-content;
        font-family: Poppins;
        text-decoration: none;
      }

      .text-decoration-none {
        text-decoration: none !important;
      }
      .fw-semibold {
        font-weight: 600 !important;
      }
      .mt-2 {
        margin-top: 0.5rem !important;
      }
      
      .read-more-slider:after {
    background-color: #fff;
    content: "";
    display: block;
    height: 2px;
    width: 100%;
    position: absolute;
    bottom: 0;
    left: 0;
    transition: all .3s 
ease-in-out;
}


/* hover start from here */
      .banner-card:first-of-type:hover {
        background: #365468;
      }

      .banner-card:nth-of-type(2):hover {
        background: #b67f2a;
      }
      .banner-card:nth-of-type(3):hover {
        background: #b32226;
      }
      .banner-card:nth-of-type(4):hover {
        background: #4e6626;
      }
      
      @media (max-width:988px){
            .card-data{
                  display: grid;
                grid-template-columns: 1fr 1fr;
          }
      }
      
      @media (max-width: 768px) {
          
          .card-data{
                  display: flex;
                flex-wrap: wrap;
          }
          .both-padding-for-small-screen{
            padding-left: 15px;
            padding-right: 15px;
         }
      }
      
      @media (max-width: 600px) {
         .both-padding-for-small-screen{
            padding-left: 36px;
            padding-right: 36px;
         }
         

         
         
      }
    </style>
    
    <!--this style adjustment-with-new-form-->



<style>
/* ====================
    BASE FONT SIZE
======================= */
.hero-form-section {
    margin-top:10px;
    width: 24vw;
    transform: translateY(-200px);
    font-size: 10px;
    /*margin-left:135px!important;*/
   
}

.captcha-input::placeholder {
  font-size: 12px;
  color: white;
  opacity: 1;
}


/* ====================
    TEXT COLORS
======================= */
.hero-form-section input::placeholder,
.admission-form input::placeholder {
    color: white !important;
    opacity: 1;
}
.hero-form-section input {
    color: white;
    font-size: 10px;
}

/* ====================
    FORM CONTAINER
======================= */
.admission-form {
    border: 6px solid #009bbf;
    background: rgba(255, 255, 255, 0.9);
    padding: 10px;
}

/* ====================
    INPUTS & SELECTS
======================= */
.form-control,
.form-select {
    font-size: 10px;
    height: 26px; /* reduced height for compact layout */
    padding: 2px 6px;
    line-height: 1;
}

/* Special case for the country code input */
input#stdcode {
    text-align: center;
    padding: 2px;
}

/* ====================
    HEADINGS
======================= */
.hero-form-section h3 {
    color: #fff;
    font-family: Poppins, sans-serif;
    font-size: 12px;
    font-weight: 400;
    margin-bottom: 10px;
}

/* ====================
    BUTTONS
======================= */
.btn-brown {
    border-radius: 100px;
    background: #5e1914;
    width: 100%;
    color: #fff;
    font-family: Poppins, sans-serif;
    font-size: 10px;
    font-weight: 700;
    height: 30px;
    text-transform: uppercase;
    transition: all 0.3s linear;
    padding: 2px 10px;
}


.extra-style-for-bottom-contact-us-section-2nd-child-p-adjustment{
    margin-top: 30px;
}
.extra-style-for-bottom-contact-us-section-2nd-child-img-adjustment img{
    margin-bottom: 34px;
}

.hero-form-section-sm {
     font-size: 12px;
    background-color: #424040ff;
    color: white;
    padding: 36px;
    display:none;
}


.padding-for-Toil-Perseverance{
     padding: 70px 36px;
}
/* ====================
    SPINNER REMOVAL
======================= */
.no-spinner::-webkit-inner-spin-button,
.no-spinner::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
.no-spinner {
    -moz-appearance: textfield;
}

/* ====================
    RESPONSIVE DESIGN
======================= */
/* .adjustment-with-new-form {
    width: 67vw;
} */

@media (max-width: 1620px) {
/*     .hero-form-section {
        margin-left: 110px;
    } */
    
.extra-style-for-bottom-contact-us-section-2nd-child-p-adjustment{
    margin-top: 30px;
}
.extra-style-for-bottom-contact-us-section-2nd-child-img-adjustment img{
    margin-bottom: 0px;
}

}

@media (max-width: 1444px) {
    /*   .hero-form-section {
        margin-left: 30px;
        width: 34vw;
    } */

/*     .adjustment-with-new-form {
        width: 57vw;
    } */
    
.extra-style-for-bottom-contact-us-section-2nd-child-img-adjustment img{
    margin-bottom: 0px;
}



}

@media (max-width: 1024px) {
    .hero-form-section {
        width: 29vw;
    }
}


@media (max-width: 768px) {
  /*     .adjustment-with-new-form {
        width: auto;
    } */
    
    .video-content-parent {
        display: grid;
    }
    
    .content-parent {
        padding-top: 0;
    }

    .hero-form-section {
        width: 100%;
        margin-left: 0;
    }
    
}

@media (max-width: 576px) {
    .display-none-for-very-small-screen {
        display: none;
    }
    .video-section .video-for-small-screen{ height: 100% }
    .hero-form-section-sm{
        display: block;
    }
    
    .session_add{
        display: inline-block!important;
        margin-right:15px!important;
    }

    .hero-form-section {
        transform: translateY(-640px);
        margin-left:2px;
    }
    .hero-form-section h3{
        margin-right: 22px !important;
    }
    .admission-form {
        width: 100% !important;
    }
    
    .legacy-logo-padding-for-very-small-screen{
        padding: 0 36px !important;
    }
    
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





 <section class="" id="wrapper">
     <div class="cursor"> </div>
     <div class="cursor-follower"></div>
     <div class="container-fluid px-0 position-relative">
         <div class="swiper-container">
             <div class="swiper-wrapper">
                 <!-- First Slide -->
                 <?php if (!empty($sliders)) { 
      $slider = $sliders[0];  // first one only
?>
<div class="video-section position-relative overflow-hidden">
    <div class="overlay_video">
        <div class="video-big-screen-div">
            <video autoplay muted loop playsinline class="img-fluid video-for-big-screen">
                <source src="<?= base_url('assets/web')?>/videos/Good Shepherd's WT.mp4" type="video/mp4">
                <source src="<?= base_url('assets/web')?>/videos/Good Shepherd's WT.webm" type="video/webm">
                <source src="<?= base_url('assets/web')?>/videos/Good Shepherd's WT.ogv" type="video/ogv">
                Your browser does not support the video tag.
            </video>
        </div>
        <div class="video-small-screen-div">
            <video autoplay muted loop playsinline class="img-fluid video-for-small-screen">
                <source src="<?= base_url('assets/web')?>/videos/2795405-uhd_2160_3840_25fps (1).mp4" type="video/mp4">
                <!--<source src="<?= base_url('assets/web')?>/videos/Good Shepherd's WT.webm" type="video/webm">-->
                <!--<source src="<?= base_url('assets/web')?>/videos/Good Shepherd's WT.ogv" type="video/ogv">-->
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <div class="video-content-parent side-space">
        <div class="content-parent adjustment-with-new-form display-none-for-very-small-screen">
            <div class="slide-content">
                <div class="logo-slider mb-3">
                    <!--<img src="<?= base_url('assets/web')?>/images/logo.png" alt="Logo" class="logo-slider">-->
                </div>
                <h1 class="mb-0">TGSS</h1>
                <h3 class="mb-0" style="text-align: left;"><?= $slider->title ?></h3>
                <!--<p class="mb-0 video-description-show-hide-condition"><?= $slider->short_description ?></p>-->
            </div>
        </div>
        
        
        
        
        <!--form -->
      

       <div class="form width-right float-end hero-form-section" style="font-size: 12px;">
          <div>
            <h3 class="form-title text-end" style="font-size: 12px; margin-bottom: 5px;">
              ADMISSION ENQUIRY:
              <!--<span class="d-block d-lg-inline session_add">SESSION : 2025-26</span>-->
            </h3>
        
            <div class="admission-form" style="border: 6px solid #009bbf; background: rgba(255,255,255,0.9); padding: 10px;">
              <!-- STEP 1: BASIC FORM -->
              <form id="enquiryForm" method="POST" action="<?= base_url('save_enquiry_ajax') ?>">
                <div class="row" id="step1" style="gap:6px;">
                  <div class="col-12">
                    <select id="session" name="session" required
                      class="form-select border-0 rounded-0"
                      style="height:38px; font-size:14px; background-color:#009bbf; color:white; border:1px solid #ccc; border-radius:5px; padding:6px 10px;"
                      onchange="this.style.backgroundColor = this.value ? '#fff' : '#009bbf'; this.style.color = this.value ? '#000' : '#fff';">
                      <option value="">Select Session</option>
                      <option value="2025-26">2025-26</option>
                      <option value="2026-27">2026-27</option>
                    </select>
                  </div>
            
                  <div class="col-12">
                    <input type="text" name="student_name" id="studentName" required
                      class="form-control border-0 rounded-0"
                      placeholder="Name Of the Student *"
                      style="height: 38px; font-size: 12px; background-color:#009bbf; color:white;">
                  </div>
            
                  <div class="col-12">
                    <input type="text" name="fathers_name" id="fatherName" required
                      class="form-control border-0 rounded-0"
                      placeholder="Father's Name *"
                      style="height: 38px; font-size: 12px; background-color:#009bbf; color:white;">
                  </div>
            
                  <div class="col-12 d-flex gap-1">
                    <input type="text" value="+91" readonly
                      class="form-control border-0 rounded-0 text-left"
                      style="width:25%; height:38px; font-size:12px; background-color:#009bbf; color:white;">
                    <input type="tel" id="phone2" name="phone" required
                      pattern="[0-9]{10}" maxlength="10"
                      oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,10);"
                      class="form-control border-0 rounded-0"
                      placeholder="Enter 10-digit Phone Number"
                      style="flex:1; height:38px; font-size:12px; background-color:#009bbf; color:white;">

                  </div>
            
                  <div class="col-12 mt-2">
                    <button type="button" id="sendOtpBtn" class="btn w-100 text-white"
                      style="background:#5e1914; height:38px; font-size:12px; border-radius:100px;">
                      Send OTP
                    </button>
                  </div>
                </div>
            
                <!-- STEP 2: OTP -->
                <div class="row" id="step2" style="display:none; text-align:center; gap:6px;">
                  <!--<div class="col-12 mb-2">-->
                  <!--  <label style="font-size:12px; color:#000;">Enter 4-Digit OTP</label>-->
                  <!--</div>-->
                  <div class="col-12 d-flex justify-content-center gap-2">
                    <input type="text" class="form-control otp-box" maxlength="1" style="width:40px; text-align:center;color:black;">
                    <input type="text" class="form-control otp-box" maxlength="1" style="width:40px; text-align:center;color:black;">
                    <input type="text" class="form-control otp-box" maxlength="1" style="width:40px; text-align:center;color:black;">
                    <input type="text" class="form-control otp-box" maxlength="1" style="width:40px; text-align:center;color:black;">
                  </div>
                  <div class="col-12 mt-2">
                    <button type="button" id="verifyOtpBtn" class="btn w-100 text-white"
                      style="background:#5e1914; height:30px; font-size:12px; border-radius:100px;">
                      Verify OTP
                    </button>
                  </div>
                </div>
            
                <!-- STEP 3: FULL FORM (with CAPTCHA) -->
                <div class="row" id="step3" style="display:none; gap:6px; margin-top:5px;">
                  <div class="col-12">
                    <input type="email" name="email" required
                      class="form-control border-0 rounded-0"
                      placeholder="Email"
                      style="height:26px; font-size:12px; background-color:#009bbf; color:white;">
                  </div>
                
                  <div class="d-flex gap-1" style="margin-top:6px;">
                    <select name="location" required class="form-select border-0 rounded-0"
                      style="height:26px; font-size:12px; background-color:#009bbf; color:white;">
                      <option value="">Select Location</option>
                      <option value="Bengaluru">Bengaluru</option>
                      <option value="Delhi NCR">Delhi NCR</option>
                    </select>
                
                    <select name="school" required class="form-select border-0 rounded-0"
                      style="height:26px; font-size:12px; background-color:#009bbf; color:white;">
                      <option value="">Select School</option>
                      <option value="St. Thomas School">St. Thomas School</option>
                      <option value="The Trinity School">The Trinity School</option>
                      <option value="The Good Shepherd’s School">The Good Shepherd’s School</option>
                    </select>
                  </div>
                
                  <div class="col-12" style="margin-top:5px;">
                    <select name="student_class" required class="form-select border-0 rounded-0"
                      style="height:26px; font-size:12px; background-color:#009bbf; color:white;">
                      <option value="">Select Class *</option>
                      <option value="M1 (Pre-Nursery)">M1 (Pre-Nursery)</option>
                      <option value="M2 (LKG)">M2 (LKG)</option>
                      <option value="M3 (UKG)">M3 (UKG)</option>
                      <option value="Grade I">Grade I</option>
                      <option value="Grade II">Grade II</option>
                      <option value="Grade III">Grade III</option>
                      <option value="Grade IV">Grade IV</option>
                      <option value="Grade V">Grade V</option>
                      <option value="Grade VI">Grade VI</option>
                      <option value="Grade VII">Grade VII</option>
                      <option value="Grade VIII">Grade VIII</option>
                    </select>
                  </div>
                
                  <div class="col-12" style="margin-top:5px;">
                    <select name="referal" required class="form-select border-0 rounded-0"
                      style="height:26px; font-size:12px; background-color:#009bbf; color:white;">
                      <option value="">How Did You Hear About Us? *</option>
                      <!-- options omitted for brevity -->
                            <option value="">Select..</option>
                             <option value="Website">Website</option>
                            <option value="Group Website">Group Website</option>
                            <option value="School Website">School Website</option>
                            <option value="Google">Google</option>
                            <option value="Social Media">Social Media</option>
                            <option value="Chat Bot">Chat Bot</option>
                            <option value="YouTube">YouTube</option>
                            <option value="Email">Email</option>
                            <option value="Hoarding / Pole Board / Direction Boards">Hoarding / Pole Board / Direction Boards</option>
                            <option value="Blog / Forums">Blog / Forums</option>
                            <option value="TV / Radio">TV / Radio</option>
                            <option value="Corporate Referrals">Corporate Referrals</option>
                            <option value="School / Bus Branding">School / Bus Branding</option>
                            <option value="Other Digital Media">Other Digital Media</option>
                            <option value="Friends / Relatives">Friends / Relatives</option>
                            <option value="Newspaper Ad / Leaflet">Newspaper Ad / Leaflet</option>
                            <option value="Partner Play School">Partner Play School</option>
                            <option value="Previous School">Previous School</option>
                            <option value="C2C">C2C</option>
                      <!-- ... -->
                    </select>
                  </div>
                
                  <!-- ======= CAPTCHA ======= -->
                  <div class="col-12" style="margin-top:6px;">
                    <div class="d-flex align-items-center gap-2">
                      <!-- input must keep name="captcha" and id="captcha-input" -->
                      <input type="text" name="captcha" id="captcha-input-1" class="form-control rounded-0 captcha-input"
                             placeholder="Security" required
                             style="height:26px; font-size:12px; background-color:#009bbf; color:white; flex:1; padding:6px 8px;">
                      <!-- captcha code display (keep id="captcha-code") -->
                      <span id="captcha-code-1" style="padding:6px 10px; background:#f0f0f0; color:#000; border:1px solid #ccc; border-radius:4px; font-weight:bold; display:flex; align-items:center; height:26px;">
                        <?= $captchacode ?>
                      </span>
                    </div>
                    <div id="captcha-error-1" style="color:red; font-size:12px; margin-top:4px;"></div>
                  </div>
                  <!-- ====== end CAPTCHA ====== -->
                
                  <div class="col-12 mt-2">
                    <button type="submit" class="btn w-100 text-white"
                      style="background:#5e1914; height:30px; font-size:12px; border-radius:100px;">
                      Submit Enquiry
                    </button>
                  </div>
                </div>

              </form>
            </div>

          </div>
        </div>



        
        
        
        
        
        
    </div>
</div>
<?php } ?>
 
             </div>
             <div class="position-relative me-65 swipe-btn-mobile">
                 <div class="swiper-button-prev"></div>
                 <div class="swiper-button-next"></div>
             </div>
         </div>
         <!--<?php if($announcement){?>-->
         <!--    <div class="announcement-box">-->
         <!--        <div class="announcement-text">-->
         <!--           <p class="mb-0"><span class="fw-medium">Announcements :</span>-->
         <!--               <a href="<?= $announcement->link?>" target="_blank">-->
         <!--                   <?= $announcement->title?>-->
         <!--               </a>-->
                        
         <!--                <a href="<?= base_url('admission-enquiry')?>" target="_blank">-->
         <!--                   <?= $announcement->title?>-->
         <!--               </a>-->
         <!--           </p>-->
                    
         <!--        </div>-->
         <!--    </div>-->
         <!--    <?php } ?>-->
     </div>

<!-- modal popup for slider video -->


<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content bg-transparent border-0">
            <div class="modal-close">
                <button type="button" class="btn-close btn-close-popup" data-bs-dismiss="modal"><span style="margin-top:-4px;">&times;</span></button>
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

 <!--<section class="">-->
 <!--    <div class="container-fluid px-0">-->
 <!--        <div class="position-relative">-->
 <!--            <div class="top-box">-->
 <!--                <div class="top-card">-->
 <!--                   <a href="<?= base_url('curriculum')?>" class="text-decoration-none">-->
 <!--                       <div class="icon"><i class="fas fa-info"></i></div>-->
 <!--                    <p>FIND YOUR <br> CURRICULUM</p>-->
 <!--                   </a>-->
 <!--                </div>-->
 <!--                <div class="top-card top-card2">-->
 <!--                    <a href="<?= base_url('contact-us')?>" class="text-decoration-none">-->
 <!--                    <div class="icon b-red"><i class="fas fa-map-marker-alt"></i></div>-->
 <!--                    <p>SCHEDULE <br>A VISIT</p>-->
 <!--                    </a>-->
 <!--                </div>-->
 <!--                <div class="top-card top-card3">-->
 <!--                     <a href="<?= base_url('admission-enquiry')?>" class="text-decoration-none">-->
 <!--                    <div class="icon b-blue"> <i class="fas fa-pen-nib"></i></div>-->
 <!--                    <p>APPLY <br> TODAY</p>-->
 <!--                    </a>-->
 <!--                </div>-->
 <!--            </div>-->
 <!--        </div>-->
 <!--    </div>-->
 <!--</section>-->
 
 
 <!--This is static-->
 <!-- <section class="pt-mob" style="padding-top:0;">-->
 <!--    <div class="container-fluid px-0">-->
 <!--        <div class="side-space">-->
 <!--            <div class="col-md-12">-->
 <!--                <p class="sub-heading-para">In addition to these fundamental qualities, we envision The Good Shepherd’s as a nurturing ground for holistic development, where students are equipped with essential life skills such as innovation and creativity, community engagement, ethical integrity, global awareness, communication skills, resilience and adaptability, and critical thinking and problem-solving.</p>-->
 <!--            </div>-->
 <!--        </div>-->

 <!--        <div class="swiper addmySwiper" style="margin-top:0;">-->
 <!--             <div class="swiper-wrapper">-->
 <!--                                       <div class="swiper-slide">-->
 <!--                       <div class="addition-card">-->
 <!--                           <img src="<?= base_url('assets/web')?>/extraImage/leader_ship28.JPG" alt="Leadership" style="filter: brightness(75%);">-->
 <!--                           <div class="addiont-content">-->
 <!--                               <h3>LEADERSHIP</h3>-->
 <!--                           </div>-->
                
 <!--                          <div class="">-->
 <!--                                   <div class="overlay">-->
 <!--                               <div class="description">-->
 <!--                                   <p class="line-clamp-4">Guiding Vision and Future Aspirations: Our vision is rooted in the belief that every leader should have a clear, purpose-driven vision for the future. This vision serves as a guiding star, propelling us forward into a promising future, fueled by hard work and perseverance.</p>-->
 <!--                                   <a href="#" -->
 <!--                                      class="read-more" -->
 <!--                                      data-bs-toggle="modal" -->
 <!--                                      data-bs-target="#infoModal"-->
 <!--                                      data-title="Leadership"-->
 <!--                                      data-description="Guiding Vision and Future Aspirations: Our vision is rooted in the belief that every leader should have a clear, purpose-driven vision for the future. This vision serves as a guiding star, propelling us forward into a promising future, fueled by hard work and perseverance.">-->
 <!--                                       Read More &#8594;-->
 <!--                                   </a>-->
 <!--                               </div>-->
 <!--                           </div>-->
 <!--                          </div>-->
 <!--                       </div>-->
 <!--                   </div>-->
 <!--                                       <div class="swiper-slide">-->
 <!--                       <div class="addition-card">-->
 <!--                           <img src="<?= base_url('assets/web')?>/extraImage/ethics-min.PNG" alt="Ethics" style="filter: brightness(75%);">-->
 <!--                           <div class="addiont-content">-->
 <!--                               <h3>ETHICS</h3>-->
 <!--                           </div>-->
                
 <!--                          <div class="">-->
 <!--                                   <div class="overlay">-->
 <!--                               <div class="description">-->
 <!--                                  <p class="line-clamp-4">Ethical Leadership and Action-Oriented Approach: We value the importance of clear boundaries as the foundation of exceptional leadership. These boundaries foster an environment where ethical, moral, and personal growth can flourish. Leaders at The Good Shepherd’s are pathfinders, illuminating the way through remarkable actions. We believe in leadership that speaks</p>-->
 <!--                                   <a href="#" -->
 <!--                                      class="read-more" -->
 <!--                                      data-bs-toggle="modal" -->
 <!--                                      data-bs-target="#infoModal"-->
 <!--                                      data-title="Ethics"-->
 <!--                                      data-description="Ethical Leadership and Action-Oriented Approach: We value the importance of clear boundaries as the foundation of exceptional leadership. These boundaries foster an environment where ethical, moral, and personal growth can flourish. Leaders at The Good Shepherd’s are pathfinders, illuminating the way through remarkable actions. We believe in leadership that speaks volumes not only through eloquent words but also through actions that embody our core values.">-->
 <!--                                       Read More &#8594;-->
 <!--                                   </a>-->
 <!--                               </div>-->
 <!--                           </div>-->
 <!--                          </div>-->
 <!--                       </div>-->
 <!--                   </div>-->
 <!--                                       <div class="swiper-slide">-->
 <!--                       <div class="addition-card">-->
 <!--                           <img src="<?= base_url('assets/web')?>/extraImage/trust-min.jpg" alt="Trust" style="filter: brightness(75%);">-->
 <!--                           <div class="addiont-content">-->
 <!--                               <h3>TRUST</h3>-->
 <!--                           </div>-->
                
 <!--                          <div class="">-->
 <!--                                   <div class="overlay">-->
 <!--                               <div class="description">-->
 <!--                                                                       <p class="line-clamp-4">Trust-Based Relationships and Community Building: Trust, the cornerstone of meaningful relationships, is carefully nurtured within the hallowed halls of The Good Shepherd’s. Here, we aspire to cultivate leaders who place trust at the forefront, fostering genuine connections that resonate with unwavering care and authenticity, fortifying the very essence of trust</p>-->
 <!--                                   <a href="#" -->
 <!--                                      class="read-more" -->
 <!--                                      data-bs-toggle="modal" -->
 <!--                                      data-bs-target="#infoModal"-->
 <!--                                      data-title="Trust"-->
 <!--                                      data-description="Trust-Based Relationships and Community Building: Trust, the cornerstone of meaningful relationships, is carefully nurtured within the hallowed halls of The Good Shepherd’s. Here, we aspire to cultivate leaders who place trust at the forefront, fostering genuine connections that resonate with unwavering care and authenticity, fortifying the very essence of trust within our vibrant community.">-->
 <!--                                       Read More &#8594;-->
 <!--                                   </a>-->
 <!--                               </div>-->
 <!--                           </div>-->
 <!--                          </div>-->
 <!--                       </div>-->
 <!--                   </div>-->
 <!--                                       <div class="swiper-slide">-->
 <!--                       <div class="addition-card">-->
 <!--                           <img src="<?= base_url('assets/web')?>/extraImage/growth-min.jpg" alt="Growth" style="filter: brightness(75%);">-->
 <!--                           <div class="addiont-content">-->
 <!--                               <h3>GROWTH</h3>-->
 <!--                           </div>-->
                
 <!--                          <div class="">-->
 <!--                                   <div class="overlay">-->
 <!--                               <div class="description">-->
 <!--                                                                        70900 31100<p class="line-clamp-4">Growth-Focused Leadership and Selfless Provision: Within the heart of The Good Shepherd’s lies the cherished art of selfless provision—a quality revered among our leaders. Much like a guide providing for the needs of their group, our leaders prioritize the genuine needs of those they lead. This exemplifies our commitment to</p>-->
 <!--                                   <a href="#" -->
 <!--                                      class="read-more" -->
 <!--                                      data-bs-toggle="modal" -->
 <!--                                      data-bs-target="#infoModal"-->
 <!--                                      data-title="Growth"-->
 <!--                                      data-description="Growth-Focused Leadership and Selfless Provision: Within the heart of The Good Shepherd’s lies the cherished art of selfless provision—a quality revered among our leaders. Much like a guide providing for the needs of their group, our leaders prioritize the genuine needs of those they lead. This exemplifies our commitment to prioritize well-being over profit margins, fueled by unswerving dedication and enduring perseverance. Sacrifice, an indelible mark of true leadership, finds its true essence within our community. Our leaders wholeheartedly embrace the spirit of toil and perseverance, acknowledging that authentic leadership propels collective progress and shared triumph.">-->
 <!--                                       Read More &#8594;-->
 <!--                                   </a>-->
 <!--                               </div>-->
 <!--                           </div>-->
 <!--                          </div>-->
 <!--                       </div>-->
 <!--                   </div>-->
 <!--                                   </div>-->

            
 <!--            <div class="position-relative swiperBtn1 swiperBtn-condition-for-screen">-->
 <!--                <div class="custom-next"></div>-->
 <!--                <div class="custom-prev"></div>-->
 <!--             </div>-->
 <!--         </div>-->
 <!--      </div>-->
 <!--    </div>-->
 <!--</section>-->
 
<section>
      <div class="form width-right float-end hero-form-section-sm" style="font-size: 12px;">
          <div>
           <h3 class="form-title text-end" style="font-size: 12px; margin-bottom: 5px;">
              ADMISSION ENQUIRY:
              <!--<span class="d-block d-lg-inline session_add">SESSION : 2025-26</span>-->
            </h3>
        
            <div class="admission-form" style="border: 6px solid #009bbf; background: rgba(255,255,255,0.9); padding: 10px;">
              <!-- STEP 1: BASIC FORM -->
              <form id="enquiryForm" method="POST" action="<?= base_url('save_enquiry_ajax') ?>">
                <div class="row" id="step1" style="gap:6px;">
                  <div class="col-12">
                    <select id="session" name="session" required
                      class="form-select border-0 rounded-0"
                      style="height:38px; font-size:14px; background-color:#009bbf; color:white; border:1px solid #ccc; border-radius:5px; padding:6px 10px;"
                      onchange="this.style.backgroundColor = this.value ? '#fff' : '#009bbf'; this.style.color = this.value ? '#000' : '#fff';">
                      <option value="">Select Session</option>
                      <option value="2025-26">2025-26</option>
                      <option value="2026-27">2026-27</option>
                    </select>
                  </div>
            
                  <div class="col-12">
                    <input type="text" name="student_name" id="studentName" required
                      class="form-control border-0 rounded-0"
                      placeholder="Name Of the Student *"
                      style="height: 38px; font-size: 12px; background-color:#009bbf; color:white;">
                  </div>
            
                  <div class="col-12">
                    <input type="text" name="fathers_name" id="fatherName" required
                      class="form-control border-0 rounded-0"
                      placeholder="Father's Name *"
                      style="height: 38px; font-size: 12px; background-color:#009bbf; color:white;">
                  </div>
            
                  <div class="col-12 d-flex gap-1">
                    <input type="text" value="+91" readonly
                      class="form-control border-0 rounded-0 text-left"
                      style="width:25%; height:38px; font-size:12px; background-color:#009bbf; color:white;">
                    <input type="tel" id="phone2" name="phone" required
                      pattern="[0-9]{10}" maxlength="10"
                      oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0,10);"
                      class="form-control border-0 rounded-0"
                      placeholder="Enter 10-digit Phone Number"
                      style="flex:1; height:38px; font-size:12px; background-color:#009bbf; color:white;">

                  </div>
            
                  <div class="col-12 mt-2">
                    <button type="button" id="sendOtpBtn" class="btn w-100 text-white"
                      style="background:#5e1914; height:38px; font-size:12px; border-radius:100px;">
                      Send OTP
                    </button>
                  </div>
                </div>
            
                <!-- STEP 2: OTP -->
                <div class="row" id="step2" style="display:none; text-align:center; gap:6px;">
                  <!--<div class="col-12 mb-2">-->
                  <!--  <label style="font-size:12px; color:#000;">Enter 4-Digit OTP</label>-->
                  <!--</div>-->
                  <div class="col-12 d-flex justify-content-center gap-2">
                    <input type="text" class="form-control otp-box" maxlength="1" style="width:40px; text-align:center;color:black;">
                    <input type="text" class="form-control otp-box" maxlength="1" style="width:40px; text-align:center;color:black;">
                    <input type="text" class="form-control otp-box" maxlength="1" style="width:40px; text-align:center;color:black;">
                    <input type="text" class="form-control otp-box" maxlength="1" style="width:40px; text-align:center;color:black;">
                  </div>
                  <div class="col-12 mt-2">
                    <button type="button" id="verifyOtpBtn" class="btn w-100 text-white"
                      style="background:#5e1914; height:30px; font-size:12px; border-radius:100px;">
                      Verify OTP
                    </button>
                  </div>
                </div>
            
                <!-- STEP 3: FULL FORM (with CAPTCHA) -->
                <div class="row" id="step3" style="display:none; gap:6px; margin-top:5px;">
                  <div class="col-12">
                    <input type="email" name="email" required
                      class="form-control border-0 rounded-0"
                      placeholder="Email"
                      style="height:26px; font-size:12px; background-color:#009bbf; color:white;">
                  </div>
                
                  <div class="d-flex gap-1" style="margin-top:6px;">
                    <select name="location" required class="form-select border-0 rounded-0"
                      style="height:26px; font-size:12px; background-color:#009bbf; color:white;">
                      <option value="">Select Location</option>
                      <option value="Bengaluru">Bengaluru</option>
                      <option value="Delhi NCR">Delhi NCR</option>
                    </select>
                
                    <select name="school" required class="form-select border-0 rounded-0"
                      style="height:26px; font-size:12px; background-color:#009bbf; color:white;">
                      <option value="">Select School</option>
                      <option value="St. Thomas School">St. Thomas School</option>
                      <option value="The Trinity School">The Trinity School</option>
                      <option value="The Good Shepherd’s School">The Good Shepherd’s School</option>
                    </select>
                  </div>
                
                  <div class="col-12" style="margin-top:5px;">
                    <select name="student_class" required class="form-select border-0 rounded-0"
                      style="height:26px; font-size:12px; background-color:#009bbf; color:white;">
                      <option value="">Select Class *</option>
                      <option value="M1 (Pre-Nursery)">M1 (Pre-Nursery)</option>
                      <option value="M2 (LKG)">M2 (LKG)</option>
                      <option value="M3 (UKG)">M3 (UKG)</option>
                      <option value="Grade I">Grade I</option>
                      <option value="Grade II">Grade II</option>
                      <option value="Grade III">Grade III</option>
                      <option value="Grade IV">Grade IV</option>
                      <option value="Grade V">Grade V</option>
                      <option value="Grade VI">Grade VI</option>
                      <option value="Grade VII">Grade VII</option>
                      <option value="Grade VIII">Grade VIII</option>
                    </select>
                  </div>
                
                  <div class="col-12" style="margin-top:5px;">
                    <select name="referal" required class="form-select border-0 rounded-0"
                      style="height:26px; font-size:12px; background-color:#009bbf; color:white;">
                      <option value="">How Did You Hear About Us? *</option>
                      <!-- options omitted for brevity -->
                            <option value="">Select..</option>
                             <option value="Website">Website</option>
                            <option value="Group Website">Group Website</option>
                            <option value="School Website">School Website</option>
                            <option value="Google">Google</option>
                            <option value="Social Media">Social Media</option>
                            <option value="Chat Bot">Chat Bot</option>
                            <option value="YouTube">YouTube</option>
                            <option value="Email">Email</option>
                            <option value="Hoarding / Pole Board / Direction Boards">Hoarding / Pole Board / Direction Boards</option>
                            <option value="Blog / Forums">Blog / Forums</option>
                            <option value="TV / Radio">TV / Radio</option>
                            <option value="Corporate Referrals">Corporate Referrals</option>
                            <option value="School / Bus Branding">School / Bus Branding</option>
                            <option value="Other Digital Media">Other Digital Media</option>
                            <option value="Friends / Relatives">Friends / Relatives</option>
                            <option value="Newspaper Ad / Leaflet">Newspaper Ad / Leaflet</option>
                            <option value="Partner Play School">Partner Play School</option>
                            <option value="Previous School">Previous School</option>
                            <option value="C2C">C2C</option>
                      <!-- ... -->
                    </select>
                  </div>
                
                  <!-- ======= CAPTCHA ======= -->
                  <div class="col-12" style="margin-top:6px;">
                    <div class="d-flex align-items-center gap-2">
                      <!-- input must keep name="captcha" and id="captcha-input" -->
                      <input type="text" name="captcha" id="captcha-input-1" class="form-control rounded-0 captcha-input"
                             placeholder="Security" required
                             style="height:26px; font-size:12px; background-color:#009bbf; color:white; flex:1; padding:6px 8px;">
                      <!-- captcha code display (keep id="captcha-code") -->
                      <span id="captcha-code-1" style="padding:6px 10px; background:#f0f0f0; color:#000; border:1px solid #ccc; border-radius:4px; font-weight:bold; display:flex; align-items:center; height:26px;">
                        <?= $captchacode ?>
                      </span>
                    </div>
                    <div id="captcha-error-1" style="color:red; font-size:12px; margin-top:4px;"></div>
                  </div>
                  <!-- ====== end CAPTCHA ====== -->
                
                  <div class="col-12 mt-2">
                    <button type="submit" class="btn w-100 text-white"
                      style="background:#5e1914; height:30px; font-size:12px; border-radius:100px;">
                      Submit Enquiry
                    </button>
                  </div>
                </div>

              </form>
            </div>

          </div>
        </div>
    </div>
</section>

<section>
      <div
        class="side-padding bg-sky-blue top-border-blue pt-6 pb-6 both-padding-for-small-screen side-space padding-for-mobile-screen"
      >
        <div class="card-data">
          <div class="banner-card" style="opacity: 1; transform: none">
            <h4 class="banner-card-title" style="overflow: hidden">
              LEADERSHIP
            </h4>
            <p class="banner-card-description">
              Guiding Vision and Future Aspirations: Our vision is rooted in the
              belief that every leader should have a clear, purpose-driven
              vision for the future. This vision serves as a guiding star,
              propelling us forward into a promising future, fueled by hard work
              and perseverance.
            </p>
            <a
              class="read-more-slider fw-semibold text-decoration-none mt-2"
              href="<?= base_url('vision-mission-value') ?>"
              >Read More</a
            >
          </div>
          <div class="banner-card" style="opacity: 1; transform: none">
            <h4 class="banner-card-title" style="overflow: hidden">ETHICS</h4>
            <p class="banner-card-description">
              Ethical Leadership and Action-Oriented Approach: We value the
              importance of clear boundaries as the foundation of exceptional
              leadership. These boundaries foster an environment where ethical,
              moral, and personal growth can flourish. Leaders at The Good
              Shepherd’s are pathfinders, illuminating the way through
              remarkable actions. We believe in leadership that speaks volumes
              not only through eloquent words but also through actions that
              embody our core values.
            </p>
            <a
              class="read-more-slider fw-semibold text-decoration-none mt-2"
              href="#"
              >Read More</a
            >
          </div>
          <div class="banner-card" style="opacity: 1; transform: none">
            <h4 class="banner-card-title" style="overflow: hidden">TRUST</h4>
            <p class="banner-card-description">
              Trust-Based Relationships and Community Building: Trust, the
              cornerstone of meaningful relationships, is carefully nurtured
              within the hallowed halls of The Good Shepherd’s. Here, we aspire
              to cultivate leaders who place trust at the forefront, fostering
              genuine connections that resonate with unwavering care and
              authenticity, fortifying the very essence of trust within our
              vibrant community.
            </p>
            <a
              class="read-more-slider fw-semibold text-decoration-none mt-2"
              href="#"
              >Read More</a
            >
          </div>
          <div class="banner-card" style="opacity: 1; transform: none">
            <h4 class="banner-card-title" style="overflow: hidden">GROWTH</h4>
            <p class="banner-card-description">
              Growth-Focused Leadership and Selfless Provision: Within the heart
              of The Good Shepherd’s lies the cherished art of selfless
              provision—a quality revered among our leaders. Much like a guide
              providing for the needs of their group, our leaders prioritize the
              genuine needs of those they lead. This exemplifies our commitment
              to prioritize well-being over profit margins, fueled by unswerving
              dedication and enduring perseverance. Sacrifice, an indelible mark
              of true leadership, finds its true essence within our community.
              Our leaders wholeheartedly embrace the spirit of toil and
              perseverance, acknowledging that authentic leadership propels
              collective progress and shared triumph.
            </p>
            <a
              class="read-more-slider fw-semibold text-decoration-none mt-2"
              href="#"
              >Read More</a
            >
          </div>
        </div>
        <p
          class="mb-0 pb-4 text-left text-white w-100 m-auto banner-card-description h-custom" style="-webkit-line-clamp: none;"
        >
          In addition to these fundamental qualities, we envision The Good
          Shepherd’s as a nurturing ground for holistic development, where
          students are equipped with essential life skills such as innovation
          and creativity, community engagement, ethical integrity, global
          awareness, communication skills, resilience and adaptability, and
          critical thinking and problem-solving.
        </p>
      </div>
    </section>

 <!--MODAL-->
 <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="infoModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modal-text" id="infoModalBody">
            </div>
        </div>
    </div>
</div>

 <!-- about us -->
 <section class="pb-80 padding-for-Toil-Perseverance padding-for-mobile-screen" id="about-us">
     <h3 class="legacy-title text-center text-dark">Toil &amp; Perseverance - <span class="text-blue">Since 1995</span></h3>
     <div class="about-us side-space padding-zero-for-small-screen">
         <div class="about-content">
             <?= $toil->description?>
         </div>
     </div>
 </section>

 <!-- end about us -->

 <!-- legacy -->

 <section class="">
     <div class="">

         <div class="legacy-title-container">
             <h3 class="legacy-title text-center title-color">OUR INSTITUTIONS</h3>
             <div class="border-b"></div>
         </div>
         <div class="legacy-logo-container position-relative">
             <div class="our-legacy" style="background-image: url('<?= base_url('uploads/school/').$institutions->school_1_logo?>'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 947px; width: 100%;">
                 <div class="overlay-legacy"></div>
                 <div class="legacy-logo legacy-logo-padding-for-very-small-screen padding-for-mobile-screen">
                     <div class="legacy-item">
                         <img src="<?= base_url('assets/web')?>/images/St Thomas School LogoAsset.png" alt="<?= $institutions->school_1_name?>" loading="lazy" width="350" height="0" decoding="async" data-nimg="1" class="img-fluid" style="color: transparent;width:600px;" />
                         <div class="mt-2">
                             <p>
                                 <?= $institutions->school_1_description?>
                             </p>
                             <a class="mt-5 read-more-2 text-decoration-none" target="_blank" href="<?= $institutions->school_1_url?>">
                                 View Website <i class="fas fa-caret-right text-white"></i>
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="our-legacy" style="background-image: url('<?= base_url('uploads/school/').$institutions->school_2_logo?>'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 947px; width: 100%;">
                 <div class="overlay-legacy-right"></div>
                 <div class="legacy-logo legacy-logo-padding-for-very-small-screen padding-for-mobile-screen">
                     <div class="legacy-item">
                         <img src="<?= base_url('assets/web')?>/images/Trinity School LogoAsset.png" alt="<?= $institutions->school_2_name?>" loading="lazy" width="350" height="0" decoding="async" data-nimg="1" class="img-fluid" style="color: transparent;width:600px;" />
                         <div class="mt-2">
                             <p>
                                 <?= $institutions->school_2_description?>
                             </p>
                             <a class="mt-5 read-more-2 text-decoration-none" target="_blank" href="<?= $institutions->school_2_url?>">
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

<!-- <section class="pb-80">-->
<!--    <div class="side-space">-->
<!--        <div class="swiper achievement-swiper achievement-section">-->
<!--            <div class="swiper-wrapper">-->
<!--                <?php foreach($achievements as $achievement){ ?>-->
<!--                    <div class="swiper-slide blue-shade-1">-->
<!--                        <div class="our-value-item ">-->
<!--                            <div class="achievement-icon">-->
<!--                                <img -->
<!--                                    alt="<?= $achievement->title ?>" -->
<!--                                    class="img-fluid" -->
<!--                                    style="color: transparent;" -->
<!--                                    src="<?= base_url('uploads/achievement/').$achievement->icon ?>" -->
<!--                                />-->
<!--                            </div>-->
<!--                            <div class="mt-3 text-center">-->
<!--                                <h3 class="mb-3"><?= $achievement->counts ?></h3>-->
<!--                                <p class="height-60 trim-last-word mb-1"><?= $achievement->title ?></p>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                <?php } ?>-->
<!--            </div>-->

<!--              <div class="position-relative swiperBtn swiperBtn-section">-->
<!--                 <div class="custom-next"></div>-->
<!--                 <div class="custom-prev"></div>-->
<!--              </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->



 <!-- achievement -->

 <section class="pb-80 padding-for-small-screen padding-for-normal-screen-new extra-padding-for-achivment-in-mobile padding-for-mobile-screen">
    <div class="side-space padding-zero-for-small-screen">
        <div class="swiper achievement-swiper achievement-section">
            <div class="swiper-wrapper" style="height: auto;">
                <?php foreach($achievements as $achievement){ ?>
                                    <div class="swiper-slide blue-shade-1">
                        <div class="our-value-item ">
                            <div class="achievement-icon">
                                <!--<img -->
                                <!--    alt="Years" -->
                                <!--    class="img-fluid" -->
                                <!--    style="color: transparent;" -->
                                <!--    src="https://tgs.urips.co.in/uploads/achievement/1747892680black-graduation.png" -->
                                <!--/>-->
                                <img 
                                    alt="<?= $achievement->title ?>" 
                                    class="img-fluid" 
                                    style="color: transparent;" 
                                    src="<?= base_url('uploads/achievement/').$achievement->icon ?>" 
                                />
                            </div>
                            <div class="mt-3 text-center">
                                <!--<h3 class="mb-3">30+</h3>-->
                                <h3 class="mb-3"><?= $achievement->counts ?></h3>
                                <!--<p class="height-60 trim-last-word mb-1">Years</p>-->
                                <p class="height-60 trim-last-word mb-1"><?= $achievement->title ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                    <!--                <div class="swiper-slide blue-shade-1">-->
                    <!--    <div class="our-value-item ">-->
                    <!--        <div class="achievement-icon">-->
                    <!--            <img -->
                    <!--                alt="Alumni" -->
                    <!--                class="img-fluid" -->
                    <!--                style="color: transparent;" -->
                    <!--                src="https://tgs.urips.co.in/uploads/achievement/1747892770globe.png" -->
                    <!--            />-->
                    <!--        </div>-->
                    <!--        <div class="mt-3 text-center">-->
                    <!--            <h3 class="mb-3">5000+</h3>-->
                    <!--            <p class="height-60 trim-last-word mb-1">Alumni</p>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--                <div class="swiper-slide blue-shade-1">-->
                    <!--    <div class="our-value-item ">-->
                    <!--        <div class="achievement-icon">-->
                    <!--            <img -->
                    <!--                alt="Enrolled Students" -->
                    <!--                class="img-fluid" -->
                    <!--                style="color: transparent;" -->
                    <!--                src="https://tgs.urips.co.in/uploads/achievement/1747892804enroll.png" -->
                    <!--            />-->
                    <!--        </div>-->
                    <!--        <div class="mt-3 text-center">-->
                    <!--            <h3 class="mb-3">3000+</h3>-->
                    <!--            <p class="height-60 trim-last-word mb-1">Enrolled Students</p>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--                <div class="swiper-slide blue-shade-1">-->
                    <!--    <div class="our-value-item ">-->
                    <!--        <div class="achievement-icon">-->
                    <!--            <img -->
                    <!--                alt="Faculty" -->
                    <!--                class="img-fluid" -->
                    <!--                style="color: transparent;" -->
                    <!--                src="https://tgs.urips.co.in/uploads/achievement/1747892833course.png" -->
                    <!--            />-->
                    <!--        </div>-->
                    <!--        <div class="mt-3 text-center">-->
                    <!--            <h3 class="mb-3">150+</h3>-->
                    <!--            <p class="height-60 trim-last-word mb-1">Faculty</p>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    <!--                <div class="swiper-slide blue-shade-1">-->
                    <!--    <div class="our-value-item ">-->
                    <!--        <div class="achievement-icon">-->
                    <!--            <img -->
                    <!--                alt="All India CBSE Rank Holder’s" -->
                    <!--                class="img-fluid" -->
                    <!--                style="color: transparent;" -->
                    <!--                src="https://tgs.urips.co.in/uploads/achievement/1747892864competition.png" -->
                    <!--            />-->
                    <!--        </div>-->
                    <!--        <div class="mt-3 text-center">-->
                    <!--            <h3 class="mb-3">3+</h3>-->
                    <!--            <p class="height-60 trim-last-word mb-1">All India CBSE Rank Holder’s</p>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                            </div>

              <div class="position-relative swiperBtn swiperBtn-section" style="margin-top: 80px">
                 <div class="custom-next"></div>
                 <div class="custom-prev"></div>
              </div>
        </div>
    </div>
</section>


 <!-- school -->

 <section class="pb-80 pt-80 padding-for-small-screen padding-for-normal-screen-new padding-for-mobile-screen" style="background: #4e6626;">
     <h3 class="legacy-title text-center text-white">Scholastic Programme</h3>
     <div class="school">
         <div class="school-content padding-zero-for-small-screen">
             <p class="mb-0">
                 The Good Shepherd’s cultivates in its students a broad general understanding of the foundational disciplines of humane learning and fosters a capacity for effective critical inquiry and authentic self-expression. Our core
                 curriculum consists of comprehensive, traditional course sequences in Mathematics, Science, Language and Social Sciences complemented by courses in the Arts , Music, Dance, Computer Science &amp; Robotics, Guidance, and
                 Physical Education.
             </p>
         </div>
         <div class="side-space mt-4 padding-zero-for-small-screen">
             <div class="swiper-container-school overflow-hidden">
                 <div class="swiper-wrapper" style="height: auto;">
                     <?php foreach($scholastic_programmes as $programmes){?>
                     <div class="swiper-slide">
                         <div>
                             <div class="flip-box ">
                                 <div class="flip-box-inner">
                                     <div class="flip-box-front">
                                         <img alt="<?= $programmes->title?>" loading="lazy" width="368" height="557" decoding="async" data-nimg="1" style="color: transparent; width: 100%; height: 100%;" src="<?= base_url('uploads/home/').$programmes->image?>" />
                                     </div>
                                     <div class="flip-box-back">
                                         <h3><?= $programmes->title?></h3>
                                         <p class="mb-1 text-center"><b>Ages : <?= $programmes->age?></b></p>
                                         <p class="text-center"><b>Classes : <?= $programmes->classes?></b></p>
                                         <p class="text-justify">
                                             <?= $programmes->description?>
                                         </p>
                                     </div>
                                 </div>
                             </div>
                             <div class="flip-deatils mt-2 text-center">
                                 <h3 class="mb-1"><?= $programmes->title?></h3>
                                 <p class="mb-1"><b>Ages : <?= $programmes->age?></b></p>
                                 <p class="mb-1"><b>Classes : <?= $programmes->classes?></b></p>
                             </div>
                         </div>
                     </div>
                     <?php } ?>
                 </div>
                 <!-- Add Arrows -->
                 <div class="position-relative swiperBtn-condition-for-screen">
                     <div class="custom-next"></div>
                     <div class="custom-prev"></div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- facilites -->

 <section class="pb-80 pt-80 side-space padding-for-small-screen-for-facilites padding-for-normal-screen-new padding-for-mobile-screen" style="background:#36454F;">
     <div class="row">
         <div class="col-xl-4 col-lg-5 col-md-12 col-sm-12 ">
             <div class="facilities-content">
                 <h3 class="mb-3 legacy-title text-white">TGSS Campus & Facilities in a Glance</h3>
                 <p class="mb-2">The Good Shepherd’s is an ideal setting for learning: a diverse community knit together by its physical environment as well as by its commitment to the highest 
                 standards of excellence, integrity, free expression and inquiry. The school sprawls over a nearly four acre campus nestled on the outskirts of Bengaluru.</p>
                 <p class="mb-0"> A 4 Acre Serene Campus, Spacious Ventilated Class Rooms, Laboratories, Library, Ergonomic Furniture, Multipurpose Court, Play Spaces & Grounds, Learning Spaces,
                 Open Air Amphitheatre, Arts & Music, Medical Facility, ERP, ICT, School Conveyance etc.</p>
                 
             </div>
         </div>

         <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12 ">
             <div class="facilites-list">
                 <?php foreach($facilities as $facility){?>
                 <div class="facilities-box">
                     <div class="facilities-icon">
                         <img src="<?= base_url('uploads/facility/').$facility->icon?>" alt="<?= $facility->title?>" class="img-fluid">
                     </div>
                     <p class="pt-3 mb-0"><?= $facility->title?></p>
                 </div>
                 <?php } ?>
             </div>
         </div>
     </div>
 </section>

 <!-- news and event  -->

 <section class="pb-80 pt-80 side-space padding-for-small-screen-for-facilites padding-for-normal-screen-new padding-for-mobile-screen">
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
                                     <div class="news-img" style="height:228px;">
                                         <img src="<?= base_url('uploads/news/thumbnail/').$nw->thumbnail?>" class="img-fluid" alt="<?= $nw->title?>" style="width: 100%;height: 100%;object-fit: cover;">
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
                                             <a href="<?= base_url('news-details/').$nw->slug?>"  class="read-more-1 text-decoration-none"> Read More <i class="fas fa-caret-right" style="color:#333;"></i></a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <?php } ?>

                         </div>
                         <!-- Add more swiper slides as needed -->
                     </div>
                       <div class="position-relative">
                         <div class="custom-next"></div>
                         <div class="custom-prev"></div>
                       </div>
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
                                     <a href="#"><?= $cl->title?></a>
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


 <section class="bg-sky-blue pt-80 pb-80 padding-for-mobile-screen">
     <div class="about-us side-space padding-zero-for-small-screen">
         <div class="text-center pb-4">
             <img src="<?= base_url('assets/web')?>/images/education-bag-learning.svg" class="img-fluid" style="width:135px;" />
         </div>
         <div class="schedul-content padding-zero-for-very-small-screen">
             <p class="mb-0">
                 In developing leaders for tomorrow, TGSS is mindful of the fact that it exists because of the generosity of its founders and seeks to build upon that same spirit of philanthropy today. From current students, to faculty and
                 staff, to parents and alumni, the TGSS community instills the importance of giving back.
             </p>
             <p class="mb-0">To sponsor the education of a child or to make a gift, please contact us at <a class="text-decoration-underline text-white" href="mailto:iSupport@tgss.in">iSupport@tgss.in</a></p>
             <div class="text-center mt-4">
                 <p>Want to know more about TGSS? Have more specific queries?</p>
                 <p class="mt-3 mb-3 fw-medium">For enquiry please contact : <a class="text-white text-decoration-none" href="tel:7090031100">7090031100</a></p>
                 <a href="<?= base_url('admission-enquiry')?>" class="box-info-btn mt-3"><span>SCHEDULE YOUR VISIT</span> </a>
             </div>
         </div>
     </div>
 </section>

 <!-- contct info -->

 <section id="contact-us" class="loaction-section justify-content-center align-items-center" style="background-image: url(<?= base_url('assets/web')?>/images/banner.webp);">
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
                         <div class="text-center mt-5">
                             <a href="https://maps.app.goo.gl/NwmmcrTWdd6RBBAA9" class="box-info-btn mt-3 fw-semibold"><span class="fw-bold">VIEW GOOGLE MAP</span> </a>
                             <!--<a class="btn btn-tranparent" target="_blank" href="https://maps.app.goo.gl/NwmmcrTWdd6RBBAA9">VIEW GOOGLE MAP</a>-->
                        </div>
                     </div>
                 </div>
             </div>
             <div class="col-lg-6 col-md-6 col-sm-12">
                 <div class="location">
                     <div class="icon1 extra-style-for-bottom-contact-us-section-2nd-child-img-adjustment"><img alt="icon" loading="lazy" width="115" height="99" decoding="async" data-nimg="1" style="color: transparent; height: auto;margin-top: 18px;" src="<?= base_url('assets/web')?>/images/job.png" /></div>
                     <div class="location-content">
                         <p class="extra-style-for-bottom-contact-us-section-2nd-child-p-adjustment">
                             Are you ready to elevate your <br />
                             career to new heights at TGSS?
                         </p>
                         <p class="visibility-hidden">
                             Are you ready to elevate your <br />
                             career to new heights at TGSS? Are you ready to elevate your mail@
                         </p>
                         <div class="mt-5 m-auto text-center">
                             <a href="<?= base_url('career')?>" class="box-info-btn mt-3 "><span class="fw-bold">SUBMIT YOUR RESUME</span> </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>


 <!-- modal popup for banner -->
<!-- <?php if($popup){?>-->
<!-- <div class="modal fade" id="banner">-->
<!--    <div class="modal-dialog modal-lg modal-dialog-centered">-->
<!--        <div class="modal-content bg-transparent border-0">-->

<!--            <div class="modal-close">-->
<!--                <button type="button" class="btn-close btn-close-popup" data-bs-dismiss="modal"><span class="mtop-1">&times;</span></button>-->
<!--            </div>-->

<!--            <div class="modal-body p-0">-->
<!--                <a href="<?= $popup->link?>" target="_blank">-->
<!--                    <img src="<?= base_url('assets/web')?>/images/TGSS_Popup image.jpg" alt="<?= $popup->title?>" class="img-fluid" style="border: 2px solid  #fff;">-->
<!--                </a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<?php } ?>-->


 <!-- start footer -->
 <?php $this->load->view('web/include/footer')?>
 <!-- end footer -->
 
 <script>
document.addEventListener('DOMContentLoaded', function () {
    const infoModal = document.getElementById('infoModal');

    infoModal.addEventListener('show.bs.modal', function (event) {
        const triggerLink = event.relatedTarget;
        const title = triggerLink.getAttribute('data-title');
        const description = triggerLink.getAttribute('data-description');

        infoModal.querySelector('.modal-title').textContent = title;
        infoModal.querySelector('.modal-body').innerHTML = description;
    });
});
</script>

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
    
    // $(document).ready(function () {
    //     var cursor = $(".cursor"),
    //         follower = $(".cursor-follower"),
    //         posX = 0,
    //         posY = 0,
    //         mouseX = 0,
    //         mouseY = 0;

    //     // Mouse move event to track cursor position
    //     $(document).on("mousemove", function (e) {
    //         mouseX = e.pageX;
    //         mouseY = e.pageY;
    //     });

    //     // Smooth cursor movement
    //     setInterval(function () {
    //         posX += (mouseX - posX) / 9;
    //         posY += (mouseY - posY) / 9;

    //         cursor.css({
    //             left: posX,
    //             top: posY
    //         });
    //         follower.css({
    //             left: posX - 15, // Center follower behind cursor
    //             top: posY + 10 // Position it below the cursor
    //         });
    //     }, 16);

    //     // Show cursor only when hovering over the slider
    //     $(".cursor-notify").on("mouseenter", function () {
    //         cursor.css("display", "block"); // Show cursor
    //         follower.css("display", "block"); // Show follower
    //     });

    //     $(".cursor-notify").on("mouseleave", function () {
    //         cursor.css("display", "none"); // Hide cursor
    //         follower.css("display", "none"); // Hide follower
    //     });

    //     // Initialize Swiper
    //     const swiper = new Swiper('.swiper-container', {
    //         navigation: {
    //             nextEl: '.swiper-button-next',
    //             prevEl: '.swiper-button-prev',
    //         },
    //         loop: true,
    //         autoplay: {
    //             delay: 3000,
    //             disableOnInteraction: false,
    //         },
    //     });
    // });
 </script>

 <script>
     // for slider
     var swiper = new Swiper('.swiper-container', {
         loop: true,
         pagination: {
             el: '.swiper-pagination',
             clickable: true,
         },
         navigation: {
             nextEl: '.swiper-button-next',
             prevEl: '.swiper-button-prev',
         },
          autoplay: {
              delay: 5000,
              disableOnInteraction: false,
          },
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
   document.addEventListener('DOMContentLoaded', function() {
         var swiper = new Swiper('.achievement-swiper', {
             slidesPerView: 4,
             spaceBetween: 00,
             navigation: {
                 nextEl: '.custom-next',
                 prevEl: '.custom-prev',
             },
             breakpoints: {
                 1600: {
                     slidesPerView: 5,
                     spaceBetween: 00
                 },

                 1300: {
                     slidesPerView: 4,
                     spaceBetween: 00
                 },

                 1100: {
                     slidesPerView: 4,
                     spaceBetween: 00
                 },
                1050: {
                     slidesPerView: 3,
                     spaceBetween: 0
                 },
                 
                900: {
                     slidesPerView: 3,
                     spaceBetween: 0
                 },
                 600: {
                     slidesPerView: 2,
                     spaceBetween: 0
                 },
                 576: {
                     slidesPerView: 1.5,
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
 
 <script>

  const logo = document.getElementById('new-logo-size-for-defrent-screen-id');
  const header_below_contact_section = document.getElementById('header-below-contact-section');
  const header_above_contact_section = document.getElementById('header-above-contact-section');
  const logo_section_for_small_screen = document.getElementById('logo-section-for-small-screen');
  const cta_wrap_for_humbarger_menue = document.getElementById('header-cta-right');
  

  const hideThreshold = 10;

  // Function to check if the screen width is 576px or less
  function isSmallScreen() {
     return window.innerWidth <= 576;
    // return window.innerWidth <= 800;
  }

  // Event listener for scroll


  window.addEventListener('resize', function() {
    if (isSmallScreen()) {
      
    }
    else{
        header_above_contact_section.style.display = "none"; 
        // logo_section_for_small_screen.style.display = "block";
    }
  });
  
$(document).ready(function () {
    function adjustHeroForm() {
        const width = $(window).width();

        if (width >= 1001) {
            // Apply margin-left only for large screens
            //$(".hero-form-section").css("margin-left", "135px");
        }
    }

    // Run on page load
    adjustHeroForm();

    // Run on window resize
    $(window).resize(function () {
        adjustHeroForm();
    });
});


</script>

 
<!-- <script>-->
<!--  const logo = document.getElementById('new-logo-size-for-defrent-screen-id');-->
<!--  const header_below_contact_section = document.getElementById('header-below-contact-section');-->
<!--  const header_above_contact_section = document.getElementById('header-above-contact-section');-->
<!--  const logo_section_for_small_screen = document.getElementById('logo-section-for-small-screen');-->
<!--  const hideThreshold = 10; -->

<!--  window.addEventListener('scroll', function() {-->
<!--    let scrollPosition = window.pageYOffset || document.documentElement.scrollTop;-->

<!--    if (scrollPosition > hideThreshold) {-->
<!--      header_below_contact_section.style.display = "none"; -->
<!--      header_above_contact_section.style.display = "block"; -->
<!--      logo_section_for_small_screen.style.display = "block"; -->
<!--      logo.style.display = "none"; -->
<!--    } else {-->
<!--      header_below_contact_section.style.display = "block"; -->
<!--      header_above_contact_section.style.display = "none"; -->
<!--      logo_section_for_small_screen.style.display = "none"; -->
<!--      logo.style.display = "block"; -->
<!--    }-->
<!--  });-->
<!--</script>-->


<script>
$(document).ready(function () {
    // STEP 1: Send OTP
    $('#sendOtpBtn').click(function () {
        const phone = $('#phone2').val();
        console.log(phone);
        if (!/^[0-9]{10}$/.test(phone)) {
            Swal.fire('Error', 'Please enter a valid 10-digit phone number.', 'error');
            return;
        }

        $.ajax({
            url: '<?= base_url("Web/Enquiry/send_otp") ?>',
            type: 'POST',
            data: { phone },
            dataType: 'json',
            success: function (res) {
                if (res.status === 'success') {
                    Swal.fire('Success', 'OTP sent to ' + phone, 'success');
                    // $('#step1').hide();
                    $('#step2').show();
                    $('#sendOtpBtn').hide();
                    // clear OTP boxes & focus first
                    $('.otp-box').val('');
                    $('.otp-box').first().focus();
                } else {
                    Swal.fire('Error', res.message || 'Failed to send OTP', 'error');
                }
            },
            error: function () {
                Swal.fire('Error', 'Failed to send OTP.', 'error');
            }
        });
    });

    // STEP 2: Verify OTP
    $('#verifyOtpBtn').click(function () {
        const otp = $('.otp-box').map(function () { return $(this).val(); }).get().join('');
        const phone = $('#phone2').val();

        if (otp.length !== 4) {
            Swal.fire('Error', 'Please enter a valid 4-digit OTP.', 'error');
            return;
        }

        $.ajax({
            url: '<?= base_url("Web/Enquiry/verify_otp") ?>',
            type: 'POST',
            data: { phone, otp },
            dataType: 'json',
            success: function (res) {
                if (res.status === 'success') {
                    Swal.fire('Success', 'OTP Verified!', 'success');
                    $('#step2').hide();
                    $('#step1').hide();
                    $('#step3').show();
                    // optional: focus first field in step3
                    $('#step3').find('input, select').filter(':visible').first().focus();
                } else {
                    Swal.fire('Error', res.message || 'Invalid OTP', 'error');
                }
            },
            error: function () {
                Swal.fire('Error', 'OTP verification failed.', 'error');
            }
        });
    });

    // OTP auto-move
    $('.otp-box').on('input', function () {
        if (this.value.length === 1) $(this).next('.otp-box').focus();
    }).on('keydown', function (e) {
        if (e.key === 'Backspace' && this.value.length === 0)
            $(this).prev('.otp-box').focus();
    });

    // CAPTCHA: live-check (case-insensitive)
    $('#captcha-input-1').on('input', function () {
        const input = $(this).val().trim();
        const code = $('#captcha-code-1').text().trim();
        if (input.length === 0) {
            $('#captcha-error-1').text('');
            return;
        }
        if (input.toLowerCase() !== code.toLowerCase()) {
            $('#captcha-error-1').text('CAPTCHA does not match').css('color', 'red');
        } else {
            $('#captcha-error-1').text('CAPTCHA matched').css('color', 'green');
        }
    });

    // FINAL: Submit Enquiry (with captcha check)
    $('#enquiryForm').on('submit', function (e) {
        e.preventDefault();
    
        // Final captcha check before submit
        const inputCaptcha = $('#captcha-input-1').val().trim();
        const captchaCode = $('#captcha-code-1').text().trim();
    
        if (inputCaptcha.length === 0) {
            Swal.fire('Error', 'Please enter the CAPTCHA text.', 'error');
            return;
        }
    
        if (inputCaptcha.toLowerCase() !== captchaCode.toLowerCase()) {
            Swal.fire('Error', 'CAPTCHA does not match.', 'error');
            return;
        }
    
        // Send form via AJAX
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            beforeSend: function () {
                // Optional loading indicator
                Swal.fire({
                    title: 'Submitting...',
                    text: 'Please wait while we process your enquiry.',
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
            },
            success: function (res) {
                Swal.close(); // close loading state
    
                if (res.status === 'success') {
                    Swal.fire('Success', res.message, 'success');
                    $('#enquiryForm')[0].reset();
                    $('#step3').hide();
                    $('#step1').show();
                    $('#sendOtpBtn').show();
                } else {
                    Swal.fire('Error', res.message || 'Something went wrong.', 'error');
                }
            },
            error: function () {
                Swal.close();
                Swal.fire('Error', 'Server error, please try again later.', 'error');
            }
        });
    });

});
</script>



