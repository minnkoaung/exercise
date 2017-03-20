<?php 
function load_view($page, $data = null) {
	$file = DD . "/app/view/" . $page . ".php";
	if(file_exists($file)) {
		ob_start();
		if($data != null) {
			extract($data);
		}
		require $file;
		ob_end_flush();
	} else {
		trigger_error(_lang('developer.view_file_not_found'), E_USER_ERROR);
	}
}
/**
* to dump value and die when it is true
*/
function _lang($message) {
	$folder = _c("app.locale");
	$e_message = explode(".", $message);
	$file = DD . "/wpa26/lang/" . $folder . "/" . $e_message[0] . ".php";
	if(file_exists($file)) {
		$lang_data = require $file;
		if(array_key_exists($e_message[1], $lang_data)) {
			return $lang_data[$e_message[1]];

		} else {
			trigger_error("Lang key not found!", E_USER_ERROR);
		}
	} else {
		trigger_error("Lang File Not Found!", E_USER_ERROR);
	}
}

function _c($value) {
	$e_value = explode(".", $value);
	$config_file = DD . "/app/config/" . $e_value[0] . ".php";
	if(file_exists($config_file)) {
		$config_data = require $config_file;
		if(array_key_exists($e_value[1], $config_data)) {
			return $config_data[$e_value[1]];	
		} else {
			trigger_error("Config Key Not Found!", E_USER_ERROR);
		}
		
	} else {
		trigger_error("Config file not found!", E_USER_ERROR);
	}
}

function _db_get_select($table_name, $columns) {
	
	$servername = _c("database.server_name");
	$username = _c("database.username");
	$password = _c("database.password");
	$dbname = _c("database.db_name");

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$arr = $columns;
	$new_arr = implode("", $arr);
	$sql = "SELECT ". $new_arr. " FROM " . $table_name ;
	//var_dump($sql);die();
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
    	$fetch_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
	} else {
		$fetch_data = [];
	}
	mysqli_free_result($result);
	mysqli_close($conn);
	return $fetch_data;
}

function _db_delete_id($table_name, $id) {
	$servername = _c("database.server_name");
	$username = _c("database.username");
	$password = _c("database.password");
	$dbname = _c("database.db_name");
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "DELETE FROM ". $table_name. " WHERE id= " .$id ;
	
	if (mysqli_query($conn, $sql)) {
    	echo "<div class='alert alert-success'>Record Deleted successfully</div>";
	} else {	
		echo " ေသခ်ာျကည့္ေလငတံုးရဲ့";
	}
	mysqli_close($conn);
}

function _db_get_all($table_name) {
	$servername = _c("database.server_name");
	$username = _c("database.username");
	$password = _c("database.password");
	$dbname = _c("database.db_name");

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	// echo "Connected successfully";
	$sql = "SELECT * FROM " . $table_name ;
	$result = mysqli_query($conn, $sql);
	//dump($result, true);
	if (mysqli_num_rows($result) > 0) {
    	$fetch_data = mysqli_fetch_all($result, MYSQLI_ASSOC);
	} else {
		$fetch_data = [];
	}
	mysqli_free_result($result);

	mysqli_close($conn);
	return $fetch_data;
}

function _db_get_insert($table_name,$field_name,$stock_value) {
	$servername = _c("database.server_name");
	$username = _c("database.username");
	$password = _c("database.password");
	$dbname = _c("database.db_name");

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	// echo "Connected successfully";

	$field_str = implode("", $field_name);

	
	
	//var_dump($stock_value);
	
	$stock_str = implode("", $stock_value);
	//var_dump($stock_str);die();
	$sql = "INSERT INTO ".$table_name." (".$field_str.") VALUES(".$stock_str.")";
	//var_dump($sql);die();
	$result = mysqli_query($conn, $sql);
	if (mysqli_query($conn, $sql)) {
    echo "<div class='alert alert-success'>New record created successfully</div>";
		} else {
		    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	mysqli_close($conn);
	return $result;
}

function dump($value, $die = false) {
	var_dump($value);
	if($die == true) {
		die();
	}
}


 ?>