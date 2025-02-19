<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>coffee website</title>
		<meta charset=utf-8>
		<!--
		Name: Mitch Puma
		Class: IT-117-001
		Abstract: coffee website 
		Date: 2/18/25
		-->
	</head>
	<body>
		Name: Mitch Puma <br>
		Class:  IT-117-001 <br>
		Abstract: coffee website<br>
		<p>processing order...</p> 
		<br>
		<?php
			$_SESSION["strName"] = "";
			$_SESSION["decCoffee"] = 0;
			$_SESSION["decOrderTotal"] = 0;

			$_SESSION["strName"] = $_POST["txtName"];
			$_SESSION["decCoffee"] = $_POST["txtCoffee"];
			$_SESSION["decOrderTotal"] = $_SESSION["decCoffee"] * 2;
		?>
		<a href ="http://itd1.cincinnatistate.edu/WAPP1-PumaM/Content/week06/coffee/coffeeOrderView.php">
			<p>Next Page</p>
		</a>
	</body>
</html>
