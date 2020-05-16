<?php
require('constant.php');

?>
<?php include 'public/headerInside.php'; ?>
<?php include_once('public/companyInfo.php') ; ?>
<style>
	.header-banner-area {   
    background: url(img/header/contact.jpg) no-repeat !important;

}
#googleMap{
	width:100%;
	height:500px;
}
	</style>
	<script src="component/jquery/jquery-3.2.1.min.js"></script>
	<!-- <script>
	$(document).ready(function (e){
		$("#contact-form").on('submit',(function(e){
			e.preventDefault();
			$("#mail-status").hide();
			$('#send-message').hide();
			
			$.ajax({
				url: "contact-form.php",
				type: "POST",
				dataType:'json',
				data: {
				"name":$('input[name="name"]').val(),
				"email":$('input[name="email"]').val(),
				"subject":$('input[name="subject"]').val(),
				"phone":$('input[name="phone"]').val(),
				"content":$('textarea[name="content"]').val(),
				"g-recaptcha-response":$('textarea[id="g-recaptcha-response"]').val()},				
				success: function(response){
				$("#mail-status").show();
				
				if(response.type == "error") {
					$('#send-message').show();
					$("#mail-status").attr("class","error");				
				} else if(response.type == "message"){
					 $('#name').val("");					
					$('#email').val("");
					$('#phone').val("");
					$('#subject').val("");
					$('#content').val("");	
                    $('#send-message').show();
					$('#send-message').hide();
					$("#mail-status").attr("class","success");							
				}
				$("#mail-status").html(response.text);	
				},
				error: function(){} 
			});
		}));
	});
	</script> -->
 <!--   <script src='https://www.google.com/recaptcha/api.js'></script>	 -->
    <div class="header-banner-area">
        <div class="container">
            <div class="row">
                <div class="header-banner">
                    <h1>Contact Us</h1>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/ Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="main-conatct-form-area">
        <form id="contactForm">
            
        
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="main-contact-form contact-form">
					<div id="message">
                        <form id='contact-form' role="form" action="" method="POST">
                            <fieldset>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Name*"  class="form-control" name="name" id="name"  >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Your Email*" name="email" id="email" class="form-control">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
								<div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Subject*" class="form-control" id="subject" name="subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Phone*"  class="form-control" id="phone" name="phone" >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea placeholder="Message*" class="textarea form-control" id="content" name="content" rows="8" cols="20"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
								<div class="col-sm-12">
								<div class="form-group">
									<div id="mail-status"></div>
									</div>
								</div>
								<!--<div class="col-sm-12">
								<div class="form-group">
									<div class="g-recaptcha" data-sitekey="<?php //echo SITE_KEY; ?>"></div>
									</div>
								</div>-->
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <button type="submit" class="btn-read-more-fill btn-send"
                                         id="sub"  style="clear:both;">Send Message</button>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div class='form-response'>
                                        <br>
                                        <p style="color:red;font-weight:bold" id="warning"></p>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
						<div id="loader-icon" style="display:none;"><img src="img/loader.gif" /></div>
						</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="page-sidebar-area">
                        <div class="single-sidebar">
                            <h3>Get In Touch</h3>
                            <nav>
								<p>If you need more information about our services or have any other queries fill the form and let us help you out.</p>
                                <ul>
                                    <li><i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                                    <?php address();?></li>
                                   <a style="color:#797979" href="tel:<?php mobile();?>"> <li><i class="fa fa-phone" aria-hidden="true"></i> 
                                            <?php mobile();?>
                                    </li></a>
                                </br>
                                    <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php email()?></li>
                                   
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


	
        <div class="google-map-area">
            
              <div id="googleMap">&nbsp;</div> 
        </div>

        
        
        <div class="clearfix"></div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script >
   
   $(document).ready(function()
   {
     $("#sub").click(function(e)
      {
        e.preventDefault();
        
         

         var name=$("#name").val();
         var mobile=$("#phone").val();
         var email=$("#email").val();
         var subject=$("#subject").val();
         var content=$("#content").val();
         var nameReg='^[A-Za-z ]{3,30}$';
         var emailReg='^[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$'; 
         var mobileReg='^[0-9]{10}$';   
         if(name=="")
         {
            $("#warning").html("Please Enter Your Name");  
         }
         else if(!name.match(nameReg))
         {
            $("#warning").html("Please Enter Valid Name");

         }else if(email=="")
         {
             $("#warning").html("Please Enter Your Email ID");
         
         }else if(!email.match(emailReg))
         {
            $("#warning").html("Please Enter Valid Email ID");
         }else if(subject=="")
         {
             $("#warning").html("Please Fill Subject Field");
         
         }else if(!subject.match(nameReg))
         {
            $("#warning").html("Please Enter Valid Subject");
         }

         else if(mobile=="")
         {
               $("#warning").html("Please Enter Your Mobile Number");
         }
         else if(!mobile.match(mobileReg))
         {
            $("#warning").html("Please Enter Valid 10 Digit Mobile Number");
         }else if(content=="")
         {
            $("#warning").html("This field should not empty");
         }
         else
         {
             $(':input[type="submit"]').prop('disabled', true);
             $('#warning').html("Please Wait...");
            $.post("contact-form.php",
            {

                  name:name,
                  phone:mobile,
                  email:email,
                  subject:subject,
                  content:content

            },
            function(data)
               {

                     $(':input[type="submit"]').prop('disabled', false);
                    //    $('#contactForm')[0].reset();
                     $("#warning").html(data);
                     

               });
         }
      });
      
   
    });
   
</script>
		
		
       
   <?php include ('public/footer.php'); ?>
