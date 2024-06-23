<?php
require_once("db.php");
$number=$_POST['number'];
if(empty($number)){
    echo "Заполните свой номер телефона";
}
$sql = "SELECT id FROM `Clients` WHERE (phoneNumber=$number)";
$result = $conn -> query($sql);
if($result)






?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>СеткаИжевск</title>
	<link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Merriweather:300,400,400i,700&amp;subset=cyrillic-ext" rel="stylesheet">
</head>

<body>

	<header class="header">
		<div class="container text-center">
			<img class="logo" src="img/logo/Logo.jpg" width="92" alt="Все виды сеток">
			<div class="site-title">Доставка сетки</div>
			<p class="lead">Быстро и надёжно</p>
		</div>
	</header>

	

</body>
</html>
