<?php include 'session_check-ar.php';




?>
<html lang="ar" dir="rtl">

<head>
    <?php include 'styles-ar.php'; ?>
	
	
	
	
	




</head>

<body>
    <!-- site -->
    <div class="site">
        <!-- site__mobile-header -->
        <header class="site__mobile-header" >
            <div class="mobile-header" >
                <div class="container">
                    <div class="mobile-header__body">
                        <button class="mobile-header__menu-button" type="button">
                            <i class="fa fa-bars" aria-hidden="true" style="font-size:20px; color:#fff"></i>
                        </button>
                                                                        <h4 class="mobile-header__logo" style="color:#fff; margin-top:7px; margin-right:100px">Roadstr</h4>

                       
                        <div class="mobile-header__indicators">
                           
                            
                           
 <div class="mobile-indicator" style="
    width: 10px;">
                                <a href="myorders.php" class="mobile-indicator__button">
                                    <span class="mobile-indicator__icon">
                                        <img src="../images/final/en.png" width="60%"/>
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
			
			
<div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="card">
                                <div class="card-header">
                                    <h5>طلباتي</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-table">
                                    <div class="table-responsive-sm">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>رقم الطلب #</th>
                                                    <th>التاريخ / الوقت</th>
                                                    <th>اسم الخدمة</th>
                                                    <th>اسم صاحب العمل</th>
                                                    <th>الحالة</th>
                                                    <th>المبلغ</th>
                                                </tr>
                                            </thead>
                                            <tbody>



<?php
					$sql1 = mysqli_query($dbConn,"select * from orders where C_ID='$C_ID' order by ID DESC");
					while ($row1 = mysqli_fetch_array($sql1)){
						
						$ID = $row1['ID'];
						$P_ID = $row1['P_ID'];
						$S_ID  = $row1['S_ID'];
						$Notes  = $row1['Notes'];
						$Date  = $row1['Date'];
						$Status  = $row1['Status'];
						$Rate  = $row1['Rate'];
					
						$Add_Date_Time  = $row1['Add_Date_Time'];


					$sql2 = mysqli_query($dbConn,"select * from providers where ID='$P_ID'");
					$row2 = mysqli_fetch_array($sql2);
					$P_Name = $row2['Name'];

					$sql3 = mysqli_query($dbConn,"select * from services where ID='$S_ID'");
					$row3 = mysqli_fetch_array($sql3);
					$S_Name = $row3['Name'];					
					$S_Price = $row3['Price'];	
						
						?>




                                                <tr>
                                                    <td>#<?php echo $ID; ?></td>
                                                    <td><?php echo $Add_Date_Time; ?></td>
                                                    <td><?php echo $S_Name; ?></td>
                                                    <td><?php echo $P_Name; ?></td>
                                                    <td><?php echo $Status; ?></td>
                                                    <td><?php echo $S_Price; ?> د.أ</td>
                                                </tr>
                                    
<?php
}
?>            

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-divider"></div>
                                
                            </div>
                        </div>













			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
            
          
            
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
    <!-- mobile-menu / end -->
    <!-- quickview-modal -->
   
  
    
    <!-- scripts -->
    <?php include 'scripts.php'; ?>
	
	
	
	
	
	
 <center>
 <ul class="nav" id="newdata2" style="visibility: <?php echo $nav_show; ?>">
  <a href="index-ar.php"><i class="fa fa-home" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:12px; font-family: myFirstFont;">الرئيسية</i></a>
  <a href="myaccount-ar.php"><i class="fa fa-user" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:12px; font-family: myFirstFont;">حسابي</i></a>
  <a href="index-ar.php"><i class="fa fa-chevron-circle-right" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:12px; font-family: myFirstFont;">رجوع</i></a>
  </ul>
  </center>


</body>

</html>