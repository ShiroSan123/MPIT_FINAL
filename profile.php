<?php
	session_start();
	$connect = mysqli_connect("127.0.0.1",root,"","MPIT_FINAL");
	$id = $_SESSION['id'];

	$query = "SELECT * FROM User WHERE id = $id ";

	$result = mysqli_query($connect, $query);

	$stroka = $result->fetch_assoc();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<h1><?php echo $stroka['SurName'] ." ".$stroka['Name'] ?></h1>
</body>
</html>