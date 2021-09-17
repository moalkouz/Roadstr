<?php include 'session_check-ar.php';














if(isset($_POST['Submit']))
{
	
	
	
	
	
$C_ID=mysqli_real_escape_string($dbConn,$_POST['C_ID']);
$Full_Name=mysqli_real_escape_string($dbConn,$_POST['Full_Name']);
$Email_Address=mysqli_real_escape_string($dbConn,$_POST['Email_Address']);








$query = mysqli_query($dbConn,"SELECT * FROM customers WHERE Email_Address='$Email_Address' AND ID!='$C_ID'"); 
		

if (mysqli_num_rows($query)>0)
{

$Error = 'نعتذر ... البريد الإلكتروني مستعمل مسبقاً !';




	
}
else
{





	$insert = mysqli_query($dbConn,"update customers set Full_Name='$Full_Name', Email_Address='$Email_Address' where ID='$C_ID'");

	
	
	

	





$Error = 'تم تعديل معلومات الحساب !';






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


	<a href="edit-account.php" class="mobile-indicator__button">
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
                                    <li class="account-nav__item  account-nav__item--active">
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
                            <div class="card">
                                <div class="card-header">
                                    <h5>تعديل معلومات الحساب</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-body card-body--padding--2">
                                    <div class="row no-gutters">
									
									
									
				
				

				
				
                                        <div class="col-12 col-lg-7 col-xl-6">
										                <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

										<form method="post" action="edit-account-ar.php" enctype="multipart/form-data">
										
										<input type="hidden" name="C_ID" value="<?php echo $C_ID; ?>"/>
				
				
				
                                            <div class="form-group">
                                                <label >الاسم الكامل</label>
                                                <input type="text" class="form-control" name="Full_Name" required value="<?php echo $Full_Name; ?>" placeholder="الاسم الكامل">
                                            </div>
											
											
											
											
											
											
											
											
                                            
					
					
					
					
										   
										     <div class="form-group">
                                                <label >البريد الإلكتروني</label>
                                                <input name="Email_Address" type="email" class="form-control" required value="<?php echo $Email_Address; ?>" placeholder="البريد الإلكتروني">
                                            </div>
										   
										   
									
										   
										   
										   
                                            <div class="form-group mb-0">
                                               <center> <button class="btn btn-primary mt-3" type="submit" id="btnFetch" name="Submit">تعديل</button>
											   
											   
											   <script type="text/javascript">$(document).ready(function() {
$("#btnFetch").click(function() {
// disable button
$(this).prop("", true);
// add spinner to button
$(this).html(
'<i class="fa fa-circle-o-notch fa-spin"></i> loading'
);
});
}); </script>
											   
											   </center>
												
												
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
  <a href="myaccount-ar.php"><i class="fa fa-chevron-circle-right" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:12px; font-family: myFirstFont;">رجوع</i></a>
  </ul>
  </center>



</body>

</html>