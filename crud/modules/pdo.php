<?php
# connections details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appdev";
$dsn = "mysql:host=$servername;dbname=$dbname;charset=utf8mb4";

# optional attributes
$options = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false
);

# connection string for query
$conn = new PDO($dsn, $username, $password, $options);