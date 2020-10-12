<?php
	session_start();
	$conn = mysqli_connect("localhost","root","");
	if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	mysqli_select_db($conn,"ita");
	if($_SESSION['admin']== "admin")
	{
		
	}

	else if(isset($_POST["username"]) )
		{
			$username=$_POST["username"];
			$password=$_POST["password"];
			$sql="select username from admin where username='$username' and password='$password'";
			$result = $conn->query($sql);					
			$row2=mysqli_fetch_row($result);
			if (mysqli_num_rows($result) > 0)
			 	{	

			 		$_SESSION['login']=1;
			 		$login=1;	
					$_SESSION['user'] = $username;
					$_SESSION['admin'] = $username;

	 				
	 			}
			else
			 {
				echo "<script>window.alert('Invalid Credentials!!')
							  window.location.href='adminlogin.php'</script>";

					echo $mysqli->error;
	 			}	
	}
	else
		{
		
			$_SESSION["login"]=0;
			$login=$_SESSION["login"];
			?>
			<script type="text/javascript">location.href = 'adminlogin.php';</script>
			<?php
		}
	
?>
<!DOCTYPE html>
<html>
<?php include 'head.php';?>
<body>
<!-- header -->
<!-- //header -->
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
			
				<p>Welcome<?php echo " ".$_SESSION["user"]; ?></p>

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
				<div class="col-sm-3" style="background-color:black;"></div>
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
								<ul class="nav navbar-nav menu__list">
					  				 <li class="active menu__item menu__item--current"><a class="menu__link" href="index.php">Home <span class="sr-only">(current)</span></a></li>						
					  
									<li class=" menu__item"><a class="menu__link" href="add_products.php">Add </a></li>
									<li class=" menu__item"><a class="menu__link" href="delete_products.php">Delete</a></li>
									
									<!-- <li class=" menu__item"><a class="menu__link" href="fake_product_reviews.php">Remove Fake</a></li> -->
									<li class=" menu__item"><a class="menu__link" href="contact.php">Contact</a></li>
									<li class=" menu__item"><a class="menu__link" href="logout.php">Logout</a></li>
						
								</ul>
				  			</div>
						</div>
			  		</nav>	
				</div>
			</div>
		<div class="clearfix"></div>
	 </div>	 
</div>
<!-- //banner-top -->
<!-- banner -->
<div class="banner-grid container-fluid">
	<div id="visual">
			<div class="slide-visual">
				<!-- Slide Image Area (1000 x 424) -->
				<ul class="slide-group">
					<li><img class="img-responsive" src="images/ba1.jpg" alt="Dummy Image" /></li>
					<li><img class="img-responsive" src="images/ba2.jpg" alt="Dummy Image" /></li>
					<li><img class="img-responsive" src="images/ba3.jpg" alt="Dummy Image" /></li>
				</ul>

				<!-- Slide Description Image Area (316 x 328) -->
				<div class="script-wrap">
					<ul class="script-group">
						<li><div class="inner-script"><img class="img-responsive" src="images/baa1.jpg" alt="Dummy Image" /></div></li>
						<li><div class="inner-script"><img class="img-responsive" src="images/baa2.jpg" alt="Dummy Image" /></div></li>
						<li><div class="inner-script"><img class="img-responsive" src="images/baa3.jpg" alt="Dummy Image" /></div></li>
					</ul>
					<div class="slide-controller">
						<a href="#" class="btn-prev"><img src="images/btn_prev.png" alt="Prev Slide" /></a>
						<a href="#" class="btn-play"><img src="images/btn_play.png" alt="Start Slide" /></a>
						<a href="#" class="btn-pause"><img src="images/btn_pause.png" alt="Pause Slide" /></a>
						<a href="#" class="btn-next"><img src="images/btn_next.png" alt="Next Slide" /></a>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
	<script type="text/javascript" src="js/pignose.layerslider.js"></script>
	<script type="text/javascript">
	//<![CDATA[
		$(window).load(function() {
			$('#visual').pignoseLayerSlider({
				play    : '.btn-play',
				pause   : '.btn-pause',
				next    : '.btn-next',
				prev    : '.btn-prev'
			});
		});
	//]]>
	</script>

</div>
<!-- //banner -->
<!-- content -->

<div class="new_arrivals">
	<div class="container">
		<h3><span>New  </span>Collections</h3>
		<div class="new_grids">
			<div class="col-md-4 new-gd-left">
				<img src="images/wed1.jpg" alt=" " />
				<div class="wed-brand simpleCart_shelfItem">
					<h4>Wedding Collections</h4>
					<h5>Flat 50% Discount</h5>
					<p><i>$250</i> <span class="item_price">$500</span><a class="item_add hvr-outline-out button2" href="#">add to cart </a></p>
				</div>
			</div>
			<div class="col-md-4 new-gd-middle">
				<div class="new-levis">
					<div class="mid-img">
						<img src="images/levis1.png" alt=" " />
					</div>
					<div class="mid-text">
						<h4>up to 40% <span>off</span></h4>
						<a class="hvr-outline-out button2" href="product.html">Shop now </a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="new-levis">
					<div class="mid-text">
						<h4>up to 50% <span>off</span></h4>
						<a class="hvr-outline-out button2" href="product.html">Shop now </a>
					</div>
					<div class="mid-img">
						<img src="images/dig.jpg" alt=" " />
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4 new-gd-left">
				<img src="images/wed2.jpg" alt=" " />
				<div class="wed-brandtwo simpleCart_shelfItem">
					<h4>Spring / Summer</h4>
					<p>Shop Men</p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //content -->

<!-- content-bottom -->

<div class="content-bottom">
	<div class="col-md-7 content-lgrid">
		<div class="col-sm-6 content-img-left text-center">
			<div class="content-grid-effect slow-zoom vertical">
				<div class="img-box"><img src="images/books.jpeg" alt="image" 
					class="img-responsive zoom-img"></div>
					<div class="info-box">
						<div class="info-content simpleCart_shelfItem">
									<h4>Books</h4>
									<span class="separator"></span>
									<p><span class="item_price"></span></p>
									<span class="separator"></span>
									<a class="item_add hvr-outline-out button2" href="books.php">View </a>
						</div>
					</div>
			</div>
		</div>
		<div class="col-sm-6 content-img-left text-center">
			<div class="content-grid-effect slow-zoom vertical">
				<div class="img-box"><img src="images/men.jpg" alt="image" class="img-responsive zoom-img"></div>
					<div class="info-box">
						<div class="info-content simpleCart_shelfItem">
							<h4>Men</h4>
							<span class="separator"></span>
							<p><span class="item_price"></span></p>
							<span class="separator"></span>
							<a class="item_add hvr-outline-out button2" href="men.php">View </a>
						</div>
					</div>
			</div>
		</div>
		<div class="col-sm-6 content-img-left text-center">
			<div class="content-grid-effect slow-zoom vertical">
				<div class="img-box"><img src="images/women.jpg" alt="image" class="img-responsive zoom-img"></div>
					<div class="info-box">
						<div class="info-content simpleCart_shelfItem">
							<h4>Women</h4>
							<span class="separator"></span>
							<p><span class="item_price"></span></p>
							<span class="separator"></span>
							<a class="item_add hvr-outline-out button2" href="women.php">View</a>
						</div>
					</div>
			   </div>
		</div>
		<div class="col-sm-6 content-img-left text-center">
			<div class="content-grid-effect slow-zoom vertical">
				<div class="img-box"><img src="images/sports.jpg" alt="image" class="img-responsive zoom-img"></div>
					<div class="info-box">
						<div class="info-content simpleCart_shelfItem">
							<h4>Sports</h4>
							<span class="separator"></span>
							<p><span class="item_price"></span></p>
							<span class="separator"></span>
							<a class="item_add hvr-outline-out button2" href="sports.php">View </a>
						</div>
					</div>
			    </div>
		    </div>
		

		<div class="clearfix"></div>
	</div>
	<div class="col-md-5 content-rgrid text-center">
		<div class="content-grid-effect slow-zoom vertical">
				<div class="img-box"><img src="images/Electronics.jpg" alt="image" class="img-responsive zoom-img"  ></div>
					<div class="info-box">
						<div class="info-content simpleCart_shelfItem">
									<h4>Electronics</h4>
									<span class="separator"></span>
									<p><span class="item_price"></span></p>
									<span class="separator"></span>
									<a class="item_add hvr-outline-out button2" href="gadgets.php">View </a>
						</div>
					</div>
			</div>
	</div>
	<div class="clearfix"></div>
</div>
<!-- //content-bottom -->
<!-- product-nav -->


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

<!-- //footer -->
<!-- login -->
			
<!-- //login -->
</body>
</html>
