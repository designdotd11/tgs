
<!--  header -->
 <?php $this->load->view('web/include/header-home')?>
<!--End  header -->


<link rel="stylesheet" href="<?= base_url('assets/web')?>/css/contact.css" />
<style>
.breadcrum-overlay {
  background-color: #02020200 !important;
  z-index: 1;
}
</style>


<?php if($banner){
    $url = base_url('uploads/banner/').$banner->image;
}else{
    $url = base_url('assets/web/images/Slide.jpg');
} ?>

<section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= base_url('assets/web')?>/images/31Contact Us.jpg');" style="background-size: contain;">
    <div class="breadcrum-overlay"></div>
    <div class="breadcrum-content">
        <!--<h1 class="title-breadcrum">Conatct Us</h1>-->
        <!--<p class="breadcrum-sub-text mt-2 mb-0">-->
        <!--    We at The Good Shepherd’s (TGS) value open communication and are here to assist you with any inquiries you may have.-->
        <!--    </p>-->
    </div>
</section>

<!--contact form -->
<section class="about-us-section pb-80 side-space">
   <div class="container-fluid px">
      <div class="row">
          
         <div class="col-12 col-xl-8 col-lg-12 m-auto ">
           <div class="contact-info">
                    <div class="contact-box">
                        <h3>Contact Info</h3>
                        <p class="mb-2">Reach out via call and email </p>
                       <p class="mb-1">
                          <i class="fas fa-phone-alt me-1" style="color:#333"></i>  <a href="tel:7090031100"> +91-7090031100/22/33/44  </a>
                       </p>
                       
                      <p class="mb-1">
                        <a class="text-decoration-none" href="mailto:mail@tgss.in"> <i class="fas fa-envelope me-1"></i> mail@tgss.in</a>
                      </p>

                    </div>
                    <div class="contact-box border-left ps-5">
                        <h3>Address </h3>
                        <p>
                            Survey No 86/1, Baiyappanahalli Village, Bidarahalli Hobli, Bengaluru 560049 
                            Karnataka, INDIA
                        </p>
                        <div class="button-contact">
                            <a href="https://maps.app.goo.gl/tWAmzWpcGMHEsPmg7" target="_blank"  class="chat-button">
                               <span class="me-2"> Get directions</span> <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <g clip-path="url(#clip0_222_609)">
                                        <path d="M23.643 11.151L12.843 0.351C12.375 -0.117 11.613 -0.117 11.151 0.351L0.351 11.151C-0.117 11.619 -0.117 12.381 0.351 12.849L11.151 23.643V23.649C11.619 24.117 12.381 24.117 12.849 23.649L23.649 12.849C24.1169 12.375 24.1169 11.619 23.643 11.151ZM14.397 14.997V11.997H9.59697V15.597H7.19696V10.797C7.19696 10.131 7.73094 9.59703 8.39694 9.59703H14.397V6.59699L18.597 10.797L14.397 14.997Z" fill="white"></path>
                                     </g>
                                     <defs>
                                        <clipPath id="clip0_222_609">
                                           <rect width="24" height="24" fill="white"></rect>
                                        </clipPath>
                                     </defs>
                                  </svg>
                            </a>
                            
                        </div>
                       
                    </div>
                </div>
         </div>
         
         <div class="col-xl-8 col-lg-12 m-auto px-0 pt-3">
             <div class="section-title mb-4 text-center">
               <h3 class="contact-title text-dark mb-3" style="font-family:Poppins; letter-spacing:0"> Always Here To Help You </h3>
               <p class="para-text">Please fill in the form below, and we'll connect with you as soon as possible.</p>
             </div>
             
            <div class="contact-details">
                <?php 
                  if($this->session->flashdata('msg')!=''){
                      echo '<div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>'.$this->session->flashdata('msg').'</strong> 
                          </div>';
                  }
                  unset($_SESSION['msg']);
                  
                  if($this->session->flashdata('err')!=''){
                      echo '<div class="alert alert-danger alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>'.$this->session->flashdata('err').'</strong> 
                          </div>';
                  }
                  unset($_SESSION['err']);
              ?>
               <div class="contact__form-box ">
                  <form action="<?= base_url('save-contact')?>" method="post" class="form__label">
                     <div class="row">
                        <div class="col-xl-6">
                           <div class="form-group">
                              <label class="lable-text">Your Name <span class="text-gold">*</span></label>
                              <input class="form-control" placeholder="Your Name" type="text" name="name" required>
                           </div>
                        </div>
                        <div class="col-xl-6">
                           <div class="form-group">
                              <label class="lable-text">Your Email <span class="text-gold">*</span></label>
                              <input class="form-control" placeholder="Email Address" type="email" name="email" required>
                           </div>
                        </div>
                        <div class="col-xl-6">
                           <div class="form-group">
                              <label class="lable-text">Phone Number <span class="text-gold">*</span></label>
                              <input class="form-control" placeholder="Phone Number" type="text" name="phone" required>
                           </div>
                        </div>

                        <div class="col-xl-6">
                           <div class="form-group">
                              <label class="lable-text">State <span class="text-gold">*</span></label>
                              <input class="form-control" placeholder="State" type="text" name="state" required>
                           </div>
                        </div>

                        <div class="col-xl-12">
                           <div class="form-group">
                              <label class="lable-text">Address <span class="text-gold">*</span></label>
                              <input class="form-control" type="text" name="address" required placeholder="Address">
                           </div>
                        </div>
                        
                        <div class="col-xl-12">
                           <div class="form-group text-message-box">
                              <label class="lable-text">Write a Comment</label>
                              <textarea  class="form-control" placeholder="Write a Comment" name="message"></textarea>
                           </div>
                        </div>
                        
                        <div class="col-xl-12">
                              <div class="form-group text-message-box">
                                 <label for="message" class="form-label">Security Code </label>
                                 <div class="input-group flex-nowrap">
                                    <input type="text" name="captcha" id="captcha-input" class="form-control" placeholder="Enter Security Code" style="border-radius: 4px 0 0 4px !important;">
                                    <span class="input-group-text" id="captcha-code"><?= $captchacode ?></span>
                                 </div>
                              </div>
                              <!-- Error message container -->
                                <div id="captcha-error" style="color:red;"></div>
                             </div>
                        
                     </div>
                     <div class="row">
                        <div class="col-xl-12">
                           <div class="contact-form__btn-box mt-sm-4">
                              <button class="thm-btn contact-two__btn">Send a Message </button>
                           </div>
                        </div>
                     </div>
                     
                  </form>
               </div>

            </div>
         </div>
      </div>
   </div>
</section>


<!-- Footer -->
<?php $this->load->view('web/include/footer')?>
<!-- end footer -->

<script>
    $(document).ready(function() {
        $('#captcha-input').on('input', function() {
            // Get the input value and the captcha code
            var inputCaptcha = $(this).val();
            var captchaCode = $('#captcha-code').text().trim();
    
            // Check if the input matches the captcha code
            if (inputCaptcha !== captchaCode) {
                $('#captcha-error').text('CAPTCHA does not match.')
                                   .css('color', 'red'); // Set text color to red for error
            } else {
                $('#captcha-error').text('CAPTCHA matched')
                                   .css('color', 'green'); // Set text color to green for match
            }
        });
    });
</script>