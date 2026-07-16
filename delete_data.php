<?php
error_reporting(E_ERROR);
try {
    $connection = new mysqli('localhost','root','','db_sdc_2081_a');
    if ($connection->connect_errno != 0) {
        throw new Exception('Database connection error');
    }
   //delete data  sql
   $sql = "delete from tbl_products where id=102";
    //execute query
    $connection->query($sql);
    //check for delete confirmations
   if($connection->affected_rows == 1){
        echo "Record Deleted successfully";
   } else {
    throw new Exception("Error on record deletion");
   }
} catch (Exception $ex) {
    die($ex->getMessage());
    
}
?>