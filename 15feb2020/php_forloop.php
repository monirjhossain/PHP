<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>For Loop</title>
</head>
<body>

	<?php

	/*for ($i=1; $i<=10; $i++){
		echo $i . "<br>";
	}*/

		$news = array(
			"Title1"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea totam iure ullam dolore eum, accusamus enim libero magnam ipsa aspernatur porro. Maiores temporibus laborum quidem explicabo voluptatibus eum dolores ratione.",

			"Title2"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea totam iure ullam dolore eum, accusamus enim libero magnam ipsa aspernatur porro. Maiores temporibus laborum quidem explicabo voluptatibus eum dolores ratione.",

			"Title3"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea totam iure ullam dolore eum, accusamus enim libero magnam ipsa aspernatur porro. Maiores temporibus laborum quidem explicabo voluptatibus eum dolores ratione.", 
			"Title4"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea totam iure ullam dolore eum, accusamus enim libero magnam ipsa aspernatur porro. Maiores temporibus laborum quidem explicabo voluptatibus eum dolores ratione.",
			"Title5"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea totam iure ullam dolore eum, accusamus enim libero magnam ipsa aspernatur porro. Maiores temporibus laborum quidem explicabo voluptatibus eum dolores ratione.",
			"Title6"=>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea totam iure ullam dolore eum, accusamus enim libero magnam ipsa aspernatur porro. Maiores temporibus laborum quidem explicabo voluptatibus eum dolores ratione.");

		foreach ($news as $title=> $body) {
			echo "<h2>$title<h2>";
			echo "<h4>$body</h4>";
			echo "<hr>";
		}

	?>
</body>
</html>