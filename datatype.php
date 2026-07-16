<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Type</title>
</head>
<body>
    <pre>
    <?php
        $name = 'Rajesh';
         var_dump($name);
        $age = 34;
         var_dump($age);
        $weight = 50.5;
         var_dump($weight);
         $married = true;
         var_dump($married);
         $subjects = ['OS','DCCN',
         'Web II','CA'];
         var_dump($subjects);

         class Student{
            public $name;
            private $age;
         }

         $ram = new Student();
         $ram->name = 'Ram Kumar';
         var_dump($ram);

         $salary  = null;
         var_dump($salary);

         $fp = fopen('datatype.php','r');
         var_dump($fp);
    ?>
</body>
</html>