<?php 
 exec("/var/www/html/Project/hari_last/danushEdit/env/bin/python3.8 rate.py 2>&1 userReview.txt",$output);

$rating=""; 
 foreach($output as $row){
   $rating = $row;
   echo $row;
   
 }
   


// print_r($rating);

?>