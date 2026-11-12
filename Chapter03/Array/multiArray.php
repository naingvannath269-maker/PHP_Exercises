<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Array</title>
</head>
<body>
    <?php
        $students = array(
            "student1" => array("name" => "Alice", "age" => 20, "grade" => 85),
            "student2" => array("name" => "Bob", "age" => 22, "grade" => 90),
            "student3" => array("name" => "Charlie", "age" => 21, "grade" => 88)
        );
        echo "The first student's name is: " . $students["student1"]["name"] . "<br>";
        echo "The second student's age is: " . $students["student2"]["age"] . "<br>";
        echo "The third student's grade is: " . $students["student3"]["grade"] . "<br>";
    ?>
</body>
</html>