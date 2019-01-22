<?php

include_once ROOT. '/models/Product.php';

class SiteController
{

        public function actionIndex()
        {
            $productsList = Product::getProductsList();

            require_once(ROOT . '/views/site/index.php');

            return true;
        }

        public function actionAbout()
        {
            require_once(ROOT . '/views/site/about.php');

            return true;
        }

        public function actionContacts()
        {
            require_once(ROOT . '/views/site/contact.php');

            return true;
        }

}
