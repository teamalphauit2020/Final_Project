<?php
session_start();
if($_SESSION['login']==0)
{
?>
						<script type="text/javascript">location.href = 'login.php';</script>
<?php

}
	$conn = mysqli_connect("localhost","root","");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
    mysqli_select_db($conn,"ita");
    
		$username =$_SESSION["user"];
		$email = $_SESSION["email"];
		$pid =  $_SESSION['pid'];
		$pname = $_SESSION['pname'];
		$price = $_SESSION["price"];
		$quantity = $_SESSION['quantity'];
		$total = $_SESSION['tprice'];
		$address = $_SESSION['uaddress'];
		$date = date("Y-m-d");
		$sql = "insert into orders (username, email, pid, pname, price, quantity, total, address, date) values 
								  	('$username', '$email', '$pid', '$pname', '$price', '$quantity', '$total', '$address', '$date')";
		if (mysqli_query($conn, $sql))
		{
			
			echo "<script>window.alert('Order placed successfully!!')
			window.location.href='index.php'</script>";
		}
		else
		{
			
			echo "<script>window.alert('Could not place order')
			windo.location.href='index.php'</script>";
		}
	
?>