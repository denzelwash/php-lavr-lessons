<div class="articles">
	<? foreach($articles as $article): 
		$category = getCategory($article['id_category']);
		?>
		<div class="article">
			<h2><?=$article['title']?></h2>
				<span><strong>Категория</strong> <?=$category['title']?></span> <br>	
			<a href="<?=BASE_URL?>/article/id=<?=$article['id_article']?>">Read more</a>
			<br>	
			<br>	
		</div>
	<? endforeach; ?>
	<hr>
	<a href="<?=BASE_URL?>">Move to main page</a>
</div>