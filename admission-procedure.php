
<!--  header -->
 <?php $this->load->view('web/include/header-home')?>
<!--End  header -->


<link rel="stylesheet" href="<?= base_url('assets/web')?>/css/contact.css" />

<style>
 .admission-process {
    display: flex;
    /*grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));*/
    gap: 25px;
    margin-top: 30px;
    flex-direction:row;
    flex-wrap: wrap;
}

 .admission-process > .process-step{
     width:45%;
     min-width: 355px;
 }
 
.process-step {
    background: #fff;
    border-radius: 12px;
    padding: 25px 20px;
    box-shadow: 0px 4px 12px rgba(0,0,0,0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    min-height: 220px; /* ensures all boxes look equal */
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
}

.process-step:hover {
    transform: translateY(-5px);
    box-shadow: 0px 8px 20px rgba(0,0,0,0.12);
}

.process-step h4 {
    color: #029bbe;
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 12px;
}

.process-step p {
    font-size: 15px;
    line-height: 1.7;
    color: #444;
    margin: 0;
}




.note-list li {
    background: #fff;
    margin-bottom: 12px;
    padding: 12px 15px;
    border-radius: 8px;
    box-shadow: 0px 2px 6px rgba(0,0,0,0.08);
    font-size: 15px;
    line-height: 1.6;
    color: #444;
    list-style: none;
}
.note-list li::before {
    content: "✔ ";
    color: #28a745; /* green tick */
    font-weight: bold;
}




table {
    width: 100%;
    max-width:370px;
    border-collapse: collapse;
}

th, td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ccc;
}



</style>

<?php if($banner){
    $url = base_url('uploads/banner/').$banner->image;
}else{
    $url = base_url('assets/web/images/Slide.jpg');
} ?>

<section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= base_url('assets/web')?>/images/23Admission_Admission Procedure.jpg');">
    <div class="breadcrum-overlay"></div>
    <div class="breadcrum-content">
        <h1 class="title-breadcrum">Admission Procedure</h1>
        <p class="breadcrum-sub-text mt-2 mb-0">
           The Good Shepherd’s (TGSS) is a private, minority, co-educational school, Kindergarten onwards dedicated to the intellectual and personal growth of every child.
        </p>
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
                       <!--<?= $value->description?>-->
              
                <!--<div class="mt-4">-->
                <!--    <h3>Kindly note the following    </h3>-->
                    
                <!--    <div class="row mt-4">-->
                <!--        <div class="col-md-12">-->
                <!--           <ul class="list-unstyled">-->
                <!--                <li> <img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" />-->
                <!--                    Entry into the school is predominantly through pre-nursery classes, Grade I (Kindly note that the entry into TGSS @ Grade I is highly competitive due to limited availability).-->
                <!--                </li>-->
                <!--                <li> <img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" />-->
                <!--                    Admission into pre-nursery is done in batches during the course of the session.-->
                <!--                </li>-->
                <!--                <li> <img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" />-->
                <!--                    Minimum Age Criteria - The child should be a minimum of 6 years when he/she reaches Class I.-->
                <!--                </li>-->
                <!--                <li> <img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" />-->
                <!--                    Enquiry form material can be obtained at the school office or may be submitted online.-->
                <!--                </li>-->
                <!--                <li> <img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" />-->
                <!--                    Kindly note that submission of Enquiry or Registration form is not an assurance of admission.-->
                <!--                </li>-->
                <!--                <li> <img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" />-->
                <!--                    Registration and Admission Forms will be made available only at the school office.-->
                <!--                </li>-->
                <!--                <li> <img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" />-->
                <!--                    To apply for admission to TGSS, turn in a completed application form. Supporting documents such as birth certificate etc. should be attached along with the Registration form.-->
                <!--                </li>-->
                <!--                <li> <img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" />-->
                <!--                    Please note - Initial entry will be done only with the production of Birth Certificate issued by the Municipal Council.-->
                <!--                </li>-->
                <!--                <li> <img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" />-->
                <!--                    Admissions will be done on a first come, first serve basis. Registration is not an assurance of admission.-->
                <!--                </li>-->
                <!--                <li> <img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" />-->
                <!--                    Admission from Class I and above will be done if seats are vacant on the basis of merit and age requirements as per State Government.-->
                <!--                </li>-->
                <!--                <li> <img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" />-->
                <!--                    On admission, Transfer Certificate (T.C.) and a Character Certificate from the previous school have to be submitted.-->
                <!--                </li>-->
                <!--            </ul>-->

                <!--        </div>-->

                <!--    </div>-->
                <!--</div>-->
                
                
                
                <!--this is new section start-->
                
                
                <div class="mt-4">
                    <h3 class="mb-3 text-center">Admission Process</h3>
                    <div class="admission-process">
                        
                        <div class="process-step">
                            <h4>1. Register your interest</h4>
                            <p>
                                Raise an enquiry <a href="<?= base_url('admission-enquiry')?>">here</a><br>
                                Call us: <b>+91-7090031100</b><br>
                                Or mail us at: <b>mail@tgss.in</b>
                            </p>
                        </div>
                        
                        <div class="process-step">
                            <h4>2. Student Interaction</h4>
                            <p>
                                Prospective students and parents need to visit the school.<br>
                                A school counselor will facilitate this interaction to understand the student better.<br>
                                For admissions to M3 and above, an assessment test will be conducted to evaluate the student’s academic level.
                            </p>
                        </div>
                        
                        <div class="process-step">
                            <h4>3. Application Form</h4>
                            <p>
                                Parents can purchase the Application form at school, complete and submit with:<br>
                                ✔ Copy of Birth Certificate of the student<br>
                                ✔ Copy of Aadhar Card of the parents and student<br>
                                ✔ Copy of Academic Reports of the student<br/>
                                Passport size photograph of child and parent ( 4 each)
                            </p>
                        </div>
                
                        
                
                        <div class="process-step">
                            <h4>4. Admission confirmation</h4>
                            <p>
                                To block a seat, admission fees must be paid along with the documents mentioned within the stipulated time frame of 1 week after a successful interaction.
                            </p>
                        </div>
                
                    </div>
                    <!--<div class="mt-5">-->
                    <!--    <h3 class="mb-3">Age Guidelines</h3>-->
                    <!--    <ul class="list-unstyled note-list">-->
                    <!--        <li>Step 1 : Contact the Admissions Department</li>-->
                    <!--        <li>Step 2 : Schedule a School Visit</li>-->
                    <!--        <li>Step 3 : Make an Application</li>-->
                    <!--        <li>Step 4 : Interaction & Assessment</li>-->
                    <!--        <li>Step 5 : Admission Offer</li>-->
                    <!--        <li>Step 6 : Acceptance of Offer</li>-->
                    <!--        <li>Completion & Submission of Application Form with relevant documents within the stipulated deadlines.</li>-->
                    <!--        <li>Interaction with the candidate and parents/guardian to assess background and aptitude.</li>-->
                    <!--        <li>Physical verification of original documents submitted with the Application Form.</li>-->
                    <!--        <li>Offers of Admission are made within seven working days of processing.</li>-->
                    <!--        <li>Provisional or final Admissions are granted upon payment of Fee and fulfilling TGSS Admission Procedure.</li>-->
                    <!--    </ul>-->
                    <!--</div>-->
                    
                    
                    <!--<h3 class="mt-5">Age Guidelines</h3>-->
                    <!--<h4 class="mb-3">Admission Process</h4>-->
                    <!--<br/>-->
                     
                    <!--<table class="table table-bordered">-->
                    <!--    <thead>-->
                    <!--        <tr>-->
                    <!--            <th>Class</th>-->
                    <!--            <th>Minimum age on 1st June in the academic year in which admission sought</th>-->
                    <!--        </tr>-->
                    <!--    </thead>-->
                    <!--    <tbody>-->
                    <!--        <tr>-->
                    <!--            <td>Nursery</td>-->
                    <!--            <td>3 years</td>-->
                    <!--        </tr>-->
                    <!--        <tr>-->
                    <!--            <td>LKG</td>-->
                    <!--            <td>4 years</td>-->
                    <!--        </tr>-->
                    <!--        <tr>-->
                    <!--            <td>UKG</td>-->
                    <!--            <td>5 years</td>-->
                    <!--        </tr>-->
                    <!--        <tr>-->
                    <!--            <td>Class 1</td>-->
                    <!--            <td>6 years</td>-->
                    <!--        </tr>-->
                    <!--    </tbody>-->
                    <!--</table>-->

                    <h3 class="mt-5">AGE GUIDELINES</h3>
                    <!--<h4 class="mb-3">ADMISSION PROCESS</h4>-->
                    
                    <table style="width: 100%; border-collapse: collapse; border: 2px solid #d4d4d4; font-family: Arial, sans-serif;">
    <thead style="background-color: #f5f5f5;">
        <tr>
            <th style="border: 2px solid #d4d4d4; padding: 10px; text-align: left;">Class</th>
            <th style="border: 2px solid #d4d4d4; padding: 10px; text-align: left;">Minimum age on 1st June in the academic year in which admission sought</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td rowspan="3" style="border: 2px solid #d4d4d4; padding: 10px; vertical-align: middle; font-weight: bold;">EARLY YEARS</td>
            <td style="border: 2px solid #d4d4d4; padding: 10px;">Nursery - 3 years</td>
        </tr>
        <tr>
            <td style="border: 2px solid #d4d4d4; padding: 10px;">LKG - 4 years</td>
        </tr>
        <tr>
            <td style="border: 2px solid #d4d4d4; padding: 10px;">UKG - 5 years</td>
        </tr>
        <tr>
            <td style="border: 2px solid #d4d4d4; padding: 10px;">Class 1</td>
            <td style="border: 2px solid #d4d4d4; padding: 10px;">6 years</td>
        </tr>
    </tbody>
</table>


                    
                    <!--<div class="mt-5">-->
                    <!--    <h3 class="mb-3">Additional Admission Details</h3>-->
                    <!--    <ul class="list-unstyled note-list">-->
                    <!--        <li>✔ Completion & submission of Application Form with relevant documents within deadlines.</li>-->
                    <!--        <li>✔ Interaction with the candidate and parents/guardian to assess background and aptitude.</li>-->
                    <!--        <li>✔ Physical verification of original documents submitted with the Application Form.</li>-->
                    <!--        <li>✔ Offers of Admission are made within seven working days of processing.</li>-->
                    <!--        <li>✔ Provisional or final admissions are granted upon payment of fee & fulfilling TGSS admission procedure.</li>-->
                    <!--    </ul>-->
                    <!--</div>-->


                </div>

                
                
                <!--this is new section end-->
                
                <!--<br/>-->
                
                <!--<div class="mt-4">-->
                <!--   <h3 class="mb-3">Admission Process</h3>-->
                <!--   <div class="my-4">-->
                <!--    <div class="flowchart">-->
                    <!-- Step 1: Enquiry -->
                <!--    <div class="step"><?= $value->step_1?></div>-->
                <!--    <div class="arrow">→</div>-->
            
                    <!-- Step 2: Registration for Admission -->
                <!--    <div class="step"><?= $value->step_2?></div>-->
                <!--    <div class="arrow">→</div>-->
            
                    <!-- Step 3: Learner Assessment -->
                <!--    <div class="step"><?= $value->step_3?></div>-->
                <!--    <div class="arrow">→</div>-->
            
                    <!-- Step 4: Parental Interaction -->
                <!--    <div class="step"><?= $value->step_4?></div>-->
                <!--    <div class="arrow">→</div>-->
            
                    <!-- Step 5: Admission Confirmation -->
                <!--    <div class="step"><?= $value->step_5?></div>-->
                <!--    <div class="arrow">→</div>-->
                     <!-- Step 5: Admission Confirmation -->
                <!--    <div class="step"><?= $value->step_6?></div>-->
                <!--</div>-->
                <!--</div>-->
                    <!--<?= $value->admission_process?>-->
                    <!--<ul class="list-unstyled">-->
                    <!--    <li >-->
                    <!--      <img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" /> <span><b class="pe-1">Step 1 : </b>Contact the Admissions Department</span>-->
                    <!--    </li>-->
                    <!--    <li >-->
                    <!--      <img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" /><span><b class="pe-1">Step 2 : </b> Schedule a School Visit</span>-->
                    <!--    </li>-->
                    <!--    <li >-->
                    <!--      <img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" /><span><b class="pe-1">Step 3 : </b> Make an Application </span>-->
                    <!--    </li>-->
                    <!--    <li >-->
                    <!--     <img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" /><span><b class="pe-1">Step 4 : </b>  Interaction & Assessment </span>-->
                    <!--    </li>-->
                    <!--    <li >-->
                    <!--     <img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" /> <span><b class="pe-1">Step 5 : </b> Admission Offer </span>-->
                    <!--    </li>-->
                    <!--    <li >-->
                    <!--     <img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" /><span><b class="pe-1">Step 6 : </b>  Acceptance of Offer </span>-->
                    <!--    </li>-->
                    <!--</ul>-->
                <!--</div>-->
                
                
                
                <!--<div>-->
                <!--    <ul class="list-unstyled">-->
                <!--        <li>-->
                <!--          <img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" /> <span> Completion & Submission of Application Form with relevant documents within the stipulated deadlines.</span>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--          <img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" /><span> Interaction with the candidate and parents/ guardian to assess background and aptitude.</span>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--          <img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" /><span> Physical verification of original documents submitted with the Application Form.</span>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--         <img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" /><span> Offers of Admission are made within seven working days of processing. </span>-->
                <!--        </li>-->
                <!--        <li>-->
                <!--         <img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" /> <span> Provisional or final Admissions are granted upon payment of Fee and fulfilling TGSS  Admission Procedure. </span>-->
                <!--        </li>-->
                <!--      </ul> -->
                <!--</div>-->
                
                  <!--<div class="mt-5" style="background: #e5d7d35e; padding: 20px 15px 15px 15px;">-->
                  <!--  <h3 class="text-center mb-3">-->
                  <!--      TO ENROLL YOUR CHILD TO OUR WORLD CLASS LEARNING CENTRE-->
                  <!--  </h3>-->

                  <!--  <div class="button-contact justify-content-center m-auto text-center mt-4 ">-->
                  <!--          <a href="<?= base_url('admission-enquiry')?>"  class="chat-button">-->
                  <!--             <span class="me-2">Enquiry Now</span>-->
                  <!--          </a>-->
                            
                  <!--      </div>-->
                  <!--   </div>-->
                     
                     
                    </div>
                </div>
                
            </div>
        </div>
    </section>
 

    <!-- Footer -->
        <?php $this->load->view('web/include/footer')?>
<!-- end footer -->

