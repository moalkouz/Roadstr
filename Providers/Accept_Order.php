<?php
session_start();

$ID=$_GET['ID'];

require_once('../includes/config.php');


mysqli_query($dbConn,"update orders set Status='Accepted' where ID='$ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Order Status Has Been Updated Successfully !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='View_Orders_List.php';
        </script>";

?>