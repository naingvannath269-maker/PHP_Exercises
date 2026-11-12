<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Array With Foreach</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
        $products = [
            ["id"=>1, "name" => "Product 1", "price" => 10.99, "quantity" => 5],
            ["id"=>2, "name" => "Product 2", "price" => 19.99, "quantity" => 3],
            ["id"=>3, "name" => "Product 3", "price" => 5.99, "quantity" => 10],
            ["id"=>4, "name" => "Product 4", "price" => 11.99, "quantity" => 5],
            ["id"=>5, "name" => "Product 5", "price" => 19.99, "quantity" => 3],
            ["id"=>6, "name" => "Product 6", "price" => 5.99, "quantity" => 10],
            ["id"=>7, "name" => "Product 7", "price" => 15.99, "quantity" => 7],
            ["id"=>8, "name" => "Product 8", "price" => 9.99, "quantity" => 12],
            ["id"=>9, "name" => "Product 9", "price" => 14.99, "quantity" => 4],
            ["id"=>10, "name" => "Product 10", "price" => 7.99, "quantity" => 8],
            ["id"=>11, "name" => "Product 11", "price" => 13.99, "quantity" => 6],
            ["id"=>12, "name" => "Product 12", "price" => 16.99, "quantity" => 9],
            ["id"=>13, "name" => "Product 13", "price" => 8.99, "quantity" => 11],
            ["id"=>14, "name" => "Product 14", "price" => 12.99, "quantity" => 2],
            ["id"=>15, "name" => "Product 15", "price" => 17.99, "quantity" => 1],
            ["id"=>16, "name" => "Product 16", "price" => 12.99, "quantity" => 2],
            ["id"=>17, "name" => "Product 17", "price" => 17.99, "quantity" => 1]
        ];
        
    ?>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">Product Id</th>
                <th scope="col">Product Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($products as $item) {
                    $productId = $item['id'];
                    $productName = $item['name'];
                    $productPrice = $item['price'];
                    $productQuantity = $item['quantity'];
                    $productTotal = $productPrice * $productQuantity;
            ?>
                <tr>
                    <th scope="row"><?php echo $productId; ?></th>
                    <td><?php echo $productName; ?></td>
                    <td><?php echo $productPrice; ?></td>
                    <td><?php echo $productQuantity; ?></td>
                    <td><?php echo $productTotal; ?></td>
                </tr>  
            <?php 
            }
            ?>
        </tbody>
    </table>
</body>
</html>