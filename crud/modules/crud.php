<?php
require_once "pdo.php";

# Create
function insert(string $name, string $description, string $price, string $quantity) : bool {
    global $conn;

    # insert params
    $sql = "INSERT INTO products(Name, Description, Price, Quantity) VALUES(?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array($name, $description, $price, $quantity));

    # return status
    return $stmt->rowCount() > 0;
}

# Retrieve
function retrieve(int $id) : array {
    global $conn;

    # get by id
    $sql = "SELECT * FROM products WHERE ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array($id));
    
    # return assoc array
    return $stmt->fetch();
}

function retrieveAll(int $limit = 50) : array {
    global $conn;

    # get all
    $sql = "SELECT * FROM products LIMIT ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array($limit));
    
    # return array of assoc array
    return $stmt->fetchAll();
}

# Update
function update(int $id, string $name, string $description, string $price, string $quantity) : bool {
    global $conn;

    # update by id
    $sql = "UPDATE products SET Name = ?, Description = ?, Price = ?, Quantity = ? WHERE ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array($name, $description, $price, $quantity, $id));

    # return status
    return $stmt->rowCount() > 0; // ? "Successfully updated products table." : "Failed to update products table.";
}

# Delete
function delete(int $id) : bool {
    global $conn;

    # delete by id
    $sql = "DELETE FROM products WHERE ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array($id));

    # return status
    return $stmt->rowCount() > 0;
}