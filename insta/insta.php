			<?php 
			$connect = mysqli_connect('127.0.0.1', 'root', '', 'kirill_ch_17');
			$query2 = mysqli_query($connect, "SELECT * FROM poste INNER JOIN names ON poste.user_id = names.id ORDER BY poste.user_id DESC");
			$query = mysqli_query($connect, "SELECT * FROM names WHERE id =" . $_GET['id']);
			$row2 = $query->fetch_assoc();
			echo $row2['nick'];
 			?>

<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<link rel="stylesheet" type="text/css" href="">
	<meta charset="utf-8">
</head>
<body>
		<div>
		
						<div class="col-3" style="background: white; border-radius: 15px">
					<form method="POST" action="insert.php" enctype="multipart/form-data">
						<?php echo '<input type="" name="text_post" placeholder="введите текст">'?>
						<?php echo '<input type="file" name="img">'?>
						<?php echo '<input type="" name="user_id" value="' . $row2['id'] . '">' ?>
						<button>Опубликовать</button>
					</form>
						</div>
			<div class="col-6 pl-2 row">
				<?php $connect = mysqli_connect('127.0.0.1','root','','kirill_ch_17');
					for($i=0; $i < $query2->num_rows; $i++){
						$row1 = $query2->fetch_assoc();
						?>
						<div class="col-2">
							<a href=""><?php echo '<img style = "width: 50px; height:50px" src="'. $row1['avatar'] .'"'?></a>
						</div>
						<div class="col-10">
						<div class="d-flex">
							<div>
								<h2><a href=""><?php echo $row1['nick']?></a></h2>
							</div>
							<div class="mt-4">
								<p><a href=""><?php echo $row1['text_post']; ?></a></p>
								<a href=""><?php echo '<img style = "width: 200px; height:300px " src="' . $row1['img'] . '">'?></a>
							</div>
						</div>
						</div>
					<?php 
				}
				?>
			</div>
		</div>
</body>
</html>