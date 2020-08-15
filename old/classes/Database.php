<?php

class Database {
	public static $host = "127.0.0.1";
	public static $dbName = "sales_marketing";
	public static $username = "root";
	public static $password = "";

	private static function connect() {
		$pdo = new PDO("mysql:host=".self::$host.";dbname=".self::$dbName.";charset=utf8", self::$username, self::$password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
		return $pdo;
	}

	public static function query($query, $params=array()) {
		$statement = self::connect()->prepare($query);
		$statement->execute($params);

		if(explode(' ', $query)[0] == 'SELECT') {
			$data = $statement->fetchAll();
			return $data;
		}
	}
}