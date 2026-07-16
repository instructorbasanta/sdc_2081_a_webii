<?php
 error_reporting(E_ERROR);
$err = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   if (isset($_POST['id']) && !empty($_POST['id']) && trim($_POST['id'])) {
        $id = $_POST['id'];
        if (filter_var($id, FILTER_VALIDATE_INT) === false) {
            $err['id'] = "Product ID must be an integer.";
        }
   } else {
        $err['id'] =  "Product ID is required.";
   }

    if (isset($_POST['name']) && !empty($_POST['name']) && trim($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $err['name'] =  "Product Name is required.";
    }

    if (isset($_POST['price']) && !empty($_POST['price']) && trim($_POST['price'])) {
        $price = $_POST['price'];
        if (!is_numeric($price)) {
            $err['price'] =  "Product Price must be number is required.";
        }
    } else {
        $err['price'] =  "Product Price is required.";
    }

    if (count($err) === 0) {
        try {
            $connection = new mysqli('localhost','root','','db_sdc_2081_a');
            if ($connection->connect_errno != 0) {
                throw new Exception('Database connection error');
            }
        //insert data  sql
        $sql = "insert into tbl_products(id,name,price) values ($id,'$name',$price)";
            //execute query
            $connection->query($sql);
            //check for insert confirmations
        if($connection->affected_rows == 1){
                $success =  "Record Inserted successfully";
        } else {
            throw new Exception("Error on record creation");
        }
        } catch (Exception $ex) {
            die($ex->getMessage());
            
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, sans-serif;
        }

        body{
            background:#f2f2f2;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .container{
            width:350px;
            background:#fff;
            padding:25px;
            border-radius:8px;
            box-shadow:0 0 10px rgba(0,0,0,0.2);
        }
        a{
            display:inline-block;
            margin-bottom:20px;
            text-decoration:none;
            color:white;
            background:#008988;
            padding:10px 20px;
            border-radius:5px;
        }
        h2{
            text-align:center;
            margin-bottom:20px;
        }

        label{
            display:block;
            margin-top:12px;
            margin-bottom:5px;
            font-weight:bold;
        }

        input{
            width:100%;
            padding:10px;
            border:1px solid #ccc;
            border-radius:5px;
        }

        input[type="submit"]{
            background:#007BFF;
            color:white;
            border:none;
            margin-top:20px;
            cursor:pointer;
            font-size:16px;
        }

        input[type="submit"]:hover{
            background:#0056b3;
        }
        .error{
            color:red;
            font-size:12px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Product Form</h2>
    <a href="list_table.php">List Product</a>
        <?php if(isset($success)) { ?>
            <p style="color:green;"><?php echo $success; ?></p>
        <?php } ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <label for="id">Product ID</label>
        <input type="text" id="id" name="id" value="<?php echo $id??'' ?>" placeholder="Enter Product ID">
        <span class="error"><?php echo $err['id'] ?? ''; ?></span>
        <label for="name">Product Name</label>
        <input type="text" id="name" name="name" value="<?php echo $name??'' ?>" placeholder="Enter Product Name">
        <span class="error"><?php echo $err['name'] ?? ''; ?></span>
        <label for="price">Price</label>
        <input type="text" id="price" value="<?php echo $price??'' ?>" name="price" placeholder="Enter Price">
        <span class="error"><?php echo $err['price'] ?? ''; ?></span>
        <input type="submit" value="Save">
    </form>
</div>

</body>
</html>