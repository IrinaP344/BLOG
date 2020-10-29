<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	 <div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<hr>
		<div class="col-12" style="">
			<h1>ПОДРОБНЕЕ</h1>
			<?php 
				$database = [
					"title" => "Статья 1",
					"short_text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
					"img" => "img/4.jpg",
					"users" => "user 90",
				];
					echo "<h1 style= 'background-color: green;'>". $database["title"] ."</h1>";
					echo "<p>". $database["short_text"] ."</p>";
					echo "<img class=w-100 src='". $database["img"] ."' >";
					echo "<p>Автор: ". $database["users"] ."</p>";
			 ?>
		</div>
	</div>
</body>
</html>