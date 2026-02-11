<?php
include 'auth.php';
include '../config/db.php';

$result = mysqli_query($conn, "SELECT * FROM products ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-warning">

    <div class="container mt-4">
        <h4>Admin Dashboard</h4>
        <a href="add-product.php" class="btn btn-warning mb-3">Add Product</a>

        <table class="table table-dark table-bordered align-middle">
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>

            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td>
                        <img src="../uploads/products/<?php echo $row['image']; ?>" height="50">
                    </td>
                    <td><?php echo htmlspecialchars($row['title']); ?></td>
                    <td>
                        <a href="edit-product.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-info">
                            Edit
                        </a>

                        <a href="delete-product.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger"
                            onclick="return confirm('Are you sure you want to delete this product?');">
                            Delete
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>

</body>

</html>