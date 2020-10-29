<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
	<style type="text/css">

		body {
			background-color: #f2f1ed;
		};

	</style>
<body>
	<div> <!-- 1. Все массивы создаем здесь-->
		<?php 
			$connect = mysqli_connect("127.0.0.1", "root", "", "blog");
				
			$query = mysqli_query($connect, "SELECT * 	FROM posts");
		
		
		 ?>
		
		
	<?php 
     	echo "<h1>Привет, ". $_GET["tru"], $_GET["tr"] ."</h1>";
     	echo "<a href='admin.php'>Админ-панель</a>";
     	
    ?>

		<?php 
			$database = [
				[
					"title"=>"Статья 1",
					"short_text"=>"lorem",
					"img"=>"img/1.jpg",
					"users"=>"user 12",
					"url"=>"statias.php"

				],
				[
					"title"=>"Статья 2",
					"short_text"=>"lorem",
					"img"=>"img/2.jpg",
					"users"=>"user 30",
				],
				[
					"title"=>"Статья 3",
					"short_text"=>"lorem",
					"img"=>"img/3.jpg",
					"users"=>"user 50",
				],
				[
					"title"=>"Статья 4",
					"short_text"=>"lorem",
					"img"=>"img/4.jpg",
					"users"=>"user 90",
				],
				[
					"title"=>"Статья 5",
					"short_text"=>"lorem",
					"img"=>"img/5.jpg",
					"users"=>"user 25",
				],
			];
			?>
	</div>

	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<h1 class="text-center">БЛОГ</h1>
		<hr>
		<div class="col-12" style=""> <!-- 2. выводите все элементы в этом диве -->
			<?php 
			 for ($b=0; $b <4 ; $b++){ 
				$result = $query->fetch_assoc();
				echo "<h1 style='background-color: green;'>". $result["title"] ."</h1>";
				echo "<p>". $result["text"] ."</p>";
				echo "<img class=w-100 src='". $result["img"]."'>";
				echo "<p>".  $result["author"] ."</p>";
			}
			 	
			  ?>
			 <?php 
			 	echo "<h1 style= 'background-color:green;'>". $_GET["1"] ."</h1>";
		     	echo "<p>". $_GET["2"] ."</p>";
		     	echo "<p> ". $_GET["3"] ."</p>";
				
				for($i=0; $i<4; $i=$i+1){
					$a=$i+1;
					echo "<h1 style= 'background-color: green;'>". $database[$i]["title"] ."</h1>";
					echo "<p>". $database[$i]["text"] ."</p>";
					echo "<img class=w-100 src='". $database[$i]["img"] ."' >";
					echo "<p>Автор: ". $database[$i]["author"] ."</p>";
					echo "<a href='" . $a .".php' style='margin-bottom: 10px;'>Источник</a>";	
			 }
			 ?>
			 
		</div>
	</div>
</body>
</html>