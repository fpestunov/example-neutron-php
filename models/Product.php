<?php

class Product
{

    public static function getProductItemByID($id)
    {
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();
            $stmt = $db->prepare("SELECT * FROM products WHERE id=?");
            $stmt->execute([$id]);

            $productItem = $stmt->fetchAll();

            if (isset($productItem['image']))
            {
                $imageParts = explode('.', $productItem['image']);
                $productItem['image'] = "{$imageParts[0]}-large.jpg";
            }

            return $productItem;
        }

    }

    public static function getProductsList() {

        $db = Db::getConnection();
        $productsList = array();

        $stmt = $db->prepare('SELECT * FROM products');
        $stmt->execute([]);

        $i = 0;
        while($row = $stmt->fetch()) {
            $productsList[$i]['id'] = $row['id'];
            $productsList[$i]['title'] = $row['title'];
            $productsList[$i]['price'] = $row['price'];
            $productsList[$i]['image'] = $row['image'];
            $productsList[$i]['description'] = $row['description'];
            $i++;
        }

        return $productsList;
    }
}
