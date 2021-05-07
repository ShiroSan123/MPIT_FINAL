<?php 
	session_start();
	$connect = mysqli_connect("127.0.0.1",root,"","MPIT_FINAL");
	$id = $_SESSION['id'];

	$query = "SELECT * FROM User WHERE id = $id ";
	$result = mysqli_query($connect, $query);

 ?>
<!DOCTYPE html>
<html lang=ru>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/Style2.css">
	<style type="text/css">
		
	</style>
</head>
<body>
	<!-- Шапка сайта (Header) -->
	<!-- Banner -->
	<div class="col-12 border border-dark text-center" style="height: 60vh;  background-image: url(assets/img/Banner.jpg); background-size: 100%">
		<div class="col-12" style="height: 6vh">
			<div class="d-flex pl-0 pr-0 col-10 mx-auto" >
				<div class="col-1" style="height: 6vh"><h3 style="margin-top: 0.8vh" class="text-light">Lifestyle</h3></div>
				<div class="col-8" style="height: 6vh"></div>
				<div class="col-3 d-flex" style="height: 6vh">
					<?php if ($_SESSION['id'] != 0) { 
						$result = mysqli_query($connect, $query);
						$stroka = $result->fetch_assoc();
						?>
					<div class="dropdown ml-auto" style="margin-top: -1.4vh">
					<button class="dropbtn btn rounded-pill text-dark" style="background: none; height: 4vh; margin-left: auto; font-size: 1vw;"><?php echo $stroka['SurName']." ".$stroka['Name']?></button>
					    <div class="dropdown-content">
						    <a href="main.php" style="font-size: 2vh">Главная</a>
						    <a href="profile.php" style="font-size: 2vh">Профиль</a>
						    <a href="LogOut.php" style="font-size: 2vh">Выход</a>
						</div>
					</div>
					<?php } else {?>
					<a href="#zatemLogin" class="btn rounded-pill text-dark" style="background: none; height: 4vh; margin-top: 0.9vh; margin-left: auto; font-size: 1vw;">Sign In</a>
					<a href="#zatemReg" class="btn rounded-pill text-dark" style="background: none; height: 4vh; margin-top: 0.9vh; margin-left: 1vw; font-size: 1vw;">Registration</a>
					<?php } ?>
				</div>
			</div>
		</div>
		<h2 class="col-5 mx-auto text-light" style="font-size: 4vh; margin-top: 5vh">Сервис для установки режима дня</h2>
		<p class="col-5 mx-auto text-light" style="font-size: 3vh">Построй свой жизненный стиль.</p>
		<p class="col-5 mx-auto text-light" style="font-size: 2vh">Готовы здорово жить? Нажмите на кнопку регистарции, для того чтобы получить доступ к сервису</p>
		<a href="#zatemReg" class="btn rounded text-light" style="background: #F76D6D; height: 4vh; margin-top: 0.8vh; margin-left: 1vw; width: 10vw">Registration</a>
	</div>
	<!-- Info -->
	<div style="height: 3vh; background: #d6d6d6" class="col-12">
		
	</div>
	<div class="col-10 mx-auto d-flex pl-0 pr-0">
		<div class="col-6 pl-0 pr-0" style="padding-top: 8vh">
			<div class="col-10 mx-auto pl-0 pr-0">
				<h1 style="font-size: 6vh">Использовать телефон</h1>
				<h4 style="font-size: 3vh">Используйте севрис на телефоне для того чтобы отслеживать движения без фитнес трекера, с помощью GPS.</h4>
			</div>
		</div>
		<div class="col-6 pl-0 pr-0">
			<div class="col-10 mx-auto" style="height: 32vh; margin-top: 7vh">
				<img src="assets/img/Phone.png" class="col-12">
			</div>
		</div>
	</div>
	<div style="height: 3vh; background: #d6d6d6" class="col-12">
		
	</div>
	<div class="col-10 mx-auto d-flex pl-0 pr-0">
		<div class="col-6 pl-0 pr-0">
			<div class="col-10 mx-auto text-center" style="height: 32vh; margin-top: 7vh; padding-top: 3vh">
				<h4 style="font-size: 10vh">Lifestyle</h4>
				<h4 style="font-size: 10vh" class="text-danger">PRO</h4>
			</div>
		</div>
		<div class="col-6 pl-0 pr-0" style="padding-top: 8vh">
			<div class="col-10 mx-auto pl-0 pr-0">
				<h1 style="font-size: 6vh">Расширенная версия</h1>
				<h4 style="font-size: 3vh">Активируйте расширенную версию сервиса для того чтобы получить дополнительный функционал</h4>
			</div>
		</div>
	</div>

	<div class="col-12" style="height: 20vw; background: #F9FAF9; margin-top: 5vw">
		<div class="row col-10 mx-auto pl-0 pr-0" style="padding-top: 2vw">
			<div class="col-3 mx-auto" style="height: 32vh">
				<h1 style="font-size: 2vw">LifeStyle</h1>
				<p style="font-size: 1vw">Yakutsk</p>
				<p style="font-size: 1vw">Russian Federation</p>
				<p style="font-size: 1.2vw">Phone: <span style="font-size: 1vw">+7 965 977 95 32</span></p>
				<p style="font-size: 1.2vw">Email: <span style="font-size: 1vw">renatcrush@index.com</span></p>
			</div>
			<div class="col-2 mx-auto" style="height: 32vh">
				<h1 style="font-size: 2vw">Useful links</h1>
				<p style="font-size: 1vw">Home</p>
				<p style="font-size: 1vw">About us</p>
				<p style="font-size: 1vw">Services</p>
				<p style="font-size: 1vw">Therms of service</p>
				<p style="font-size: 1vw">Privacy policy</p>
			</div>
			<div class="col-2 mx-auto" style="height: 32vh">
				<h1 style="font-size: 2vw">Our services</h1>
				<p style="font-size: 1vw">Web design</p>
				<p style="font-size: 1vw">Web development</p>
				<p style="font-size: 1vw">Product Management</p>
				<p style="font-size: 1vw">Marketing</p>
				<p style="font-size: 1vw">Graphic design</p>
			</div>
			<div class="col-4 mx-auto" style="height: 32vh">
				<h1 style="font-size: 2vw">Subscribe to our newsletter</h1>
				<p style="font-size: 1vw">Receive technology news via email</p>
				<div class="row">
					<input type="" name="" class="form-control rounded-pill col-10" placeholder="" style="height: 5vh; font-size: 1vw">
					<button class="btn bg-primary rounded-pill text-center" style="width: 4.4vw; font-size: 0.8vw; ">Subscribe</button>
				</div>	
			</div>
		</div>
	</div>




	<!-- Модальные окна Регистрации и Авторизации -->
	<div id="zatemReg">
		<div class="col-3 radius mx-auto text-center bg-white shadow rounded" id="Registr" style="padding-bottom: 2vh; padding-top: 2vh; margin-top: 5vh;">
			<div class="row">
				<h3 class="" style="position: absolute; left: 6vw; padding-bottom: 4vh">Зарегестрироваться</h3>
				<a href="#" class="close btn" style="height: 4vh; margin-left: auto; margin-right: 1.5vw">X</a>			
			</div>
	        <form action="RegUser.php" method="post" style="margin-top: 2vh">
	            <input type="text" name="surname" class="form-control radius border-dark col-11 mx-auto" id="surname" placeholder="Фамилия" autocomplete="off">
	            <input type="text" name="name" class="form-control radius border-dark col-11 mx-auto" style="margin-top: 1vh" id="name" placeholder="Имя" autocomplete="off">
	            <input type="text" name="email" class="form-control radius border-dark col-11 mx-auto" style="margin-top: 1vh" id="email" placeholder="Почта" autocomplete="off">
	            <input type="text" name="login" class="form-control radius border-dark col-11 mx-auto" style="margin-top: 1vh" id="login" placeholder="Логин" autocomplete="off">
	            <?php if ($_GET["log"] == 1) { ?>
	                <p class="text-danger" style="font-size: 1vw;">That username already exists! Please try another one!</p>
	            <?php } ?>
	            <input type="password" name="pass" class="form-control radius border-dark mt-3 col-11 mx-auto" id="pass" placeholder="Пароль" autocomplete="off">
	            <?php if ($_GET["gol"] == 1) { ?>
	                <p class="text-danger" style="font-size: 1vw; margin-bottom: -2vh">All fields are required!</p>
	            <?php } ?>
	            <!-- <input type="password" name="repass" class="form-control radius border-dark mt-3 col-11 mx-auto" id="pass" placeholder="Повторите пароль"> -->
	            <button class="btn btn-success rounded-pill" name="register" style="background: #0e0ee3; margin-top: 6vh; width: 9vw">Зарегистрироваться</button><br>
	        </form> 
	        <h5 style="margin-top: 5vh"><a href="#zatemLogin" class="text-dark">Уже есть аккаунт?</a></h5>
	        <h5>Политика конфиденциальности</h5>
	        <h5 class=""><a href="index.php" class="text-dark">На главную</a></h5>
	    </div>
	</div>
	<div id="zatemLogin">
		<div class="col-3 radius mx-auto text-center bg-white shadow rounded" id="Login" style="padding-bottom: 2vh; padding-top: 2vh; margin-top: 5vh">
	        <div class="row">
				<h3 style="position: absolute; left: 10.1vw; padding-bottom: 4vh">Войти</h3>
				<a href="#" class="close btn" style="height: 4vh; margin-left: auto; margin-right: 1.5vw">X</a>			
			</div>
	        <form action="SignUser.php" method="post">
	            <?php if ($_GET["log"] == 1) { ?>
	                <p class="text-success" style="font-size: 1vw;">Registration succesfully!</p>
	            <?php } ?>
	            <input type="text" name="login" class="form-control radius border-dark col-11 mx-auto" style="margin-top: 1vh" id="login" placeholder="Логин" autocomplete="off">
	            <input type="password" name="pass" class="form-control radius border-dark col-11 mx-auto" style="margin-top: 1vh" id="pass" placeholder="Пароль" autocomplete="off">
	            <button class="btn btn-success rounded-pill" style="background: #0e0ee3; margin-top: 3vw; width: 5vw">Войти</button><br>
	        </form> 
	        <h5 style="margin-top: 5vh"><a href="#zatemReg" class="text-dark">Ещё не зарегестрировались?</a></h5>
	        <h5>Политика конфиденциальности</h5>
	        <h5 class=""><a href="index.php" class="text-dark">На главную</a></h5>
	    </div>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>