<?php include 'session_check-ar.php';









if(isset($_POST['Submit']))
{
	
	
	
	
	
$C_ID=mysqli_real_escape_string($dbConn,$_POST['C_ID']);
$Old_Password=mysqli_real_escape_string($dbConn,$_POST['Old_Password']);
$New_Password=mysqli_real_escape_string($dbConn,$_POST['New_Password']);
$Password=mysqli_real_escape_string($dbConn,$_POST['Password']);
$Confirm_Password=mysqli_real_escape_string($dbConn,$_POST['Confirm_Password']);


		
		
	if ($Old_Password==$Password){
		
		
		if ($New_Password==$Confirm_Password){
			
			
		
		$update = mysqli_query($dbConn,"update customers set Password='$New_Password' where ID='$C_ID'");
		
	
		
		
	
	$Error = 'تم تغيير كلمة المرور بنجاح !';

	
		}else{
			
			
	$Error = 'نعتذر ... كلمة المرور الجديدة وتأكيدها غير متطابقين !';
		
			
			
		}
	

	
	}else{
		
	$Error = 'نعتذر ... كلمة المرور القديمة خاطئة !';
		
	
	}
		
}



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

	<a href="change-password.php" class="mobile-indicator__button">
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
                                     <li class="account-nav__item  ">
                                        <a href="myaccount-ar.php">حسابي</a>
                                    </li>
                                    <li class="account-nav__item  ">
                                        <a href="edit-account-ar.php">تعديل معلومات الحساب</a>
                                    </li>
                                  
                                    <li class="account-nav__item account-nav__item--active">
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
                            <div class="card">
                                <div class="card-header">
                                    <h5>تغيير كلمة المرور</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-body card-body--padding--2">
                                    <div class="row no-gutters">
									
									
									
				
				

				
				
                                        <div class="col-12 col-lg-7 col-xl-6">
										
										<form method="post" action="change-password-ar.php">
										
										<input type="hidden" name="C_ID" value="<?php echo $C_ID; ?>"/>
										<input type="hidden" name="Password" value="<?php echo $Password; ?>"/>
				
				
				
                                            <div class="form-group">
                                                <label for="password-current">كلمة المرور القديمة</label>
                                                <input type="password" class="form-control" id="password-current" name="Old_Password" placeholder="كلمة المرور القديمة">
                                            </div>
                                            <div class="form-group">
                                                <label for="password-new">كلمة المرور الجديدة</label>
                                                <input type="password" class="form-control" id="password-new" name="New_Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must Contain At Least One Number And One Uppercase And Lowercase Letter, And At Least 8 Or More Characters" placeholder="كلمة المرور الجديدة">
					<center><span style="font-size: 12px; color:red">ملاحظة: يجب استخدام حرف واحد كبير وحرف واحد صغير ورقم واحد على الأقل، ويجب ان تكون كلمة المرور من 8 خانات فأكثر</span></center>
                                           
										   </div>
                                            <div class="form-group">
                                                <label for="password-confirm">تأكيد كلمة المرور الجديدة</label>
                                                <input type="password" class="form-control" id="password-confirm" name="Confirm_Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must Contain At Least One Number And One Uppercase And Lowercase Letter, And At Least 8 Or More Characters" placeholder="تأكيد كلمة المرور الجديدة">
                                            </div>
                                            <div class="form-group mb-0">
                                               <center> <button class="btn btn-primary mt-3" type="submit" name="Submit">تعديل</button></center>
												
												
                                            </div>
											<br><br>
																<center><font style='color:red'><?php echo $Error; ?></font></center>

											
											</form>
											
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
  <a href="myaccount-ar.php"><i class="fa fa-chevron-circle-right" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:12px; font-family: myFirstFont;">رجوع</i></a>
  </ul>
  </center>

</body>

</html>