<?php
require_once "../modules/crud.php";

# retrieve products from database
$products = retrieveAll();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/base.css">
    <title>Product Management</title>
</head>

<body>
    <h1>Products List</h1>
    <a href="./create_product.php">Create new product</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?php echo htmlspecialchars($product["ID"]) ?></td>
                    <td><?php echo htmlspecialchars($product["Name"]) ?></td>
                    <td><?php echo htmlspecialchars($product["Description"]) ?></td>
                    <td><?php echo htmlspecialchars($product["Price"]) ?></td>
                    <td><?php echo htmlspecialchars($product["Quantity"]) ?></td>
                    <td>
                        <a href="./edit_product.php?id=<?php echo htmlspecialchars($product["ID"]) ?>">Edit</a>
                        <a href="./delete_product.php?id=<?php echo htmlspecialchars($product["ID"]) ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>