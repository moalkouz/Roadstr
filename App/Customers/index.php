<?php
include 'session_check.php';
?>
<html lang="en" dir="ltr">

<head>
   <?php
include 'styles.php';
?>  

</head>

<body>
 


    <div class="site">
        <!-- site__mobile-header -->
        <header class="site__mobile-header" >
            <div class="mobile-header" >
                <div class="container">
                    <div class="mobile-header__body">
                        <button class="mobile-header__menu-button" type="button">
                            <i class="fa fa-bars" aria-hidden="true" style="font-size:20px; color:#fff"></i>
                        </button>
                                                       <h4 class="mobile-header__logo" style="color:#fff; margin-top:7px; margin-left:100px">Roadstr</h4>

                       
                        <div class="mobile-header__indicators">
                           
                            
                           
                            <div class="mobile-indicator">
                                <a href="index-ar.php" class="mobile-indicator__button">
                                    <span class="mobile-indicator__icon">
                                        <img src="../images/final/ar.png" width="60%"/>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
   
		
        <div class="site__body" style="margin-top:42px">
            <div class="block block-slideshow">
                <div class="container">
                    <div class="block-slideshow__carousel">
                        <div class="owl-carousel">
                            <a class="block-slideshow__item" href="">
                                <span class="block-slideshow__item-image block-slideshow__item-image--mobile" style="background-image: url('../images/final/slider-1.png')"></span>
                                
                            </a>
                           <a class="block-slideshow__item" href="">
                                <span class="block-slideshow__item-image block-slideshow__item-image--mobile" style="background-image: url('../images/final/slider-2.png')"></span>
                                
                            </a>
                            <a class="block-slideshow__item" href="">
                                <span class="block-slideshow__item-image block-slideshow__item-image--mobile" style="background-image: url('../images/final/slider-1.png')"></span>
                                
                            </a>
							
							
							<a class="block-slideshow__item" href="">
                                <span class="block-slideshow__item-image block-slideshow__item-image--mobile" style="background-image: url('../images/final/slider-2.png')"></span>
                                
                            </a>
							
							
							
                        </div>
                    </div>
                </div>
            </div>
			<br><br>
            <div class="block block-brands block-brands--layout--columns-8-full">
                <div class="container">
                    <center>
					<ul class="block-brands__list" style="justify-content: center;
  display: flex;">
                       <li class="block-brands__item">
                            <a href="services.php?C_ID=1" class="block-brands__item-link">
                                <img src="../images/final/c1.png" alt="">
								<h5>Test 1</h5>
                            </a>
                        </li>
                        <li class="block-brands__item">
                            <a href="services.php?C_ID=2" class="block-brands__item-link">
                                <img src="../images/final/c2.png" alt="">
																<h5>Test 2</h5>

                            </a>
                        </li>
                        <li class="block-brands__item">
                            <a href="services.php?C_ID=3" class="block-brands__item-link">
                                <img src="../images/final/c3.png" alt="">
																<h5>Test 3</h5>

                            </a>
                        </li>				
                 
</ul>
                    <ul class="block-brands__list" style="justify-content: center;
  display: flex;">
						
                        <li class="block-brands__item">
                            <a href="services.php?C_ID=4" class="block-brands__item-link">
                                <img src="../images/final/c4.png" alt="">
																<h5>Test 4</h5>

                            </a>
                        </li>
						
					
						
                        <li class="block-brands__item">
                            <a href="services.php?C_ID=5" class="block-brands__item-link">
                                <img src="../images/final/c5.png" alt="">
																<h5>Test 5</h5>

                            </a>
                        </li>
                        <li class="block-brands__item">
                            <a href="services.php?C_ID=6" class="block-brands__item-link">
                                <img src="../images/final/c6.png" alt="">
																<h5>Test 6</h5>

                            </a>
                        </li>				
                    </ul>

					</center>
					
                </div>
            </div>
            
          
            
        </div>
        <!-- site__body / end -->
        <!-- site__footer -->
       
        <!-- site__footer / end -->
    </div>
    <!-- site / end -->
    <!-- mobile-menu -->
    <?php
	include 'mobile-menu.php';
	?>
    <!-- mobile-menu / end -->
    <!-- quickview-modal -->
   
  
     <?php
	include 'scripts.php';
	?>



	



</body>

</html>