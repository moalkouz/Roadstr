<?php
include 'includes/config.php';
include 'session_check-ar.php';



include('database_connection.php');



$Search = $_POST['Search'];

?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
   <?php
include 'styles-ar.php';
?>  
	

	
	



<style>






.search {
  position: relative;
  color: #334F5D;
  font-size: 16px;
  
    background: #fff;
	top:-25px;
	direction:rtl;

}

.search input {
  width: 100%;
  height: 32px;

  background: #ebebeb;
  
}

.search input { text-indent: 32px;}
.search .fa-search { 
  position: absolute;
  top: 8px;
  right: 10px;
  
}



</style>



</head>

<body>
    <!-- site -->
    <div class="site">
        <!-- site__mobile-header -->
       
	   
	   
	   
	    <header class="site__mobile-header" style="width: 100%; position: fixed; z-index: 9;">
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
                                <a href="services.php" class="mobile-indicator__button">
                                    <span class="mobile-indicator__icon">
                                        <img src="images/final/en.png" width="60%"/>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
		
		
		
		


        <div class="site__body">
		
		
		
		
            <div class="block-header block-header--has-breadcrumb block-header--has-title">
                <div class="container">
                    <div class="block-header__body">
                        <nav class="breadcrumb block-header__breadcrumb" aria-label="breadcrumb">
                            

                        </nav>
                    </div>
                </div>
            </div>
			
			
			
		
				
            <div class="block-split" style="">
                
				
				<br>
				
				
				

                <div class="container">
                    <div class="block-split__row row no-gutters">
                        <div class="block-split__item block-split__item-content col-auto">
                            <div class="block">
                                <div class="products-view">
								
								
								
								
								
								<style>
				input[type=submit]
{
    visibility:hidden;
}
</style>

				<form action="services-search-ar.php"  method="post">

			



<div class="search">
  <span class="fa fa-search"></span>
  <input placeholder="البحث..." type="text" name="Search" class="form-control form-control-sm">
  				<input type="submit" name="Submit" >

</div>


							</form>
							
							
							
							
							

                                    <div class="products-view__options view-options view-options--offcanvas--always" style="margin-top:-58px">
                                        <div class="view-options__body">
										
										
										
										
										
										
										
						
										<div class="view-options__select">
                                                <label for="view-option-sort">السعر:</label>
                                                <select id="view-option-sort" class="form-control form-control-sm" name="price-sorting">
											<option value="l2h">الاقل - الاعلى</option>
											<option value="h2l">الاعلى - الاقل</option>
                                                </select>
                                            </div>
											
						
						
						
                                           
                                            <div class="view-options__layout layout-switcher">
                                                <div class="layout-switcher__list">
                                                    <button type="button" class="layout-switcher__button layout-switcher__button--active" data-layout="grid" data-with-features="false">
                                                        <svg width="16" height="16">
                                                            <path d="M15.2,16H9.8C9.4,16,9,15.6,9,15.2V9.8C9,9.4,9.4,9,9.8,9h5.4C15.6,9,16,9.4,16,9.8v5.4C16,15.6,15.6,16,15.2,16z M15.2,7
	H9.8C9.4,7,9,6.6,9,6.2V0.8C9,0.4,9.4,0,9.8,0h5.4C15.6,0,16,0.4,16,0.8v5.4C16,6.6,15.6,7,15.2,7z M6.2,16H0.8
	C0.4,16,0,15.6,0,15.2V9.8C0,9.4,0.4,9,0.8,9h5.4C6.6,9,7,9.4,7,9.8v5.4C7,15.6,6.6,16,6.2,16z M6.2,7H0.8C0.4,7,0,6.6,0,6.2V0.8
	C0,0.4,0.4,0,0.8,0h5.4C6.6,0,7,0.4,7,0.8v5.4C7,6.6,6.6,7,6.2,7z" />
                                                        </svg>
                                                    </button>
													
													
													
													
													
													
													
                                                    <button type="button" class="layout-switcher__button" data-layout="grid" data-with-features="true">
                                                        <svg width="16" height="16">
                                                            <path d="M16,0.8v14.4c0,0.4-0.4,0.8-0.8,0.8H9.8C9.4,16,9,15.6,9,15.2V0.8C9,0.4,9.4,0,9.8,0l5.4,0C15.6,0,16,0.4,16,0.8z M7,0.8
	v14.4C7,15.6,6.6,16,6.2,16H0.8C0.4,16,0,15.6,0,15.2L0,0.8C0,0.4,0.4,0,0.8,0l5.4,0C6.6,0,7,0.4,7,0.8z" />
                                                        </svg>
                                                    </button>
                                                    <button type="button" class="layout-switcher__button" data-layout="list" data-with-features="false">
                                                        <svg width="16" height="16">
                                                            <path d="M15.2,16H0.8C0.4,16,0,15.6,0,15.2V9.8C0,9.4,0.4,9,0.8,9h14.4C15.6,9,16,9.4,16,9.8v5.4C16,15.6,15.6,16,15.2,16z M15.2,7
	H0.8C0.4,7,0,6.6,0,6.2V0.8C0,0.4,0.4,0,0.8,0h14.4C15.6,0,16,0.4,16,0.8v5.4C16,6.6,15.6,7,15.2,7z" />
                                                        </svg>
                                                    </button>
                                                   
                                                </div>
                                            </div>
                                            


<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>


                                        </div>
                                       
                                    </div>
                                    <div class="products-view__list products-list products-list--grid--6" data-layout="grid" data-with-features="false">
                                        
<script>
function sortProductsPriceAscending() {
  // change variable name, so it's clear what it contains
  var test2 = $('.test2');

  gridItems.sort(function(a, b){
    // we are sorting the gridItems, but we are sorting them on the nested
    // product card prices.  So we have to find the nested product card
    // to get the price off of
    return $('.test3', a).data("price") - $('.test3', b).data("price");
  });

  // when you put the grid items back on the container, just append them rather
  // than using html().  Append will just move them.
  $(".test1").append(test2);
}
</script>

<script>
$(document).on("change", ".form-control", function() {
  var sortingMethod = $(this).val();
  
  if(sortingMethod == 'l2h') {
    sortProductsPriceAscending();
  } else if (sortingMethod == 'h2l') {
    sortProductsPriceDescending();
  }
});

function sortProductsPriceAscending() {
  var test2 = $('.test2');

  test2.sort(function(a, b) {
    return $('.test3', a).data("price") - $('.test3', b).data("price");
  });

  $(".test1").append(test2);
}

function sortProductsPriceDescending() {
  var test2 = $('.test2');

  test2.sort(function(a, b) {
    return $('.test3', b).data("price") - $('.test3', a).data("price");
  });

  $(".test1").append(test2);
}
</script>










<script>
function sortProductsRateAscending() {
  // change variable name, so it's clear what it contains
  var test5 = $('.test5');

  gridItems.sort(function(a, b){
    // we are sorting the gridItems, but we are sorting them on the nested
    // product card prices.  So we have to find the nested product card
    // to get the price off of
    return $('.test6', a).data("rate") - $('.test6', b).data("rate");
  });

  // when you put the grid items back on the container, just append them rather
  // than using html().  Append will just move them.
  $(".test4").append(test5);
}
</script>

<script>
$(document).on("change", ".form-control", function() {
  var sortingMethod1 = $(this).val();
  
  if(sortingMethod1 == 'lo2hi') {
    sortProductsRateAscending();
  } else if (sortingMethod1 == 'hi2lo') {
    sortProductsRateDescending();
  }
});

function sortProductsRateAscending() {
  var test5 = $('.test5');

  test5.sort(function(a, b) {
    return $('.test6', a).data("rate") - $('.test6', b).data("rate");
  });

  $(".test4").append(test5);
}

function sortProductsRateDescending() {
  var test5 = $('.test5');

  test5.sort(function(a, b) {
    return $('.test6', b).data("rate") - $('.test6', a).data("rate");
  });

  $(".test4").append(test5);
}
</script>




















                                        <div class="products-list__content test1 test4" >






<?php
                                           
				$sql1 = mysqli_query($dbConn,"select * from services where Name COLLATE UTF8_GENERAL_CI LIKE '%$Search%' AND Status='Active' order by ID DESC");


		
						
						

while ($row1=mysqli_fetch_array($sql1)){


				$S_ID = $row1['ID'];
				$P_ID = $row1['P_ID'];
						$Name = $row1['Name'];
												$Description = $row1['Description'];

						$Picture_1 = $row1['Picture_1'];
						$Price = $row1['Price'];
						
						

	$query222 = mysqli_query($dbConn,"select * from providers where ID='$P_ID'");
	$row222 = mysqli_fetch_array($query222);
	$P_Name = $row222['Name'];



					

?>






                                            <div class="products-list__item product123 test2 test5">
                                                <div class="product-card test3 test6" data-price="<?php echo $Price; ?>" >
                                                    
                                                    <div class="product-card__image">
                                                        <div class="image image--type--product">
                                                            <a href="signin-ar.php" class="image__body">
                                                                <center><img class="image__tag" src="../Providers/<?php echo $Picture_1; ?>" alt=""></center>
                                                            </a>
															
				
                                                        </div>
                                                       
                                                    </div>
                                                    <div class="product-card__info">
                                                       
														
														<div class="product-card__name">
                                                            <div>
                                                               
                                                                <a href="signin-ar.php"><?php echo $Name; ?></a>
                                                            </div>
                                                        </div>
														
														
														
                                                    </div>
                                                    <div class="product-card__footer">
													
													
													 <div class="product-card__prices">
                                                                <div class="product-card__price product-card__price--new" ><?php echo $Price; ?> د.أ</div>
                                                            </div>
															
															
															
															
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                            



	    <?php
		}
		?>	



<script>
const productDivs = document.querySelectorAll(".product123");
const categorySelect = document.querySelector("#select-category123");

categorySelect.addEventListener("change", (e) => {
  const category = e.target.value;

  [...productDivs].forEach(pd => {
    const display = pd.dataset.category === category || category === "all";
    pd.style.display = display ? "" : "none";
  });
});
</script>













 
                                            
                                        </div>












                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-space block-space--layout--before-footer"></div>
                </div>
            </div>
        </div>
        <!-- site__body / end -->
        <!-- site__footer -->
       
        <!-- site__footer / end -->
    </div>
    <!-- site / end -->
    <!-- mobile-menu -->















<br><br>
      	<?php
	include 'mobile-menu-ar.php';
	?>
   
  <?php
	include 'scripts.php';
	?>


 <center>
 <ul class="nav" id="newdata2" style="visibility: <?php echo $nav_show; ?>">
  <a href="index-ar.php"><i class="fa fa-home" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:12px; font-family: myFirstFont;">الرئيسية</i></a>
  <a href="signin-ar.php"><i class="fa fa-user" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:12px; font-family: myFirstFont;">حسابي</i></a>
  <a href="index-ar.php"><i class="fa fa-chevron-circle-right" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:12px; font-family: myFirstFont;">رجوع</i></a>
  </ul>
  </center>














</body>

</html>