<?php

	require_once("header.php");
	require_once("models/articles.php")
?>
	<h2><?=$artcle ['title']?></h2>
	<h3>Опубликовано: <?=$article ['date']?></h3>
	<p><?=$article['content']?></p>
<?php
	require_once("footer.php");
?>
