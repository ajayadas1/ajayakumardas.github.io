	check_if_added_to_cart($item_id)
	{
		<?php
		if(isset($_SESSION['user_id']))
		{
			$user_id=$_SESSION['user_id'];
		}
		$conn=mysqli_connect('localhost','root','','store');
		$sql="select * from users_items where user_id='$user_id' and item_id='$item_id' and status='Added to cart'";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>=1)
		{
			return 1;
		}
		else
		{
			return 0;
		}
		?>
	}
