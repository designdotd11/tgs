<style>
    /*body {*/
    /*    overflow-x: clip !important;*/
    /*    width: 100%;*/
    /*}*/

.sidebar {
    background-color: #009bbf;
    width: 280px;
    min-height: auto;
    /*padding: 20px;*/
    border-radius: 2px;
}

.sidebar .nav-item {
    border-bottom: 1px solid #ffffff3b;
}

.sidebar .nav-link2 {
    color: #fff;
    padding: 9px 10px;
    transition: 0.3s;
    font-size: 16px;
    font-weight: 400;
    font-family: 'Poppins';
    display: flex;
    align-items: center;
    justify-content: space-between;
    text-decoration:none;
}

.sidebar .nav-link2:hover,
.sidebar .nav-link2.active {
    background-color: #0003;
    color: #fff !important;
    font-weight: 400;
}

.submenu .nav-link2.active {
    background-color: #cebdbd00 !important;
    color: #000 !important;
    font-weight: 600 !important;
}

.submenu {
    /*margin-top: 5px;*/
    line-height: normal;
    list-style: none;
    padding-left: 0px;
}


/*.submenu li {*/
/*    padding-left: 12px;*/
/*}*/

.submenu .nav-link2 {
    font-size: 0.95rem;
    width: 100%;
    font-size: 14px;
    font-weight: 400;
    background-color:#0004;
    padding-left: 20px;
}

.dropdown-toggle::after {
    float: right;
    margin-top: 0px;
}

.card-width {
    width: 280px;
}

.contact-card {
    background-color: #e3b130;
    color: #000;
    padding: 20px 10px;
    border-radius: 2px;
    max-width: 350px;
}

.contact-item p,
.contact-item a {
    font-family: 'Poppins';
    font-size: 16px;
    line-height: 26px;
    color: #333;
    text-decoration: none;
}

.contact-card h5 {
    font-weight: 500;
    color: #000;
    font-family: 'Poppins';
    font-size: 20px;
    text-align: center;
    line-height: 24px;
}

.contact-item {
    margin-bottom: 20px;
}

.contact-icon {
    font-size: 1.2rem;
    margin-right: 10px;
    color: #333;
}

.contact-button {
    background-color: #fff;
    color: #333;
    font-weight: 500;
}

.submenu li {
    /*border-bottom: 1px solid #ffffff4a;*/
}

.contact-button:hover {
    background-color: #333;
    color: #fff;
}

.hr {
    border-top: 1px dashed #ffffff;
    opacity: .5;
}

.btn-toggle-sidebar1 {
    display: none;
    position: relative;
    top: 15px;
    left: 0px;
    background-color: #246a9f;
    color: #fff;
    border: none;
    padding: 10px 15px;
    border-radius: 4px;
    z-index: 1;
    width: fit-content;
    text-align:left;
}

.btn-toggle-sidebar1:focus {
    outline: none;
}

.sticky-section {
    position: sticky!important;
    top: 10px!important;
    transition: opacity 0.3s ease;
    opacity: 1;
}

 @media only screen and (max-width:1400px) {
    .sidebar {
        width: 265px;
    }
    .card-width {
      width: 265px;
    }
}


 @media only screen and (max-width:1199.5px) {
    .sidebar {
        width: 285px;
    }
    .card-width {
      width: 285px;
    }
}


 @media only screen and (max-width:992px) {
     .sidebar {
        width: 265px;
    }
    .card-width {
      width: 265px;
    }
}

@media only screen and (max-width: 768px) {

.btn-toggle-sidebar1 {
  width: 100%;
}

.sidebar {
 width: 100%;
}

.sidebar1 {
  width: 100%;
}

.contact-card
 {
    max-width: 100%;
    width: 100%;
}
.card-width {
    width: 100%;
}
}

@media (max-width: 767.5px) {
    .sidebar1 {
        position: sticky;
        top: 10px;
        left: -100%;
        height: auto;
        overflow-y: auto;
        transition: left 0.3s ease;
        z-index: 1;
        display: none;

    }

    .sidebar1.open {
        margin-bottom: 15px;
    }

    .sidebar1.open {
        left: 0;
        display: block !important;
    }

    .btn-toggle-sidebar1 {
        display: block;
    }

    .industry-info {
        flex-direction: column;
    }

    .sticky-hidden {
        opacity: 1;
    }
 }
 
    
@media (max-width: 500px) {
.btn-toggle-sidebar1 {
  width: 100%;
}

.contact-card
{
display:none;
}
}
</style>

<button class="btn-toggle-sidebar1 mb-5" id="toggleSidebar"><i class="bi bi-layout-text-sidebar"></i> Sidebar Menu</button>
<div class="sidebar1 sticky-section" id="sidebar1">
    <div class="sidebar">
    <ul class="nav flex-column">

        <!-- The School -->
        <li class="nav-item">
            <a class="nav-link2 dropdown-toggle" data-bs-toggle="collapse" href="#theschoolMenu" role="button">
                About Us
            </a>
            <ul class="collapse submenu" id="theschoolMenu">
                <li><a class="nav-link2" href="<?= base_url('the-school')?>">The School</a></li>
                <li><a class="nav-link2" href="<?= base_url('vision-mission-value')?>">Vision, Mission & Values</a></li>
                <li><a class="nav-link2" href="<?= base_url('president-desk')?>">From The President’s Desk</a></li>
                <li><a class="nav-link2" href="<?= base_url('founder-desk')?>">From The Founder’s Desk</a></li>
                <li><a class="nav-link2" href="<?= base_url('director-message')?>">From the Director’s Desk</a></li>
                <li><a class="nav-link2" href="<?= base_url('our-legacy')?>">Our Legacy – The Chronicles</a></li>
                <li><a class="nav-link2" href="<?= base_url('institutions')?>">Our Institutions</a></li>
                <li><a class="nav-link2" href="<?= base_url('associations-and-collaborations')?>">Associations & Collaborations</a></li>
                <li><a class="nav-link2" href="<?= base_url('public-disclosure')?>">Mandatory Public Disclosure</a></li>
            </ul>
        </li>

        <!-- Academics -->
        <li class="nav-item">
            <a class="nav-link2 dropdown-toggle" data-bs-toggle="collapse" href="#academicsMenu" role="button">
                Academics
            </a>
            <ul class="collapse submenu" id="academicsMenu">
                <li><a class="nav-link2" href="<?= base_url('academics-overview')?>">Overview</a></li>
                <li><a class="nav-link2" href="<?= base_url('curriculum')?>">Curriculum / Courses of Study</a></li>
                <li><a class="nav-link2" href="<?= base_url('assessment-systems')?>">Examination, Assessment Systems</a></li>
                <li><a class="nav-link2" href="<?= base_url('annual-calendar')?>">Annual Calendar</a></li>
                <li><a class="nav-link2" href="<?= base_url('school-timing')?>">School Timings</a></li>
            </ul>
        </li>

        <!-- Beyond Academics -->
        <li class="nav-item">
            <a class="nav-link2 dropdown-toggle" data-bs-toggle="collapse" href="#beyondAcademicsMenu" role="button">
                Beyond Academics
            </a>
            <ul class="collapse submenu" id="beyondAcademicsMenu">
                <li><a class="nav-link2" href="<?= base_url('houses')?>">Houses, Clubs, Visits & Excursions, Student Council</a></li>
                <li><a class="nav-link2" href="<?= base_url('guidance-and-counselling')?>">Guidance & Counselling, Workshops and Orientations</a></li>
                <li><a class="nav-link2" href="<?= base_url('creative-arts')?>">Creative Arts</a></li>
                <li><a class="nav-link2" href="<?= base_url('library-systems')?>">Library</a></li>
                <li><a class="nav-link2" href="<?= base_url('laboratories')?>">Laboratories</a></li>
                <li><a class="nav-link2" href="<?= base_url('ai-and-coding-and-robotics')?>">AI, Coding & Robotics</a></li>
                <li><a class="nav-link2" href="<?= base_url('sports')?>">Sports</a></li>
                <li><a class="nav-link2" href="<?= base_url('safety-and-security')?>">Safety & Security</a></li>
                <li><a class="nav-link2" href="<?= base_url('building-and-transport')?>">Transport Facilities</a></li>
            </ul>
        </li>

        <!-- Admission -->
        <li class="nav-item">
            <a class="nav-link2 dropdown-toggle" data-bs-toggle="collapse" href="#admissionMenu" role="button">
                Admission
            </a>
            <ul class="collapse submenu" id="admissionMenu">
                <li><a class="nav-link2" href="<?= base_url('admission-procedure')?>">Admission Procedure</a></li>
                <li><a class="nav-link2" href="<?= base_url('school-policies-and-handbook')?>">School Policies & Handbook</a></li>
                <li><a class="nav-link2" href="<?= base_url('fees-structure')?>">Fees Structure</a></li>
            </ul>
        </li>

        <!-- Media Coverage -->
        <li class="nav-item">
            <a class="nav-link2 dropdown-toggle" data-bs-toggle="collapse" href="#mediaMenu" role="button">
                Media Coverage
            </a>
            <ul class="collapse submenu" id="mediaMenu">
                <li><a class="nav-link2" href="<?= base_url('news')?>">News / Events</a></li>
                <li><a class="nav-link2" href="<?= base_url('gallery')?>">Gallery</a></li>
                <li><a class="nav-link2" href="<?= base_url('video')?>">Video</a></li>
                <li><a class="nav-link2" href="<?= base_url('blogs')?>">Blog</a></li>
            </ul>
        </li>

        <!-- Career -->
        <li class="nav-item"><a class="nav-link2" href="<?= base_url('career')?>">Career</a></li>

        <!-- Contact Us -->
        <li class="nav-item"><a class="nav-link2" href="<?= base_url('contact-us')?>">Contact Us</a></li>

    </ul>
</div>


    <div class="my-3 card-width d-flex justify-content-center">
        <div class="contact-card shadow">
            <h5 class="mb-3">The Good Shepherd’s School </h5>

            <div class="contact-item d-flex">
                <i class="bi bi-geo-alt contact-icon"></i>
                <p class="mb-0">Survey No 86/1, Baiyappanahalli Village, Bidarahalli Hobli, Bengaluru 560049 Karnataka, INDIA</p>
            </div>

            <hr class="hr">

            <div class="contact-item d-flex">
                <i class="bi bi-envelope-at contact-icon"></i>
                <a href="mailto:mail@tgss.in" class="mb-0">mail@tgss.in</a>
            </div>

            <hr class="hr">

            <div class="contact-item d-flex">
                <i class="bi bi-telephone-fill contact-icon"></i>
                <div>
                    <a href="tel:7090031100" class="mb-1">+91-7090031100</a>
                </div>
            </div>

            <div class="mt-4 text-center">
                <a href="https://maps.app.goo.gl/tWAmzWpcGMHEsPmg7" target="_blank" class="btn contact-button px-4 py-2">
                    <i class="bi bi-geo-alt"></i> Get Location Map
                </a>
            </div>
        </div>
    </div>

</div>





