<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Method</title>
</head>

<body>
    <?php
    $name = $_GET["name"];
    $email = $_GET["email"];
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    ?>
    <form action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>