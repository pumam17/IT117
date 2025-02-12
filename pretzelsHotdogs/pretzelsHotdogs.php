<html>
	<head>
		<title>pretzelsHotdogs</title>
		<meta charset=utf-8>
		<!--
		Name: Mitch Puma
		Class: IT-117-001
		Abstract: pretzelsHotdogs PHP file 
		Date:
		-->
	</head>
	<body>
		Name: Mitch Puma <br>
		Class:  IT-117-001 <br>
		Abstract: pretzelsHotdogs PHP file<br>
		<?php
		$strName = "";
		$decTotalPretzels = 0;
		$decTotalHotdogs = 0;
		$decPretzelCost = 0;
		$decHotdogCost =0;
		$decPretzelAndHotdogTotalCost = 0;
		
		
		$strName = $_POST["txtName"];
		$decTotalPretzels = $_POST["txtPretzels"];
		$decTotalHotdogs = $_POST["txtHotdogs"];
		
		$decPretzelCost = $decTotalPretzels * 1;
		$decHotdogCost = $decTotalHotdogs * 2;
		$decPretzelAndHotdogTotalCost = $decPretzelCost + $decHotdogCost;
		
		?>
		
		Name: <?php echo $strName;?><br>
		Food order total: <?php echo $decPretzelAndHotdogTotalCost;?>
	</body>
</html>