<?php
require_once "../modules/crud.php";

# process delete post
if (isset($_POST["submit"])) {
    # delete product
    $deleted = delete($_POST["id"]);

    # log state
    echo $deleted ? "Product successfully deleted." : "Failed to delete product";
    header("Refresh: 0; url=product_list.php");
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
    <title>Confirm Product Removal</title>
</head>

<body>
    <form action="" method="post">
        <h1>Are you sure you want to remove <strong><?php echo htmlspecialchars($product["Name"]) ?></strong> from products table?</h1>
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($product["ID"]) ?>">
        <div>
            <button type="submit" name="submit">Yes</button>
            <a href="./product_list.php">No</a>
        </div>
    </form>
</body>

</html>