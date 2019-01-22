<? require(ROOT . '/views/layouts/header.php'); ?>
<? if (isset($productItem[0])): ?>
<div class="w3-row">
    <div class="w3-col s6 w3-center">
        <img class="w3-hover-opacity" src="/public/images/products/<?php echo $productItem[0]['image'];?>" alt="<?php echo htmlspecialchars($productItem[0]['title']);?>" style="width:80%">
    </div>
    <div class="w3-col s6 w3-center w3-section">
        <h1><?php echo $productItem[0]['title'];?></h1>
        <span class="w3-orange">&nbsp;<?php echo $productItem[0]['price'];?> руб.&nbsp;</span>
        <? if (isset($productItem[0]['description'])):?>
        <p><?php echo $productItem[0]['description'];?></p>
        <? endif; ?>
    </div>
</div>
<? endif; ?>
<? require(ROOT . '/views/layouts/footer.php'); ?>
