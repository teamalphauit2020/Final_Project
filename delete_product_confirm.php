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
		
	
		$category = $_POST["category"];
		$pid = $_POST["pid"];
		$pname = $_POST["pname"];
	
		$check = "select * from products where pid = '$pid' or pname = '$pname'";
		$res = $conn->query($check);
		if (!(mysqli_num_rows($res) > 0))
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Product Not Exists!!')
					window.location.href='add_products.php'
					</SCRIPT>");
		}
		else
		{

	    $sql = "delete from products where pid='$pid' or pname = '$pname'";
			if (mysqli_query($conn, $sql))
			{
        echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Product Deleted!!')
					window.location.href='delete_products.php'
					</SCRIPT>");	
			}
		}


	}

?>