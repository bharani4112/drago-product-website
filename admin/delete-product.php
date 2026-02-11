<?php
include 'auth.php';
include '../config/db.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    header("Location: dashboard.php");
    exit;
}

// Fetch image name
$stmt = mysqli_prepare($conn, "SELECT image FROM products WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$product = mysqli_fetch_assoc($result);

if ($product) {

    // Delete image file
    $imagePath = "../uploads/products/" . $product['image'];
    if (file_exists($imagePath)) {
        unlink($imagePath);
    }

    // Delete DB row
    $stmt = mysqli_prepare($conn, "DELETE FROM products WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
}

header("Location: dashboard.php");
exit;
