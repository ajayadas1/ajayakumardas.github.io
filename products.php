<?php include 'includes/common.php';?>
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
			<title>Products</title>
		<link rel="stylesheet" type="text/css" href="css/products.css"/>
	</head>
	<body>
		<!---<div class="header">
			<div class="inner-header">
				<div class="logo">
					<a href="index.php"> Lifestyle Store </a>
				</div>
				<div class="headder-link">
					 <a href="cart.php"> <span class="glyphicon glyphicon-shopping-cart"> </span> cart </a>
					 <a href="setting.php"> <span class="glyphicon glyphicon-cog"> </span> setting </a>
					 <a href="logout.php"> <span class="glyphicon glyphicon-log-out"> </span> logout </a>
			    </div>	
			</div>
		</div>
		-->
		<?php
			include'includes/header.php';
			include'includes/check-if-added.php';
		?>
		<div class="content">			
			<div class="banner-image">
			<div class="container">
				<div class="jumbotron">
					<h1> Wellcome to our LifeStyle Store </h1>
					<p> We have the best cameras,watches,shirts for you.No need to hunt around,We have all this in one place </p>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="thubmnail">
							<div class="items">
								<img src="img/1.jpg" alt="camera" class="img-responsive">
								<div class="caption">
									<h2>3000</h2>
									<!---<a href="cart.html"><input type="submit" value="Add to Cart"></input></a>-->
									<?php 
									if (!isset($_SESSION['email']))
										{ 
											?>
											<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
											<?php
										}
										else 
										{
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(1))//This is same as if(check_if_added_to_cart !=0)
											{
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											}
											else
											{
												?>
												<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
												<?php
											}
										}
									?>
						   		 </div>	
					   		 </div>
						</div>	
					</div>	
					<div class="col-md-3 col-sm-6">
						<div class="thubmnail">
							<div class="items">
								<img src="img/2.jpg" alt="camera" class="img-responsive">
								<div class="caption">
									<h2>3000</h2>
									<!--<a href="cart.html"><input type="submit" value="Add to Cart"></input></a>-->
									<?php 
									if (!isset($_SESSION['email']))
										{ 
											?>
											<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
											<?php
										}
										else 
										{
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(2))//This is same as if(check_if_added_to_cart !=0)
											{
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											}
											else
											{
												?>
												<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
												<?php
											}
										}
									?>
						   		 </div>	
					   		 </div>
						</div>	
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="thubmnail">
							<div class="items">
								<img src="img/3.jpg" alt="camera" class="img-responsive">
								<div class="caption">
									<h2>3000</h2>
									<!--<a href="cart.html"><input type="submit" value="Add to Cart"></input></a>-->
									<?php 
									if (!isset($_SESSION['email']))
										{ 
											?>
											<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
											<?php
										}
										else 
										{
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(3))//This is same as if(check_if_added_to_cart !=0)
											{
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											}
											else
											{
												?>
												<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
												<?php
											}
										}
									?>
						   		 </div>	
					   		 </div>
						</div>	
					</div>	
					<div class="col-md-3 col-sm-6">
						<div class="thubmnail">
							<div class="items">
								<img src="img/4.jpg" alt="camera" class="img-responsive">
								<div class="caption">
									<h2>3000</h2>
									<!--<a href="cart.html"><input type="submit" value="Add to Cart"></input></a>-->
									<?php 
									if (!isset($_SESSION['email']))
										{ 
											?>
											<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
											<?php
										}
										else 
										{
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(4))//This is same as if(check_if_added_to_cart !=0)
											{
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											}
											else
											{
												?>
												<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
												<?php
											}
										}
									?>
						   		 </div>	
					   		 </div>
						</div>	
					</div>		
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="thubmnail">
							<div class="items">
								<img src="img/5.jpg" alt="camera" class="img-responsive">
								<div class="caption">
									<h2>3000</h2>
									<!--<a href="cart.html"><input type="submit" value="Add to Cart"></input></a>-->
									<?php 
									if (!isset($_SESSION['email']))
										{ 
											?>
											<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
											<?php
										}
										else 
										{
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(5))//This is same as if(check_if_added_to_cart !=0)
											{
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											}
											else
											{
												?>
												<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
												<?php
											}
										}
									?>
						   		 </div>	
					   		 </div>
						</div>	
					</div>	
					<div class="col-md-3 col-sm-6">
						<div class="thubmnail">
							<div class="items">
								<img src="img/6.jpg" alt="camera" class="img-responsive">
								<div class="caption">
									<h2>3000</h2>
									<!--<a href="cart.html"><input type="submit" value="Add to Cart"></input></a>-->
									<?php 
									if (!isset($_SESSION['email']))
										{ 
											?>
											<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
											<?php
										}
										else 
										{
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(6))//This is same as if(check_if_added_to_cart !=0)
											{
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											}
											else
											{
												?>
												<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
												<?php
											}
										}
									?>
						   		 </div>	
					   		 </div>
						</div>	
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="thubmnail">
							<div class="items">
								<img src="img/7.jpg" alt="camera" class="img-responsive">
								<div class="caption">
									<h2>3000</h2>
									<!--<a href="cart.html"><input type="submit" value="Add to Cart"></input></a>-->
									<?php 
									if (!isset($_SESSION['email']))
										{ 
											?>
											<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
											<?php
										}
										else 
										{
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(7))//This is same as if(check_if_added_to_cart !=0)
											{
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											}
											else
											{
												?>
												<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
												<?php
											}
										}
									?>
						   		 </div>	
					   		 </div>
						</div>	
					</div>	
					<div class="col-md-3 col-sm-6">
						<div class="thubmnail">
							<div class="items">
								<img src="img/8.jpg" alt="camera" class="img-responsive">
								<div class="caption">
									<h2>3000</h2>
									<!--<a href="cart.html"><input type="submit" value="Add to Cart"></input></a>-->
									<?php 
									if (!isset($_SESSION['email']))
										{ 
											?>
											<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
											<?php
										}
										else 
										{
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(8))//This is same as if(check_if_added_to_cart !=0)
											{
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											}
											else
											{
												?>
												<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
												<?php
											}
										}
									?>
						   		 </div>	
					   		 </div>
						</div>	
					</div>		
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-6">
						<div class="thubmnail">
							<div class="items">
								<img src="img/9.jpg" alt="camera" class="img-responsive">
								<div class="caption">
									<h2>3000</h2>
									<!--<a href="cart.html"><input type="submit" value="Add to Cart"></input></a>-->
									<?php 
									if (!isset($_SESSION['email']))
										{ 
											?>
											<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
											<?php
										}
										else 
										{
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(9))//This is same as if(check_if_added_to_cart !=0)
											{
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											}
											else
											{
												?>
												<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
												<?php
											}
										}
									?>
						   		 </div>	
					   		 </div>
						</div>	
					</div>	
					<div class="col-md-3 col-sm-6">
						<div class="thubmnail">
							<div class="items">
								<img src="img/10.jpg" alt="camera" class="img-responsive">
								<div class="caption">
									<h2>3000</h2>
									<!--<a href="cart.html"><input type="submit" value="Add to Cart"></input></a>-->
									<?php 
									if (!isset($_SESSION['email']))
										{ 
											?>
											<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
											<?php
										}
										else 
										{
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(10))//This is same as if(check_if_added_to_cart !=0)
											{
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											}
											else
											{
												?>
												<a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
												<?php
											}
										}
									?>
						   		 </div>	
					   		 </div>
						</div>	
					</div>
					<div class="col-md-3 col-sm-6">
						<div class="thubmnail">
							<div class="items">
								<img src="img/11.jpg" alt="camera" class="img-responsive">
								<div class="caption">
									<h2>3000</h2>
									<!--<a href="cart.html"><input type="submit" value="Add to Cart"></input></a>-->
									<?php 
									if (!isset($_SESSION['email']))
										{ 
											?>
											<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
											<?php
										}
										else 
										{
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(11))//This is same as if(check_if_added_to_cart !=0)
											{
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											}
											else
											{
												?>
												<a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
												<?php
											}
										}
									?>
						   		 </div>	
					   		 </div>
						</div>	
					</div>	
					<div class="col-md-3 col-sm-6">
						<div class="thubmnail">
							<div class="items">
								<img src="img/12.jpg" alt="camera" class="img-responsive">
								<div class="caption">
									<h2>3000</h2>
									<!--<a href="cart.html"><input type="submit" value="Add to Cart"></input></a>-->
									<?php 
									if (!isset($_SESSION['email']))
										{ 
											?>
											<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
											<?php
										}
										else 
										{
											//We have created a function to check whether this particular product is added to cart or not.
											if (check_if_added_to_cart(12))//This is same as if(check_if_added_to_cart !=0)
											{
												echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
											}
											else
											{
												?>
												<a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
												<?php
											}
										}
									?>
						   		 </div>	
					   		 </div>
						</div>	
					</div>		
				</div>
			</div>
			</div>
		</div>
		<div class="footer">
			 <div class="container">
				<h3> Copyright lifeStyleStore.All Rights Reserved|contact Us: +91 7750864762,+91 7750956900</h3>
			</div>
		</div>				
	</body>
</html>