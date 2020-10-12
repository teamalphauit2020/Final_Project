<?php 
	$pid = $_GET['pid'];
	$treview = $_GET['treview'];

	$myfile = fopen("userReview.txt", "w") or die("Unable to open file!");
	$txt = $treview;

	fwrite($myfile, $txt."\n");
	fclose($myfile);
	
	exec("/var/www/html/Project/hari_last/danushEdit/env/bin/python3.8 rate.py 2>&1 userReview.txt",$output);

	$rating=[]; 
	 foreach($output as $row){
       $rating = $row;
	 }
	   
	
	
  print_r($rating);
	
	$conn = mysqli_connect("localhost","root","");
	mysqli_select_db($conn,"ita");
	$sql = "update products set ratings='$rating' where pid='$pid'";
	
	if($conn->query($sql)){
		echo "<script>
				window.alert('Product rating updated!!')
				window.location.href='review_products.php'
				</script>";}
		else
			echo($conn->error);
	

?>