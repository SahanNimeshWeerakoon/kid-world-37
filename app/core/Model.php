<?php
class Model {
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

	public function insert($table, $values) {
		$pdo = self::connect();

		$fields = '';
		$fieldVals = '';
		foreach($values as $key=>$value) {
			$fields .= $key.',';
			$fieldVals .= ':'.$key.',';
		}

		// generate fields list for insert
		$fields = str_split($fields);
		array_pop($fields);
		$fields = join("", $fields);

		// generate values list for insert
		$fieldVals = str_split($fieldVals);
		array_pop($fieldVals);
		$fieldVals = join("", $fieldVals);


		$sql = "INSERT INTO $table ($fields) VALUES ($fieldVals)";
		$stmt = $pdo->prepare($sql);
		$stmt->execute($values);
		return $sql;
	}

	public function read($table, $where=null, $fields="*") {
		$pdo = self::connect();

		$sql = "SELECT $fields FROM $table";
		if($where) {
			$sql .= " WHERE $where";
		}

		$stmt = $pdo->prepare($sql);
		$stmt->execute();

		return $stmt->fetchAll();
	}

	public function update($table, $values, $where) {
		$pdo = self::connect();
		$sql = "UPDATE $TABLE set $values WHERE $where";

		$stmt = $pdo->prepare($sql);
		$stmt->execute($sql);

		return $sql;
	}
}