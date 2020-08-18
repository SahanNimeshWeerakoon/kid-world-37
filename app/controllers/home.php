<?php
class Home extends Controller {
	public function index() {

		# insert value
		// $values = [
		// 	'title'=>'samaposha',
		// 	'description' => 'This is the description',
		// 	'available_amount'=>5,
		// 	'price'=>100.00,
		// 	'owner_id'=>1,
		// 	'image'=>'noimage.jpg'
		// ];

		// $pdo = self::insert('products', $values);

		# return a view with data
		// $this->view('home/index', ['name'=>$user->name]);

		# get values
		// $table = 'products';
		// $where = "title='samaposha'";	// Nullable
		// $fields = "title, description";	// If null everything is fetched
		// $products = self::read($table, $where, $fields);

		// foreach($products as $product) {
		// 	echo $product->title.'-'.$product->description.'<br />';
		// }


		# return a view with data
		$newProducts = self::getNewProducts();

		$this->view('home/index', ['products'=>$newProducts]);
	}
}