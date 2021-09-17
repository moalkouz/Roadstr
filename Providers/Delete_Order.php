<?php
session_start();

$ID=$_GET['ID'];

require_once('../includes/config.php');


mysqli_query($dbConn,"delete from orders where ID='$ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Order Has Been Deleted Successfully !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='View_Orders_List.php';
        </script>";

?>