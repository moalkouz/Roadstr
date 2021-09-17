<?php
session_start();

include 'includes/config.php';

	$Error ='';



if(isset($_POST['Submit']))
{
	
$Username=$_POST['Username'];
$Password=$_POST['Password'];




$query = mysqli_query($dbConn,"SELECT * FROM providers WHERE (Username='$Username' AND Password='$Password') AND Status='Active'"); 
		

if (mysqli_num_rows($query)>0)
{

$row=mysqli_fetch_array($query);
$P_ID=$row['ID'];
$_SESSION['P_Log'] = $P_ID;


	  
echo '<script language="JavaScript">
            document.location="Providers/";
        </script>';
	
}
else
{




$Error = 'Error ... Please Check Providers Username Or Password !';
     
	  


}
}


?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Roadstr - Providers Portal | Login</title>

    <link href="Providers/css/bootstrap.min.css" rel="stylesheet">
	    <link href="Providers/css/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">

    <link href="Providers/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="Providers/css/animate.css" rel="stylesheet">
    <link href="Providers/css/style.css" rel="stylesheet">
	        	<link rel="shortcut icon" href="Providers/img/icon.png"/>
	
	<style>
@font-face {
   font-family: myFirstFont;
   src: url(Providers/fonts/NotoKufiArabic-Regular.ttf);
   font-size:8px;
}
body {
   font-family: myFirstFont;
}






</style>





</head>

<body class="white-bg" class="" style="background-color:#fff">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
            
       
                <img src="Providers/img/logo.png" class="img-rounded" width="80%"/>

            </div>
                    <h2 class="font-bold">Providers Login</h2>
            
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <form class="m-t" role="form" method="post" action="Providers_Login.php">
                <div class="form-group">
                   Username <input type="text" class="form-control" placeholder="Username" name="Username" required="">
                </div>
				



                <div class="form-group">
                  Password  <input type="password" id="password" class="form-control" placeholder="Password" name="Password" required="">

				</div>
					
                <button type="submit" name="Submit" class="btn btn-primary block full-width m-b">Login</button>
                <button type="reset" name="Reset" class="btn btn-danger block full-width m-b">Clear</button>
			
				<font style="color:red"><?php echo $Error; ?></font>
				
				
			   </div>

			</form>




  <p class="m-t"> <small><br>Roadstr © 2020. All Rights Reserved </small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="Providers/js/jquery-2.1.1.js"></script>
    <script src="Providers/js/bootstrap.min.js"></script>

</body>

</html>



