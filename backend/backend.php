<?php
// Connect to the database
include 'database_connection/database.php';

if (isset($_POST['submit'])) {
    // Database insert
    $productname = $_POST['productname'];
    $productid = $_POST['productid'];
    $SKU = $_POST['SKU'];
    $quantity = $_POST['quantity'];
    $productPrice = $_POST['productPrice'];
    $category = $_POST['category'];
    $manufactureDate = $_POST['manufactureDate'];
    $expiryDate = $_POST['expiryDate'];

    // Updated SQL query to match database column names
    $sql = "INSERT INTO `crud`(product_name, Product_ID, SKU, Quantity, Price, Category, Manufacture_date, Expire_date)
            VALUES ('$productname', '$productid', '$SKU', '$quantity', '$productPrice', '$category', '$manufactureDate', '$expiryDate')";

    // Execute query and check for success
    if (mysqli_query($conn, $sql)) {
        echo "Product added successfully.";
    } else {
        die("Error inserting data: " . mysqli_error($conn));
    }
}
?>
