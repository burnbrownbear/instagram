<?php

	$connect = mysqli_connect('127.0.0.1', 'root','','kirill_ch_17');
	$lol = mysqli_query($connect, "INSERT INTO poste (text_post, img, user_id) VALUES ('" . $_POST['text_post'] . "', 'images/" . $_FILES['img']['name'] . "' , '" . $_POST['user_id'] ."')");
	move_uploaded_file($_FILES['img']['tmp_name'], "images/" . $_FILES['img']['name']);
	header('Location: http://kirillbur/insta/insta.php?id='. $_POST['user_id'] .'');
	//echo $_POST['text_post'] . $_POST['user_id'] . $_FILES['img']['name']1

	
?>