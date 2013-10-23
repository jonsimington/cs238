<footer><div class="container_12">
	<div class="grid_12" style="width: 60%; float:left;">

	 <p>Site &copy; 2013 Andrew Siebert, Jon Simington, Wayne Viers</p> <p>Site Designed by <a href="www.phoenixwebcreations.com">Phoenix Web Creations</a></p>

	</div>
	<div class="grid_12" style="width: 20%; float: right;">
		<?php 
	if( !isset($_SESSION['log']) || ($_SESSION['log'] != 'in') ){
		echo'<form method="post" action="register.php">
<button type="submit" name="go">Register</button></form>
		<form method="post" action="login.php" style="float:center;">
		<button type="submit">Login</button></form>';
		}
		else{
		echo'<form method="post" action="index.php?log=out" style="float:center;">
		<button type="submit" name="go">Logout</button></form>';
		}
		?>
</footer>