<?php
class Authenticate extends Controller {
	public function index() {
		$this->view('authenticate');
	}
	public function sex() {
		echo 'test';
	}
	public function login() {
		$this->view('authenticate/login');
	}
}