<?php
error_reporting(E_ERROR);
try {
    $connection = new mysqli('localhost','root','','db_sdc_2081_a');
    if ($connection->connect_errno != 0) {
        throw new Exception('Database connection error');
    }
    $sql = "select * from tbl_products";
    $result = $connection->query($sql);
    $data = [];
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()){
            array_push($data,$row);
      }
    }
} catch (Exception $ex) {
    die($ex->getMessage()); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Table</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, sans-serif;
        }

        body{
            background:#f4f4f4;
            padding:40px;
        }

        h2{
            text-align:center;
            margin-bottom:20px;
        }
        a{
            display:inline-block;
            margin-left:15%;
            margin-bottom:20px;
            text-decoration:none;
            color:white;
            background:#008988;
            88;
            padding:10px 20px;
            border-radius:5px;
        }
        table{
            width:70%;
            margin:auto;
            border-collapse:collapse;
            background:white;
            box-shadow:0 0 10px rgba(0,0,0,0.2);
        }

        th, td{
            border:1px solid #ccc;
            padding:12px;
            text-align:center;
        }

        th{
            background:#007BFF;
            color:white;
        }

        tr:nth-child(even){
            background:#f2f2f2;
        }

        tr:hover{
            background:#ddd;
        }
        a.delete{
            color:white;
            background:#FF4C4C;
            padding:5px 10px;
            border-radius:3px;
        }

        a.edit{
            background-color: rgb(245, 235, 36);
            color: rgb(0, 0, 0);
            padding: 5px 10px;
            text-decoration: none;
        }
    </style>
</head>
<body>

<h2>Product Information</h2>
<a href="insert_form.php">Add New Product</a>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Action</th>
    </tr>
    <?php foreach($data as $product){ ?>
    <tr>
        <td><?php echo $product['id'] ?></td>
        <td><?php echo $product['name'] ?></td>
        <td><?php echo $product['price'] ?></td>
        <td>
        <a href="edit_form_data.php?pid=<?php echo $product['id'] ?>" class="edit">Edit</a> 
        <a class="delete" onclick="return confirm('Are you sure to delete?')" href="delete_product.php?pid=<?php echo $product['id'] ?>">Delete</a></td>
    </tr>
    <?php } ?>
</table>

</body>
</html>