<?php
include 'auth.php';
include '../config/db.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    header("Location: dashboard.php");
    exit;
}

// Fetch existing product
$stmt = mysqli_prepare($conn, "SELECT * FROM products WHERE id = ?");
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$product = mysqli_fetch_assoc($result);

if (!$product) {
    header("Location: dashboard.php");
    exit;
}

// Update logic
if (isset($_POST['update'])) {

    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $newImage = $_FILES['image']['name'];

    if ($newImage) {
        $ext = strtolower(pathinfo($newImage, PATHINFO_EXTENSION));
        $allowed = ['jpg', 'jpeg', 'png', 'webp'];

        if (!in_array($ext, $allowed)) {
            $error = "Invalid image type";
        } else {
            $newImageName = time() . '_' . rand(1000, 9999) . '.' . $ext;
            move_uploaded_file($_FILES['image']['tmp_name'], "../uploads/products/" . $newImageName);

            // delete old image
            if (file_exists("../uploads/products/" . $product['image'])) {
                unlink("../uploads/products/" . $product['image']);
            }

            $stmt = mysqli_prepare(
                $conn,
                "UPDATE products SET title=?, description=?, image=? WHERE id=?"
            );
            mysqli_stmt_bind_param($stmt, "sssi", $title, $description, $newImageName, $id);
            mysqli_stmt_execute($stmt);

            header("Location: dashboard.php");
            exit;
        }
    } else {
        // Update without image
        $stmt = mysqli_prepare(
            $conn,
            "UPDATE products SET title=?, description=? WHERE id=?"
        );
        mysqli_stmt_bind_param($stmt, "ssi", $title, $description, $id);
        mysqli_stmt_execute($stmt);

        header("Location: dashboard.php");
        exit;
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-warning">

    <div class="container mt-4">
        <h4>Edit Product</h4>

            <?php if (isset($error))
                echo "<p class='text-danger'>$error</p>"; ?>

        <form method="POST" enctype="multipart/form-data">
            <input type="text" name="title" class="form-control mb-2"
                value="<?php echo htmlspecialchars($product['title']); ?>" required>


                           <textarea name="description" class="form-control mb-2" required><?php
                           echo htmlspecialchars($product['description']);
                           ?></textarea>

            <p>Current Image:</p>
            <img src="../uploads/products/<?php echo $product['image']; ?>" height="80" class="mb-2">

            <input type="file" name="image" class="form-control mb-3">

            <button name="update" class="btn btn-warning">Update</button>
            <a href="dashboard.php" class="btn btn-secondary">Back</a>
        </form>
    </div>

</body>

</html>