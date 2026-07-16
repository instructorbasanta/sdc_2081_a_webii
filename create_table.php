<?php
error_reporting(E_ERROR);
try {
    $connection = new mysqli('localhost','root','','db_sdc_2081_a');
    if ($connection->connect_errno != 0) {
        throw new Exception('Database connection error');
    }
   //create table sql
   $sql = "create table if not exists tbl_products(
    id int unsigned primary key,
    name varchar(50) not null,
    price int not null,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP   
   )";
    //execute query
   if($connection->query($sql)){
        echo "Table created successfully";
   } else {
    throw new Exception("Error on table creation");
   }
} catch (Exception $ex) {
    die($ex->getMessage());
    
}
?>