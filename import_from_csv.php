<?php
error_reporting(E_ERROR);
try {
    $connection = new mysqli('localhost','root','','db_sdc_2081_a');
    if ($connection->connect_errno != 0) {
        throw new Exception('Database connection error');
    }
    $file = "products.csv";
    if (($handle = fopen($file, "r")) !== FALSE) {
        // Skip header row
        fgetcsv($handle, 1000, ",");
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $id = $data[0];
            $name = $data[1];
            $price = $data[2];
            $sql = "INSERT INTO tbl_products(id, name, price)
                    VALUES('$id', '$name', '$price')";
            //execute query
            $connection->query($sql);
        }
        fclose($handle);
        echo "Data imported successfully from CSV file.";
    }
} catch (Exception $ex) {
    die($ex->getMessage());
    
}
?>