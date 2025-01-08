<?php 
include('db.php');

// Get product ID from the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch product details from the database
    $stmt = $pdo->prepare("SELECT * FROM products WHERE ID = ?");
    $stmt->execute([$id]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$product) {
        echo "Product not found!";
        exit;
    }

    // Handle form submission to update the product
    if (isset($_POST['updateProduct'])) {
        $title = $_POST['title'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $stock = $_POST['stock'];

        // Update product in the database
        $updateStmt = $pdo->prepare("UPDATE products SET title = ?, price = ?, description = ?, stock = ? WHERE ID = ?");
        $updateStmt->execute([$title, $price, $description, $stock, $id]);

        // Redirect back to the admin page after successful update
        header("Location: admin.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Edit Product</h1>
        
        <form method="POST" action="edit.php?id=<?php echo $product['ID']; ?>">
            <label for="title">Title:</label><br>
            <input type="text" name="title" value="<?php echo $product['title']; ?>" required><br><br>

            <label for="price">Price:</label><br>
            <input type="number" name="price" step="0.01" value="<?php echo $product['price']; ?>" required><br><br>

            <label for="description">Description:</label><br>
            <textarea name="description" required><?php echo $product['description']; ?></textarea><br><br>

            <label for="stock">Stock:</label><br>
            <input type="number" name="stock" value="<?php echo $product['stock']; ?>" required><br><br>

            <button type="submit" name="updateProduct">Update Product</button>
        </form>

        <br>
        <a href="admin.php">Back to Product List</a>
    </div>
</body>
</html>
