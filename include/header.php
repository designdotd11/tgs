<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('web/include/meta')?>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/web')?>/images/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.1.9/dist/lenis.css">
    <link rel="stylesheet" href="<?= base_url('assets/web')?>/css/style.css" />

    <link href="https://fonts.googleapis.com/css2?family=League+Gothic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Hurricane&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= base_url('assets/web')?>/css/NewExtraCss.css" />
    
     <style>
     
     .new-logo-size-for-defrent-screen{
        height: 75px !important;
    }
    
    /* For small devices */
    @media (max-width: 768px) {
        .new-logo-size-for-defrent-screen{
            height: 75px !important;
        }
    }

@media only screen and (max-width: 600px) {
    .sticky-logo .new-logo-size-for-defrent-screen{
       height: 40px !important; 
       display:block;
   }
   
   .new-extrar-contacct-details{
           display:none;
       }
    }
    
@media (max-width:576px){
    #header.sticky-active .logo-blue {
        display: block !important;
        height: 69px;
    }
}

html, body {
  overflow-y: auto !important;
  height: auto !important;
  position: static !important;
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
            <p>Tel: <a href="tel:+917090031100">+91 70900 31100</a> 📞</p>
          </div>

          <div>
          <h3>Write to us at</h3>
          <p><a href="mailto:mail@tgss.in">mail@tgss.in</a></p>
          </div>

          <div>
          <h3>Social Links</h3>
          <div class="cmodal-social">
            <a href="#">
                <img src="<?= base_url('assets/web')?>/images/NewExtraImages/contact_facebook.png" alt="">
            </a>
            <a href="#">
                <img src="<?= base_url('assets/web')?>/images/NewExtraImages/instagram.png" alt="">
                
            </a>
            <a href="#">
                <img src="<?= base_url('assets/web')?>/images/NewExtraImages/linkedin.png" alt="">

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
        <form class="formmodal-form" method="post" action="<?= base_url('save-enquiry')?>">
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






        <header class="header header-home bg-white"  id="header">
            <!--<nav class="navbar">-->
            <!--    <div class="container-fluid side-space">-->
            <!--        <div class="d-flex justify-content-between w-100 align-items-center gap-3">-->
            <!--            <div class="d-flex gap-4 align-items-center order-mobile-3 flex_direction">-->
            <!--                <button class="btn btn-text ps-0 pe-0 " data-bs-toggle="offcanvas" data-bs-target="#humburgmenu" style="color:#827A78">-->
            <!--                    <span class="btn-white" style="background: #e5d7d3;"><img src="<?= base_url('assets/web') ?>/images/humburg.png" alt="humburge"></span> <span class="hide-mobile"> Menu</span>-->
            <!--                </button>-->

                            <!--<button class="btn btn-text ps-0 " style="color:#827A78">-->
                            <!--    <span>-->
                            <!--        <img src="<?= base_url('assets/web') ?>/images/user-dark.png" width="30" height="30" alt="Login">-->
                            <!--    </span> <span class="hide-mobile"> Login</span>-->
                            <!--</button>-->

                            <!--<button class="btn btn-text ps-0" data-bs-toggle="offcanvas" data-bs-target="#search" style="color:#827A78">-->
                            <!--    <span>-->
                            <!--        <img src="<?= base_url('assets/web') ?>/images/search-dark.png" width="30" height="30" class="search-dark" alt="Search">-->
                            <!--    </span>-->
                            <!--</button>-->
            <!--            </div>-->

            <!--            <div class="logo common-logo">-->
            <!--                <a href="<?= base_url('')?>">-->
            <!--                  <img src="<?= base_url('assets/web') ?>/images/GoodShep-bluelogo.svg" alt="Logo">-->
            <!--                </a>-->
            <!--            </div>-->


            <!--            <div class="right-section">-->
            <!--                <ul class="navbar-nav flex-row gap-3 gap-xl-5">-->
            <!--                    <li class="nav-item" style="color:#827A78">-->
            <!--                        <a class="nav-link font-poppins fw-normal" style="color:#827A78 !important" href="tel:+91 70900 31100"><span><img src="<?= base_url('assets/web') ?>/images/call-dark.png" alt="call"></span> +91 70900 31100</a>-->
            <!--                    </li>-->
            <!--                    <li class="nav-item" style="color:#827A78">-->
            <!--                        <a class="nav-link font-poppins fw-medium" style="color:#827A78 !important" href="<?= base_url('admission-enquiry')?>"><b>APPLY NOW</b></a>-->
            <!--                    </li>-->
            <!--                </ul>-->

            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            
            
            

        </header>
<script>
             function openApplyNowForm() {
  document.getElementById("formModal").style.display = "flex";
}

function openContactUsForm() {
    // window.location.href = "/contact-us";
  document.getElementById("cmodal").style.display = "flex";
}

function cmodalClose() {
  document.getElementById("cmodal").style.display = "none";
}

function closeFormModal() {
  document.getElementById("formModal").style.display = "none";
}


         </script>
         
          <script>
  const logo = document.getElementById('new-logo-size-for-defrent-screen-id');
  const hideThreshold = 10; 

  window.addEventListener('scroll', function() {
    let scrollPosition = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollPosition > hideThreshold) {
      logo.style.display = "none"; 
    } else {
      logo.style.display = "block"; 
    }
  });
</script>

        <!-- end header -->
        
        
