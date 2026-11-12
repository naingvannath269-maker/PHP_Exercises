<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Without Parameter</title>
</head>

<body>
    <?php
    function showMessage()
    {
        echo "Hello World!";
    }

    function welcome()
    {
        echo "<br>";
        echo "Welcome to Angkor University!";
    }

    welcome();
    showMessage();
    ?>
</body>

</html>