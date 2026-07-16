<?php
$error = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_FILES['profile']['error'] == 0) {
        $types = ['image/png','image/jpeg','image/gif'];
        if (in_array($_FILES['profile']['type'],$types)) {
            if ($_FILES['profile']['size'] < 100000) {
               if (move_uploaded_file($_FILES['profile']['tmp_name'],'images/' . $_FILES['profile']['name'])) {
               } else {
                    $error['profile'] = 'File upload failed';
               }
            } else {
                $error['profile'] = 'File size exceed: 100kb maximum';
            }
        } else {
            $error['profile'] = 'Please upload valid file type:png,jpeg,gif';
        }
    } else {
        $error['profile'] = 'Please upload file';
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
    <h1>File Upload</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>"
    enctype="multipart/form-data" method="post">
        <label for="profile">Profile Picture</label>
        <input type="file" name="profile" />
        <br />
        <?php echo $error['profile']??''; ?>
        <br />
        <input type="submit" name="Upload">
    </form>
</body>
</html>