<?php
include 'session_check.php';
include 'includes/config.php';


	$Error ='';

	
if(isset($_POST['Submit']))
{
	
	
$Phone_Number=mysqli_real_escape_string($dbConn,$_POST['Phone_Number']);
$Password=mysqli_real_escape_string($dbConn,$_POST['Password']);





$query = mysqli_query($dbConn,"SELECT * FROM customers WHERE Phone_Number='$Phone_Number' AND (Status='Active' AND Password='$Password')"); 
		

if (mysqli_num_rows($query)>0)
{
$row=mysqli_fetch_array($query);
$C_ID=$row['ID'];
$_SESSION['C_Log'] = $C_ID;


	
	echo '<script language="JavaScript">
            document.location="Customers/index.php";
          </script>';


}
else
{

$Error = 'Sorry ! Check Your Access Information Or Your Status With Administrator !';

}
}


?>
<html lang="en" dir="ltr">

<head>
   <?php
include 'styles.php';
?>  




	

	
		<style>
	.mobile-indicator__button:hover{
    background-color:inherit !important;
	}
	</style>
	
	
	
	
	
	
	




<style>
		input{
	color: #000;
}



input[type="text"]::placeholder { /* Firefox, Chrome, Opera */ 
    color: #000;
	text-align: center;
} 
  
input[type="text"]:-ms-input-placeholder { /* Internet Explorer 10-11 */ 
    color: #000; 
	text-align: center;
} 
  
input[type="text"]::-ms-input-placeholder { /* Microsoft Edge */ 
    color: #000; 
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



.field-icon {
  float: right;
  margin-right: 10px;
  margin-top: -30px;
  position: relative;
  z-index: 2;
}

.container{
  padding-top:50px;
  margin: auto;
}

.hidden{
display:none;
}

input,
img,
textarea,
button,
select,
a {
  -webkit-tap-highlight-color: rgba(0,0,0,0);
  -webkit-tap-highlight-color: transparent;

}



input[type="tel"]::placeholder { /* Firefox, Chrome, Opera */ 
    color: #000;
	text-align: center;
} 
  
input[type="tel"]:-ms-input-placeholder { /* Internet Explorer 10-11 */ 
    color: #000; 
	text-align: center;
} 
  
input[type="tel"]::-ms-input-placeholder { /* Microsoft Edge */ 
    color: #000; 
	text-align: center;
}














.btn-primary {
    color: #fff;
    background-color: #334F5D;
    border-color: #334F5D;
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
	position:relative;
	top:1px;
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

   <body >
        
		
		
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
                               <h4 class="mobile-header__logo" style="color:#fff; margin-top:7px; margin-left:100px">Roadstr</h4>
                       
                        <div class="mobile-header__indicators">
                           
                            
                           
                            <div class="mobile-indicator">
                                <a href="signin-ar.php" class="mobile-indicator__button">
                                    <span class="mobile-indicator__icon">
                                        <img src="images/final/ar.png" width="60%"/>
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
           
            <div class="uplogo" >
			<center>
                <img src="images/final/logo.png" width="70%" alt="image" >
			</center>
			</div>
            <div style="height:auto !important">
                <form style="height:auto !important" action="signin.php" method="post">

				



  <INPUT TYPE="hidden" NAME="Longitude" ID="long" VALUE="">
					<INPUT TYPE="hidden" NAME="Latitude" ID="lat" VALUE="">
	 


	 
                    <div><input  type="tel" name="Phone_Number" value="+962" placeholder="Phone Number" required>
					<center><div style="color:#000; font-size:11px; margin-top:5px "><font >Phone Number Should Be Start Without (0) In English</font></div></center>

					</div>
					
	
	
  
  
  
                    <div><input type="password" name="Password" id="password-field" style="color:#000" placeholder="Password" required>
					<span toggle="#password-field" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>

					</div>
                    <div><input type="submit" name="Submit"  value="SIGN IN"  style="border:1px solid #334F5D; height:46px;"></div>
										<center><span style="color:#000"><?php echo $Error; ?></span></center>

                    <center><div><a href="reset-password.php" style="color:#000">Forget Password ?</a></div></center>
                </form>
            </div>
			<br>
            <center><div><p style="color:#000; margin-top:-25px"> I dont have account?<br> <a href="signup.php" class="myButton" style="width:107px; color:#fff"> SIGN UP</a></p></div></center>
		<br><br>
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
	include 'mobile-menu.php';
	?>
   
   <?php
	include 'scripts.php';
	?>

	
	
			
  <center>
 <ul class="nav" id="newdata2" style="visibility: <?php echo $nav_show; ?>">
  <a href="index.php"><i class="fa fa-home" style="font-size:20px !important" aria-hidden="true" ><br><font style="font-size:15px;">Home</font></i></a>
  <a href="signin.php"><i class="fa fa-user" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:15px">Profile</font></i></a>
  <a href="index.php"><i class="fa fa-chevron-circle-left" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:15px">Back</font></i></a>
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