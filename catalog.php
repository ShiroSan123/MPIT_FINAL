<?php 
	session_start();
	$connect = mysqli_connect("127.0.0.1",root,"","MPIT_FINAL");
	$id = $_SESSION['id'];

	$query = "SELECT * FROM User WHERE id = $id ";
	$result = mysqli_query($connect, $query);
	$stroka = $result->fetch_assoc();

 ?>
<!DOCTYPE html>
<html lang=ru>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
		
	</style>
</head>
<body>
	<!-- Шапка сайта (Header) -->
	<div class="col-12 header" style="height: 6vh; background: #24315E; position: fixed; top: 0; left: 0; z-index: 1000">
		<div class="d-flex pl-0 pr-0 col-10 mx-auto" >
			<div class="col-1" style="height: 6vh"><a href="index.php"><h3 style="margin-top: 0.8vh" class="text-light">Lifestyle</h3></a></div>
			<div class="col-8" style="height: 6vh"></div>
			<div class="col-3 d-flex" style="height: 6vh">
				<a href="catalog.php" style="font-size: 1vw; margin-top: 1.8vh; margin-left: auto;" class="text-light"></a>
				<div class="dropdown ml-auto" style="margin-top: -1.8vh;">
				<button class="dropbtn btn rounded-pill text-light" style="background: #24315E; height: 4vh; margin-left: auto; font-size: 1vw;"><?php echo $stroka['SurName']." ".$stroka['Name']?></button>
				    <div class="dropdown-content">
					    <a href="main.php" style="font-size: 2vh">Главная</a>
					    <a href="profile.php" style="font-size: 2vh">Профиль</a>
					    <a href="LogOut.php" style="font-size: 2vh">Выход</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-10 mx-auto d-flex pl-0 pr-0" style="height: 100vh; margin-top: 8vh">
		<div class="col-9 shadow-lg" style="height: 300vh; border-radius: 1vh 1vh 1vh 1vh">
			<h1>Программы распорядка дня</h1>
			<input type="" name="" class="rounded col-12 form-control" placeholder="Поиск по названию...">
			<div class="col-12 rounded shadow" style="margin-top: 2vh; padding-left: 1vw; padding-right: 1vw;padding-top: 1vh">
				<div class="row col-12">
					<div class="rounded-circle bg-secondary" style="width: 1.8vw"></div>
					<h5 class="text-secondary" style="margin-left: 1vw">Имя автора</h5>
					<h5 class="text-secondary" style="margin-left: 1vw">дд.мм.гггг</h5>
					<h5 class="text-secondary ml-auto">XX-XX</h5>
				</div>
				<h1>Название программы</h1>
				<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut</h4>
				<div class="row" style="margin-left: 1vh">
                    <div class="btn-group dropup">
                        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="height: 4vh; margin-top: 2vh"></button>
                    </div>
                        <h2 style="font-size: 2vh; margin-left: 1vw; margin-top: 3vh">123</h2>
                        <div class="btn-group dropdown" style="margin-left: 1vw">
                        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="height: 4vh"></button>
                    </div>
                </div>
			</div>
		</div>
		<div class="col-2 shadow-lg" style="height: 100vh; position: fixed;left: 74.4vw; border-radius: 1vh 1vh 1vh 1vh">
			<h5>Возрастной диапозон</h5>
			<div class="row pl-2 pr-2">
				<input type="" name="" class="col-5 rounded mx-auto form-control" placeholder="от -1000" style="height: 4vh; font-size: 2vh">
				<h1 style="margin-top: -1vh" class="mx-auto ">-</h1>
				<input type="" name="" class="col-5 rounded mx-auto form-control" placeholder="до 1000" style="height: 4vh; font-size: 2vh">
			</div>
			<h5>Возрастной диапозон</h5>
			<input type="" name="" class="col-12 rounded mx-auto form-control" placeholder="от -1000" style="height: 4vh; font-size: 2vh">
			<h5>Возрастной диапозон</h5>
			<div class="row pl-3 pr-3">
				<p style="font-size: 2vh"><input name="" type="radio" value=""> Lorem</p>
				<p style="font-size: 2vh; margin-left: 2vw"><input name="" type="radio" value=""> Lorem</p>
				<p style="font-size: 2vh; margin-left: 2vw"><input name="" type="radio" value=""> Lorem</p>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		
	</script>
</body>
</html>