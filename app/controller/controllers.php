<?php 



function HomeController() {
	load_view("home");
}

function BlogController() {
	$data = [
		'title'	=> 'Myanmar Links',
		'another_title' => "One-Stop Knowledge Provider!",
		'test'	=> 'Another Test!',
		'stocks'	=> _db_get_all("stocks")
	];
	load_view("blog", $data);
}

function PageController() {
	_db_delete_id("stocks", 3);
	$stock_field = ['name',',','price'];
	$stock_value  = ["'TestDrive6'," , "800"];
	_db_get_insert("stocks",$stock_field,$stock_value);
	$data = [
	'title'	=> 'Myanmar Links',
		'another_title' => "One-Stop Knowledge Provider!",
		'test'	=> 'Another Test!',
		'stocks'	=> _db_get_all("stocks"),
		'categories'	=> _db_get_select("categories", ['name']),
		'another_title' => "One-Stop Knowledge Provider!",
	];
	load_view("tutu", $data);
}

function StockController() {
	//var_dump($_SERVER);
	$data = [
		'title'	=> 'Myanmar Links',
		'another_title' => "One-Stop Knowledge Provider!",
		'test'	=> 'Another Test!',
		'stocks'	=> _db_get_all("stocks")
	];	
	load_view("stocklist", $data);
}

function AddstockController(){
		$data = [
		'title'	=> 'Add Stock',
		'another_title' => "Add New Stock",
		'test'	=> 'Add New Stock Data',
		//'stocks'	=> _db_get_all("stocks")
	];
	load_view("insertstock",$data);	
}

function EditstockController() {
	$data = [
		'title'	=> 'Edit Stock',
		'another_title' => "Edit",
		'test'	=> 'Edit Stock Data',
		//'stocks'	=> _db_get_all("stocks")
	];
	load_view("editstock",$data);	
}

function UpdatestockController() {

	echo "This is Update Conroller";
	$name = $_POST['name'];
	$price=$_POST['price'];
	//load_view("editstock",$data);
	
}








?>