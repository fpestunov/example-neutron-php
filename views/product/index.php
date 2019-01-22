<? require(ROOT . '/views/layouts/header.php'); ?>

<h1>Наше меню</h1>
<div class="w3-row-padding w3-padding-16 w3-center" id="food">
<?php foreach ($productsList as $productItem):?>
  <div class="w3-quarter">
    <a href="/products/<?=$productItem['id'];?>"><img src="/public/images/products/<?=$productItem['image'];?>" alt="<?=$productItem['title'];?>" style="width:100%"></a>
    <a href="/products/<?=$productItem['id'];?>"><h3><?=$productItem['title'];?></h3></a>
  </div>
<?php endforeach;?>
</div>

<? require(ROOT . '/views/layouts/footer.php'); ?>
