<html>
<head>
	<title> Login - Highest Good Network </title>
	<link href="styles/index.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300,100' rel='stylesheet' type='text/css'>
</head>

<body>
	<a href="http://www.onecommunityglobal.org" target="_blank"> <img src="img/Logo.jpg"> </a>

	<!-- LOGO AQUI -->

	<section class="main">
			<form class="form-1" action="loginAuth.php" method="POST">
				<p class="field">
					<input type="text" name="username" placeholder="Username">
				<i class="icon-user icon-large"></i>
			</p>
			<p class="field">
				<input type="password" name="password" placeholder="Password">
				<i class="icon-lock icon-large"></i>
			</p>
			<p class="submit">
				<button type="submit" name="submit"><i class="icon-arrow-right icon-large"></i></button>
			</p>

		<h2><a href="forgotPassword.php" class="forgot"> Forgot your password? </a></h2>
		</form>
	</section>

</body>
</html>