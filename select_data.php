<pre>
<?php
error_reporting(E_ERROR);
try {
    $connection = new mysqli('localhost','root','','db_sdc_2081_a');
    if ($connection->connect_errno != 0) {
        throw new Exception('Database connection error');
    }
    $sql = "select * from tbl_products";
    $result = $connection->query($sql);
    print_r($result);
    $data = [];
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()){
            array_push($data,$row);
      }
    } else {
        echo "Data not found";
    }
    print_r($data);
} catch (Exception $ex) {
    die($ex->getMessage()); 
}
?>