<? require(ROOT . '/views/layouts/header.php'); ?>

<h1>Новости</h1>
<?php foreach ($newsList as $newsItem):?>
    <p><span class="w3-text-grey"><?php echo substr($newsItem['date'], 0, 10);?></span><br>
	<a href='/news/<?php echo $newsItem['id'];?>'><?php echo $newsItem['title'];?></a></p>
<?php endforeach;?>

<? require(ROOT . '/views/layouts/footer.php'); ?>
