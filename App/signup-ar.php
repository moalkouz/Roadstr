<?php
include 'session_check-ar.php';
include 'includes/config.php';



session_start();



	$Error ='';







if(isset($_POST['Submit']))
{
	
	
$Full_Name=mysqli_real_escape_string($dbConn,$_POST['Full_Name']);
$Phone_Number=mysqli_real_escape_string($dbConn,$_POST['Phone_Number']);
$Email_Address=mysqli_real_escape_string($dbConn,$_POST['Email_Address']);
$Password=mysqli_real_escape_string($dbConn,$_POST['Password']);



$query = mysqli_query($dbConn,"SELECT * FROM customers WHERE Phone_Number='$Phone_Number'"); 
$query2 = mysqli_query($dbConn,"SELECT * FROM customers WHERE Email_Address='$Email_Address'"); 
		

if (mysqli_num_rows($query)>0)
{

$Error = 'نعتذر ... رقم الهاتف مسجل مسبقا !';




	
}elseif (mysqli_num_rows($query2)>0){




$Error = 'نعتذر ... البريد الإلكتروني مسجل مسبقا !';






}else{
	
	
	
	
$insert = mysqli_query($dbConn,"insert into customers (Full_Name,Phone_Number,Email_Address,Password,Status) values ('$Full_Name','$Phone_Number','$Email_Address','$Password','Active')");

  
echo '<script language="JavaScript">
            document.location="signin-ar.php";
        </script>';

$Error = 'تم التسجيل بنجاح ... يمكنك تسجيل الدخول الان !';


}
}


?>
<html lang="ar" dir="rtl">

<head>
   


<?php
include 'styles-ar.php';
?>  



	

	
	




<style>
input{
	color: #000;
}


input[type="text"]::placeholder { /* Firefox, Chrome, Opera */ 
    color: #848484 !important;
	text-align: center;
} 
  
input[type="text"]:-ms-input-placeholder { /* Internet Explorer 10-11 */ 
    color: #848484 !important; 
	text-align: center;
} 
  
input[type="text"]::-ms-input-placeholder { /* Microsoft Edge */ 
    color: #848484 !important; 
	text-align: center;
} 


input[type="password"]::placeholder { /* Firefox, Chrome, Opera */ 
    color: #848484 !important;
	text-align: center;
} 
  
input[type="password"]:-ms-input-placeholder { /* Internet Explorer 10-11 */ 
    color: #848484 !important; 
	text-align: center;
} 
  
input[type="password"]::-ms-input-placeholder { /* Microsoft Edge */ 
    color: #848484 !important; 
	text-align: center;
} 


input[type="email"]::placeholder { /* Firefox, Chrome, Opera */ 
    color: #848484 !important;
	text-align: center;
} 
  
input[type="email"]:-ms-input-placeholder { /* Internet Explorer 10-11 */ 
    color: #848484 !important; 
	text-align: center;
} 
  
input[type="email"]::-ms-input-placeholder { /* Microsoft Edge */ 
    color: #848484 !important; 
	text-align: center;
}


input[type="tel"]::placeholder { /* Firefox, Chrome, Opera */ 
    color: #848484 !important;
	text-align: center;
} 
  
input[type="tel"]:-ms-input-placeholder { /* Internet Explorer 10-11 */ 
    color: #848484 !important; 
	text-align: center;
} 
  
input[type="tel"]::-ms-input-placeholder { /* Microsoft Edge */ 
    color: #848484 !important; 
	text-align: center;
}





.btn-primary {

	
	width: 100% !important;
    background: linear-gradient(to right, #334F5D, #334F5D) !important;
    background: -webkit-linear-gradient(to right, #334F5D, #334F5D) !important;
    padding: 0px 0 !important;
    border: none !important;
    border-radius: 5px !important;
    color: #fff !important;
    font-size: 20px !important;
	
	
	
}



.myButton {
	box-shadow:inset 0px 1px 0px 0px #9acc85 !important;
	background:linear-gradient(to bottom, #334F5D 5%, #E15949 100%) !important;
	background-color:#334F5D !important;
	border:1px solid #334F5D !important;
	display:inline-block !important;
	cursor:pointer !important;
	color:#ffffff !important;
	padding:6px 12px !important;
	border-radius: 5px !important;
	text-decoration:none !important;
}

.myButton:active {
	position:relative !important;
	top:1px !important;
}


</style>


<style>
.signin form, .signup form, .change-password form {
  width: 40%;
  margin: auto;
  padding: 30px;
}
@media (max-width: 768px) {
  .signin form, .signup form, .change-password form {
    width: 100%;
  }
}
.signin form > div, .signup form > div, .change-password form > div {
  margin-bottom: 20px;
}
.signin form input[type=text], .signup form input[type=text], .change-password form input[type=text], .signin form input[type=email], .signup form input[type=email], .change-password form input[type=email], .signin form input[type=tel], .signup form input[type=tel], .change-password form input[type=tel], .signin form input[type=password], .signup form input[type=password], .change-password form input[type=password] {
  width: 100%;
  background-color: #fff;
  border: 0px;
  border: 1px solid #c5c5c5;
  border-radius: 5px;
  padding: 10px;
}
.signin form input[type=text]::placeholder, .signup form input[type=text]::placeholder, .change-password form input[type=text]::placeholder, .signin form input[type=email]::placeholder, .signup form input[type=email]::placeholder, .change-password form input[type=email]::placeholder, .signin form input[type=tel]::placeholder, .signup form input[type=tel]::placeholder, .change-password form input[type=tel]::placeholder, .signin form input[type=password]::placeholder, .signup form input[type=password]::placeholder, .change-password form input[type=password]::placeholder {
  color: #fff;
  text-align: center;
}
.signin form input[type=submit], .signup form input[type=submit], .change-password form input[type=submit] {
  width: 100%;
  background: linear-gradient(to right, #334F5D, #E15949);
  background: -webkit-linear-gradient(to right, #334F5D, #E15949);
  padding: 0px 0;
  border: none;
  border-radius: 5px;
  color: #fff;
  font-size: 20px;
}
.signin form a, .signup form a, .change-password form a {
  color: #fff;
}


</style>


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
    width: 10px;">                                <a href="signup.php" class="mobile-indicator__button">
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
			<br><br>
			
			<section class="signin">
           
            
            <div style="height:auto !important">
                
				
				<form method="post" action="signup-ar.php" style='direction: ltr' >





                    <div><input type="text" name="Full_Name" value="<?php echo isset($_POST['Full_Name']) ? $_POST['Full_Name'] : '' ?>" placeholder="الاسم الكامل" required></div>
                    <div><input  type="tel" name="Phone_Number" value="+962" placeholder="رقم الهاتف" required>
					<center><div style="color:#000; font-size:11px; margin-top:5px "><font >رقم الهاتف لا يبدأ برقم 0</font></div></center>

					</div>
					
					
  
  
  
                    <div><input type="email" name="Email_Address" value="<?php echo isset($_POST['Email_Address']) ? $_POST['Email_Address'] : '' ?>" placeholder="البريد الإلكتروني" ></div>
                    <div><input type="text" minlength="6" name="Password" value="<?php echo isset($_POST['Password']) ? $_POST['Password'] : '' ?>" placeholder="كلمة المرور" required>

					<center><div style="color:#000; font-size:11px; margin-top:5px "><font >كلمة المرور يجب ان تتكون من 6 خانات على الأقل</font></div></center>


					
					</div>
                    <div><input type="submit" name="Submit" class="myButton" style="height:46px;" value="تسجيل جديد"></div>
										<center><span style="color:white"><?php echo $Error; ?></span></center>

                </form>
				
				
				
            </div>
		<br><br>

        </section>
			
           
            
          
            
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
   
  
   

    <?php
	include 'scripts.php';
	?>



	
			

 <center>
 <ul class="nav" id="newdata2" style="visibility: <?php echo $nav_show; ?>">
  <a href="index-ar.php"><i class="fa fa-home" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:12px; font-family: myFirstFont;">الرئيسية</i></a>
  <a href="signin-ar.php"><i class="fa fa-user" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:12px; font-family: myFirstFont;">حسابي</i></a>
  <a href="signin-ar.php"><i class="fa fa-chevron-circle-right" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:12px; font-family: myFirstFont;">رجوع</i></a>
  </ul>
  </center>



<script>
$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>

</body>

</html>