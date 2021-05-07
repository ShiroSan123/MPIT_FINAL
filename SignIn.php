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
    <div class="col-3 mt-5 radius mx-auto text-center bg-white shadow pb-2 pt-2 rounded">
        <h3 class="pb-4">Войти</h3>
        <form action="SignUser.php" method="post">
            <input type="text" name="login" class="form-control radius border-dark mt-3 col-11 mx-auto" id="login" placeholder="Логин" autocomplete="off">
            <input type="password" name="pass" class="form-control radius border-dark mt-3 col-11 mx-auto" id="pass" placeholder="Пароль" autocomplete="off">
            <button class="btn btn-success radius" style="background: #0e0ee3">Войти</button><br>
        </form> 
        <h5 class="mt-5"><a href="Registration.php" class="text-dark">Ещё не зарегестрировались?</a></h5>
        <h5>Политика конфиденциальности</h5>
        <h5 class=""><a href="index.php" class="text-dark">На главную</a></h5>
    </div>
</body>
</html>