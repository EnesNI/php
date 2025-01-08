<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("DELETE FROM products WHERE ID = ?");
    $stmt->execute([$id]);
}

header('Location: admin.php');
?>
