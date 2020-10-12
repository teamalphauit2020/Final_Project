<?php
	session_start();
	$rid = $_GET['rid'];
	echo $rid;
	$conn = mysqli_connect("localhost","root","");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$conn = mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"ita");
	$sql = "delete from reviews where rid=$rid";
	$result = $conn->query($sql);
	echo mysqli_affected_rows($conn);
    if (mysqli_affected_rows($conn)==1) 
    {
			echo ("<SCRIPT LANGUAGE='JavaScript'>
				window.alert('Review removed successfully!!')
				window.location.href='fake_product_reviews.php'
				</SCRIPT>");
	}
	else
	{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
			window.alert('Deletion Error!!')
			window.location.href='fake_product_reviews.php'
			</SCRIPT>");
	}
?>
