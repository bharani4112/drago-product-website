<?php
include 'auth.php';
include '../config/db.php';

if (isset($_POST['submit'])) {

    $title = trim($_POST['title']);
    $description = trim($_POST['description']);

    $imageName = $_FILES['image']['name'];
    $imageTmp = $_FILES['image']['tmp_name'];

    $ext = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));
    $allowed = ['jpg', 'jpeg', 'png', 'webp'];

    if (!in_array($ext, $allowed)) {
        $error = "Invalid image type";
    } else {
        $newImageName = time() . '_' . rand(1000, 9999) . '.' . $ext;
        move_uploaded_file($imageTmp, "../uploads/products/" . $newImageName);

        $stmt = mysqli_prepare(
            $conn,
            "INSERT INTO products (title, description, image) VALUES (?, ?, ?)"
        );
        mysqli_stmt_bind_param($stmt, "sss", $title, $description, $newImageName);
        mysqli_stmt_execute($stmt);

        header("Location: dashboard.php");
        exit;
    }
}


?>
<!DOCTYPE html>
<html>

<head>
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body class="bg-dark text-warning">

    <div class="container mt-4">
        <h4>Add Product</h4>

        <?php if (isset($error))
            echo "<p class='text-danger'>$error</p>"; ?>

        <form method="POST" enctype="multipart/form-data">
            <input type="text" name="title" class="form-control mb-2" placeholder="Product Title" required>

            <textarea name="description" class="form-control mb-2" placeholder="Product Description"
                required></textarea>

            <input type="file" name="image" class="form-control mb-3" required>

            <button name="submit" class="btn btn-warning">Save Product</button>
            <a href="dashboard.php" class="btn btn-secondary">Back</a>
        </form>
    </div>

</body>

</html>