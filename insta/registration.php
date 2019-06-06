<?php
header('Location: http://kirillbur/insta/login.php');
echo $_POST["email"] . ' ' . $_POST["name"] . ' ' . $_POST["nick"] . ' ' . $_POST["password"];
mail($_POST["email"], "Регистрация прошла успешно", "'Ваш логин:' '". $_POST['nick'] . "' и пароль: '". $_POST['password'] . "'" );
$connect = mysqli_connect('127.0.0.1', 'root', '', 'kirill_ch_17');
	$lol = mysqli_query($connect, "INSERT INTO names (email, name, nick, password) VALUES ('" . $_POST['email'] . "', '" . $_POST['name'] . "', '" . $_POST['nick'] . "', '" . $_POST['password'] . "') ");

?>
