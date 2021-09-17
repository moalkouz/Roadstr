<?php include 'session_check.php';




?>
<html lang="en" dir="ltr">

<head>
    <?php include 'styles.php'; ?>
	
	
	
	
	




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
                                                                              <h4 class="mobile-header__logo" style="color:#fff; margin-top:7px; margin-left:100px">Roadstr</h4>

                       
                        <div class="mobile-header__indicators">
                           
                            
                           
                            <div class="mobile-indicator">
                                <a href="myorders-ar.php" class="mobile-indicator__button">
                                    <span class="mobile-indicator__icon">
                                        <img src="../images/final/ar.png" width="60%"/>
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
                                    <h5>My Orders</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-table">
                                    <div class="table-responsive-sm">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Order #</th>
                                                    <th>Date / Time</th>
                                                    <th>Service Name</th>
                                                    <th>Provider Name</th>
                                                    <th>Status</th>
                                                    <th>Price</th>
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
                                                    <td><?php echo $S_Price; ?> JOD</td>
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
	include 'mobile-menu.php';
	?>
    <!-- mobile-menu / end -->
    <!-- quickview-modal -->
   
  
    
    <!-- scripts -->
    <?php include 'scripts.php'; ?>
	
	
	
	
	
	
  <center>
 <ul class="nav" id="newdata2" style="visibility: <?php echo $nav_show; ?>">
  <a href="index.php"><i class="fa fa-home" style="font-size:20px !important" aria-hidden="true" ><br><font style="font-size:15px;">Home</font></i></a>
  <a href="myaccount.php"><i class="fa fa-user" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:15px">Profile</font></i></a>
  <a href="index.php"><i class="fa fa-chevron-circle-left" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:15px">Back</font></i></a>
  </ul>
  </center>


</body>

</html>