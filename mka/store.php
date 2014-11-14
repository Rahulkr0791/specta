<?php

if(isset($_POST['email']) && isset($_POST['feedback']))
{
	$email = $_POST['email'];
	$feedback = $_POST['feedback'];

	$con=mysqli_connect("localhost","spectam","spectadb","spectadb");

	// Check connection
	if (mysqli_connect_errno())
	{
	       echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$sql="INSERT INTO `feedback` VALUES (' ',
                                                                        '".$email."',
                                                                        '".$feedback."')";
	if (!mysqli_query($con,$sql))
	{
		die('Error: ' . mysqli_error($con));
	}
	
	mysqli_close($con);

	
	echo 'Thank you for your feedback!';

}
else if(isset($_POST['down']))
{
        $email = $_POST['down'];

	$con=mysqli_connect("localhost","spectam","spectadb","spectadb");

	// Check connection
	if (mysqli_connect_errno())
	{
	       echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$sql="INSERT INTO `downloads` VALUES (' ',
                                                                        '".$email."',
                                                                        '".time()."')";
	if (!mysqli_query($con,$sql))
	{
		die('Error: ' . mysqli_error($con));
	}
	
	mysqli_close($con);

}



 ?>