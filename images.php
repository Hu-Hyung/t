<?php
// if (!empty($_GET['location'])) {
//     /**
//      * Here we build the url we'll be using to access the google maps api
//      */
//     $maps_url = 'https://' .
//         'maps.googleapis.com/' .
//         'maps/api/geocode/json' .
//         '?address=' . urlencode($_GET['location']);


//     $maps_json = file_get_contents($maps_url);
//     $maps_array = json_decode($maps_json, true);
//     $lat = $maps_array['results'][0]['geometry']['location']['lat'];
//     $lng = $maps_array['results'][0]['geometry']['location']['lng'];
//     /**
//      * Time to make our Instagram api request. We'll build the url using the
//      * coordinate values returned by the google maps api
//      */
//     $url = 'https://' .
//         'api.instagram.com/v1/media/search' .
//         '?lat=' . $lat .
//         '&lng=' . $lng .
//         '&client_id=CLIENT-ID'; //replace "CLIENT-ID"
//     $json = file_get_contents($url);
//     $array = json_decode($json, true);
// }else {
//     echo "empty";
// }
$user = $_GET['user'];

    
try {

    $client = new MongoDB\Client("mongodb://localhost:27017");
    
   // $collection = (new MongoDB\Client)->test->users;

   // $insertOneResult = $collection->insertOne(['_id' => 1, 'name' => 'Alice']);

   // printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());

   // var_dump($insertOneResult->getInsertedId());


    //$mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    //################################################
    //db.t1.find();
    //################################################
    // $query = new MongoDB\Driver\Query([]);      
    // $rows = $mng->executeQuery("test.t1", $query);
    // foreach ($rows as $row) {
    
    //     echo "$row->name : $row->age\n";
    // }

    //################################################
    //select by 
    //################################################
    // $filter = [ 'name' => 'Harold' ]; 
    // $query = new MongoDB\Driver\Query($filter);     
    // $res = $mng->executeQuery("test.t1", $query);    
    // $person = current($res->toArray());
    // if (!empty($person)) {
    
    //     echo $person->name, ": ", $person->age, PHP_EOL;
    // } else {
    //     echo "No match found\n";
    // }

    //################################################
    //projection -> shows stdClass objects
    //################################################
    // $filter = [];
    // $options = ["projection" => ['_id' => 0]];
    // $options = [];
    // $query = new MongoDB\Driver\Query($filter, $options);
    
    // $rows = $mng->executeQuery("test.t1", $query);
       
    // foreach ($rows as $row) {
    //     print_r($row);
    // }  
    
    //################################################
    //bulk write and select all
    //################################################
    // $bulk = new MongoDB\Driver\BulkWrite;
    // $doc = ['_id' => new MongoDB\BSON\ObjectID, 'name' => 'Stanley','age' => 24];
    // $bulk->insert($doc);
    // $bulk->update(['name' => 'John'], ['$set' => ['age' => 23]]);
    // $bulk->delete(['text' => 'hello world']);
    // $mng->executeBulkWrite('test.t1', $bulk);
        
    // $query = new MongoDB\Driver\Query([]);      
    // $rows = $mng->executeQuery("test.t1", $query);
    // foreach ($rows as $row) {
    
    //     echo "$row->name : $row->age\n";
    // }

    //################################################
    //bulk write delete row 
    //################################################
    // $bulk = new MongoDB\Driver\BulkWrite;
    // $bulk->delete(['name' => 'Stanley']);
    // $mng->executeBulkWrite('test.t1', $bulk);

} catch (MongoDB\Driver\Exception\Exception $e) {
    $filename = basename(__FILE__);
    echo "The $filename script has experienced an error.\n"; 
    echo "It failed with the following exception:\n";
    echo "Exception:", $e->getMessage(), "\n";
    echo "In file:", $e->getFile(), "\n";
    echo "On line:", $e->getLine(), "\n";       
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>geogram</title>
</head>
<body>
<form action="" method="get">
    <input type="text" name="user"/>
    <button type="submit">Submit</button>
</form>
<br/>
</body>
</html>