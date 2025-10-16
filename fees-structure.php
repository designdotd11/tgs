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
    
 <section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= $url?>');">
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
                            <?= $value->school_fees?>
                        </div>
                      
                        <div class="mt-4">
                            <h3 class="mb-4">Fee Structure for 2024-25</h3>

                            <div class="table-container table-responsive mt-4">
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
                                <?= $value->exclusions?>
                            </div>
                        </div>
                      
                      
                <div class="mt-4">
                   <?= $value->school_withdrawals?>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer -->
    
<?php $this->load->view('web/include/footer')?>


