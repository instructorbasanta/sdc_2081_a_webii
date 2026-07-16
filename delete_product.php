<?php
error_reporting(E_ERROR);
$id = $_GET['pid'];
try {
    $connection = new mysqli('localhost','root','','db_sdc_2081_a');
    if ($connection->connect_errno != 0) {
        throw new Exception('Database connection error');
    }
   //delete data  sql
   $sql = "delete from tbl_products where id=$id";
    //execute query
    $connection->query($sql);
    //check for delete confirmations
   if($connection->affected_rows == 1){
    ?>
        <script>
            alert("Record Deleted successfully");
            setTimeout(() => {
                window.location.href = "list_table.php";
            }, 1000);
            
        </script>
    <?php 
    
   } else {
    throw new Exception("Error on record deletion");
   }
} catch (Exception $ex) {
    die($ex->getMessage());
    
}
?>