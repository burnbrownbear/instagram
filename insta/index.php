<!DOCTYPE html>
<html>
<head>
	<title>
		document
	</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body>
	<form method="POST" action="registration.php">
		<input type="hidden" name="id">
		<input type="" name="email" placeholder="Электронный адрес">
		<input type="" name="name" placeholder="Имя и фамилия">
		<input type="" name="nick" placeholder="Имя пользователя">
		<input type="" name="password" placeholder="Пароль">
		<button>Регистрация</button>
	</form>
	<form method="POST" action="login.php">
		<button>Войти</button>
	</form>
</body>
</html>