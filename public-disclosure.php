<!--  header -->
<?php $this->load->view('web/include/header-home')?>
<!--End  header -->

<!--FOR BANNER-->
<?php if($banner){
    $url = base_url('uploads/banner/').$banner->image;
}else{
    $url = base_url('assets/web/images/Slide.jpg');
} ?>

<section class="breadcrum-us-section top-space-subpage bottom-space" style="background-image: url('<?= $url?>');">
    <div class="breadcrum-overlay bg-black"></div>
    <div class="breadcrum-content">
        <h1 class="title-breadcrum">Mandatory Public Disclosure</h1>
         <p class="breadcrum-sub-text mt-2 mb-0">
                The Good Shepherd’s (TGSS) is a private, minority, co-educational school, Kindergarten onwards dedicated 
                to the intellectual and personal growth of every child.
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
                         <h3 class="common-heading mb-4">A: Documents And Information</h3>
                    <div class="disclosure-container">
                        <div class="disclosure-card">
                          <div class="disclosure-card-number">1.</div>
                          <div class="disclosure-card-info">
                            <h4>Copies Of Affiliation/Upgradation Letter And Recent Extension Of Affiliation, If Any</h4>
                          </div>
                          <div class="button-disclosure">
                            <a href="https://trinity.urips.co.in/dev/uploads/disclosure/1__Letterof_Affiliation__Trinity.pdf" target="_blank" class="chat-button">
                               <span class="me-2">View Details</span> 
                            </a>
                           </div>
                        </div>
                    
                        <div class="disclosure-card">
                          <div class="disclosure-card-number">2.</div>
                          <div class="disclosure-card-info">
                            <h4>Copies Of Societies/Trust/Company Registration/Renewal Certificate As Applicable</h4>
                          </div>
                          
                           <div class="button-disclosure">
                            <a href="https://trinity.urips.co.in/dev/uploads/disclosure/2__Trust_Deed.pdf" target="_blank" class="chat-button">
                               <span class="me-2">View Details</span> 
                            </a>
                           </div>
                        </div>
                    
                        <div class="disclosure-card">
                          <div class="disclosure-card-number">3. </div>
                          <div class="disclosure-card-info">
                            <h4>Copy Of No Objection Certificate (NOC) Issued, If Applicable By The State Govt/UT</h4>
                          </div>
                          
                          <div class="button-disclosure">
                            <a href="https://trinity.urips.co.in/dev/uploads/disclosure/3__NOC072021843.pdf" target="_blank" class="chat-button">
                               <span class="me-2">View Details</span> 
                            </a>
                           </div>
                        </div>
                    
                        <div class="disclosure-card">
                          <div class="disclosure-card-number">4.</div>
                          <div class="disclosure-card-info">
                            <h4>Copies Of Recognition Certificate Under RTE Act, 2009, And It’s Renewal If Applicable</h4>
                          </div>
                          
                          <div class="button-disclosure">
                            <a href="https://trinity.urips.co.in/dev/uploads/disclosure/4__Recognition_Certificate_.pdf" target="_blank" class="chat-button">
                               <span class="me-2">View Details</span> 
                            </a>
                           </div>
                          
                         
                        </div>
                    
                        <div class="disclosure-card">
                          <div class="disclosure-card-number">5.</div>
                          <div class="disclosure-card-info">
                            <h4>Copy Of Valid Building Safety Certificate As Per The National Building Code</h4>
                          </div>
                          <div class="button-disclosure">
                            <a href="https://trinity.urips.co.in/dev/uploads/disclosure/4__Recognition_Certificate_.pdf" target="_blank" class="chat-button">
                               <span class="me-2">View Details</span> 
                            </a>
                           </div>
                        </div>
                    
                        <div class="disclosure-card">
                          <div class="disclosure-card-number">6.</div>
                          <div class="disclosure-card-info">
                            <h4>Copy Of Valid Fire Safety Certificate Issued By The Competent Authority</h4>
                          </div>
                            <div class="button-disclosure">
                            <a href="https://trinity.urips.co.in/dev/uploads/disclosure/4__Recognition_Certificate_.pdf" target="_blank" class="chat-button">
                               <span class="me-2">View Details</span> 
                            </a>
                           </div>
                        </div>
                    
                        <div class="disclosure-card">
                          <div class="disclosure-card-number">7.</div>
                          <div class="disclosure-card-info">
                            <h4>Copies Of The DEO Certificate Submitted By The School For The Affiliation/Upgradation/Extension Of Affiliation Or Self Certification By The School</h4>
                          </div>
                          <div class="button-disclosure">
                            <a href="https://trinity.urips.co.in/dev/uploads/disclosure/4__Recognition_Certificate_.pdf" target="_blank" class="chat-button">
                               <span class="me-2">View Details</span> 
                            </a>
                           </div>
                        </div>
                    
                        <div class="disclosure-card">
                          <div class="disclosure-card-number">8.</div>
                          <div class="disclosure-card-info">
                            <h4>Copies Of Valid Water Health And Sanitation Certificates</h4>
                          </div>
                             <div class="button-disclosure">
                                <a href="https://trinity.urips.co.in/dev/uploads/disclosure/4__Recognition_Certificate_.pdf" target="_blank" class="chat-button">
                                   <span class="me-2">View Details</span> 
                                </a>
                              </div>
                        </div>
                      </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- Footer -->
    <div>
        <?php $this->load->view('web/include/footer')?>
    </div>
<!-- end footer -->