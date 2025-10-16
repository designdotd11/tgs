
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

<section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= base_url('assets/web')?>/images/30 Career.jpg');">
    <div class="breadcrum-overlay"></div>
    <div class="breadcrum-content">
        <!--<h1 class="title-breadcrum">Career</h1>-->
        <!--<p class="breadcrum-sub-text mt-2 mb-0">-->
        <!--    At TGS, we believe that our staff is our greatest asset. We are dedicated to providing a supportive and enriching environment for both our students and our employees. -->
        <!--    If you are passionate about education and want to make a meaningful impact, we invite you to join our team.-->
        <!--</p>-->
    </div>
</section>


    <section class="pt-80 pb-80">
        <div class="container side-space">
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-5 col-sm-12">
                  <?php include('include/sidebar.php') ?>

                </div>
                <div class="col-xxl-9 col-xl-9 col-lg-8 col-md-7 col-sm-12" id="indusrty-box">
                    <div class="content-para  w-100 ps-lg-3 ps-xl-4 ps-xxl-3">
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
                   <form action="<?= base_url('save_career')?>" method="post" class="form__label" enctype='multipart/form-data'>
                        <div class="row">
                           <div class="col-xl-6">
                              <div class="form-group">
                                 <label for="name" class="lable-text"> Name <span>*</span></label>
                                 <input class="form-control" placeholder="Your Name" type="text" name="name" required>
                              </div>
                           </div>
                           <div class="col-xl-6">
                              <div class="form-group">
                                 <label for="email" class="lable-text">Email <span>*</span></label>
                                 <input class="form-control" placeholder="Email Address" type="email" name="email" required>
                              </div>
                           </div>
                           <div class="col-xl-6">
                              <div class="form-group">
                                 <label for="phone" class="lable-text"> Phone <span>*</span></label>
                                 <input class="form-control" placeholder="Phone Number" type="text" name="phone" required>
                              </div>
                           </div>

                           <div class="col-xl-6">
                              <div class="form-group">
                                 <label for="subject" class="lable-text">City </label>
                                 <input class="form-control" placeholder="City" type="text" name="city" required>
                              </div>
                           </div>

                           <div class="col-xl-6">
                              <div class="form-group">
                                 <label for="subject" class="lable-text">Qualification </label>
                                 <input class="form-control" placeholder="Qualification" type="text" name="qualification" required>
                              </div>
                           </div>

                           <div class="col-xl-6">
                              <div class="form-group">
                                 <label for="address" class="lable-text">College/Institute Name </label>
                                 <input class="form-control" type="text" name="institute" required placeholder="College/Institute Name">
                              </div>
                           </div>

                           <div class="col-xl-6">
                              <div class="form-group">
                                 <label for="address" class="lable-text">Apply For <span>*</span></label>
                                 <input class="form-control" type="text" name="apply_for" required placeholder="Apply For">
                              </div>
                           </div>

                           <div class="col-xl-6">
                              <div class="form-group">
                                 <label for="address" class="lable-text">Experience</label>
                                <select class="form-control" name="experience">
                                 <option value="">---Select---</option>
                                 <option value="Fresher">Fresher</option>
                                 <option value="0-6 month">0-6 month </option>
                                 <option value="1 year">1 year </option>
                                 <option value="2 year">2 year </option>
                                 <option value="3 year">3 year </option>
                                 <option value="4 year">4 year</option>
                                 <option value="+5 year">+5 year</option>
                               </select>
                              </div>
                           </div>

                           <div class="col-xl-12">
                              <div class="form-group text-message-box">
                                  <label for="formFile" class="form-label">Uplaod CV</label>
                                  <input class="form-control" name="resume" type="file" id="formFile" style="line-height:30px">
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
                              <button class="thm-btn contact-two__btn">Send   </button>
                           </div>
                           </div>
                        </div>
                     </form>
               </div>

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