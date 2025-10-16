<!-- Admission Enquiry Modal Component -->
  <div class="formmodal-overlay" id="formModal">
    <div class="formmodal-box">
      <span class="formmodal-close" id="formModalSpan" onclick="closeFormModal()">
          <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" 
          class="text-danger" style="border-radius:50%;font-size:30px;background:#fff" 
          height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
              <path fill="none" d="M0 0h24v24H0z"></path>
              <path d="M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm5 13.59L15.59 17 12 13.41 8.41 17 7 15.59 10.59 12 7 8.41 8.41 7 12 10.59 15.59 7 17 8.41 13.41 12 17 15.59z"></path></svg>
      </span>

       <!--Left content -->
      <div class="formmodal-left">
       
        <!-- Left: Form -->
        <div class="formmodal-left p-4" style="flex:1;">
            <h2>Fill this form to help us personalise your experience</h2>

            <form id="modalEnquiryForm" method="post" action="<?= base_url('save-enquiry') ?>">
              <!-- Step 1 -->
                <div id="modalStep1">
                    <div class="form-group mb-2" style="margin-bottom:10px;">
                        <label>Session <span>*</span></label>
                        <select id="session" name="session" class="form-control" required
                                style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px;">
                            <option value="">Select Session</option>
                            <option value="2024-25">2024-25</option>
                            <option value="2025-26">2025-26</option>
                            <option value="2026-27">2026-27</option>
                        </select>
                    </div>
                
                    <div class="form-group mb-2" style="margin-bottom:10px;">
                        <label>Name of the Student <span>*</span></label>
                        <input type="text" id="studentName" name="student_name" class="form-control" placeholder="Enter student name" required
                               style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px;">
                    </div>
                
                    <div class="form-group mb-2" style="margin-bottom:10px;">
                        <label>Father's Name <span>*</span></label>
                        <input type="text" id="fatherName" name="fathers_name" class="form-control" placeholder="Enter father's name" required
                               style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px;">
                    </div>
                
                    <div class="form-group mb-2" style="margin-bottom:10px;">
                        <label>Phone Number <span>*</span></label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="Ex 7090 031 100" required maxlength="10" pattern="[0-9]{10}" title="Enter a valid 10-digit number"
                               style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px;">
                    </div>
                </div>
                
                <!-- Step 2: OTP -->
                <div id="modalStep2" style="display:none; padding:10px;">
                    <div class="form-group mb-2" style="margin-bottom:10px; text-align:center;">
                        <label>Enter OTP <span>*</span></label>
                        <div id="otp" class="otp-input d-flex gap-2" style="display:flex; justify-content:center; gap:5px; margin-top:5px;">
                            <input type="text" class="form-control otp-box" maxlength="1" required
                                   style="width:40px; padding:8px; text-align:center; border:1px solid #ccc; border-radius:4px;">
                            <input type="text" class="form-control otp-box" maxlength="1" required
                                   style="width:40px; padding:8px; text-align:center; border:1px solid #ccc; border-radius:4px;">
                            <input type="text" class="form-control otp-box" maxlength="1" required
                                   style="width:40px; padding:8px; text-align:center; border:1px solid #ccc; border-radius:4px;">
                            <input type="text" class="form-control otp-box" maxlength="1" required
                                   style="width:40px; padding:8px; text-align:center; border:1px solid #ccc; border-radius:4px;">
                        </div>
                    </div>
                </div>
                
                <!-- Step 3: Details -->
                <div id="modalStep3" style="display:none; padding:10px;">
                    <div class="form-group mb-2" style="margin-bottom:10px;">
                        <label>Email Address <span>*</span></label>
                        <input type="email" name="email" class="form-control" placeholder="Ex: johny@gmail.com" required
                               style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px;">
                    </div>
                
                    <div class="d-flex gap-2 mb-2" style="display:flex; gap:10px; margin-bottom:10px;">
                        <div class="flex-grow-1 form-group" style="flex:1;">
                            <label>Location <span>*</span></label>
                            <select id="location" name="location" class="form-control" required
                                    style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px;">
                                <option value="" disabled>Select Location</option>
                                <option value="Bengaluru">Bengaluru</option>
                                <option value="Delhi NCR">Delhi NCR</option>
                            </select>
                        </div>
                
                        <div class="flex-grow-1 form-group" style="flex:1;">
                            <label>School <span>*</span></label>
                            <select id="school" name="school" class="form-control" required
                                    style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px;">
                                <option value="">Select School</option>
                                <option value="St. Thomas School">St. Thomas School</option>
                                <option value="The Trinity School">The Trinity School</option>
                                <option value="The Good Shepherd’s School">The Good Shepherd’s School</option>
                            </select>
                        </div>
                    </div>
                
                    <div class="form-group mb-2" style="margin-bottom:10px;">
                        <label>Class <span>*</span></label>
                        <select id="class" name="student_class" class="form-control" required
                                style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px;">
                            <option value="">Select Class</option>
                            <option value="M1 (Pre-Nursery)">M1 (Pre-Nursery)</option>
                            <option value="M2 (LKG)">M2 (LKG)</option>
                            <option value="M3 (UKG)">M3 (UKG)</option>
                            <option value="Grade I">Grade I</option>
                            <option value="Grade II">Grade II</option>
                            <option value="Grade III">Grade III</option>
                            <option value="Grade IV (Above)">Grade IV & Above</option>
                        </select>
                    </div>
                    
                    <div class="form-group mb-2" style="margin-bottom:10px;">
                        <label>How Did You Hear About Us?<span>*</span></label>
                        <select id="ref"  name="referal" required class="form-control"
                                style="width:100%; padding:8px; border:1px solid #ccc; border-radius:4px;">
                            <option value="" selected>Select..</option>
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
                        </select>
                    </div>
                
                    
                
                  <div class="form-group mb-2" style="margin-bottom:10px;">
                    <!-- Label for captcha input -->
                    <label for="captcha-input">Security <span>*</span></label>
                    
                    <div class="input-group" style="display:flex;">
                        <!-- Captcha input field -->
                        <input type="text" name="captcha" id="captcha-input" class="form-control" placeholder="Enter Text As Shown"
                               style="flex:1; padding:8px; border:1px solid #ccc; border-radius:4px 0 0 4px;">
                
                        <!-- Captcha code display -->
                        <span class="input-group-text" id="captcha-code"
                              style="padding: 1px 12px; background:#eee; border:1px solid #ccc;color:black; border-left:none; border-radius:0 4px 4px 0; font-weight:bold;">
                              <?= $captchacode ?>  <!-- Display the captcha code here -->
                        </span>
                    </div>
                    
                    <!-- Error message if captcha is incorrect -->
                    <div id="captcha-error" style="color:red; font-size:12px; margin-top:5px;"></div>
                </div>
                
                
                    <div class="form-check mt-2" style="margin-top:10px;">
                        <input type="checkbox" id="term_condition" name="term_condition" class="form-check-input" required style="margin-right:5px;">
                        <label class="form-check-label" for="term_condition" style="font-size:14px;">
                            I agree to receive information regarding my submitted enquiry on The Good Shepherd’s School
                        </label>
                    </div>
                </div>


                <div class="text-center mt-3">
                    <button type="button" id="modalFormButton" class="btn btn-primary">Send OTP</button>
                </div>
            </form>
        </div>
      </div>

       <!--Right side image -->
      <div class="formmodal-right"></div>
    </div>
  </div>



<style>
    .formmodal-left{
        padding:2px;
    }
    
    /* Ensure modal overlay covers full screen */
/* Overlay */
#formModal {
    display: none; /* hidden by default */
    position: fixed; /* cover the viewport */
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5); /* semi-transparent background */
    z-index: 1050;
}

/* Modal box center positioning only */
.formmodal-box {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%); /* center without changing width/height */
}


</style>

<script>
document.addEventListener("DOMContentLoaded", function () {

  // 1️⃣ Allow only alphabets for Student Name and Father's Name
  const nameFields = ["#studentName", "#fatherName"];
  nameFields.forEach(selector => {
    const field = document.querySelector(selector);
    field.addEventListener("input", function () {
      this.value = this.value.replace(/[^a-zA-Z\s]/g, ""); // only alphabets and spaces
    });
  });

  // 2️⃣ Allow only numbers and restrict to 10 digits for Phone Number
  const phoneInput = document.querySelector("#phone");
  phoneInput.addEventListener("input", function () {
    this.value = this.value.replace(/[^0-9]/g, ""); // only digits
    if (this.value.length > 10) {
      this.value = this.value.slice(0, 10); // restrict to 10 digits
    }
    
    // Prevent starting with 0
    if (this.value.startsWith('0')) {
        this.value = this.value.substring(1);
    }
  });

  // Optional: Validate before form submission
  const form = document.querySelector("#modalEnquiryForm");
  form.addEventListener("submit", function (e) {
    const phone = phoneInput.value.trim();

    if (phone.length !== 10) {
      e.preventDefault();
      alert("Please enter a valid 10-digit phone number.");
      phoneInput.focus();
      return;
    }
  });

});
</script>


