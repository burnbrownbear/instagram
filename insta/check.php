<?php 
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'kirill_ch_17');
	$query = mysqli_query($connect, "SELECT * FROM names WHERE email ='" . $_POST['email'] ."' AND password='" . $_POST['password'] . "'");
	$row = $query->fetch_assoc();
	if($query->num_rows == 1){
			header('Location: http://kirillbur/insta/insta.php?id=' . $row['id']); 
	}
	else{
			header('Location: http://kirillbur/insta/login.php?error= нет такого пользователя'); 
	};
 ?> . 
