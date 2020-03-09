<?php

$title = "My Article";
$body = "My Article body";
$footer = "This is my footer";

$article = <<<DEF
<h1>$title</h1>
<p>$body</p>
<a href="abc.php"></a>

Rahim's father, <br>
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem nemo nesciunt, dolor ipsum dicta, quas reiciendis esse quisquam eos nostrum ducimus molestiae saepe aperiam possimus incidunt enim eveniet veniam ipsa. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur sed laborum cumque, facilis at aliquid consectetur temporibus repudiandae. Ratione aliquam in harum ab corporis officiis, quo voluptatem non quis et.

<p>$footer</p>

DEF;

echo $article;

?>