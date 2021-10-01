<?php include 'includes/common.php';
	$conn=mysqli_connect('localhost','root','','store');
	$email = mysqli_real_escape_string($con, $_POST['email']);
	$pass = mysqli_real_escape_string($con, $_POST['pass']);
	$sql="select id and email from users where email='$email' and password='$pass'";
	$result=mysqli_query($conn,$sql);
	if mysqli_num_rows($result)==0
		echo 'then there is no user with the email and password in the users table';
	else
	{
		$row=mysqli_fetch_assoc($result);
		$user_id=$row['id'];
		$email=$row['email'];
		if (isset($_SESSION['email']) || isset($_SESSION['user_id'])) 
	    {
	        header('location: products.php');
	    }		
	}
