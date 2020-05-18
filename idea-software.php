<?php include 'public/headerInside.php'; ?>
<?php include_once("db/db.php");?>

<style>
	.header-banner-area {   
    background: url(img/header/portfolio.jpg) no-repeat !important;

}
	</style>
 <div class="header-banner-area">
        <div class="container">
            <div class="row">
                <div class="header-banner">
                    <h1>Projects</h1>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/ Projects</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="homepage-news-area" id="news">
        <div class="container">
		<div class="row">
                <div class="section-styling-area">
                    <h2>OUR PROJECTS</h2>
                    <p class="icon-border"><i class="fa fa-clone" aria-hidden="true"></i></p>
                    <p class="section-text">We provide solutions to enterprises in distress and help with the technology implementation for other,non-tech,startups.</br>We believe in delivering high quality,on-time projects.</p>
                </div>
            </div>		
            <div class="row">
                <div class="homepage-new">                    
                    <div class="rc-carousel homepage-total-news-area" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="3" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="true" data-r-medium-dots="false">

                        <?php 
                      
                      $query="SELECT * FROM `projects` WHERE status='1' ORDER BY `id` DESC";
                      $exe=mysqli_query($conn,$query);
                      
                      if(mysqli_num_rows($exe)>0)
                      {
                        $records=0;
                        while($data=mysqli_fetch_assoc($exe))
                        {

                           
                    ?>

                        <div class="single-news-area">
                            <div class="media">
							 <a href="<?php echo $data['projectLink'];?>" target="_blank">
                                <div class="pull-left">
                                        <img src="img/projects/<?php echo $data['shortPath'];?>" alt="khusiinfotech">
                                       <!-- <span>30 <br/>May </span>
                                        <i class="fa fa-plus"></i>-->
                                </div>
                                <div class="media-body">
                                    <h3><a href="<?php echo $data['projectLink'];?>" target="_blank">
                                        <?php echo $data['title'];?></a></h3>
                                    <p>
                                         <?php echo $data['shortDescription'];?>
                                    </p>
                                    <!--<p class="date"><a href="#">Admin</a> / <a href="#">(0) Comment</a></p>-->
                                </div>
							</a>
                            </div>
                        </div>
                        <?php
                    }
                }?>
                                                                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Homepage Latest News area End Here -->
    <!-- Partner Logo Area Start Here -->
   
    <!-- Partner Logo Area End Here -->
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
	
	
    <!-- Footer Start Here -->
   <?php include_once('public/footer.php'); ?>