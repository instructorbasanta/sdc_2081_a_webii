<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Array and loop example</h1>
    <?php
        // Using for loop
        $subjects = ['OS','DBMS','WEB II','CA','ECO'];
        echo '<ul>';
        for ($i=0; $i <count($subjects) ; $i++) { 
            echo '<li>' .$subjects[$i] . '</li>';
        }
        echo '</ul>';
        echo '<table border="1">';
        echo '<tr><th>SN</th><th>Subject</th>';
        for ($i=0; $i <count($subjects) ; $i++) { 
            echo '<tr>';
            echo '<td>' . $i +1 . '</td>';
            echo '<td>' .$subjects[$i] . '</td>';
            echo '</tr>';
        }
        echo '</table>';

        //using foreach
        echo '<ul>';
        foreach($subjects as $subject){
            echo '<li>' . $subject . '</li>';
        }
        echo '</ul>';
        //using foreach for table
        echo '<table border="1">';
        echo '<tr><th>SN</th><th>Subject</th>';
        foreach($subjects as $index => $subjectname) { 
            echo '<tr>';
            echo '<td>' . $index +1 . '</td>';
            echo '<td>' .$subjectname . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        $subjects_with_code = ['IT201' => 'OS','IT202' => 'DBMS',
        'IT203' => 'WEB II','AC204' => 'CA','EC205' => 'ECO'];
        echo '<table border="1">';
        echo '<tr><th>SN</th><th>Subject</th>';
        foreach($subjects_with_code as $code => $subjectname) { 
            echo '<tr>';
            echo '<td>' . $code . '</td>';
            echo '<td>' .$subjectname . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        $students = [
            [20,'Ranjit','info@ranjit.com','BIM 4th'],
            [22,'Ranju','info@ranju.com','BBM 4th'],
            [23,'Manju','info@manju.com','BIM 5th'],
            [43,'Sanju','info@sanju.com','BBM 6th'],
        ];
        echo '<table border="1">';
        echo '<tr><th>Roll</th><th>Name</th><th>Email</th><th>Class</th></tr>';
        for ($i=0; $i < count($students); $i++) { 
            echo '<tr>';
            echo '<td>' . $students[$i][0] . '</td>';
            echo '<td>' .$students[$i][1] . '</td>';
            echo '<td>' .$students[$i][2] . '</td>';
            echo '<td>' .$students[$i][3] . '</td>';
            echo '</tr>';
        }
        echo '</table>';


    ?>
</body>
</html>