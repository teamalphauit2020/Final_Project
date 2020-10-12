<?php
session_start();
$login=$_SESSION["login"];
    $conn = mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"ita");
	$sql = "SELECT * FROM products where category=5 ORDER BY pid "; 
	$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title> Ecommerce Online Shopping </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- pignose css -->
<link href="css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />


<!-- //pignose css -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- cart -->
	<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="js/jquery.easing.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<style type="text/css">
		.glow{
			color: red;
		}

	</style>

</head>
<body>

<!-- header-bot -->
<div class="header-bot">
	<div class="container">
		<div class="col-md-3 header-left">
			<h1><a href="index.php"><img src="images/logo3.jpg"></a></h1>
		</div>
		
		<div class="col-md-3 header-right footer-bottom" style="float:right;">
		<?php
			if($_SESSION["login"]==1)
			{
				?>
			
				<p>User:<?php echo " ".$_SESSION["user"]; ?></p>

				<?php
			}
			?>
			<ul>
				
				<li><a class="fb" href="#"></a></li>
				<li><a class="twi" href="#"></a></li>
				<li><a class="insta" href="#"></a></li>
				<li><a class="you" href="#"></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- header-bot -->
<!-- banner -->


<div class="ban-top ">

	
		<div class="container">
			<div class="row">
				<div class="col-sm-3" style="background-color:black;">
					

				</div>
				<div class="col-sm-9" style="background-color:black; padding-left: 25px;">
				  	
			    <nav class="navbar navbar-default">
				
				   <div class="container-fluid">
				     <!-- Brand and toggle get grouped for better mobile display -->
				  
				        <div class="navbar-header">
					  
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					      <span class="sr-only">Toggle navigation</span>
					      <span class="icon-bar"></span>
					      <span class="icon-bar"></span>
					      <span class="icon-bar"></span>
					      </button>
				       </div>
				  <!-- Collect the nav links, forms, and other content for toggling -->
				  <div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
					  <!--
					  <div class="navbar-brand">
						  <a href="index.html"><h3></h3>Online Shopping</h3></a>
					  </div>
					  -->
					<ul class="nav navbar-nav menu__list">
					  
					  <li class="active menu__item menu__item--current"><a class="menu__link" href="index.php">Home <span class="sr-only">(current)</span></a></li>
					  <li class="dropdown menu__item">
						  <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products <span class="caret"></span></a>
							  <ul class="dropdown-menu multi-column columns-1">
								  <div class="row" style="margin-left: 40px;">
									  
									  <div class="col-sm-3 multi-gd-img">
										  <ul class="multi-column-dropdown">
                                              <li><a href="men.php">Men</a></li>
											  <li><a href="women.php">Women</a></li>
											  <li><a href="gadgets.php">Electronics</a></li>
											  <li><a href="books.php">Books</a></li>
											  <li><a href="sports.php">Sports</a></li>
										  </ul>
									  </div>
									  
									  <div class="clearfix"></div>
								  </div>
							  </ul>
					  </li>
					  <?php 
					  if($login==1)
					  {
						?>  
						<li class=" menu__item"><a class="menu__link" href="review_products.php">Review Products</a></li>
					    <li class=" menu__item"><a class="menu__link" href="contact.php">Contact</a></li>
						<li class=" menu__item"><a class="menu__link" href="logout.php">Logout</a></li>
						<?php

					  }
					  else
					  {

					  ?>
					    <li class=" menu__item"><a class="menu__link" href="review_products.php">Review Products</a></li>
						<li class=" menu__item"><a class="menu__link" href="contact.php">Contact</a></li>
						<li class=" menu__item"><a class="menu__link" href="register.php">Register</a></li>
						<li class=" menu__item"><a class="menu__link" href="login.php?lid=5">Login</a></li>
						<?php
					  }
					  ?>
					</ul>
				  </div>
				</div>
			  </nav>	
		  
				</div>
			  </div>

	
	
		<div class="clearfix">
			
		</div>
	 </div>
	
	
	
</div>
<!-- product-nav -->

<div class="product-easy">
	<div class="container">
		
		<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').easyResponsiveTabs({
									type: 'default', //Types: default, vertical, accordion           
									width: 'auto', //auto or any width like 600px
									fit: true   // 100% fit in a container
								});
							});
							
		</script>
		<div class="sap_tabs">
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<ul class="resp-tabs-list">
				<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Products</span></li> 

				</ul>				  	 
				<div class="resp-tabs-container">

				<!-- Start of contents -->

					<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
					<?php 
					$i=0;
					while($row = mysqli_fetch_assoc($result))	
					{
						$pid = $row['pid'];	
						$fileExt=explode('.',$row['image']);
					?>														
						<div class="col-md-3 product-men" style="height: 500px;">
							<div class="men-pro-item simpleCart_shelfItem">
								<div class="men-thumb-item">
									<img src="images/sports/<?php echo $fileExt[0]?>.png" alt="{$row['pid']}" class="pro-image-front">
									<img src="images/sports/<?php echo $fileExt[0]?>.png" alt="{$row['pid']}" class="pro-image-back">
										<div class="men-cart-pro">
											<!-- <div class="inner-men-cart-pro">
												<a href="single.html" class="link-product-add-cart">Quick View</a> -->
											<!-- </div> -->
										</div>
										<!-- <span class="product-new-top">New</span> -->
										
								</div>
								<div class="item-info-product "style="height: 150px;">
									<h4><a href="shop_cart.php?pid=<?php echo $row['pid'] ?>&lid=5"><?php echo $row['pname'] ?></a></h4>
									<div class="info-product-price">
										<span class="item_price"><?php echo "Rs.".$row['price'] ?></span>
										<del><?php echo "Rs.".($row['price']+500) ?></del><br>
										<?php
										$starNumber = $row['ratings']; 
										for( $x = 0; $x < 5; $x++ )
   										 {
      										  if( floor($starNumber)-$x >= 1 )
       										 { echo '<i class="fa fa-star glow"></i>'; }
       										 elseif( $starNumber-$x > 0 )
        									{ echo '<i class="fa fa-star-half-o glow"></i>'; }
       										 else
       										 { echo '<i class="fa fa-star-o glow"></i>'; }
    										}
										?>

									</div>
									<a href="shop_cart.php?pid=<?php echo $row['pid'] ?>&lid=5" class="item_add single-item hvr-outline-out button2">Buy</a>									
								</div>
							</div>
						</div>

					<?php
					$i++;
					}				
					?>
				</div>	
			</div>
		</div>
	</div>
</div>
<!-- //product-nav -->
<div class="coupons">
	<div class="container">
		<div class="coupons-grids text-center">
			<div class="col-md-3 coupons-gd">
				<h3>Buy your product in a simple way</h3>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				<h4>LOGIN TO YOUR ACCOUNT</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
				<h4>SELECT YOUR ITEM</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="col-md-3 coupons-gd">
				<span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span>
				<h4>MAKE PAYMENT</h4>
				<p>Neque porro quisquam est, qui dolorem ipsum quia dolor
			sit amet, consectetur.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- footer -->
<?php include 'footer.php';?>

</body>
</html>