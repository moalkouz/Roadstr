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
                                <a href="privacy.php" class="mobile-indicator__button">
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
        
		
        <div class="site__body">
            
			
			<br><br>
			
			<div class="about">
                <div class="about__body">
                    <div class="about__image">
                        <div class="about__image-bg"></div>
                        <div class="decor about__image-decor decor--type--bottom">
                            <div class="decor__body">
                                <div class="decor__start"></div>
                                <div class="decor__end"></div>
                                <div class="decor__center"></div>
                            </div>
                        </div>
                    </div>
                    <div class="about__card">
                        <div class="about__card-signature">
                            <center><img src="images/final/logo.png" width="100%" alt=""></center>
                        </div>
						<br>
						<div class="about__card-text">
                           	<p style="text-align:justify">




Text Text Text Text Text Text


                    </p>
                        </div>
						
						





		






                        
                    </div>
                    
                </div>
            </div>
			
           
            
          
            
        </div>
        <!-- site__body / end -->
        <!-- site__footer -->
       
        <!-- site__footer / end -->
    </div>
    <!-- site / end -->
    <!-- mobile-menu -->
	<br><br><br>
   	<?php
	include 'mobile-menu-ar.php';
	?>
   
  
     <?php
	include 'scripts.php';
	?>


	
	
 <center>
 <ul class="nav" id="newdata2" style="visibility: <?php echo $nav_show; ?>">
  <a href="index-ar.php"><i class="fa fa-home" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:12px; font-family: myFirstFont;">الرئيسية</i></a>
  <a href="signin-ar.php"><i class="fa fa-user" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:12px; font-family: myFirstFont;">حسابي</i></a>
  <a href="about-ar.php"><i class="fa fa-chevron-circle-right" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:12px; font-family: myFirstFont;">رجوع</i></a>
  </ul>
  </center>




</body>

</html>