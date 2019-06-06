
<?php
		$connect = mysqli_connect('127.0.0.1', 'root', '','kirill_ch_17');
		$query = mysqli_query($connect, "SELECT * FROM names WHERE email ='" . $_POST['email'] . "' AND password ='" . $_POST['password'] . "'");
		$row = $query->fetch_assoc();
		

		#header('Location: http://kirillbur/insta.php');
?>