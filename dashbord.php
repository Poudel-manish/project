 <?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  require($_SERVER['DOCUMENT_ROOT'] . "/stock/backend/backend.php");

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Product Dashboard</title>
</head>

<body>
  <!-- Navbar at the top -->
  <div class="navbar">
    <p>IMS</p>
  </div>


  <!-- Sidebar navigation -->
  <div class="sidebar" style="cursor: pointer;">
    <div class="sidebar-options">
      <div class="sidebar-option " onclick="showSection('dashboard')"><i class="fa-solid fa-gauge"></i>Dashboard</div>
      <div class="sidebar-option" onclick="showSection('productList')"><i class="fa-solid fa-cart-shopping"></i>Product List</div>
      <div class="sidebar-option" onclick="showSection('addProduct')"><i class="fa-solid fa-plus"></i>Add Product</div>
      <div class="sidebar-option" onclick="showSection('admin')"><i class="fa-solid fa-user-tie"></i>Admin</div>
      <div class="sidebar-option" onclick="logout()"><i class="fa-solid fa-right-from-bracket"></i>Log out</div>
    </div>
  </div>

  <!-- Main content area -->
  <div class="content">
    <!-- Dashboard Section -->
    <div id="dashboard" class="content-section active">
      <h1>Dashboard</h1>
      <p>Welcome to the Dashboard</p>
    </div>

    <!-- Product List Section -->
    <div id="productList" class="content-section">
      <h1>Product List</h1>
      <table>
        <thead>
          <tr>
            <th>Product Name</th>
            <th>P ID</th>
            <th>SKU</th>
            <th>Price</th>
            <th>Category</th>
            <th>Manu. Date</th>
            <th>Exp. Date</th>
          </tr>

        </thead>
        <tbody>
          <tr>
            <td>Product 1</td>
            <td>12345</td>
            <td>ABC123</td>
            <td>$50</td>
            <td>Category A</td>
            <td>01/01/2024</td>
            <td>01/01/2025</td>
          </tr>
          <tr>
            <td>Product 2</td>
            <td>12345</td>
            <td>ABC123</td>
            <td>$50</td>
            <td>Category A</td>
            <td>01/01/2024</td>
            <td>01/01/2025</td>
          </tr>
        </tbody>
      </table>
    </div>

    <form method="post" action="">
      <div id="addProduct" class="content-section">
        <h1>Add Product</h1>
        <label for="productname">Product Name:</label>
        <input type="text" id="productName" name="productname" />
        <label for="productid">Product ID:</label>
        <input type="text" id="productid" name="productid" />

        <label for="productPrice">Product Price:</label>
        <input type="text" id="productPrice" name="productPrice" />



        <label for="sku">SKU:</label>
        <input type="text" name="SKU" placeholder="SKU">


        <label for="quantity">Quantity:</label>
        <input type="text" id="QTY" name="quantity" />

        <label for="category">Category:</label>
        <select id="category" name="category">
          <option value="Category A">Category A</option>
          <option value="Category B">Category B</option>
          <option value="Category C">Category C</option>
        </select>

        <label for="manufactureDate">Manufacture Date:</label>
        <input type="date" id="manufactureDate" name="manufactureDate" />

        <label for="expiryDate">Expiry Date:</label>
        <input type="date" id="expiryDate" name="expiryDate" />

        <input type="submit" name="submit" value="Add Product" />
      </div>
    </form>
    <!-- Admin Section -->
    <div id="admin" class="content-section">
      <h1>Admin Settings</h1>
      <p>Manage your admin settings here.</p>
    </div>
  </div>

  <!-- JavaScript file -->
  <script src="script.js"></script>
</body>

</html> 