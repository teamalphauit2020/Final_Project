<?php

	exec("C:/Users/Hari/AppData/Local/Programs/Python/Python38-32/python.exe C:/wamp64/www/danushEdit/rate.py 2>&1 userReview.txt",$output);
	foreach($output as $row){
      	 $rating = $row;
      	 print_r($rating);
      	 }
	 print_r($rating);
	 
	 print_r("hi");
	


?>