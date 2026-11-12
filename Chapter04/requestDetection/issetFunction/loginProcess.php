<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Process</title>
</head>

<body>
    <?php
    if (isset($_POST['submitLogin'])) {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
        echo "Username: " . $username . "<br>";
        echo "Password: " . $password . "<br>";
    } else {
        echo "Form not submitted.";
    }
    ?>
</body>

</html>