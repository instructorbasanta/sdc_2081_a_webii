<?php
error_reporting(E_ERROR);
try {
    $connection = new mysqli('localhost','root','');
    if ($connection->connect_errno != 0) {
        throw new Exception('Database connection error');
    }
    echo "Connection success";
} catch (Exception $ex) {
    die($ex->getMessage());
    
}
?>