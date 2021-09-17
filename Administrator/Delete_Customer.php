<?php
session_start();

$C_ID=$_GET['C_ID'];

require_once('../includes/config.php');


mysqli_query($dbConn,"delete from orders where C_ID='$C_ID'");


mysqli_query($dbConn,"delete from customers where ID='$C_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Customer Has Been Deleted Successfully !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='View_Customers_List.php';
        </script>";

?>