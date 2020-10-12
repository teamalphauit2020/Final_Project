<?php 
	session_start();

	$conn = mysqli_connect("localhost","root","");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
    mysqli_select_db($conn,"ita");
    $pid=$_SESSION['pid'];
    
	if(isset($_POST['submit']))
	{
		$sql="select * from products where pid= $pid";
        $result = $conn->query($sql);
        $row = mysqli_fetch_assoc($result);
        if($row)
        {
           $pname=$row['pname'];
        }
        $username=$_SESSION['uname'];
        $email=$_SESSION['email'];
        $review=$_POST['review'];
        $ip="localhost"	;
	
                //$sql="insert into reviews values(NULL,$pid, $pname,$username,$email,$review,$ip);";
                $sql1="INSERT INTO `reviews` (rid, pid, pname, username, email, review, ip) VALUES (NULL, '$pid', '$pname', '$username', '$email', '$review', '$ip');";
                $result1 = $conn->query($sql1);
                
                 $sql2 = "select review from reviews where pid='$pid'";
                $result2 = $conn->query($sql2);
                $treview=" ";
                 while($row2 = mysqli_fetch_assoc($result2)){
                     $treview = $treview." ".$row2['review'];
            
            }
               if($result1)
                {
                    
                    echo "<script>alert('Record inserted successfully');
    window.location.href='admin-rate-confirm.php?pid=$pid&treview=$treview';
                     </script>";

                   
                   
    
                }
          
		       else
		        {
			    echo "<script>window.alert('Could not submit review')
			      window.location.href='review_products.php'</script>";
        }
        
	}
?>