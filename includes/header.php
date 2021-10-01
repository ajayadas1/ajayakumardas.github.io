<div class="header">
	<div class="inner-header">
		<div class="logo">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">Lifestyle Store</a>
		</div>
		<div class="headder-link" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
				<?php
				if (isset($_SESSION['email'])) {
				?>
				<li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping- cart"></span> Cart </a></li>
				<li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
				<li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log- in"></span> Logout</a></li>
				<?php
				}
				else {
				?>
				<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
				<li><a href="signin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				<?php
				}
				?>
			</ul>
		</div>
	</div>
</div>