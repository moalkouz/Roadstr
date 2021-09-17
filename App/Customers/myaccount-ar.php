<?php include 'session_check-ar.php';




?>
<html lang="ar" dir="rtl">

<head>
    <?php include 'styles-ar.php'; ?>
	
	
	
	
	




</head>

<body>
    <!-- site -->
    <div class="site">
        <!-- site__mobile-header -->
        <header class="site__mobile-header" >
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
	<a href="myaccount.php" class="mobile-indicator__button">
                                    <span class="mobile-indicator__icon">
                                        <img src="../images/final/en.png" width="60%"/>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
   
		
        <div class="site__body">
            
           
            
			
			<br>
			
			
			
            <div class="block-space block-space--layout--after-header"></div>
            <div class="block">
                <div class="container container--max--xl">
                    <div class="row">
                        <div class="col-12 col-lg-3 d-flex">
                            <div class="account-nav flex-grow-1">
                                <h4 class="account-nav__title">Navigation</h4>
                                <ul class="account-nav__list">
                                    <li class="account-nav__item  account-nav__item--active ">
                                        <a href="myaccount-ar.php">حسابي</a>
                                    </li>
                                    <li class="account-nav__item ">
                                        <a href="edit-account-ar.php">تعديل معلومات الحساب</a>
                                    </li>
                                  
                                    <li class="account-nav__item ">
                                        <a href="change-password-ar.php">تغيير كلمة المرور</a>
                                    </li>
									
									
								
									
									
									
                                    <li class="account-nav__divider" role="presentation"></li>
                                    <li class="account-nav__item ">
                                        <a href="logout-ar.php">خروج</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="dashboard">
                                <div class="dashboard__profile card profile-card">
                                    <div class="card-body profile-card__body">
                                        <div class="profile-card__avatar">
                                            <img src="../images/final/user.png" alt="">
                                        </div>
                                        <div class="profile-card__name"><?php echo $Full_Name; ?></div>
                                        <div class="profile-card__email"><?php echo $Email_Address; ?></div>
										<div class="profile-card__phone" dir="ltr"><?php echo $Phone_Number; ?></div>
										<br>
                                        <div class="profile-card__edit">
                                            <center><a href="edit-account-ar.php" class="btn btn-primary btn-sm">تعديل معلومات الحساب</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dashboard__address card address-card address-card--featured">
                                    <div class="address-card__body">
                                        <div class="address-card__name"><?php echo $Full_Name; ?></div>
                                      
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">رقم الهاتف</div>
                                            <div class="address-card__row-content" dir="ltr"><?php echo $Phone_Number; ?></div>
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">البريد الإلكتروني</div>
                                            <div class="address-card__row-content"><?php echo $Email_Address; ?></div>
                                        </div>
                                       
                                    </div>
                                </div>
                               
                            </div>
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
		<br><br>

    <?php
	include 'mobile-menu-ar.php';
	?>
    <!-- mobile-menu / end -->
    <!-- quickview-modal -->
   
  
    
    <!-- scripts -->
    <?php include 'scripts.php'; ?>
	
	
	
	
	
	
	
 <center>
 <ul class="nav" id="newdata2" style="visibility: <?php echo $nav_show; ?>">
  <a href="index-ar.php"><i class="fa fa-home" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:12px; font-family: myFirstFont;">الرئيسية</i></a>
  <a href="myaccount-ar.php"><i class="fa fa-user" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:12px; font-family: myFirstFont;">حسابي</i></a>
  <a href="index-ar.php"><i class="fa fa-chevron-circle-right" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:12px; font-family: myFirstFont;">رجوع</i></a>
  </ul>
  </center>


</body>

</html>