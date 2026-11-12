<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
</head>
<body>
    <?php    
        $name = "Vannath";
        $age = 20;
        $gender = "Male";
    ?>
    <div style="font-size: 3rem;">
        <?php echo "Name: ${name} <br>";?>
        <?php echo "Gender: ${gender}<br>";?>
        <?php echo "Name: ${age}<br>";?>
    </div>
</body>
</html>