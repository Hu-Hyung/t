<?php
//$connection = new MongoClient(); // connects to localhost:27017
//$connection = new MongoClient( "mongodb://example.com" ); // connect to a remote host (default port: 27017)


require 'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
//phpinfo();
// header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
// header("Cache-Control: post-check=0, pre-check=0", false);
// header("Pragma: no-cache");
// require 'vendor/autoload.php';

// $client = new MongoDB\Client;

// $companydb = $client->companydb;


//mongodb://127.0.0.1:27017
//$manager = new MongoDB\Driver\Manager("mongodb://127.0.0.1:27017");
// var_dump($manager);
//require 'vendor/autoload.php';
 //$connection = new MongoClient("mongodb://127.0.0.1:27017"); // connect to a remote host at a given port
//$connection = new MongoDB\Driver\Manager(); // connect to a remote host at a given port
//$connection = new MongoDB\Driver\Manager("mongodb://127.0.0.1:27017"); // connect to a remote host at a given port
//$m = new MongoDB\Driver\Manager("mongodb://localhost:27017");

//$client = new MongoDB\Client("mongodb://127.0.0.1:27017");


function select(){
	$client = new MongoDB\Client("mongodb://127.0.0.1:27017");
	$collection = $client->test->t1;
	$result = $collection->find();
	$a = array();
	
	foreach ($result as $entry) {
	    // echo $entry['name'] . "\n";
	    $temp = array("name" => $entry['name'], "age" => $entry['age']);
	    //var_dump($temp);
	    array_push($a, $temp);
	}
	//return $a;
	echo json_encode($a);		
}
function insert($data){


	//echo $data[0] ."WHAT IS THIS!!";
	
	echo $data['user1'] . " TESTING |||";
	// foreach ($data as $k => $v) {
	// 	echo 'key: ' . $k . 'value: '.$v ."\n";
	// }
	
//	echo $_GET['user1'] ."this user ////";
		$client = new MongoDB\Client("mongodb://127.0.0.1:27017");	
		$collection = $client->test->t1;
		$result = $collection->insertOne( ['name' => 'Alice', 'age' => 21] );
		echo "((Inserted with Object ID '{$result->getInsertedId()}'";
	// echo $_GET['user1'];
	// if (!empty($_GET['user1'])) {
	// 	$client = new MongoDB\Client("mongodb://127.0.0.1:27017");	
	// 	$collection = $client->test->t1;
	// 	$result = $collection->insertOne( ['name' => 'Alice', 'age' => 21] );
	// 	echo "Inserted with Object ID '{$result->getInsertedId()}'";
	// }else {
	//     echo "empty";
	// }
}
// $collection = $client->test->t1;

// //$result = $collection->find( [ 'name' => 'Hinterland', 'brewery' => 'BrewDog' ] );

// $result = $collection->find();

// foreach ($result as $entry) {
//     // echo $entry['name'] . "\n";
//     echo json_encode($entry);
// }


$request_method = $_SERVER['REQUEST_METHOD'];
// echo $request_method;
switch($request_method) {
	case 'GET':
	    select();	
	    break;
	case 'POST':
	    insert($_POST);
	    //$this->request = $this->_cleanInputs($_POST);
	    break;
	case 'PUT':
	    //$this->request = $this->_cleanInputs($_GET);
	    //$this->file = file_get_contents("php://input");
	    break;
	// case 'DELETE':
	// 	break;

	default:
	    //$this->_response('Invalid Method', 405);
	    break;
}






// $arr = array();
// foreach ($result as $cc) {
// {
// 	echo $cc['name'] . "\n";

//     // $temp = array("name" => $c['name'], "age" => $c['age']);
//     // array_push($arr, $temp);
// }

// echo json_encode($arr, true);

//$m = new MongoDB\Driver\Manager("mongodb://localhost:27017");
//$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
// var_dump($manager);



//$mongo = new Mongo\Client\Manager(); // for default local connection - MongoDB library required

//$mongo = new Mongo\Driver\Manager('mongodb://localhost');


//$client = new MongoDB\Client("mongodb://127.0.0.1:27017");


// $collection = $client->demo->beers;

// $result = $collection->insertOne( [ 'name' => 'Hinterland', 'brewery' => 'BrewDog' ] );

// echo "Inserted with Object ID '{$result->getInsertedId()}'";
?>
