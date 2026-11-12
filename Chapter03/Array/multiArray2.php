<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Array2</title>
</head>
<body>
    <?php
        $products = [
            ['Product 1', 10.99, 5],
            ['Product 2', 15.49, 3],
            ['Product 3', 7.99, 8]
        ];

        echo "The first product's name is: " . $products[0][0] . "<br>";
        echo "The second product's price is: $" . $products[1][1] . "<br>";
        echo "The third product's quantity is: " . $products[2][2] . "<br>";

    ?>
</body>
</html>