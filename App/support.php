<?php
include 'includes/config.php';
include 'session_check.php';



if(isset($_POST['Submit']))
{
$Full_Name = $_POST['Full_Name'];
$Email_Address = $_POST['Email_Address'];
$Subject = $_POST['Subject'];
$Message = $_POST['Message'];



$Email = 'info@Roadstr.com';

$Header = "From: Roadstr - Contact Us Form | ".$Full_Name." - ".$Email_Address;
	
mail ($Email,$Subject,$Message,$Header);




echo "<script language='JavaScript'>
			  alert ('Your Message Has Been Sent !');
      </script>";

	echo "<script language='JavaScript'>
document.location='index.php';
        </script>";


}

?>
<html lang="en" dir="ltr">

<head>
   <?php
include 'styles.php';
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


input[type=tel]{
}


.btn-primary {

	
	width: 100% !important;
    background: linear-gradient(to right, #67ae55, #67ae55) !important;
    background: -webkit-linear-gradient(to right, #67ae55, #67ae55) !important;
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
  background: linear-gradient(to right, #22beef, #2e93bf);
  background: -webkit-linear-gradient(to right, #22beef, #2e93bf);
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
       <center><img src="images/final/logo.png" width="35%"/></center>
                
		
        <div class="site__body">
            
		
			
			<section class="signin">
           
            
            <div style="height:auto !important">
                
				
				<form method="post" action="support.php" style='direction: ltr' >

	 

                    <div><input dir="ltr" type="text" name="Full_Name" value="<?php echo isset($_POST['Full_Name']) ? $_POST['Full_Name'] : '' ?>" placeholder="Full Name" required></div>

					
  
                    <div><input dir="ltr" type="email" name="Email_Address" value="<?php echo isset($_POST['Email_Address']) ? $_POST['Email_Address'] : '' ?>" placeholder="Email Address" required></div>
                    <div><input dir="ltr" type="text" name="Subject" value="<?php echo isset($_POST['Subject']) ? $_POST['Subject'] : '' ?>" placeholder="Subject" required></div>
                    <div><textarea dir="ltr" style="width: 100%;
    background-color: #fff;
    border: 0px;
	text-align:ltr;
    border: 1px solid #c5c5c5;
    border-radius: 5px;
    padding: 10px;" name="Message" value="<?php echo isset($_POST['Message']) ? $_POST['Message'] : '' ?>" placeholder="Your Message" required></textarea>



					
					</div>
                    <div><input type="submit" name="Submit" class="myButton" style="height:46px;" value="Send"></div>

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
	include 'scripts.php';
	?>
	
	
			




</body>

</html>