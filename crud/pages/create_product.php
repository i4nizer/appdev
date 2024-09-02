<?php
require_once "../modules/crud.php";

# process post
if (isset($_POST["submit"])) {
    # insert data posted
    $success = insert($_POST["name"], $_POST["description"], $_POST["price"], $_POST["quantity"]);

    # log state
    echo $success ? "Successfully added to products table." : "Failed to add to products table.";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/base.css">
    <title>Create Product</title>
</head>

<body>
    <a href="./product_list.php">Product lists</a>
    <form action="" method="post">
        <h1>Create New Product</h1>
        <label for="name">Name: </label> <input type="text" name="name" id="name">
        <label for="description">Description: </label> <input type="text" name="description" id="description">
        <label for="price">Price: </label> <input type="text" name="price" id="price">
        <label for="quantity">Quantity: </label> <input type="text" name="quantity" id="quantity">
        <button type="submit" name="submit">Create</button>
    </form>
</body>

</html>