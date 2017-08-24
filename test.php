<?php
	
try {

    $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
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
    // //$options = [];
    // $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
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