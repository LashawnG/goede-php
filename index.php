<?php
	date_default_timezone_set('CET');
	$hour = date("h:i");


	if ($hour < 6){
		$class = "nacht";
		$bg = "backgrounds/night.png";
	}
	if ($hour >=6 && $hour <12) {
		$class = "morgen";
		$bg = "backgrounds/morning.png";
	}
	if ($hour >=12 && $hour <18) {
		$class = "middag";
		$bg = "backgrounds/afternoon.png";
	}
	if ($hour >= 18) {
		$class = "avond";
		$bg = "evening/afternoon.png";
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Het is nu: <?=$hour?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">

</head>
<body background="<?=$bg?>" class="<?=$class?>">
<h1>Goede<?=$class?></h1>
<h1>Het is nu <?=$hour?></h1>
</body>
</html>


















