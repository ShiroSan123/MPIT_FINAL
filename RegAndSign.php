<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang=ru>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<?php if ($_GET['ide'] == 1) { ?>
    <div class="col-3 mt-5 radius mx-auto text-center bg-white shadow pb-2 pt-2 rounded">
        <h3 class="pb-4">Зарегестрироваться</h3>
        <form action="RegUser.php" method="post">
            <input type="text" name="surname" class="form-control radius border-dark col-11 mx-auto" id="surname" placeholder="Фамилия" autocomplete="off">
            <input type="text" name="name" class="form-control radius border-dark mt-3 col-11 mx-auto" id="name" placeholder="Имя" autocomplete="off">
            <input type="text" name="email" class="form-control radius border-dark mt-3 col-11 mx-auto" id="email" placeholder="Почта" autocomplete="off">
            <input type="text" name="login" class="form-control radius border-dark mt-3 col-11 mx-auto" id="login" placeholder="Логин" autocomplete="off">
            <?php if ($_GET["log"] == 1) { ?>
                <p class="text-danger" style="font-size: 1vw;">That username already exists! Please try another one!</p>
            <?php } ?>
            <input type="password" name="pass" class="form-control radius border-dark mt-3 col-11 mx-auto" id="pass" placeholder="Пароль" autocomplete="off">
            <?php if ($_GET["gol"] == 1) { ?>
                <p class="text-danger" style="font-size: 1vw; margin-bottom: -1vw">All fields are required!</p>
            <?php } ?>
            <!-- <input type="password" name="repass" class="form-control radius border-dark mt-3 col-11 mx-auto" id="pass" placeholder="Повторите пароль"> -->
            <button class="btn btn-success rounded-pill" name="register" style="background: #0e0ee3; margin-top: 3vw; width: 9vw">Зарегистрироваться</button><br>
        </form> 
        <h5 class="mt-5"><a href="RegAndSign.php? ide=2" class="text-dark voiti">Уже есть аккаунт?</a></h5>
        <h5>Политика конфиденциальности</h5>
        <h5 class=""><a href="index.php" class="text-dark">На главную</a></h5>
    </div>
	<?php } else {?>
    <div class="col-3 mt-5 radius mx-auto text-center bg-white shadow pb-2 pt-2 rounded">
        <h3 class="pb-4">Войти</h3>
        <form action="SignUser.php" method="post">
            <?php if ($_GET["log"] == 1) { ?>
                <p class="text-success" style="font-size: 1vw;">Registration succesfully!</p>
            <?php } ?>
            <input type="text" name="login" class="form-control radius border-dark mt-3 col-11 mx-auto" id="login" placeholder="Логин" autocomplete="off">
            <input type="password" name="pass" class="form-control radius border-dark mt-3 col-11 mx-auto" id="pass" placeholder="Пароль" autocomplete="off">
            <button class="btn btn-success rounded-pill" style="background: #0e0ee3; margin-top: 3vw; width: 5vw">Войти</button><br>
        </form> 
        <h5 class="mt-5"><a href="RegAndSign.php? ide=1" class="text-dark reg">Ещё не зарегестрировались?</a></h5>
        <h5>Политика конфиденциальности</h5>
        <h5 class=""><a href="index.php" class="text-dark">На главную</a></h5>
    </div>
	<?php } ?>
    <script type="text/javascript">
    </script>
</body>
</html>