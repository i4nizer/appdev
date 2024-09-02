<?php
require_once "../modules/crud.php";


# process post
if (isset($_POST["submit"])) {
    # update product
    $updated = update($_POST["id"], $_POST["name"], $_POST["description"], $_POST["price"], $_POST["quantity"]);

    # log state
    echo $updated ? "Product successfully updated" : "Failed to update product";
}


# init product assoc array
$product = array();

# product id required
if (count($_GET) == 0 || !isset($_GET["id"])) {
    # redirect to product list
    header("Refresh: 0; url=product_list.php");
} else {
    # retrieve product by id from database
    $product = retrieve($_GET["id"]);

    # check if product exists
    if (count($product) == 0) {
        echo "Product not found.";
        header("Refresh: 0; url=product_list.php");
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/base.css">
    <title>Edit Product</title>
</head>

<body>
    <a href="./product_list.php">Product lists</a>
    <form action="" method="post">
        <h1>Edit Product</h1>

        <input type="hidden" name="id" value="<?php echo htmlspecialchars($product["ID"]) ?>">

        <label for="name">Name: </label>
        <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($product["Name"]) ?>">

        <label for="description">Description: </label>
        <input type="text" name="description" id="description" value="<?php echo htmlspecialchars($product["Description"]) ?>">

        <label for="price">Price: </label>
        <input type="text" name="price" id="price" value="<?php echo htmlspecialchars($product["Price"]) ?>">

        <label for="quantity">Quantity: </label>
        <input type="text" name="quantity" id="quantity" value="<?php echo htmlspecialchars($product["Quantity"]) ?>">

        <button type="submit" name="submit">Update</button>
    </form>
</body>

</html>