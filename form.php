<?php
$error = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   if (isset($_POST['name']) && !empty($_POST['name']) && trim($_POST['name'])) {
        $name =  $_POST['name'];
        if (!preg_match('/^([A-Z][a-z\s]+){2,}$/',$name)) {
          $error['name'] = 'Enter valid name';
        }
   } else {
    $error['name'] =  'Enter name';
   }

   if (isset($_POST['address']) && !empty($_POST['address']) && trim($_POST['address'])) {
        $address =  $_POST['address'];
    } else {
        $error['address'] =  'Enter address';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
        1. form tag must contain action attribute:location to send form data, default : same page url
        2. from tag must contain mehthod attribute: process of sending form data to specified action: get, post, put, patch, delete, head
        3. form control elements, must contain name attribute
        4. access form data in PHP using $_GET or $_POST variable, use form control elements name as an index of super global variable/array
        5. use enctype="multipart/form-data" attribute inside opening form tag: to upload image into server
      -->
    <form action="" method="post">
        <label for="">Name</label>
        <input type="text" name="name"  placeholder="Enter name" value="<?php echo $name??'' ?>" />
        <?php echo $error['name']??''; ?>
        <br />
        <label for="address">Address</label>
        <input type="text" name="address" value="<?php echo $address??'' ?>"  placeholder="Enter address" />
        <?php echo $error['address']??''; ?>
        <br />
        <input type="submit" name="register" value="Register">
    </form>
</body>
</html>