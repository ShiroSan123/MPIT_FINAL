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
	<link rel="stylesheet" type="text/css" href="assets/css/Style2.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
	
	</style>
</head>
<body>
	<!-- Шапка сайта (Header) -->
	<div class="col-12" style="height: 6vh; background: #24315E">
		<div class="d-flex pl-0 pr-0 col-10 mx-auto" >
			<div class="col-1" style="height: 6vh"><a href="index.php"><h3 style="margin-top: 0.8vh" class="text-light">Lifestyle</h3></a></div>
			<div class="col-8" style="height: 6vh"></div>
			<div class="col-3 d-flex" style="height: 6vh">
				<a href="catalog.php" style="font-size: 1vw; margin-top: 1.8vh; margin-left: auto;" class="text-light">Каталог</a>
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

	<div class="col-12 pl-0 pr-0" style="height: 80vh; margin-top: 2vh;">
		<div class="d-flex pl-0 pr-0">
			<!-- Left column -->
			<div class="col-3 pl-0 pr-0 border border-dark" style="height: 80vh; background: #f7f7f7; border-radius: 0 1vw 1vw 0">
				<div class="col-12 lifeStyle border-bottom border-dark" style="height: 8vh; padding-top: 2vh; padding-left: 2vw; background: #F76D6D; border-radius: 0 1vw 0 0">
					<h1 style="font-size: 2.5vh">Жизненный стиль на сегодня</h1>
				</div>
				<div class="col-12 schedule border-bottom border-dark" style="height: 8vh; padding-top: 2vh; padding-left: 2vw">
					<h1 style="font-size: 2.5vh">Расписание на неделю</h1>
				</div>
				<div class="col-12 callendar border-bottom border-dark" style="height: 8vh; padding-top: 2vh; padding-left: 2vw">
					<h1 style="font-size: 2.5vh">Календарь</h1>
				</div>
				<div class="col-12 health border-bottom border-dark" style="height: 8vh; padding-top: 2vh; padding-left: 2vw">
					<h1 style="font-size: 2.5vh">Состояние здоровья</h1>
				</div>
				<div class="col-12 health border-top border-dark" style="height: 8vh; padding-top: 2vh; padding-left: 2vw; margin-top: 40vh">
					<h1 style="font-size: 2.5vh">Контакты</h1>
				</div>
			</div>
			<!-- Right column -->
			<div class="col-9 divLifeStyle" style="height: 80vh; padding-left: 2vw; padding-right: 2vw; padding-top: 2vh">
				<div class="col-12 bg-light d-flex pr-0 pl-0 border border-dark shadow" style="height: 10vh; border-radius: 1vw 1vw 1vw 1vw">
					<div class="row col-10 layer" style="height: 10vh">
						<div class="col-2" style="height: 10vh">
							<div class="mx-auto col-12 text-center" style="margin-top: 2vh">
								<h5 style="margin-left: 0.1vw; font-size: 2vh; color: #24315E">Занятие</h5>
								<h5 style="color: #24315El font-size: 2vh">ЧЧ:ММ</h5>
							</div>
						</div>
						<h1 style="font-size: 3vw; margin-top: 1vh">|</h1>
					</div>

					<div class="col-2 ml-auto" style="height: 10vh; margin-right: -2vw">
						<div class="row mx-auto col-12" style="margin-top: 3.5vh">
							<a href="#zatemZan"><h5 style="margin-left: 1vw">Добавить</h5></a>
						</div>
					</div>
				</div>
				<div class="col-12 pl-0 pr-0 d-flex" style="height: 60vh; margin-top: 4vh">
					<div class="col-8" style="height: 30vh">
						<h1>Название</h1>
						<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
					</div>
					<div class="col-4 bg-light border border-dark" style="height: 60vh; border-radius: 1vw 1vw 1vw 1vw">
						
					</div>
				</div>
			</div>
			<div class="col-9 divSchedule" style="height: 80vh; padding-left: 2vw; padding-right: 2vw; padding-top: 2vh; display: none">
				<div class="col-12 bg-light d-flex pr-0 pl-0 border border-dark shadow" style="height: 10vh; border-radius: 1vw 1vw 1vw 1vw">
					<div class="col-2" style="height: 10vh">
						<div class="mx-auto col-12 text-center" style="margin-top: 1vh">
							<h5 style="margin-bottom: -1vh; color: #24315E">ДД</h5>
							<h4>_______</h4>
							<h5 style="color: #24315E">Занятие</h5>
						</div>
					</div>
					<h1 style="font-size: 3vw; margin-top: 1vh">|</h1>
					<div class="col-2" style="height: 10vh">
						<div class="mx-auto col-12 text-center" style="margin-top: 1vh">
							<h5 style="margin-bottom: -1vh">ДД</h5>
							<h4>_______</h4>
							<h5>Занятие</h5>
						</div>
					</div>
					<h1 style="font-size: 3vw; margin-top: 1vh">|</h1>
					<div class="col-2" style="height: 10vh">
						<div class="mx-auto col-12 text-center" style="margin-top: 1vh">
							<h5 style="margin-bottom: -1vh">ДД</h5>
							<h4>_______</h4>
							<h5>Занятие</h5>
						</div>
					</div>
					<h1 style="font-size: 3vw; margin-top: 1vh">|</h1>
					<div class="col-2" style="height: 10vh">
						<div class="mx-auto col-12 text-center" style="margin-top: 1vh">
							<h5 style="margin-bottom: -1vh">ДД</h5>
							<h4>_______</h4>
							<h5>Занятие</h5>
						</div>
					</div>
				</div>
				<div class="col-12 pl-0 pr-0 d-flex" style="height: 60vh; margin-top: 4vh">
					<div class="col-8" style="height: 30vh">
						<h1>Понедельник</h1>
						<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
					</div>
					<div class="col-4 bg-light border border-dark" style="height: 60vh; border-radius: 1vw 1vw 1vw 1vw">
						
					</div>
				</div>
			</div>
			<div class="col-9 divCallendar" style="height: 80vh; padding-left: 2vw; padding-right: 2vw; padding-top: 2vh; display: none">
				<div class="col-12 border border-dark" style="padding: 1vh; border-radius: 1vh 1vh 1vh 1vh">
					<table>
					  <tr>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh">Понедельник</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh">Вторник</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh">Среда</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh">Четверг</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh">Пятница</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh">Суббота</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh">Воскресенье</td>
					  </tr>
					  <tr>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					  </tr>
					  <tr>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					  </tr>
					  <tr>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					  </tr>
					  <tr>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					  </tr>
					  <tr>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					    <td class="border border-dark text-center col-1" style="font-size: 4vh; padding-top: 3.9vh; padding-bottom: 3.9vh">XX</td>
					  </tr>
					</table>
				</div>
			</div>
			<div class="col-9 divHealth" style="height: 80vh; padding-left: 2vw; padding-right: 2vw; padding-top: 2vh; display: none">
				<div class="col-12 border border-dark" style="height: 75vh; border-radius: 1vh 1vh 1vh 1vh">
					<div class="d-flex pl-0 pr-0">
						<div class="col-8 pl-0 pr-0">
							<h1>Состояние здоровья</h1>
							<h2>Сердцебиение: 123</h2>
							<h2>Давление: 120/80 мм.рт.ст.</h2>
							<h2>Температура: 36,6</h2>
							<h2>Кислорода в крови: 97%</h2>
						</div>
						<div class="col-4 pl-0 pr-0">
							<img src="assets/img/human.png" style="background-size: 100% 100%; margin-top: 8vh" class="col-8">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12" style="background: #24315E; height: 10vh; margin-top: 2vh">
		<div class="col-9 mx-auto">
			<h4 class="text-light">Copyright <span class="text-danger">Lifestyle</span>. Все права сохранены</h4>
			<h4 class="text-light" style="margin-top: -0.4vh">Задизайнено <span class="text-danger">Vasyaincorporate</span></h4>
			<h4 class="text-light" style="margin-top: -0.4vh">Закодено <span class="text-danger">ShiruiSan</span></h4>
		</div>
	</div>

	<script type="text/javascript">
		let lifeStyle = document.querySelector(".lifeStyle");
		let schedule = document.querySelector(".schedule");
		let callendar = document.querySelector(".callendar");
		let health = document.querySelector(".health");

		let divLifeStyle = document.querySelector(".divLifeStyle");
		let divSchedule = document.querySelector(".divSchedule");
		let divCallendar = document.querySelector(".divCallendar");
		let divHealth = document.querySelector(".divHealth");

		lifeStyle.onclick = function()
		{
			lifeStyle.style.background = '#F76D6D';
			schedule.style.background = 'none';
			callendar.style.background = 'none';
			health.style.background = 'none';
			divLifeStyle.style.display = 'block';
			divSchedule.style.display = 'none';
			divCallendar.style.display = 'none';
			divHealth.style.display = 'none';
		}
		schedule.onclick = function()
		{
			lifeStyle.style.background = 'none';
			schedule.style.background = '#F76D6D';
			callendar.style.background = 'none';
			health.style.background = 'none';
			divLifeStyle.style.display = 'none';
			divSchedule.style.display = 'block';
			divCallendar.style.display = 'none';
			divHealth.style.display = 'none';
		}
		callendar.onclick = function() 
		{
			lifeStyle.style.background = 'none';
			schedule.style.background = 'none';
			callendar.style.background = '#F76D6D';
			health.style.background = 'none';
			divLifeStyle.style.display = 'none';
			divSchedule.style.display = 'none';
			divCallendar.style.display = 'block';
			divHealth.style.display = 'none';
		}
		health.onclick = function()
		{
			lifeStyle.style.background = 'none';
			schedule.style.background = 'none';
			callendar.style.background = 'none';
			health.style.background = '#F76D6D';
			divLifeStyle.style.display = 'none';
			divSchedule.style.display = 'none';
			divCallendar.style.display = 'none';
			divHealth.style.display = 'block';
		}
 	</script>
</body>
</html>