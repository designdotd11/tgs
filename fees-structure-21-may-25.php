 <?php $this->load->view('web/include/header-home')?>
<style>
    body {
    overflow-x: clip !important;
    width: 100%;
}


</style>
    
    <?php if($banner){
        $url = base_url('uploads/banner/').$banner->image;
    }else{
        $url = base_url('assets/web/images/Slide.jpg');
    } ?>
    
 <section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url(<?= $url?>);">
     <div class="breadcrum-overlay"></div>
     <div class="breadcrum-content">
         <h1 class="title-breadcrum"> Fee Structure and Schedule  </h1>
           <p class="breadcrum-sub-text mt-2 mb-0">
             The Good Shepherd’s (TGSS) is a private, minority, co-educational school, Kindergarten onwards dedicated to the intellectual and personal growth of
             every child.
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
                        <div class="">
                   <h3 class="mb-4">  School Fees </h3>
                    <ul class="list-unstyled">
                        <li >
                          <img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" /> 
                          <span>It is the responsibility of the parents to deposit the fees and other charges on time. Fees are to be deposited directly to the bank as per the given schedule below:
                          <ul class="ps-2">
                                <li> <b class="pe-1">1. 1st Instalment : </b> Before/On the 1st June</li>
                                <li> <b  class="pe-1">2. 2nd Instalment : </b> Before/On the 1st October</li>
                                <li> <b  class="pe-1">3. 3rd Instalment : </b> Before/On the 1st January</li>
                                <li>All dues and fees of class X and XII should be cleared before 15th December.</li>
                            </ul>
                          </span>
                        </li>
                        <li><img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" /> All Cheques should be cleared on or before 1st of the respective month. The net amount credited in the school accounts should be the fees amount and bank charges, if any, are to be paid by the parents.</li>
                        <li><img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" />If the cheque is dishonoured, a fine of Rs. 250/- will be charged in addition to the bank charges and the fine due till the date of payment.</li>
                        <li><img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" /> If the fee amount is not credited in the school account on 10th of the respective month, a fine of Rs. 250/- will be levied till the last working day of the month. The child will not be permitted in the school from the first of the next month and a fine of Rs. 10/- per day will be levied in addition to the late fees. No excuse of fine if 10th falls to be a Sunday or a bank holiday.</li>
                        <li> <img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" />Safe custody of the Fee Book is the Parent's responsibility and the duplicate fees book will cost Rs. 100/- (One Hundred only).</li>
                        <li> <img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" />School prefers and mandates payments through the digital mode.</li>
            
                    </ul>
                </div>
                      
                 <div class="mt-5">
                      <h3 class="mb-4">Fee Structure for 2024-25</h3>

                    <div class="table-container mt-4">
                        <table class="table table-bordered table-hover text-center">
                            <thead>
                                <tr>
                                    <th>Class</th>
                                    <th>Academic Fees (INR)</th>
                                    <th>Installment 1 <br> (1-Jun-24)</th>
                                    <th>Installment 2 <br> (1-Oct-24)</th>
                                    <th>Installment 3 <br> (1-Jan-25)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>M1 (Pre-Nur)</td>
                                    <td>80,000/-</td>
                                    <td>36,000/-</td>
                                    <td>22,000/-</td>
                                    <td>22,000/-</td>
                                </tr>
                                <tr>
                                    <td>M2 (L.K.G)</td>
                                    <td>80,000/-</td>
                                    <td>36,000/-</td>
                                    <td>22,000/-</td>
                                    <td>22,000/-</td>
                                </tr>
                                <tr>
                                    <td>M3 (U.K.G)</td>
                                    <td>80,000/-</td>
                                    <td>36,000/-</td>
                                    <td>22,000/-</td>
                                    <td>22,000/-</td>
                                </tr>
                                <tr>
                                    <td>I</td>
                                    <td>92,000/-</td>
                                    <td>40,000/-</td>
                                    <td>26,000/-</td>
                                    <td>26,000/-</td>
                                </tr>
                                <tr>
                                    <td>II</td>
                                    <td>92,000/-</td>
                                    <td>40,000/-</td>
                                    <td>26,000/-</td>
                                    <td>26,000/-</td>
                                </tr>
                                <tr>
                                    <td>III</td>
                                    <td>104,000/-</td>
                                    <td>44,000/-</td>
                                    <td>30,000/-</td>
                                    <td>30,000/-</td>
                                </tr>
                                <tr>
                                    <td>IV</td>
                                    <td>104,000/-</td>
                                    <td>44,000/-</td>
                                    <td>30,000/-</td>
                                    <td>30,000/-</td>
                                </tr>
                                <tr>
                                    <td>V</td>
                                    <td>104,000/-</td>
                                    <td>44,000/-</td>
                                    <td>30,000/-</td>
                                    <td>30,000/-</td>
                                </tr>
                            </tbody>
                        </table>
            
                        <p class="note"><strong>Note:</strong> The fees are indicative and subject to change by the school management.</p>
                        <p class="note mb-1"><strong>Admission Fee:</strong> INR 25,000/- (Non-refundable) <br>
                            <strong>Security Deposit:</strong> INR 10,000/- (Refundable at the time of withdrawal)</p>
                    </div>
            
                    <div class="exclusions">
                          <h3 class="mb-3">Exclusions </h3>
                        <ul>
                            <li>Books, Notebooks, Uniform, Consumables, Activity Material</li>
                            <li>Day Field Trips, etc.</li>
                            <li>Conveyance / Transport Charges</li>
                        </ul>
                    </div>
                   </div>
                      
                      
                <div class="mt-4">
                   <h3 class="mb-3">School Withdrawals  </h3>
                    <ul class="list-unstyled">
                        <li >
                          <img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" /> 
                         Every application for a Transfer Certificate / School Leaving Certificate shall be made in writing by the parent. Transfer Certificate / School Leaving Certificate will be issued only after the clearance of all dues. 
                        </li>
                        <li><img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" />
                         The Transfer Certificate / School Leaving Certificate applied for must be taken within three months of the child leaving the school. 
                         </li>
                        <li><img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" />
                       Security deposit should be collected by the parents within 3 months of last attendance. 
                       </li>
                        <li><img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" /> 
                          A fee of Rs. 100/-will be charged for a duplicate Transfer Certificate and this will be issued only 3 days from the receipt of an application. An affidavit affirming the original is irrecoverably lost should also be attached along with the application. 
                        </li>
                        <li> <img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" />
                      The date of birth of a student once entered in the school register will not be changed. 
                         </li>
                        <li> <img src="<?= base_url('assets/web')?>/images/check-mark.png" width="26" class="me-2" />
                        Before a student is withdrawn midyear, instalment of fees will be charged. No notice is accepted during the school vacations, and in case of a withdrawal at this time, the fee must be paid up to the end of the semester. 
                        </li>
            
                    </ul>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer -->
    
<?php $this->load->view('web/include/footer')?>


