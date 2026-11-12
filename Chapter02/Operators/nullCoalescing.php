<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>null</title>
</head>
<body>
    <?php
        $name = $_GET['name'] ?? 'Guest';
        echo "Hello, $name!";
        $phone = "0969795312";
        $phone = $_GET["phone"] ?? "No phone number provided.";
        echo "<br>Phone: $phone";
    ?>
</body>
</html>