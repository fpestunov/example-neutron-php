<?php

include_once ROOT. '/models/Product.php';

class ProductController {

    public function actionIndex()
    {
        $productsList = Product::getProductsList();

        require_once(ROOT . '/views/product/index.php');

        return true;
    }

    public function actionView($id)
    {
        if ($id)
        {
            $productItem = Product::getProductItemByID($id);

            require_once(ROOT . '/views/product/view.php');
        }
        return true;
    }
}
