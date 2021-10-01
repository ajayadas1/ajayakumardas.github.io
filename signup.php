<?php
	include 'includes/common.php';
	if (isset($_SESSION['email']) || isset($_SESSION['user_id'])) 
    {
        header('location: products.php');
    }
	$conn=mysqli_connect('localhost','root','','store');
	if(isset($_GET['name']) && isset($_GET['email']) && isset($_GET['number']) && isset($_GET['city'])&& isset($_GET['add']) && isset($_GET['pass'])){
	$name=$_GET['name'];
	$email=$_GET['email'];
	$number=$_GET['number'];
	$city=$_GET['city'];
	$add=$_GET['add'];
	$pass=$_GET['pass'];

	$sql="insert into users(name,email,password,contact,city,address) values('$name','$email','$pass','$number','$city','$add')";
	$result=mysqli_query($conn,$sql);
	if($result){
			echo 'users inserted successfully signin to continue';
	}
	else{
		echo 'Some error occured';
	}
	}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<title>signup</title> 
		<link rel="stylesheet" type="text/css" href="css/signup.css"/>
	</head>
	<body>
		<div class="header">
			<div class="inner-header">
				<div class="logo">
					<a href="index.php">  <span class="glyphicon glyphicon-home"> </span> HOME </a>
				</div>	
		    </div>				    	 
		 </div>  
		<div class="signup-form">
    		<form action="signup.php" onsubmit="return validate(); id="form">
				<h2>Sign Up</h2>
	      		<p style="text-decoration-color: blue;">please fill in this form to create an account!</p>
				<hr>
        			<div class="form-group">
						<input type="text" class="form-control" name="name" placeholder="Enter Your Full Name" id="nameText">
						<span id="nameError" style="color: red;display: none;margin-left: 5px">Name must not empty</span><br>      	
        			</div>
					<div class="form-group">
					    <input type="text" class="form-control" name="email" placeholder="Email" id="emailText">
					    <span id="userError" style="color: red; display: none; margin-left: 5px">Email id must not empty</span><br>
					</div>
					<div class="form-group">
					    <input type="number" class="form-control" name="number" placeholder="contact Number" id="numText">
					    <span id="numError" style="color: red; display: none; margin-left: 5px">Number must not empty</span><br>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="city" placeholder="City" id="cityText"> 
						<span id="cityError" style="color: red;display: none;margin-left: 5px">City must not empty</span><br>     	
        			</div>
        			<div class="form-group">
						<input type="text" class="form-control" name="add" placeholder="Address" id="addText">
						<span id="addError" style="color: red;display: none;margin-left: 5px">Address must not empty</span><br>      	
        			</div>
					<div class="form-group">
					    <input type="password" class="form-control" name="pass" placeholder="Password" id="passText">
					    <span id="passError" style="color: red;display: none;margin-left: 5px">Password must not empty</span><br>
					</div>
					<div class="form-group">
					    <input type="password" class="form-control" name="pass1" placeholder="Confirm Password" id="pass1Text">
					    <span id="pass1Error" style="color: red;display: none;margin-left: 5px">Password does not match</span>
					</div>        
					<div class="form-group">
						<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
					</div>
					<div class="form-group">
					    <input type="submit" class="btn btn-primary btn-lg" name="insert" value="Sign Up">
					</div>
    		</form>
					<div class="hint-text">Already have an account? <a href="signin.php">Login here</a></div>
							
		</div>
		<?php include 'includes/footer.php';?>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript">
			$(document).ready(function()
			{
				$('#form').submit(function()
				{
					if($('#nameText').val()=='')
					{
						$('#nameError').show();
						$('#nameText').focus();
						return false;
					}
					nameError.style.display='none';
					var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
					if(reg.test($('#emailText').val())==false)
					{
						userError.innerHTML='invalid Email';
						$('#userError').show();
						$('#emailText').focus();
						return false;
					}
					userError.style.display='none';
					if($('#numText').val()=='')
					{
						$('#numError').show();
						$('#numText').focus();
						return false;
					}
					numError.style.display='none';
					var pho= /^\d{10}$/;
					if(pho.test($('#numText').val())==false)
					{
						numError.innerHTML='invalid Phone number';
						$('#numError').show();
						$('#numText').focus();
						return false;
					}
					numError.style.display='none';
					if($('#cityText').val()=='')
					{
						$('#cityError').show();
						$('#cityText').focus();
						return false;
					}
					cityError.style.display='none';
					if($('#addText').val()=='')
					{
						$('#addError').show();
						$('#addText').focus();
						return false;
					}
					addError.style.display='none';
					if($('#passText').val()=='')
					{
						$('#passError').show();
						$('#passText').focus();
						return false;
					}

					passError.style.display='none';
					if($('#passText').val().length<9)
					{
						$('#passError').html('Password must not be less than 9');
						$('#passError').show();
						$('#passText').focus();
						return false;
					}
					if($('#passText').val()!==$('#pass1Text').val())
					{
						$('#pass1Error').show();
						$('#pass1Text').focus();
						return false;
					}
					pass1Error.style.display='none';
					return true;
				});
			});
		</script>
	</body>
</html>                          