<?php
session_start();
$login=$_SESSION['login'];
$lid=$_GET['lid'];
if($_SESSION['login']==0)
{
?>
		<script type="text/javascript">location.href = 'login.php?lid=<?php echo $lid;?>';</script>
<?php

}
$conn = mysqli_connect("localhost","root","");
mysqli_select_db($conn,"ita");
$sql = "SELECT * FROM products where pid=".$_GET['pid']; 
$_SESSION['pid'] =$_GET['pid'];

$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
<title>Smart Shop a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- single -->
<script src="js/imagezoom.js"></script>
<script src="js/jquery.flexslider.js"></script>
<!-- single -->
<!-- cart -->
	<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<style>
.block {
  display: block;
  width: 100%;
  border: none;
  background-color: #ddd;
  color: white;0
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
}

.block:hover {
  background-color: #ddd;
  color: black;
}
</style>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<script src="js/jquery.easing.min.js"></script>
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


<!-- //banner-top -->

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
						<li class=" menu__item"><a class="menu__link" href="login.php">Login</a></li>
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
<!-- //banner-top -->
<!-- single -->
<div class="single">
	<div class="container">
		<div class="col-md-6 single-right-left animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
			<div class="grid images_3_of_2">
				<div class="flexslider">
					<!-- FlexSlider -->
						<script>
						// Can also be used with $(document).ready()
							$(window).load(function() {
								$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
								});
							});
						</script>
                    <!-- //FlexSlider-->
                    <?php 
					
					while($row = mysqli_fetch_assoc($result))	
					{
						$_SESSION['pname'] = $row['pname'];
						$_SESSION['price'] = $row['price'];
						$_SESSION['info']= $row['info'];
						$_SESSION['image'] = $row['image'];
                        $pid = $row['pid'];	
                        $cat=$row['category'];
                        $folder="";
                        $pname=$row['pname'];
                        $price=$row['price'];
                        switch($cat)
                        {
                            case 1:$folder="Men"; break;
                            case 2: $folder="woman";break;
                            case 3:$folder="Books"; break;
                            case 4: $folder="gadgets";break;
                            case 5: $folder="sports";break;
                               
                        }
                        $fileExt=explode('.',$row['image']);
                    }
                    $file="".$folder."/".$fileExt[0];                  
					?>	
					<ul class="slides">
						<li data-thumb="images/<?php  echo $file; ?>.png">
							<div class="thumb-image"> <img src="images/<?php echo $file; ?>.png" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="images/<?php echo $file;?>.png">
							<div class="thumb-image"> <img src="images/<?php echo $file; ?>.png" data-imagezoom="true" class="img-responsive"> </div>
						</li>	
						<li data-thumb="images/<?php  echo $file; ?>.png">
							<div class="thumb-image"> <img src="images/<?php echo $file; ?>.png" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="images/<?php  echo $file; ?>.png">
							<div class="thumb-image"> <img src="images/<?php echo $file; ?>.png" data-imagezoom="true" class="img-responsive"> </div>
						</li>	
					</ul>
					<div class="clearfix"></div>
				</div>	
			</div>
		</div>
		<div class="col-md-6 single-right-left simpleCart_shelfItem animated wow slideInRight animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
                    
					
					<form action="confirm_order.php" method="get"class="jumbotron">
					<h3><?php echo  $pname;?></h3>
                    <div class="description">
						<h2>Price:</h2>
						
					</div>
                   
					<p><span class="item_price" style="color: black; font-weight: 300;"><?php echo "Rs.".$price ?></span> <del style="color: black; font-weight: 400;"> - <?php echo "Rs.".($price+500) ?></del></p>
					<div class="color-quality-right">
							<h5>Quantity :</h5>							
						</div>
					<input type="text" name="quantity">
					<div class="occasion-cart ">
					<input type="submit" class="item_add hvr-outline-out button2" name="submit" value="Place Order">
					</div>
					</form>
					
					
					
		</div>
				<div class="clearfix"> </div>


<!-- login -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
						<div class="col-md-3 coupons-gd">
							<h3>Update review</h3>
						</div>
                        <form action = 'update_review.php?' method = 'post'>
			<textarea name='review' rows='10' cols='40' value='$review'></textarea><br>
			<input type='submit' class='btn btn-primary' align='center' name='submit' value='update'></input></form></div></td>		
		       </form> 
						</div>
					</div>
				</div>
			</div>









							</div>
							
						</div>
					</div>
				</div>
	</div>
</div>
<!-- //single -->

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