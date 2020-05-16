<?php include_once("services/ourServicesArray.php");?>
<!-- 555 -->
<div class="slider-bottom-area">
        <div class="container">
            <div class="slider-bottom">
                <h1>Our Services</h1>
        
                <div class="rc-carousel total-business" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true" data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="true" data-r-medium-dots="false">

                  <?php   
                 for ($row = 0; $row < count($ourServices); $row++) {

                  
                    ?>
                    <div class="single-business">
                        <span><?php echo $ourServices[$row][0] ?></span>
                        <h3><a><?php echo $ourServices[$row][1] ?></a></h3>
                        <p style="text-align:justify;"><?php echo $ourServices[$row][2] ?></p>
                        <div class="read-more"><a href="<?php echo $ourServices[$row][3]?>">Read More</a></div >
                    </div>


                  <?php
                 

                }
                ?>
                    
                   
                    
                    
                </div>
            </div>
        </div>
    </div>
<!-- 555 -->


