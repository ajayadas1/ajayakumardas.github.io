<?php
	$item_id = $_GET['id'];
	include 'includes/common.php';
	$conn=mysqli_connect('localhost','root','','store');
	$sql="insert into users_items(user_id, item_id, status) values('$user_id', '$item_id', 'Added to cart')";
	$result=mysqli_query($conn,$sql);
	header('Location:products.php');
?>