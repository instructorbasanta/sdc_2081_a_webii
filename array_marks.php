<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .Pass{
            background-color:#0f7;
            color: #fff;
        }
        .Fail{
            background-color:#f70;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Array with Associative Index</h1>
    <?php
        $marks = [
            ['name' => 'Rajesh','roll' => 67, 'web' => 50, 'DBMS' => 78, 'OS' => 54],
            ['name' => 'Manish','roll' => 54, 'web' => 32, 'DBMS' => 45, 'OS' => 46],
            ['name' => 'Dinesh','roll' => 23, 'web' => 76, 'DBMS' => 23, 'OS' => 76],
            ['name' => 'Rasmi','roll' => 34, 'web' => 87, 'DBMS' => 98, 'OS' => 87],
        ];
    ?>
    <table border="1">
        <tr>
            <th>SN</th>
            <th>Name</th>
            <th>Roll</th>
            <th>Web</th>
            <th>DBMS</th>
            <th>OS</th>
            <th>Total</th>
            <th>Result</th>
        </tr>
        <?php foreach($marks as $index => $mark){
             if ($mark['web'] >= 40 && $mark['DBMS'] >= 40 && $mark['OS'] >= 40) {
                $result =  'Pass';
            } else {
                $result =  'Fail';
            }
            ?>
            <tr>
                <td><?php echo $index+1 ?></td>
                <td><?php echo $mark['name'] ?></td>
                <td><?php echo $mark['roll'] ?></td>
                <td><?php echo $mark['web'] ?></td>
                <td><?php echo $mark['DBMS'] ?></td>
                <td><?php echo $mark['OS'] ?></td>
                <td><?php echo $mark['web'] + $mark['DBMS'] + $mark['OS'] ?></td>
                <td class='<?php echo $result; ?>'><?php echo $result ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>