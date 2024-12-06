<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Products</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Cambria', serif;
            background-color: #f4f4f4;
        }

        .product-card {
            margin-bottom: 30px;
            border: 1px solid #ddd;
            border-radius: 12px;
            background-color: #fff;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .product-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .product-name {
            font-size: 1.2rem;
            font-weight: bold;
            margin: 10px;
            color: #333;
        }

        .product-price {
            font-size: 1rem;
            margin: 10px;
            color: #007bff;
        }

        .product-card:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
        }

        .product-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            gap: 20px;
            padding: 20px;
        }

        .product-card .btn {
            width: 100%;
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 12px;
            font-weight: bold;
            font-size: 1rem;
            border-radius: 8px;
            margin-top: 10px;
        }

        .product-card .btn:hover {
            background-color: #218838;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-5">Browse Our Products</h1>
        <div class="product-container">
            <?php 
            // Loop through 10 products
            for ($i = 1; $i <= 10; $i++) {
                $productName = "Watch $i";  // Name for each product
                $productPrice = "$" . (rand(50, 300)); // Random price between 50 and 300 for example
                echo '
                <div class="product-card col-md-3 col-sm-6">
                    <img src="images/prod' . $i . '.jpg" class="product-img" alt="Product ' . $i . '">
                    <div class="product-name">' . $productName . '</div>
                    <div class="product-price">' . $productPrice . '</div>
                    <button class="btn">Add to Cart</button>
                </div>';
            }
            ?>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
