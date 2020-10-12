<?php
session_start();
$conn = mysqli_connect("localhost","root","");
				if (mysqli_connect_errno())
				{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }
               
                mysqli_select_db($conn,"ita");
                if(isset($_POST['submit']))
				{
                    $password=$_POST["upassword"];
                    $lid=$_POST['lid'];
                    $email=$_POST["uemail"];
                    $check = "select * from users where email='$email' and password='$password'";
					$res = $conn->query($check);
					
					if (mysqli_num_rows($res) > 0)
					{
						$row = mysqli_fetch_assoc($res);
						$user = $row['name'];
						$_SESSION["user"] = $user; 
						$_SESSION['uname']= $row['name'];
						$_SESSION["login"] = 1; 
						$_SESSION["email"]=$row['email'];
						$_SESSION["uaddress"]=$row['address'];
						$_SESSION["uphone"]=$row['phone'];					
						?>							
					  		<script type="text/javascript">
					  			var lid="<?php echo $lid; ?>";
					  			if(lid==1)
					  				location.href = "men.php";
					  			else if(lid==2)
					  			location.href = "women.php";
					  			else if(lid==3)
					  			location.href ="gadgets.php";
					  			else if(lid==4)
					  			location.href = "books.php";
					  			else if(lid==5)
					  			location.href = "sports.php";
					  			else if(lid==6)
					  			location.href = "review_products.php";
                                else
                                location.href="index.php"


					  		;</script>
					     <?php
									
					}
					else
					{
						echo "<script>window.alert('Invalid Credentials!!')
							  window.location.href='login.php?lid=7'</script>";
					}
                }
?>
