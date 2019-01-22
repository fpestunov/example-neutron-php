<?php

class Db
{

		public static function getConnection()
		{
			$paramsPath = ROOT . '/config/db_params.php';
			$params = include($paramsPath);
			$options = [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ];

			$dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
			$db = new PDO($dsn, $params['user'], $params['password'], $options);

			return $db;
		}
}
