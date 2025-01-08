<?php
include('db.php');

// Add Product functionality
if (isset($_POST['addProduct'])) {
    $title = $_POST['title'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $stock = $_POST['stock'];
    
    // Insert the new product into the database
    $stmt = $pdo->prepare("INSERT INTO products (title, price, description, stock) VALUES (?, ?, ?, ?)");
    $stmt->execute([$title, $price, $description, $stock]);
}

// Fetch all products from the database
$stmt = $pdo->query("SELECT * FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Product Management</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Product Management</h1>
        
        <!-- Add Product Form Toggle Button -->
        <button id="addProductBtn">Add Product</button>

        <!-- Add Product Form (Initially Hidden) -->
        <div id="addProductForm" style="display: none;">
            <h2>Add New Product</h2>
            <form method="POST" action="admin.php">
                <label for="title">Title:</label><br>
                <input type="text" name="title" required><br><br>
                
                <label for="price">Price:</label><br>
                <input type="number" name="price" step="0.01" required><br><br>
                
                <label for="description">Description:</label><br>
                <textarea name="description" required></textarea><br><br>
                
                <label for="stock">Stock:</label><br>
                <input type="number" name="stock" required><br><br>
                
                <button type="submit" name="addProduct">Add Product</button>
            </form>
        </div>

        <h2>Product List</h2>
        <table id="productTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Stock</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Loop through the products and display them in the table
                    foreach ($products as $product) {
                        echo "<tr>
                                <td>{$product['ID']}</td>
                                <td>{$product['title']}</td>
                                <td>{$product['price']}</td>
                                <td>{$product['description']}</td>
                                <td>{$product['stock']}</td>
                                <td>
                                    <button onclick='editProduct({$product['ID']})'>Edit</button>
                                    <button onclick='deleteProduct({$product['ID']})'>Delete</button>
                                </td>
                            </tr>";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Scripts for Interactivity -->
    <script src="scripts.js"></script>
</body>
</html>
