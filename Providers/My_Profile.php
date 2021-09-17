<?php
session_start();

include("../includes/config.php"); 

include_once '../languages/common.php';

$P_ID = $_SESSION['P_Log'];


if (!$_SESSION['P_Log'])
echo '<script language="JavaScript">
 document.location="../Providers_Login.php";
</script>';


$sqlc = mysqli_query($dbConn,"select * from providers where ID='$P_ID'");
$rowc = mysqli_fetch_array($sqlc);

$Phone_Number = $rowc['Phone_Number'];
$Address = $rowc['Address'];
$Username = $rowc['Username'];
$Provider_Password = $rowc['Password'];






if(isset($_POST['Submit']))
{
$P_ID = $_POST['P_ID'];
$Phone_Number = $_POST['Phone_Number'];
$Address = $_POST['Address'];
$Username = $_POST['Username'];




$update = mysqli_query($dbConn,"update providers set Phone_Number='$Phone_Number', Address='$Address', Username='$Username' where ID='$P_ID'");




echo "<script language='JavaScript'>
			  alert ('Provider Account Information Has Been Updated !');
      </script>";

	echo "<script language='JavaScript'>
document.location='index.php';
        </script>";
		
}


if(isset($_POST['Submit2']))
{
$P_ID = $_POST['P_ID'];
$Old_Password=md5($_POST['Old_Password']);
$New_Password=$_POST['New_Password'];
$Confirm_New_Password=$_POST['Confirm_New_Password'];
$Provider_Password=$_POST['Provider_Password'];


if (isvalid2()==true)
{

$New_Confirm_New_Password = $_POST['Confirm_New_Password'];

$update = mysqli_query($dbConn,"update providers set Password='$New_Confirm_New_Password' where ID='$P_ID'");


	echo "<script language='JavaScript'>
document.location='index.php';
        </script>";

}
}

function isvalid2()
{
global $Old_Password;
global $New_Password;
global $Confirm_New_Password;
global $Provider_Password;




if ($Provider_Password <> $Old_Password){
echo "<script language='JavaScript'>
			  alert ('Old Password Is Not Correct !');
      </script>";
return false;	  
}
elseif ($New_Password <> $Confirm_New_Password){

echo "<script language='JavaScript'>
			  alert ('New Password & Confirm Password Dose Not Match !');
      </script>";
return false;

}
else
{
	return true;
}
}






?>
<!DOCTYPE html>
<html>

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Roadstr | Providers Area</title>

   <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
	    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">


    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/icon.png"/>
	
	<style>
@font-face {
   font-family: myFirstFont;
   src: url(fonts/NotoKufiArabic-Regular.ttf);
   font-size:8px;
}
body {
   font-family: myFirstFont;
}

</style>

</head>

<body style="back">
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/user.png" width="48" height="48"/>
                             </span>
							 

                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><font color="#fff">Providers Area</font></strong>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="My_Profile.php">My Profile</a></li>
                                <li><a href="Logout.php">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                           M
                        </div>
						
							
                    </li>
                    <li >
                        <a href="index.php"><i class="fa fa-th-large"></i> <span class="nav-label">Home</span></a>

                    </li>
					
				
				
					
					
					
					
					
					  <li>
                        <a href="#"><i class="fa fa-list"></i> <span class="nav-label">Services</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">

                            <li><a href="Add_New_Service.php">Add New Service</a></li>
                            <li><a href="View_Services_List.php">View Services List</a></li>

                        </ul>
                    </li>
					
					
					



                       <li>
                        <a href="#"><i class="fa fa-list"></i> <span class="nav-label">Orders</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">

                            <li><a href="View_Orders_List.php">View Orders List</a></li>

                        </ul>
                    </li>


  


					

                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">


<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i></a>  
            
      

    
  
   
        </div>
            <ul class="nav navbar-top-links navbar-right">
<br>

				<li>
                    <span class="m-r-sm text-muted welcome-message">Welcome To Roadstr - Providers Portal</span>
                </li>
                
                

                <li class="dropdown">
                    
                    <ul class="dropdown-menu dropdown-messages">
                        
                        
                        <li class="divider"></li>
                        
                        
                    </ul>
                </li>
             
 <li>
                    <a href="Logout.php">
                        <i class="fa fa-sign-out"></i> Logout
                    </a>
                </li>


                
            </ul>

        </nav>
        </div>
          <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>My Profile</h2>
                    <ol class="breadcrumb">
                        <li class="active">
                            <strong>My Profile Information</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            
 <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>My Profile Information</h5>
                        <div class="ibox-tools">
                            
                          
                           
                        </div>
                    </div>
                   
                        
                        
                        
                        
                          <div class="ibox-content">

                  
                  
                  
                  
                     <form method="post" action="My_Profile.php" class="form-horizontal" enctype="multipart/form-data">
                                
                                
                             <input type="hidden" name="P_ID" value="<?php echo $P_ID; ?>"/>   
                               
                                
                             
								
								
								 <div class="form-group"><label class="col-sm-2 control-label">Phone Number *</label>

                                    <div class="col-sm-10"><input style="width:450px" value="<?php echo $rowc['Phone_Number']; ?>" type="tel" name="Phone_Number" pattern="(?=.*\d)(?=.*[0-9]).{10}" title="Must Contain Exactly 10 Numbers" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
								
								
								
								
                              <div class="form-group"><label class="col-sm-2 control-label">Username *</label>

                                    <div class="col-sm-10"><input style="width:450px" value="<?php echo $rowc['Username']; ?>" type="text" name="Username" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                
                                
                                    
                              

                                
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit" name="Submit">Edit</button>
									<button class="btn btn-white" type="reset">Cancel</button>
                                    </div>
                                </div>
                            </form>
                  
                  
                  
                  
              
                        </div>
                        
                        
                        <div class="ibox-content">

                  
                  
                  
             
                            <form method="post" action="My_Profile.php" class="form-horizontal">
                            <input type="hidden" name="P_ID" value="<?php echo $P_ID; ?>"/>
                            <input type="hidden" name="Provider_Password" value="<?php echo $Provider_Password; ?>"/>
                            
                                
                                
                                
                                <div class="form-group"><label class="col-sm-2 control-label">Old Password</label>

                                    <div class="col-sm-10"><input style="width:450px" type="password" name="Old_Password" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                
                                
                                 <div class="form-group"><label class="col-sm-2 control-label">New Password</label>

                                    <div class="col-sm-10"><input style="width:450px" type="password" name="New_Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must Contain At Least One Number And One Uppercase And Lowercase Letter, And At Least 8 Or More Characters" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                
                                
                                 <div class="form-group"><label class="col-sm-2 control-label">Confirm New Password</label>

                                    <div class="col-sm-10"><input style="width:450px" type="password" name="Confirm_New_Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must Contain At Least One Number And One Uppercase And Lowercase Letter, And At Least 8 Or More Characters" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div> 
                                
                                
                                
                                
                               
                             
                                
                                
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit" name="Submit2">Edit</button>
									<button class="btn btn-white" type="reset">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        
                        
                        
                        
                        
                    </div>
                </div>
             
                
               <div class="footer">

                    <div>
                       <center>Roadstr © 2020. All Rights Reserved.</center>
                    </div>
                </div>
            </div>
        </div>

        </div>




        </div>
    </div>

     <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>


      
    <script src="js/plugins/jeditable/jquery.jeditable.js"></script>

    <script src="js/plugins/dataTables/datatables.min.js"></script>
    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                   
 
 /*                   {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }    */
                   
                ]

            });

            /* Init DataTables */
            var oTable = $('#editable').DataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( '../example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }
    </script>
</body>
</html>
