<?php
include 'includes/config.php';
include 'session_check-ar.php';
?>
<html lang="ar" dir="rtl">

<head>
   <?php
include 'styles-ar.php';
?>  

</head>

<body>
    <!-- site -->
    <div class="site">
        <!-- site__mobile-header -->
        <header class="site__mobile-header" style="width: 100%; position: fixed; z-index: 1;">
            <div class="mobile-header" >
                <div class="container">
                    <div class="mobile-header__body">
                        <button class="mobile-header__menu-button" type="button">
                            <i class="fa fa-bars" aria-hidden="true" style="font-size:20px; color:#fff"></i>
                        </button>
                        <h4 class="mobile-header__logo" style="color:#fff; margin-top:7px; margin-right:100px">Roadstr</h4>
                       
                        <div class="mobile-header__indicators">
                           
                            
                           
                            <div class="mobile-indicator" style="
    width: 10px;">
                                <a href="index.php" class="mobile-indicator__button">
                                    <span class="mobile-indicator__icon">
                                        <img src="images/final/en.png" width="60%"/>
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
                                <span class="block-slideshow__item-image block-slideshow__item-image--mobile" style="background-image: url('images/final/slider-1.png')"></span>
                                
                            </a>
                           <a class="block-slideshow__item" href="">
                                <span class="block-slideshow__item-image block-slideshow__item-image--mobile" style="background-image: url('images/final/slider-2.png')"></span>
                                
                            </a>
                            <a class="block-slideshow__item" href="">
                                <span class="block-slideshow__item-image block-slideshow__item-image--mobile" style="background-image: url('images/final/slider-1.png')"></span>
                                
                            </a>
							
							
							<a class="block-slideshow__item" href="">
                                <span class="block-slideshow__item-image block-slideshow__item-image--mobile" style="background-image: url('images/final/slider-2.png')"></span>
                                
                            </a>
							
							
							
                        </div>
                    </div>
                </div>
            </div>
						<br><br>

            <div class="block block-brands block-brands--layout--columns-8-full">
                <div class="container">
                    <ul class="block-brands__list" style="justify-content: center;
  display: flex;">
                       <li class="block-brands__item">
                            <a href="services-ar.php?C_ID=1" class="block-brands__item-link">
                                <img src="images/final/c1.png" alt="">
								<h5>Test 1</h5>
                            </a>
                        </li>
                        <li class="block-brands__item">
                            <a href="services-ar.php?C_ID=2" class="block-brands__item-link">
                                <img src="images/final/c2.png" alt="">
																<h5>Test 2</h5>

                            </a>
                        </li>
                        <li class="block-brands__item">
                            <a href="services-ar.php?C_ID=3" class="block-brands__item-link">
                                <img src="images/final/c3.png" alt="">
																<h5>Test 3</h5>

                            </a>
                        </li>				
                 
</ul>
                    <ul class="block-brands__list" style="justify-content: center;
  display: flex;">
						
                        <li class="block-brands__item">
                            <a href="services-ar.php?C_ID=4" class="block-brands__item-link">
                                <img src="images/final/c4.png" alt="">
																<h5>Test 4</h5>

                            </a>
                        </li>
						
					
						
                        <li class="block-brands__item">
                            <a href="services-ar.php?C_ID=5" class="block-brands__item-link">
                                <img src="images/final/c5.png" alt="">
																<h5>Test 5</h5>

                            </a>
                        </li>
                        <li class="block-brands__item">
                            <a href="services-ar.php?C_ID=6" class="block-brands__item-link">
                                <img src="images/final/c6.png" alt="">
																<h5>Test 6</h5>

                            </a>
                        </li>				
                    </ul>
					
                </div>
            </div>
            
          
            
        </div>
    
	</div>

	<?php
	include 'mobile-menu-ar.php';
	?>

    <?php
	include 'scripts.php';
	?>
  
</body>

</html>