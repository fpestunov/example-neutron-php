<?php

class News
{

	public static function getNewsItemByID($id)
	{
		$id = intval($id);

		if ($id) {
			$db = Db::getConnection();
            $stmt = $db->prepare("SELECT * FROM news WHERE id=?");
            $stmt->execute([$id]);
            $newsItem = $stmt->fetchAll();

			return $newsItem;
		}

	}

	public static function getNewsList() {

		$db = Db::getConnection();
		$newsList = array();

		$result = $db->query('SELECT id, title, date, content, image FROM news ORDER BY date DESC');

		$i = 0;
		while($row = $result->fetch()) {
			$newsList[$i]['id'] = $row['id'];
			$newsList[$i]['title'] = $row['title'];
			$newsList[$i]['date'] = $row['date'];
			$newsList[$i]['content'] = $row['content'];
			$newsList[$i]['image'] = $row['image'];
			$i++;
		}

		return $newsList;
	}
}
