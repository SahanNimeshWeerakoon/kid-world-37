<?php

class Controller extends Database {

	public static function CreateView($viewName, $array=[]) {
		foreach($array as $key=>$arrayEle) {
			$$key = $arrayEle;
		}
		require_once("./views/$viewName.php");
	}
}