<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = 'Ram';
    $email = 'ram@gmail.com';
        echo 
        '<table border="2">
            <tr>
                <th>Name</th>
                <td> ' .$name . '</td>
            </tr>
            <tr>
                <th>Email</th>
                <td> ' . $email . '</td>
            </tr>
            <tr>
                <th>Address</th>
                <td></td>
            </tr>
        </table>';
    ?>
</body>
</html>