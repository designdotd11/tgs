
<!--<div class="newsletter side-space">-->
<div>
    <!--<div class="newsletter-logo">-->
    <!--     <img  src="<?= base_url('assets/web')?>/images/blue-circle-logo.svg" alt="Logo">-->
    <!--</div>-->
    <!--<div class="content">-->
    <div class="new-newsletter-content-section">
        <!--<p>NEWSLETTER</p>-->
        <!--<h2>Stay up-to-date with what's happening around the school</h2>-->
        <p><b>Stay up-to-date with what's happening around the school</b></p>
        <!--<form class="subscribe-form" method="POST">-->
        <!--<form method="POST" class="new-subscribe-form">-->
        <!--    <input type="email" name="email" placeholder="Enter your email" required="">-->
            <!--<button type="button">Subscribe</button>-->
        <!--    <button type="button">→</button>-->
        <!--</form>-->
        
        <form method="POST" class="new-subscribe-form">
            <div class="input-group">
                <input type="email" name="email" placeholder="Stay updated – Type your email" required>
                <button type="submit" style="border-radius: 5px;">→</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function(){
        $('.btn_subs').click(function(){
            var email = $('.email_id').val();
            var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
            //alert(email);
            if(!filter.test(email)){
                swal("Sorry!", "Please enter valid email.", "warning");
            }else{
                $.ajax({
                    url : '<?= base_url("Web/home/save_mail");?>',
                    type: 'POST',
                    data: {'email': email},
                    success:function(response){
                        if(response == 'success'){
                            swal("Thankyou!", "We will get you soon.", "success");
                            setTimeout(function () {
                                location.reload(true);
                            }, 2000);
                        }else{
                            swal("Sorry!", "This email is already exits.", "error");
                        }
                    }
        
                });
            }
        });
    });
</script>