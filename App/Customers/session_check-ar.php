<?php

session_start();

include '../includes/config.php';

ini_set('session.gc_maxlifetime', 57600);
session_set_cookie_params(57600);




$C_ID = $_SESSION['C_Log'];



if ($_SESSION['C_Log']==''){
echo '<script language="JavaScript">
 document.location="../signin-ar.php";
</script>';
}




if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) 
{
$nav_show="visible";


}else{ 

$nav_show="hidden";

	
	
}






$sql3 = mysqli_query($dbConn,"select * from customers where ID='$C_ID'");
					$row3 = mysqli_fetch_array($sql3);
$Full_Name=$row3['Full_Name'];
$Address=$row3['Address'];
$Email_Address=$row3['Email_Address'];					
$Password=$row3['Password'];
$Phone_Number=$row3['Phone_Number'];






if(strpos($_SERVER['HTTP_USER_AGENT'], 'Android')) {
	
$Share_Link = "";

}elseif (strpos($_SERVER['HTTP_USER_AGENT'],"iPhone")){
	
$Share_Link = "";


}
?>