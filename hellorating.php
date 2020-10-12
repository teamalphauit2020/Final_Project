<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Convert Data from Mysql to JSON Format using PHP</title>  
      </head>  
      <body> 
           <?php 
			
           $connect = mysqli_connect("localhost", "root", "", "ita");  
		   
           $sql = "SELECT * FROM reviews";  
           $result = mysqli_query($connect, $sql);  
           $json_array = array();  
           while($row = mysqli_fetch_assoc($result))  
           {  
                $json_array[] = $row;  
           }  
           $fp = fopen('product.json', 'w');
           fwrite($fp, json_encode($json_array));
           fclose($fp);
           
           ?>  
      </body>  
 </html>