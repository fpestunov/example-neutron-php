<? require(ROOT . '/views/layouts/header.php'); ?>
<? if (isset($newsItem[0])): ?>
<span class="w3-text-grey"><?php echo substr($newsItem[0]['date'], 0, 10);?></span>
<h2><?php echo $newsItem[0]['title'];?></h2>
<? if (isset($newsItem[0]['image'])): ?>
<p><img class="w3-hover-opacity w3-card-4" src="/public/images/news/<?php echo $newsItem[0]['image'];?>" alt="<?php echo htmlspecialchars($newsItem[0]['title']);?>"></p>
<? endif; ?>
<div class="w3-justify"><?php echo $newsItem[0]['content'];?></div>
<p><a href='/news/'>Список новостей</a></p>
<? endif; ?>
<? require(ROOT . '/views/layouts/footer.php'); ?>
