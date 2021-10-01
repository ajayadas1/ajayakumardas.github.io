<?php 
	include'includes/common.php';
	if (!isset($_SESSION['email']) || !isset($_SESSION['user_id']))
	{
		header('location: index.php');
	}
	if (isset($_SESSION['email']) || isset($_SESSION['user_id']))
	{
		$user_id=$_SESSION['user_id'];
	}
	$conn=mysqli_connect('localhost','root','','store');
	$sql1="select item_id from users_items where users_items.user_id='$user_id'";
	$result=mysqli_query($conn,$sql1);
	$sql="select name,price from items inner join $result on items.id = $result.item_id";
	$result1=mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<title>CART</title>
		<link rel="stylesheet" type="text/css" href="css/cart.css"/>
	</head>
	<body>
		<div class="header">
			<div class="inner-header">
				<div class="logo">
					<a href="index.html"> Lifestyle Store </a>
				</div>
				<div class="headder-link">
					 <a href="cart.html"> <span class="glyphicon glyphicon-shopping-cart"> </span> cart </a>
					 <a href="setting.html"> <span class="glyphicon glyphicon-cog"> </span> setting </a>
					 <a href="logout.html"> <span class="glyphicon glyphicon-log-out"> </span> logout </a>
			    </div>	
			</div>
		</div>
		<div class="content" >

			<table class="table table-bordered table-dark">
				<thead>
					<tr>
						<th scope="col"> Item Name   </th>
						<th scope="col"> Item Number </th>
						<th scope="col"> Price       </th>
						<th scope="col">             </th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row"> 1 </th>
						<td>  </td>
						<td>  </td>
						<td>  </td>
					</tr>
					<tr>
						<th scope="row"> 2 </th>
						<td>       </td>
						<td> </td>
						<td></td>
					</tr>
					<tr>
						<th scope="row"> 3 </th>
						<td>  </td>
						<td> Total </td>
						<td> 	 <button type="submit" class="btn btn-primary btn-block"> Confirm Order   </button></td>	 
					</tr>
				</tbody>
			</table>
		
		</div>
		<div class="footer">
			 <div class="container">
				<h3> Copyright lifeStyleStore.All Rights Reserved|contact Us: +91 7750864762,+91 7750956900</h3>
			</div>
		</div>		