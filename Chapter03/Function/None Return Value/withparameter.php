<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>With Parameter</title>
</head>

<body>
    <?php
    function ShowText($name, $age)
    {
        echo $name . " is " . $age . " years old";
    }
    ShowText("Naing Vannath", 21);
    ?>
</body>

</html>