<?php
$conn = mysqli_connect("localhost", "root", "", "db_sdc_2081_a");
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="new_products.csv"');
$output = fopen("php://output", "w");
// CSV Header
fputcsv($output, array('ID', 'Name', 'Price','Created At'));
$sql = "SELECT * FROM tbl_products";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result))
{
    fputcsv($output, $row);
}
fclose($output);
exit;
?>
