<?php
session_start();
$connect = mysqli_connect("127.0.0.1",root,"","MPIT_FINAL");

$query = "SELECT * FROM User WHERE Login='{$_POST["login"]}' and PassWord='{$_POST["pass"]}' ";

$result = mysqli_query($connect, $query);

$bad = '1';

$num = mysqli_num_rows($result);
	if($num != null){
		$stroka = $result->fetch_assoc();
		$_SESSION['id'] = $stroka['id'];
		header("Location: index.php");
	} else {
		header("Location: SignIn.php? bad=".$bad);
	}
 ?>