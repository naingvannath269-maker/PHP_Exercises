<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post method</title>
</head>

<body>
    <?php
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    ?>

    <form method="POST" action="post.php">
        <label>Name:</label>
        <input type="text" name="name"><br>
        <label>Email:</label>
        <input type="text" name="email"><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>