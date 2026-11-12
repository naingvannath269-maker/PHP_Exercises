<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical</title>
</head>
<body>
    <?php 
        $isTrue = true;
        $isFalse = false;
        echo "Logical AND:";
        echo $isTrue && $isFalse ? "true" : "false";
        echo "<br>";
        echo "Logical OR:";
        echo $isTrue || $isFalse ? "true" : "false";
        echo "<br>";
        echo "Logical NOT:";
        echo !$isTrue ? "true" : "false";
     ?>
</body>
</html>