<?php
session_start();

$S_ID=$_GET['S_ID'];

require_once('../includes/config.php');


mysqli_query($dbConn,"delete from orders where S_ID='$S_ID'");
mysqli_query($dbConn,"delete from services where ID='$S_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Service Has Been Deleted Successfully !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='View_Services_List.php';
        </script>";

?>