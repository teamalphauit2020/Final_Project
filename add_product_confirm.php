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
		
		$file =$_FILES['file'];
        $fileTmpName=$_FILES['file']['tmp_name'];
        $filename=$_FILES['file']['name'];
		$category = $_POST["category"];
		$pid = $_POST["pid"];
		$pname = $_POST["pname"];
		$price = $_POST["price"];
		$info = $_POST["info"];
		$image=$_FILES['file']['name'];	
		$check = "select * from products where pid = '$pid' or pname = '$pname'";
        $res = $conn->query($check);
        $result=mysqli_num_rows($res);
		if ($result)
		{
			echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Product Already Exists!!')
					window.location.href='add_products.php'
					</SCRIPT>");
		}
		else
		{

			$sql = "insert into products(category,pid,pname,price,image,info,ratings) values ('$category','$pid','$pname','$price','$image','$info','0')";
			if (mysqli_query($conn, $sql))
			{
                
                switch ($category) {
                    case 1:
                        //Men
                        $fileDestination='images/Men/'.$filename;
                move_uploaded_file($fileTmpName, $fileDestination);
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Product uploaded Successfully')
                window.location.href='add_products.php'
                </SCRIPT>");
                        break;
                    case 2:
                        //Women
                        $fileDestination='images/woman/'.$filename;
                move_uploaded_file($fileTmpName, $fileDestination);
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Product uploaded Successfully')
                window.location.href='add_products.php'
                </SCRIPT>");
                        break;
                    case 3:
                        //Books
                        $fileDestination='images/Books/'.$filename;
                move_uploaded_file($fileTmpName, $fileDestination);
                echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Product uploaded Successfully')
                window.location.href='add_products.php'
                </SCRIPT>");
                        break;
                        case 4:
                            //Gadgets
                            $fileDestination='images/gadgets/'.$filename;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    echo ("<SCRIPT LANGUAGE='JavaScript'>
                    window.alert('Product uploaded Successfully')
                    window.location.href='add_products.php'
                    </SCRIPT>");
                            break;
                            case 5:
                                //Sports
                                $fileDestination='images/sports/'.$filename;
                        move_uploaded_file($fileTmpName, $fileDestination);
                        echo ("<SCRIPT LANGUAGE='JavaScript'>
                        window.alert('Product uploaded Successfully')
                        window.location.href='add_products.php'
                        </SCRIPT>");
                                break;
                    default:
                    echo ("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Invalid product Category!!')
					window.location.href='add_products.php'
					</SCRIPT>");
                }}
                else
                    echo "failure";
				

	
			
	
			
		}


	}

?>