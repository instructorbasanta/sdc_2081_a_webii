<?php
error_reporting(E_ERROR);
try {
    $connection = new mysqli('localhost','root','');
    if ($connection->connect_errno != 0) {
        throw new Exception('Database connection error');
    }
    $sql = "create database if not exists db_sdc_2081_a";
    if ($connection->query($sql)) {
        echo "Database created successfully";
    } else {
        throw new Exception('Database creation error');
    }
} catch (Exception $ex) {
    die($ex->getMessage());
    
}
?>