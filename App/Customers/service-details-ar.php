<?php include 'session_check-ar.php';



include('database_connection.php');


$S_ID = $_GET['S_ID'];




$sql1 = mysqli_query($dbConn,"select * from services where ID='$S_ID'");
					$row1 = mysqli_fetch_array($sql1);
						
						$S_ID = $row1['ID'];
						$P_ID = $row1['P_ID'];
						$Cat_ID = $row1['C_ID'];
						$Name = $row1['Name'];
												$Description = $row1['Description'];

						$Picture_1 = $row1['Picture_1'];
						$Picture_2 = $row1['Picture_2'];
						$Picture_3 = $row1['Picture_3'];
						$Price = $row1['Price'];
						
						
						

	$query222 = mysqli_query($dbConn,"select * from providers where ID='$P_ID'");
	$row222 = mysqli_fetch_array($query222);
	$P_Name = $row222['Name'];
	$P_Longitude = $row222['Longitude'];
	$P_Latitude = $row222['Latitude'];




						
						$sql2 = mysqli_query($dbConn,"select * from categories where ID='$Cat_ID'");
						$row2 = mysqli_fetch_array($sql2);
						$C_Name = $row2['Name'];


?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <?php include 'styles-ar.php'; ?>
	
	
	
	
	
	
	
	
	



</head>

<body>
    <!-- site -->
    <div class="site">
        <!-- site__mobile-header -->
        <header class="site__mobile-header" style="position: fixed; z-index: 9;">
            <div class="mobile-header" >
                <div class="container">
                    <div class="mobile-header__body">
                        <button class="mobile-header__menu-button" type="button">
                            <i class="fa fa-bars" aria-hidden="true" style="font-size:20px; color:#fff"></i>
                        </button>
                        <h4 class="mobile-header__logo" style="color:#fff; margin-top:7px; margin-right:100px">Roadstr</h4>

                       
                        <div class="mobile-header__indicators">
                           
                            
                           
 <div class="mobile-indicator" style="
    width: 10px;">                                <a href="service-details.php?S_ID=<?php echo $S_ID; ?>" class="mobile-indicator__button">
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
        <!-- site__mobile-header / end -->
   <br><br>
        <!-- site__body -->
        <div class="site__body">
           
            <div class="block-split">
                <div class="container">
                    <div class="block-split__row row no-gutters">
                        <div class="block-split__item block-split__item-content col-auto">
                            <div class="product product--layout--full">
                                <div class="product__body">
                                    <div class="product__card product__card--one"></div>
                                    <div class="product__card product__card--two"></div>
                                    <div class="product-gallery product-gallery--layout--product-full product__gallery" data-layout="product-full">
                                        <div class="product-gallery__featured">
                                            <button type="button" class="product-gallery__zoom">
                                                <svg width="24" height="24">
                                                    <path d="M15,18c-2,0-3.8-0.6-5.2-1.7c-1,1.3-2.1,2.8-3.5,4.6c-2.2,2.8-3.4,1.9-3.4,1.9s-0.6-0.3-1.1-0.7
	c-0.4-0.4-0.7-1-0.7-1s-0.9-1.2,1.9-3.3c1.8-1.4,3.3-2.5,4.6-3.5C6.6,12.8,6,11,6,9c0-5,4-9,9-9s9,4,9,9S20,18,15,18z M15,2
	c-3.9,0-7,3.1-7,7s3.1,7,7,7s7-3.1,7-7S18.9,2,15,2z M16,13h-2v-3h-3V8h3V5h2v3h3v2h-3V13z" />
                                                </svg>
                                            </button>
                                            <div class="owl-carousel">
                                                <!--
                The data-width and data-height attributes must contain the size of a larger version
                of the product image.

                If you do not know the image size, you can remove the data-width and data-height
                attribute, in which case the width and height will be obtained from the naturalWidth
                and naturalHeight property of img.image__tag.
                -->
                                                <a class="image image--type--product" href="../../Providers/<?php echo $Picture_1; ?>" target="_blank" data-width="700" data-height="700">
                                                    <div class="image__body">
                                                        <img class="image__tag" src="../../Providers/<?php echo $Picture_1; ?>" alt="">
                                                    </div>
                                                </a>
                                                <!--
                The data-width and data-height attributes must contain the size of a larger version
                of the product image.

                If you do not know the image size, you can remove the data-width and data-height
                attribute, in which case the width and height will be obtained from the naturalWidth
                and naturalHeight property of img.image__tag.
                -->
                                                <a class="image image--type--product" href="../../Providers/<?php echo $Picture_2; ?>" target="_blank" data-width="700" data-height="700">
                                                    <div class="image__body">
                                                        <img class="image__tag" src="../../Providers/<?php echo $Picture_2; ?>" alt="">
                                                    </div>
                                                </a>
                                                <!--
                The data-width and data-height attributes must contain the size of a larger version
                of the product image.

                If you do not know the image size, you can remove the data-width and data-height
                attribute, in which case the width and height will be obtained from the naturalWidth
                and naturalHeight property of img.image__tag.
                -->
                                                <a class="image image--type--product" href="../../Providers/<?php echo $Picture_3; ?>" target="_blank" data-width="700" data-height="700">
                                                    <div class="image__body">
                                                        <img class="image__tag" src="../../Providers/<?php echo $Picture_3; ?>" alt="">
                                                    </div>
                                                </a>
                                                <!--
                The data-width and data-height attributes must contain the size of a larger version
                of the product image.

                If you do not know the image size, you can remove the data-width and data-height
                attribute, in which case the width and height will be obtained from the naturalWidth
                and naturalHeight property of img.image__tag.
                -->
                                                
                                            </div>
                                        </div>
                                        <div class="product-gallery__thumbnails">
                                            <div class="owl-carousel">
                                                <div class="product-gallery__thumbnails-item image image--type--product">
                                                    <div class="image__body">
                                                        <img class="image__tag" src="../../Providers/<?php echo $Picture_1; ?>" alt="">
                                                    </div>
                                                </div>
                                                <div class="product-gallery__thumbnails-item image image--type--product">
                                                    <div class="image__body">
                                                        <img class="image__tag" src="../../Providers/<?php echo $Picture_2; ?>" alt="">
                                                    </div>
                                                </div>
                                                <div class="product-gallery__thumbnails-item image image--type--product">
                                                    <div class="image__body">
                                                        <img class="image__tag" src="../../Providers/<?php echo $Picture_3; ?>" alt="">
                                                    </div>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product__header">
                                        <h1 class="product__title"><?php echo $Name; ?> - <?php echo $C_Name; ?></h1>
                                        <div class="product__subtitle">
                                           <?php echo $P_Name; ?> 
                                        </div>
                                    </div>
                                    <div class="product__main">
                                        <div class="product__excerpt">
                                            <?php echo $Description; ?>
                                        </div>
                                       
                                    </div>
                                    <div class="product__info">
                                        <div class="product__info-card">
                                            <div class="product__info-body">
                                                <!--<div class="product__badge tag-badge tag-badge--sale">Sale</div>-->
                                                <div class="product__prices-stock">
                                                    <div class="product__prices">
                                                        <div class="product__price product__price--current"><?php echo $Price; ?> د.أ</div>
                                                    </div>
													
												
														
														
													
													
													
													
													
                                                    
                                                </div>
                                                <div class="product__meta">
                                                    <table>
                                                        <tr>
                                                            <th>اسم صاحب العمل</th>
                                                            <td><?php echo $P_Name; ?> <a href='geo:".$P_Latitude.",".$P_Longitude."?q=".$P_Latitude.",".$P_Longitude."(".$P_Name.")' class='btn btn-primary btn-sm' style='color:#fff'>عرض الموقع</a></td>
                                                        </tr>
                                                       
                                                        <tr>
                                                            <th>التصنيف</th>
                                                            <td><?php echo $C_Name; ?></td>
                                                        </tr>
                                                       
														
                                                    </table>
                                                </div>
                                            </div>
                                           
											
											
											
											
											
											<form action="request-service-ar.php" method="post">
											<input type="hidden" name="Price" value="<?php echo $Price; ?>"/>
											<input type="hidden" name="S_ID" value="<?php echo $S_ID; ?>"/>
											<input type="hidden" name="P_ID" value="<?php echo $P_ID; ?>"/>
											<input type="hidden" name="C_ID" value="<?php echo $C_ID; ?>"/>
											
											
											
											
											<div class="product__actions" >
                                                <div class="product__actions-item " style="width:100%">
                                                    <div class="input-text">
													
                                                        <textarea class="input-text form-control form-control-lg"  name="Notes"  placeholder="ملاحظات..."  ></textarea>
                                                    </div>
													
													
													<br>
													<div class="input-text">
													تاريخ طلب الخدمة
                                                        <input class="input-text form-control form-control-lg"  name="Date" type="date" min="<?php echo date("Y-m-d"); ?>" required />
                                                    </div>
													
													
													
                                                </div>
												<br>
											
                                                <div class="product__actions-item">
												<br>
                                                    <button type="submit" name="Submit" class="btn btn-primary btn-lg btn-block">اطلب الخدمة</button>
                                                </div>
												
                                                <div class="product__actions-divider"></div>
                                            </div>
											</form>
											
											
											
                                           
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="block-space block-space--layout--divider-nl"></div>
                            <div class="block block-products-carousel" data-layout="grid-5">
                                <div class="container">
                                    <div class="section-header">
                                        <div class="section-header__body">
                                            <h2 class="section-header__title">&nbsp;&nbsp;&nbsp;&nbsp;خدمات ذات صلة</h2>
                                            <div class="section-header__spring"></div>
                                            <div class="section-header__arrows">
                                                <div class="arrow section-header__arrow section-header__arrow--prev arrow--prev">
                                                    <button class="arrow__button" type="button"><svg width="7" height="11">
                                                            <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="arrow section-header__arrow section-header__arrow--next arrow--next">
                                                    <button class="arrow__button" type="button"><svg width="7" height="11">
                                                            <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="section-header__divider"></div>
                                        </div>
                                    </div>
                                    <div class="block-products-carousel__carousel">
                                        <div class="block-products-carousel__carousel-loader"></div>
                                        <div class="owl-carousel">
                                            
											
											
															
											
											
											
								<?php
								
								
								
						$Price_From = $Price-100;
						$Price_To = $Price+100;
						
								
$sql1 = mysqli_query($dbConn,"select * from services where (C_ID='$Cat_ID') AND Price>=$Price_From AND Price<=$Price_To AND Status='Active' AND ID!='$S_ID' ");
					while ($row1 = mysqli_fetch_array($sql1)){								
											
											
					$S_ID = $row1['ID'];
						$P_ID = $row1['P_ID'];
						$Cat_ID = $row1['C_ID'];
						$Name = $row1['Name'];
												$Description = $row1['Description'];

						$Picture_1 = $row1['Picture_1'];
						$Picture_2 = $row1['Picture_2'];
						$Picture_3 = $row1['Picture_3'];
						$Price = $row1['Price'];
						
						
						

	$query222 = mysqli_query($dbConn,"select * from providers where ID='$P_ID'");
	$row222 = mysqli_fetch_array($query222);
	$P_Name = $row222['Name'];



						
						$sql2 = mysqli_query($dbConn,"select * from categories where ID='$Cat_ID'");
						$row2 = mysqli_fetch_array($sql2);
						$C_Name = $row2['Name'];
								
											
											
											
							?>				
											
                                            <div class="block-products-carousel__column">
                                                <div class="block-products-carousel__cell">
                                                    <div class="product-card product-card--layout--grid">
                                                       
                                                        <div class="product-card__image">
                                                            <div class="image image--type--product">
                                                                <a href="service-details-ar.php?S_ID=<?php echo $S_ID; ?>" class="image__body">
                                                                    <img class="image__tag" src="../../Providers/<?php echo $Picture_1; ?>" alt="">
                                                                </a>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="product-card__info">
                                                            <div class="product-card__name">
                                                                <div>
                                                                    <a href="service-details-ar.php?S_ID=<?php echo $S_ID; ?>"><?php echo $Name; ?> - <?php echo $C_Name; ?></a>
                                                                </div>
                                                            </div>
                                                           
                                                        </div>
                                                        <div class="product-card__footer">
                                                            <div class="product-card__prices">
                                                                <div class="product-card__price product-card__price--current"><?php echo $Price; ?> د.أ</div>
                                                            </div>
															
															
														
														
														
														
														
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                           
                                           
                                          
                                           
                                           
                    <?php
					}
					?>
											
											
											
							
                                            
											
											
											
											
											
											
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-space block-space--layout--before-footer"></div>
        </div>
        <!-- site__body / end -->
        <!-- site__footer -->
        
        <!-- site__footer / end -->
    </div>
    <!-- site / end -->
    
	<br><br>
    <?php
	include 'mobile-menu-ar.php';
	?>
	
    <!-- mobile-menu / end -->
    
  
    <!-- vehicle-picker-modal / end -->
    <!-- photoswipe -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <!--<button class="pswp__button pswp__button&#45;&#45;share" title="Share"></button>-->
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- photoswipe / end -->
    <!-- scripts -->
    <?php include 'scripts.php'; ?>
	
	
	
	
	
		
	
	

	 <center>
 <ul class="nav" id="newdata2" style="visibility: <?php echo $nav_show; ?>">
  <a href="index-ar.php"><i class="fa fa-home" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:12px; font-family: myFirstFont;">الرئيسية</i></a>
  <a href="myaccount-ar.php"><i class="fa fa-user" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:12px; font-family: myFirstFont;">حسابي</i></a>
  <a href="javascript:history.back()"><i class="fa fa-chevron-circle-right" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:12px; font-family: myFirstFont;">رجوع</i></a>
  </ul>
  </center>	

</body>

</html>