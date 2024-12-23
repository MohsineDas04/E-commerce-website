<?php
session_start();
require_once '../includes/db_connection.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Fetch products
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products - E-Commerce Store</title>
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        .products-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .user-info {
            color: #2c3e50;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .product-card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
            transition: transform 0.3s ease;
        }

        .product-card:hover {
            transform: scale(1.05);
        }

        .product-name {
            color: #2c3e50;
            margin-bottom: 10px;
            font-size: 1.2em;
        }

        .product-description {
            color: #7f8c8d;
            margin-bottom: 15px;
        }

        .product-price {
            color: #27ae60;
            font-weight: bold;
            font-size: 1.3em;
        }

        .logout-btn {
            background-color: #e74c3c;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .logout-btn:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>
<div class="container">
        <div class="products-header">
            <h2>Our Products</h2>
            <a href="add_product.php" class="btn">Add New Product</a>
        </div>
        <div class="products-grid">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='product-card'>";
                    if (!empty($row['image_path'])) {
                        echo "<img src='../" . htmlspecialchars($row['image_path']) . "' alt='" . htmlspecialchars($row['name']) . "' style='max-width: 200px; height: auto; margin-bottom: 15px;'>";
                    }
                    echo "<h3 class='product-name'>" . htmlspecialchars($row['name']) . "</h3>";
                    echo "<p class='product-description'>" . htmlspecialchars($row['description']) . "</p>";
                    echo "<p class='product-price'>$" . number_format($row['price'], 2) . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>No products found.</p>";
            }
            ?>
        </div>
        <div style="text-align: right; margin-top: 20px;">
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>
    </div>


        <div class="products-grid">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='product-card'>";
                    echo "<h3 class='product-name'>" . htmlspecialchars($row['name']) . "</h3>";
                    echo "<p class='product-description'>" . htmlspecialchars($row['description']) . "</p>";
                    echo "<p class='product-price'>$" . number_format($row['price'], 2) . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>No products found.</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>