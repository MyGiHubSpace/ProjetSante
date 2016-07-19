<?php
	namespace Library;
	class PDOFactory
	{
		public static function getMysqlConnexion()
		{
			$db = new \PDO('mysql:host=localhost;dbname=psantebdd', 'root', '');
			$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
			return $db;
		}
		public static function getPgsqlConnexion()
		{
			$db = new PDO('pgsql:host=localhost;dbname=psantebdd', 'root', '');
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $db;
		}
	}