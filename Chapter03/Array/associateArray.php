<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>
    <?php
        $person = array(
            "name" => "John",
            "age" => 30,
            "city" => "New York"
        );
        
        echo "Name: " . $person["name"] . "<br>";
        echo "Age: " . $person["age"] . "<br>";
        echo "City: " . $person["city"] . "<br>";
        ?>
</body>
</html>