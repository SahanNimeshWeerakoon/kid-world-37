<?php
class AboutUs extends Controller {
	public static function test() {
		return self::query("SELECT * FROM users");
	}
}