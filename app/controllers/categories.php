<?php
class Categories extends Controller {
	public function index() {}

	public function products($param) {
		$products = self::getProductByCategory($param);
		$this->view('categories/index', ['products'=>$products, 'param'=>$param]);
	}
}