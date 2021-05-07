<?php
$connect = mysqli_connect("127.0.0.1",root,"","MPIT_FINAL");
$ide = 1;
$ide2 = 2;
$log = 1;
$gol = 1;
$god = 1;
if(isset($_POST["register"])){
	
	if(!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['email']) && !empty($_POST['login']) && !empty($_POST['pass'])) {
    $surname = $_POST['surname'];
    $name = $_POST['name'];
	$email = $_POST['email'];
	$login = $_POST['login'];
 	$pass = $_POST['pass'];
    $query = "SELECT * FROM user WHERE Login='".$login."'";
    $result = mysqli_query($connect, $query);
    $numrows = mysqli_num_rows($result);
    if($numrows==0)
    {
		$sql = "INSERT INTO user
    	(SurName,Name,Email,Login,PassWord)
		VALUES('$surname','$name','$email', '$login', '$pass')";
    	$result = mysqli_query($connect, $sql);
    if($result){
		header("Location: RegAndSign.php? ide=".$ide2."&log=".$log);
    } else {
    	header("Location: RegAndSign.php? ide=".$ide."&log=".$god);
    }
	 } else {
	 	header("Location: RegAndSign.php? ide=".$ide."&log=".$log);
     }
	 } else {
	 	header("Location: RegAndSign.php? ide=".$ide."&gol=".$gol);
	 }
	}
?>