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
		<?php
			echo $_SESSION["decCoffee"] . " coffee for..." . $_SESSION["strName"] ."<br>";
			echo "Order total is $" . $_SESSION["decOrderTotal"]
		?>
		<a href ="http://itd1.cincinnatistate.edu/WAPP1-PumaM/Content/week06/coffee/index.html">
			<p>Order again...</p>
		</a>
	</body>
</html>
