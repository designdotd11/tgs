 <?php $this->load->view('web/include/header-home')?>
<link rel="stylesheet" href="<?= base_url('assets/web')?>/css/apply-form.css" />
<style>
    .thm-btn{
        margin:0 0 !important;
    }
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
    
 <section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= $url?>');">
     <div class="breadcrum-overlay"></div>
     <div class="breadcrum-content">
         <h1 class="title-breadcrum">  ADMISSION ENQUIRY </h1>
         <p> 
            For admission inquiries at The Good Shepherd's (TGSS), please fill out the form below or contact our admissions
            office. We look forward to welcoming your child to our vibrant and nurturing school community.
         </p>
     </div>
 </section>


<section>
    <div class="container-fluid container-box side-space pt-80 pb-80" style="max-width: 1320px;">
        <div class="text-container width-50">
            <h2 class="mb-4">ADMISSION ENQUIRY : SESSION 2026-27</h2>
           <p>
              We are now accepting applications for the 2026-27 academic session at The Good Shepherd's (TGSS). 
              If you're seeking a holistic and nurturing educational environment for your child, we invite you to explore the opportunities at TGSS.
           </p> 

          <p>
             For more information on our admission process, please fill out the form  or reach out to our admissions office.
             Our team is here to guide you through the next steps and answer any questions you may have. 
             Join us in shaping a bright future for your child at TGSS!
         </p>
           
        <a href="<?= base_url('admission-procedure')?>" class="thm-btn contact-two__btn mt-3" style="text-decoration:none;width:fit-content;margin-right: auto !important;">Know More </a>
        </div>
        <div class="form-container">
            <form id="enquiryForm" method="post" action="<?= base_url('save-enquiry')?>" onsubmit="return validateForm()">
                <div id="step1">
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
                    <div class="row">
                        
                        <div class="col-xl-6 col-lg-12">
                                 <div class="form-group">
                                     <label class="lable-text">Session <span class="text-gold">*</span></label>
                                    <select id="session" name="session" class="form-control" required>
                                         <option value="">Select Session</option>
                                         <option value="2024-25">2024-25</option>
                                         <option value="2025-26">2025-26 </option>
                                         <option value="2026-27">2026-27 </option>
                                     </select>
                                     <span id="sessionError" class="error" style="color: red; display: none;">Session is required</span>
                                 </div>
                            </div>
                        <div class="col-xl-6 col-lg-12">
                              <div class="form-group">
                                  <label class="lable-text">Name Of the Student <span class="text-gold">*</span></label>
                                  <input type="text" id="studentName" name="student_name" class="form-control" placeholder="Johny Samual" required>
                                  <span id="nameError" class="error" style="color: red; display: none;">Name is required</span>
                              </div>
                            </div>
        
                            
                          <div class="col-xl-6 col-lg-12">
                             <div class="form-group">
                                <label class="lable-text">Name of the parent <span class="text-gold">*</span></label>
                                <input type="text" id="fatherName" name="fathers_name" class="form-control" placeholder="Enter father's name" required>
                                <span id="fatherError" class="error" style="color: red; display: none;">Father's Name is required</span>
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
                             <span id="emailError" class="error" style="color: red; display: none;">Valid email is required</span><br>
                         </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="d-block d-md-flex gap-4">
                            <div class="flex-grow-1">
                                <div class="form-group">
                                     <label class="lable-text">Location <span class="text-gold">*</span></label>
                                     <select id="location" name="location" class="form-control">
                                        <option value="" disabled>Select Location</option>
                                        <option value="Bengaluru">Bengaluru</option>
                                        <option value="Delhi NCR">Delhi NCR</option>
                                     </select>
                                     <span id="locationError" class="error" style="color: red; display: none;">Location is required</span><br>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <div class="form-group">
                                    <label class="lable-text">School <span class="text-gold">*</span></label>
                                    <select id="school" name="school" class="form-control">
                                        <option value="">Select School</option>
                                        <option value="St. Thomas School">St. Thomas School</option>
                                        <option value="The Trinity School">The Trinity School</option>
                                    </select>
                                    <span id="schoolError" class="error" style="color: red; display: none;">School is required</span><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                         <div class="form-group">
                            <label class="lable-text">Class <span class="text-gold">*</span></label>
                            <select id="class" name="student_class" class="form-control">
                                <option value="">Select Class*</option>
                                <option value="M1 (Pre-Nursery)">M1 (Pre-Nursery)</option>
                                <option value="M2 (LKG)">M2 (LKG)</option>
                                <option value="M3 (UKG)">M3 (UKG)</option>
                                <option value="Grade I">Grade I</option>
                                <option value="Grade II">Grade II</option>
                                <option value="Grade III">Grade III</option>
                                <option value="Grade IV (Above)">Grade IV &amp; Above</option>
                            </select>
                            <span id="classError" class="error" style="color: red; display: none;">Class is required</span><br>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                         <label class="lable-text">Security <span class="text-gold">*</span></label>
                         <div class="input-group">
                            <input type="text" name="captcha" id="captcha-input" class="form-control" placeholder="Enter Text As Shown">
                            <span class="input-group-text" id="captcha-code" style="border-radius:0 5px 5PX 0 !important;padding: 15px 15px;"><b><?= $captchacode ?></b></span>
                            <span id="captchaError" class="error" style="color: red; display: none;">Captcha is required</span><br>
                         </div>
                         </div>
                          <!-- Error message container -->
                            <div id="captcha-error" style="color:red;"></div>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <div class="d-flex align-items-baseline gap-3">
                            <input type="checkbox" id="term_condition" name="term_condition" value="Boat">
                              <label for="term_condition">  I agree to receive information regarding my submitted enquiry on The Good Shepherd’s School
                              </label>
                              <span id="termsError" class="error" style="color: red; display: none;">You must agree to the terms</span><br>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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

    // function sendOTP() {
    //     var phone = document.getElementById('phone').value;
    //     if (phone) {
    //         // Send OTP logic here 
    //         document.getElementById('step2').style.display = 'block';
    //         currentStep = 2;
    //         document.getElementById('formButton').innerText = 'Verify OTP';
    //     } else {
    //         alert('Please enter your phone number.');
    //     }
    // }
    
    function sendOTP() {
        var phone = document.getElementById('phone').value;
    
        // Regular expression for validating phone number
        var phonePattern = /^\+?[0-9]{10,15}$/; // Adjust the pattern as per your requirement
    
        if (phonePattern.test(phone)) {
            // // Proceed to show the OTP input step
            
            $.ajax({
                url: '<?= base_url("Web/Enquiry/send_otp") ?>', // Update with your actual controller method URL
                type: 'POST',
                data: { phone: phone },
                dataType: 'json',
                success: function(response) {
                    // Check the response status
                    if (response.status === 'success') {
                        swal('OTP sent to ' + phone);
                        document.getElementById('step2').style.display = 'block';
                        currentStep = 2;
                        document.getElementById('formButton').innerText = 'Verify OTP';
                    } else {
                        alert(response.message); // Display the error message
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error details:', xhr.responseText); // Log the error details
                    alert('There was an error sending the OTP. Please try again.');
                }
            });
        } else {
            alert('Please enter a valid phone number. It should be between 10 to 15 digits and may include a country code.');
        }
    }

    function verifyOTP() {
        var otpInputs = document.querySelectorAll('.otp-box');
        var otp = Array.from(otpInputs).map(input => input.value).join('');
        var phone = $('input[name="phone"]').val();
        // alert(phone);
        if (otp.length === 4) {
            // Verify OTP logic here
            $.ajax({
                url: '<?= base_url('Web/Enquiry/verify_otp')?>',
                type: 'POST',
                data: {otp: otp, phone: phone},
                dataType: 'json',
                success: function(response) {
                    if(response.status === 'success') {
                        // alert('OTP verified successfully!');
                        swal("Good job!", "OTP verified successfully!", "success");
                        document.getElementById('step3').style.display = 'block';
                        currentStep = 3;
                        document.getElementById('formButton').innerText = 'Submit';
                    } else {
                        // alert('Invalid OTP. Please try again.');
                        swal("Error!", "Invalid OTP. Please try again", "error");
                    }
                }
            });
            
        } else {
            swal("Error!", "Please enter a valid 4-digit OTP", "error");
        }
    }

    function submitForm() {
        // document.getElementById('enquiryForm').submit();
        if (validateForm()) {
            // If validation passes, submit the form
            document.getElementById('enquiryForm').submit();
        }
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

<script>
    function validateForm() {
        var isValid = true;
    
        // Get form fields
        var sessionField = document.getElementById('session');
        var session = sessionField ? sessionField.value.trim() : "";
    
        var nameField = document.getElementById('studentName');
        var name = nameField ? nameField.value.trim() : "";
    
        var fatherNameField = document.getElementById('fatherName'); // Correct ID
        var fatherName = fatherNameField ? fatherNameField.value.trim() : "";
    
        var emailField = document.getElementById('email');
        var email = emailField ? emailField.value.trim() : "";
    
        var classField = document.getElementById('class');
        var classes = classField ? classField.value.trim() : "";
    
        var locationField = document.getElementById('location');
        var location = locationField ? locationField.value.trim() : "";
    
        var schoolField = document.getElementById('school');
        var school = schoolField ? schoolField.value.trim() : "";
    
        var captchaField = document.getElementById('captcha-input');
        var captcha = captchaField ? captchaField.value.trim() : "";
    
        var terms = document.getElementById('term_condition') ? document.getElementById('term_condition').checked : false;
    
        // Validate Session
        if (session === "") {
            var sessionError = document.getElementById('sessionError');
            if (sessionError) {
                sessionError.style.display = 'block';
            }
            isValid = false;
        } else {
            var sessionError = document.getElementById('sessionError');
            if (sessionError) {
                sessionError.style.display = 'none';
            }
        }
    
        // Validate Name
        if (name === "") {
            var nameError = document.getElementById('nameError');
            if (nameError) {
                nameError.style.display = 'block';
            }
            isValid = false;
        } else {
            var nameError = document.getElementById('nameError');
            if (nameError) {
                nameError.style.display = 'none';
            }
        }
    
        // Validate Father's Name
        if (fatherName === "") {
            var fatherError = document.getElementById('fatherError');
            if (fatherError) {
                fatherError.style.display = 'block';
            }
            isValid = false;
        } else {
            var fatherError = document.getElementById('fatherError');
            if (fatherError) {
                fatherError.style.display = 'none';
            }
        }
    
        // Validate Email
        if (!validateEmail(email)) {
            var emailError = document.getElementById('emailError');
            if (emailError) {
                emailError.style.display = 'block';
            }
            isValid = false;
        } else {
            var emailError = document.getElementById('emailError');
            if (emailError) {
                emailError.style.display = 'none';
            }
        }
    
        // Validate Class
        if (classes === "") {
            var classError = document.getElementById('classError');
            if (classError) {
                classError.style.display = 'block';
            }
            isValid = false;
        } else {
            var classError = document.getElementById('classError');
            if (classError) {
                classError.style.display = 'none';
            }
        }
    
        // Validate School
        if (school === "") {
            var schoolError = document.getElementById('schoolError');
            if (schoolError) {
                schoolError.style.display = 'block';
            }
            isValid = false;
        } else {
            var schoolError = document.getElementById('schoolError');
            if (schoolError) {
                schoolError.style.display = 'none';
            }
        }
    
        // Validate Location
        if (location === "") {
            var locationError = document.getElementById('locationError');
            if (locationError) {
                locationError.style.display = 'block';
            }
            isValid = false;
        } else {
            var locationError = document.getElementById('locationError');
            if (locationError) {
                locationError.style.display = 'none';
            }
        }
    
        // Validate Captcha
        if (captcha === "") {
            var captchaError = document.getElementById('captchaError');
            if (captchaError) {
                captchaError.style.display = 'block';
            }
            isValid = false;
        } else {
            var captchaError = document.getElementById('captchaError');
            if (captchaError) {
                captchaError.style.display = 'none';
            }
        }
    
        // Validate Terms & Conditions
        if (!terms) {
            var termsError = document.getElementById('termsError');
            if (termsError) {
                termsError.style.display = 'block';
            }
            isValid = false;
        } else {
            var termsError = document.getElementById('termsError');
            if (termsError) {
                termsError.style.display = 'none';
            }
        }
    
        // Return true if all fields are valid, false otherwise
        return isValid;
    }
    
    // Helper function to validate email format
    function validateEmail(email) {
        var re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        return re.test(email);
    }
</script>