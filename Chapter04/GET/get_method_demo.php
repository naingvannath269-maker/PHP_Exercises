<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get method demo</title>
</head>

<body>
    <?php
    $keyword = $_GET['q'] ?? '';
    $category = $_GET['cat'] ?? 'all';
    ?>
    <form method="GET" action="get_method_demo.php">
        <input type="text" name="q" value="<?= htmlspecialchars($keyword) ?>" placeholder="ស្វែងរក...">
        <button type="submit">ស្វែងរក</button>
    </form>

    <?php if (!empty($keyword)): ?>
        <p>លទ្ធផលស្វែងរកសម្រាប់៖ <b><?= htmlspecialchars($keyword) ?></b> (ប្រភេទ៖ <?= htmlspecialchars($category) ?>)</p>
    <?php endif; ?>
</body>

</html>