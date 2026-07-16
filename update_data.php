<?php
error_reporting(E_ERROR);
try {
    $connection = new mysqli('localhost','root','','db_sdc_2081_a');
    if ($connection->connect_errno != 0) {
        throw new Exception('Database connection error');
    }
   //update data  sql
   $sql = "update  tbl_products set name='New Laptop' where id=101";
    //execute query
    $connection->query($sql);
    //check for update confirmations
   if($connection->affected_rows == 1){
        echo "Record Updated successfully";
   } else {
    throw new Exception("Error on record update");
   }
} catch (Exception $ex) {
    die($ex->getMessage());
    
}
?>