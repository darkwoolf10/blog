<?php

	foreach ($articles as $a):
?>

	<div  class="article">
		<h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
		<em>Опубликовано: <?=$a['date']?></em>
		<p><?=$article['content']?></p>
	</div>
<?php endforeach ?>
