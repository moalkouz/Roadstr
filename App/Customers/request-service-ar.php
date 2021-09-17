<?php

if(isset($_POST['Submit']))
{


session_start();

$C_ID=$_POST['C_ID'];
$S_ID=$_POST['S_ID'];
$P_ID=$_POST['P_ID'];
$Price=$_POST['Price'];
$Notes=$_POST['Notes'];
$Date=$_POST['Date'];





require_once('../includes/config.php');






		mysqli_query($dbConn,"insert into orders (C_ID,P_ID,S_ID,Notes,Date,Rate,Price,Status)
values ('$C_ID','$P_ID','$S_ID','$Notes','$Date','','$Price','Pending')");


echo "<script language='JavaScript'>
			  alert ('تم ارسال طلب الخدمة بنجاح !');
      </script>";


	echo "<script language='JavaScript'>
document.location='myorders-ar.php';
        </script>";
		

}


?>