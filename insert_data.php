<?php
error_reporting(E_ERROR);
try {
    $connection = new mysqli('localhost','root','','db_sdc_2081_a');
    if ($connection->connect_errno != 0) {
        throw new Exception('Database connection error');
    }
   //insert data  sql
   $sql = "insert into tbl_products(id,name,price) values (104,'Keyboard',500)";
    //execute query
    $connection->query($sql);
    //check for insert confirmations
   if($connection->affected_rows == 1){
        echo "Record Inserted successfully";
   } else {
    throw new Exception("Error on record creation");
   }
} catch (Exception $ex) {
    die($ex->getMessage());
    
}
?>