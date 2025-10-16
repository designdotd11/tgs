 <?php $this->load->view('web/include/header-home')?>
<link rel="stylesheet" href="<?= base_url('assets/web')?>/css/apply-form.css" />


 <section class="breadcrum-us-section top-space-subpage bottom-space">
     <div class="breadcrum-overlay"></div>
     <div class="breadcrum-content">
         <h1 class="title-breadcrum">  ADMISSION ENQUIRY </h1>
         <p> 
            For admission inquiries at The Good Shepherd's (TGS), please fill out the form below or contact our admissions office. We look forward to welcoming your child to our vibrant and nurturing school community.
         </p>
     </div>
 </section>


<section>
    <div class="container-fluid container-box side-space pt-80 pb-80">
        <div class="text-container w-50">
            <h2 class="mb-4">ADMISSION ENQUIRY : SESSION 2024-25</h2>
           <p>
              We are now accepting applications for the 2024-25 academic session at The Good Shepherd's (TGS). 
              If you're seeking a holistic and nurturing educational environment for your child, we invite you to explore the opportunities at TGS.
           </p> 

          <p>
             For more information on our admission process, please fill out the form  or reach out to our admissions office.
             Our team is here to guide you through the next steps and answer any questions you may have. 
             Join us in shaping a bright future for your child at TGS!
         </p>
           
        <a href="#" class="box-info-btn-black mt-3"><span>Know More</span> <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="form-container">
            <form id="enquiryForm">
                <div id="step1">
                    <div class="row">
                        
                        <div class="col-xl-6 col-lg-12">
                                 <div class="form-group">
                                      
                                     <label class="lable-text">Session <span class="text-gold">*</span></label>
                                    <select id="session" name="session" class="form-control">
                                         <option value="">Select Session</option>
                                         <option>2024-25</option>
                                        <option>2025-26 </option>
                                         <option>2026-27 </option>
                                     </select>
                                 </div>
                            </div>
                        <div class="col-xl-6 col-lg-12">
                              <div class="form-group">
                                  <label class="lable-text">Name Of the Student <span class="text-gold">*</span></label>
                                  <input type="text" id="studentName" name="studentName" class="form-control" placeholder="Johny Samual" required>
                              </div>
                            </div>
        
                            
                          <div class="col-xl-6 col-lg-12">
                             <div class="form-group">
                                <label class="lable-text">Father's Name <span class="text-gold">*</span></label>
                                <input type="text" id="fatherName" name="fatherName" class="form-control" placeholder="Enter father's name" required>
                             </div>
                        </div>
                    <div class="col-lg-6">
                         <div class="form-group">
                          <label class="lable-text">Phone Number <span class="text-gold">*</span></label>
                          <input type="tel" id="phone" name="phone" class="form-control" placeholder="Ex.+91 111 111 1111" required>
                        </div>
                    </div>
                </div>
            </div>

                <div id="step2" style="display: none;">
                    <div class="col-lg-12">
                         <div class="form-group">
                            <label class="lable-text">Enter OTP <span class="text-gold">*</span></label>
                            <div id="otp" class="otp-input">
                                <input type="text" class="form-control otp-box" maxlength="1" required>
                                <input type="text" class="form-control otp-box" maxlength="1" required>
                                <input type="text" class="form-control otp-box" maxlength="1" required>
                                <input type="text" class="form-control otp-box" maxlength="1" required>
                            </div>
                         </div>
                    </div>
                </div>

                <div id="step3" style="display: none;">
                    <div class="col-lg-12">
                         <div class="form-group">
                             <label class="lable-text">Email Address <span class="text-gold">*</span></label>
                             <input type="email" id="email" name="email" class="form-control" placeholder="Ex: johny@gmail.com" required>
                         </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="d-block d-md-flex gap-4">
                            <div class="flex-grow-1">
                                <div class="form-group">
                                     <label class="lable-text">Location <span class="text-gold">*</span></label>
                                     <select id="location" name="location" class="form-control">
                                        <option value="" disabled>Select Location</option>
                                        <option value="2">Bengaluru</option>
                                        <option value="1">Delhi NCR</option>
                                     </select>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <div class="form-group">
                                    <label class="lable-text">School <span class="text-gold">*</span></label>
                                    <select id="school" name="school" class="form-control">
                                        <option value="">Select School</option>
                                        <option value="1">St. Thomas School</option>
                                        <option value="4">The Trinity School</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                         <div class="form-group">
                            <label class="lable-text">Class <span class="text-gold">*</span></label>
                            <select id="class" name="class" class="form-control">
                                <option>Select Class*</option>
                                <option>M1 (Pre-Nursery)</option>
                                <option>M2 (LKG)</option>
                                <option>M3 (UKG)</option>
                                <option>Grade I</option>
                                <option>Grade II</option>
                                <option>Grade III</option>
                                <option>Grade IV &amp; Above</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                         <label class="lable-text">Security <span class="text-gold">*</span></label>
                         <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter Text As Shown">
                            <span class="input-group-text" style="border-radius:0 5px 5PX 0 !important;padding: 15px 15px;"><b>AFH56</b></span>
                         </div>
                         </div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <div class="d-flex align-items-baseline gap-3">
                            <input type="checkbox" id="term_condition" name="term_condition" value="Boat">
                              <label for="term_condition">  I agree to receive information regarding my submitted enquiry on The Good Shepherd’s School
                              </label>
                        </div>          
                       
                         
                    </div>
                </div>

                <div class="m-auto text-center">
                    <button type="button" id="formButton" class="form-btn mt-4" onclick="handleForm()">Send OTP</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php $this->load->view('web/include/footer')?>

<script>
    let currentStep = 1;

    function handleForm() {
        if (currentStep === 1) {
            sendOTP();
        } else if (currentStep === 2) {
            verifyOTP();
        } else if (currentStep === 3) {
            submitForm();
        }
    }

    function sendOTP() {
        var phone = document.getElementById('phone').value;
        if (phone) {
            // Send OTP logic here 
            document.getElementById('step2').style.display = 'block';
            currentStep = 2;
            document.getElementById('formButton').innerText = 'Verify OTP';
        } else {
            alert('Please enter your phone number.');
        }
    }

    function verifyOTP() {
        var otpInputs = document.querySelectorAll('.otp-box');
        var otp = Array.from(otpInputs).map(input => input.value).join('');
        if (otp.length === 4) {
            // Verify OTP logic here
            document.getElementById('step3').style.display = 'block';
            currentStep = 3;
            document.getElementById('formButton').innerText = 'Submit';
        } else {
            alert('Please enter a valid 4-digit OTP.');
        }
    }

    function submitForm() {
        document.getElementById('enquiryForm').submit();
    }

    document.querySelectorAll('.otp-box').forEach((box, index, boxes) => {
        box.addEventListener('input', () => {
            if (box.value.length === 1 && index < boxes.length - 1) {
                boxes[index + 1].focus();
            }
        });
        box.addEventListener('keydown', (e) => {
            if (e.key === 'Backspace' && box.value.length === 0 && index > 0) {
                boxes[index - 1].focus();
            }
        });
    });
</script>


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