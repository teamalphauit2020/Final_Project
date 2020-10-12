<?php
                session_start();
                header("Cache-Control", "no-cache, no-store, must-revalidate");
				$conn = mysqli_connect("localhost","root","");
				if (mysqli_connect_errno())
				{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
               
                mysqli_select_db($conn,"ita");
                $entry = 1;
				if(isset($_POST['submit']))
				{
					$email=$_POST["email"];
					$password=$_POST["password"];
					$name=$_POST["uname"];
					$phone=$_POST["phone"];
					$address=$_POST["address"];

					$check = "select * from users WHERE email='$email'";
					$res = $conn->query($check);

					$row = mysqli_fetch_row($res);
					if (mysqli_num_rows($res) > 0)
					{
						$entry = 0;
						echo ("<SCRIPT LANGUAGE='JavaScript'>
							window.alert('User Already Exists!!Login to Shop')
							window.location.href='login.php'
							</SCRIPT>");
                    }
                    if(strlen($password)<8)
					{
						$entry = 0;
						echo "<script>window.alert('Password - Atleast 8 characters!!')
							  window.location.href='register.php'</script>";
					}

					if($entry==1)
					{
				     $sql="insert into users(name, email, password, phone, address) values ('$name','$email','$password','$phone','$address')";
					if (mysqli_query($conn, $sql))
					  {
						$_SESSION["user"] = $name;
						echo "<script>window.alert('Record created successfully')
							  window.location.href='index.php?login=1 & username=$name'</script>";
					  }	
					else
					{
						echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
                }
            }
              
                

?>
<!DOCTYPE html>
<html>
<?php 

include 'head.php';
?>
<body>
   <!-- header-bot -->
<div class="header-bot">
	<div class="container">
		<div class="col-md-3 header-left">
			<h1><a href="index.php"><img src="images/logo3.jpg"></a></h1>
		</div>
		
		<div class="col-md-3 header-right footer-bottom" style="float:right;">
			<ul>
				<li><a href="#" class="use1" data-toggle="modal" data-target="#myModal4"><span>Login</span></a>
					
				</li>
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
									  <!-- Collect the nav links, forms, and other content for toggling -->
		
					  <li class=" menu__item"><a class="menu__link" href="register.php">Register</a></li>
					  <li class=" menu__item"><a class="menu__link" href="login.php">Login</a></li>
					  <li class=" menu__item"><a class="menu__link" href="contact.html">Review Products</a></li>
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
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-left">
			<h2><a href="index.html"><img src="images/logo3.jpg" alt=" " /></a></h2>
			<p>The best shopping palace to get all the products of your need and to get in the lowest price .</p>
		</div>
		<div class="col-md-9 footer-right">
			
			
			<div class="sign-grds">
				<div class="col-md-4 sign-gd">
					<h4>Information</h4>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="men.php">Men</a></li>
						<li><a href="women.php">Women</a></li>
						<li><a href="gadgets.php">Electronics</a></li>
						<li><a href="books.php">Books</a></li>
                        <li><a href="sports.php">Sports</a></li>
                        <li><a href="contact.php">Contact</a></li>

					</ul>
				</div>
				
				<div class="col-md-4 sign-gd-two">
					<h4>Store Information</h4>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : 1234k Avenue, 4th block, <span>Newyork City.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">info@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : +1234 567 567</li>
					</ul>
				</div>
				
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

</body>
</html>