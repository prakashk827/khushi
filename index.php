<?php include_once('public/header.php'); ?>
<script>
        $(document).ready(function() {
            $("#home").addClass("active");
        });
    </script>
<style>
.homepage-contact-faq-area .skill-content-3 {
    overflow: hidden;
    padding-top: 0px;
	
}

.homepage-contact-faq-area .skill .progress .lead {
    color: #444;
    font-size: 15px;
    font-weight: 400;
    left: 0;
    position: absolute;
    top: -30px;
    z-index: 99;
}
.homepage-contact-faq-area h2{
	font-size: 40px;
    text-align: center;   
    color: #222222;
}

.homepage-contact-faq-area .skill .progress {
    background-color: #222;
    border-radius: 0;
    box-shadow: none;
    height: 7px;
    margin: 30px 0 50px 0;
    overflow: visible;
    position: relative;
	
}

.homepage-contact-faq-area .skill .progress-bar > span {
    background: #333 none repeat scroll 0 0;
    float: right;
    font-size: 11px;
    margin-right: 10px;
    margin-top: -25px;
    position: relative;
    padding: 0 5px;
}

.homepage-contact-faq-area .skill .progress-bar > span:before,
.homepage-contact-faq-area .skill .progress-bar > span:after {
    border: medium solid transparent;
    content: " ";
    height: 0;
    position: absolute;
    top: 100%;
    width: 0;
}

.homepage-contact-faq-area .skill .progress-bar > span:before {
    border-top-color: #333;
    border-width: 5px;
    left: 50%;
    margin-left: -5px;
	
}

.counter-item {
    background-color: #171717;
    padding: 25px 30px 30px 30px;
    position: relative;
    color: #FFF;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    margin-bottom: 30px;
}

.counter-item .counter-title {
    color: #FFF;
    text-transform: none;
    font-weight: 100;
	font-weight:bold;
    font-size: 22px;
    margin-bottom: 15px;
	margin-top: 15px;
    display: block;
}

.row.no-gutter {
  margin-left: 0;
  margin-right: 0;
}

.row.no-gutter [class*='col-']:not(:first-child),
.row.no-gutter [class*='col-']:not(:last-child) {
  padding-right: 0;
  padding-left: 0;
}


.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
}

</style>
<style>
.about-us-content h2{
	color:white;
}
</style>


    <!--  Header Area End Here -->
    
    <!-- Slider Starts -->
    <?php include_once("homePage/slider.php");?>
    <!-- Slider Ends -->
    
    	
	<?php include_once("homePage/engageWithUs.php");?>
	
  
    <!-- Our services starts -->

    <?php include_once("homePage/ourServices.php")?>
    
    <!-- Our services Ends -->
    
   
	
	
	
    <!-- Our Clients  Starts-->
    <?php include_once("homePage/ourClients.php");?>
    <br><br><br>
    <!-- Our Clients ends -->

    <!-- Why Choose us Starts -->
    <?php include_once("homePage/whyChooseUs.php");?>
     <!-- Why Choose us Starts -->
    
    
    <!--  Home Page Team Expert Section Area Start Here -->
    <!--<div class="homepage-team-area">
        <div class="container">
            <div class="row">
                <div class="total-team-area">
                    <h2>Expert Team</h2>
                    <div class="rc-carousel homepage-team" data-loop="true" data-items="4" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="3" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="4" data-r-medium-nav="true" data-r-medium-dots="false">
                        <div class="single-team">
                            <div class="team-image">
                                <a href="#">
                                    <img src="img/team/6.jpg" alt="">
                                </a>
                                <div class="overley">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3><a href="#">Onima Dicosta</a></h3>
                                <p class="designation">Chartered Financial Advisor</p>
                            </div>
                        </div>
                        <div class="single-team">
                            <div class="team-image">
                                <a href="#">
                                    <img src="img/team/10.jpg" alt="">
                                </a>
                                <div class="overley">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3><a href="#">Jhon Dico</a></h3>
                                <p class="designation">Chartered Financial Advisor</p>
                            </div>
                        </div>
                        <div class="single-team">
                            <div class="team-image">
                                <a href="#">
                                    <img src="img/team/7.jpg" alt="">
                                </a>
                                <div class="overley">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3><a href="#">Cris Kosta</a></h3>
                                <p class="designation">Chartered Financial Advisor</p>
                            </div>
                        </div>
                        <div class="single-team">
                            <div class="team-image">
                                <a href="#">
                                    <img src="img/team/8.jpg" alt="">
                                </a>
                                <div class="overley">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3><a href="#">Onima Liza</a></h3>
                                <p class="designation">Chartered Financial Advisor</p>
                            </div>
                        </div>
                        <div class="single-team">
                            <div class="team-image">
                                <a href="#">
                                    <img src="img/team/9.jpg" alt="">
                                </a>
                                <div class="overley">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3><a href="#">Kaji Fahim</a></h3>
                                <p class="designation">Chartered Financial Advisor</p>
                            </div>
                        </div>
                        <div class="single-team">
                            <div class="team-image">
                                <a href="#">
                                    <img src="img/team/10.jpg" alt="">
                                </a>
                                <div class="overley">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3><a href="#">David Shahin</a></h3>
                                <p class="designation">Chartered Financial Advisor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!--  Home Page Team Expert Section Area End Here -->
    
    <!-- Homepage Latest News area Start Here -->
   <!-- <div class="homepage-news-area" id="news">
        <div class="container">
            <div class="row">
                <div class="homepage-new">
                    <h2>Our projects</h2>
                    <div class="rc-carousel homepage-total-news-area" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="3" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="true" data-r-medium-dots="false">
                        <div class="single-news-area">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#">
                                        <img src="img/news/6.jpg" alt="single news Image">
                                       <span>30 <br/>May </span>
                                        <i class="fa fa-plus"></i>--
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h3><a href="http://samiteon.com" target="_blank">Samiteon</a></h3>
                                    <p>Samiteon is here to help you and your business. From any engineering needs you might have to product development, data security, data appliances, infrastructure services or staffing needs for your upcoming challenges and dreams, we're here to help you achieve your dreams.</p>
                                    <p class="date"><a href="#">Admin</a> / <a href="#">(0) Comment</a></p>--
                                </div>
                            </div>
                        </div>
                        <div class="single-news-area">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#">
                                        <img src="img/news/5.jpg" alt="single news Image">
                                        <span>30 <br/>May </span>
                                        <i class="fa fa-plus"></i>--
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h3><a href="http://www.standardbookcompany.com" target="_blank">The standard book company</a></h3>
                                    <p>THE STANDARD BOOK COMPANY is serving libraries all over South and West India, backed up by extensive experience in the field for nearly 80 years. The company will celebrated its 8OTH ANNIVERSARY in 2015. Having been in the information business for nearly 80 years.</p>
                                    <p class="date"><a href="#">Admin</a> / <a href="#">(0) Comment</a></p>--
                                </div>
                            </div>
                        </div>
                        <div class="single-news-area">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#">
                                        <img src="img/news/7.jpg" alt="single news Image">
                                     <span>30 <br/>May </span>
                                        <i class="fa fa-plus"></i>--
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h3><a href="http://www.harshayoga.com" target="_blank">Harsha Yoga</a></h3>
                                    <p>Harsha has practiced the Iyengar’s teachings techniques & the traditional Ashtanga Vinyasa along with years of hatha yoga practice. With the strong knowledge base of the major scriptures, backed with the therapeutic knowledge is indeed a blessing for an aspiring teacher to learn.</p>
                                   <p class="date"><a href="#">Admin</a> / <a href="#">(0) Comment</a></p>--
                                </div>
                            </div>
                        </div>                                             
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Homepage Latest News area End Here -->
	
	
    <!-- Our Skills Starts -->
    <?php include_once("homePage/ourSkills.php");?>
    <!-- Our Skills Ends -->
	
	<!-- Home Page Testimonial Area Start Here 
    <div class="homepage-testimonial-area">
        <div class="container">
            <div class="row">
                <div class="rc-carousel homepage-testimonial" data-loop="true" data-items="2" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="true" data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false" data-r-x-small-dots="true" data-r-x-medium="2" data-r-x-medium-nav="false" data-r-x-medium-dots="true" data-r-small="2" data-r-small-nav="false" data-r-small-dots="true" data-r-medium="2" data-r-medium-nav="false" data-r-medium-dots="true">
                    <div class="single-testimonial">
                        <div class="media">
                            <div class="pull-left">
                                <a href="javascript:;">
                                    <img src="img/team/t4.png" alt="single testimonial Image">
                                </a>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading"><a href="Javascript:;">Dr. Vinod Dham. / <span> Director</span></a></h3>
                                <p>Absolutely Brilliant, once again thanks for your exceptional response.
									I wish every company I dealt with were as professional as yourselves.
									I will certainly stay in touch.</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial">
                        <div class="media">
                            <div class="pull-left">
                                <a href="#">
                                    <img src="img/team/t2.png" alt="single testimonial Image">
                                </a>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading"><a href="#">Mis. Ruchi Sanghvi. / <span> Developer</span></a></h3>
                                <p>I like the fact that they are local and have fast service. When I had a issue, I needed them immediately. Achill technicians take very good care of us and meet our needs above our expectations.</p>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial">
                        <div class="media">
                            <div class="pull-left">
                                <a href="#">
                                    <img src="img/team/t3.png" alt="single testimonial Image">
                                </a>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading"><a href="#">Mr. Shantanu Narayen. / <span> Programmer</span></a></h3>
                                <p>The team at Khushi-infotech  is simply the best. What makes Khushi-infotech so great is their attention to detail, availability and most importantly, their knowledge and expertise</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    Home Page Testimonial Area End Here -->
	
    <div class="container">
            <div class="row"><br><br><br></div>
	</div>
    <!--  Get Free Consult Section Start Here -->
    <!--<div class="free-consult">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="free-consult-text">
                        <p>If you have any Financial problem ... We are available</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="get-free-consult">
                        <a href="#">Get Free Consultation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!--  Get Free Consult Section End Here -->
	<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ebf61fe73613844"></script>

	
    <!-- Footer Start Here -->
   <?php include_once('public/footer.php'); ?>