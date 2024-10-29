<?php
//connect to databse
include 'database.php';

// connect to the front end



if (isset($_POST['submit']))
//databse insert
{
$productname=$_POST['productname'];
 $productid=$_POST['productid'];
  $SKU = $_POST['SKU'];
  $quantity=$_POST['quantity'];
  $productPrice=$_POST['productPrice'];
  $category=$_POST['category'];
  $manufactureDate=$_POST['manufactureDate'];
  $expiryDate=$_POST['expiryDate'];



  $sql = "INSERT INTO `crud`(productname, productid, SKU, quantity, productPrice, category, manufactureDate, expiryDate)
            VALUES ('$productname', '$productid', '$SKU', '$quantity', '$productPrice', '$category', '$manufactureDate', '$expiryDate')";

    // Execute query and check for success
    if (mysqli_query($conn, $sql))
        {
        echo "Product added successfully.";
        
        } else {
        die("Error inserting data: " . mysqli_error($conn));
    }
}
?>

