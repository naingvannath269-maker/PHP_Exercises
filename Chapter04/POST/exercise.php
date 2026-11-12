<?php

declare(strict_types=1);
$errors = [];
$name = '';
$email = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');

    if (empty($name)) {
        $errors['name'] = "សូមបញ្ចូលឈ្មោះ!";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "អ៊ីមែលមិនត្រឹមត្រូវ!";
    }

    if (empty($errors)) {
        header("Location: secure_register_app.php?success=1");
        exit();
    }
}
?>
<form method="POST">
    <input type="text" name="name" value="<?= htmlspecialchars($name) ?>">
    <span style="color:red;"><?= $errors['name'] ?? '' ?></span><br>

    <input type="email" name="email" value="<?= htmlspecialchars($email) ?>">
    <span style="color:red;"><?= $errors['email'] ?? '' ?></span><br>
    <button type="submit">Register</button>
</form>