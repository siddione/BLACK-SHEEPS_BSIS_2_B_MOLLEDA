<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santos de Cartier Medium Watch</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Cambria', serif;
            background: #f4f4f4;
            color: #333;
            margin: 0;
        }

        /* Navbar Styling */
        .navbar {
            background-color: #fff; /* White background */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 10px 30px; /* Added padding for spacing */
        }

        .navbar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .navbar a img {
            width: 120px;
            height: auto;
        }

        .brand-name {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            text-decoration: none;
            margin-right: 30px; /* Added space between elements */
        }

        .search-bar {
            max-width: 400px;
            width: 100%;
            margin-right: 20px;
        }

        .btn-search {
            background-color: #000; /* Black background */
            color: #fff;
            border: none;
            padding: 8px 20px;
            font-size: 1rem;
            border-radius: 50px; /* Oval shape */
            width: 120px; /* Adjust width for oval effect */
            height: 40px; /* Adjust height for oval effect */
        }

        .dropdown-menu {
            min-width: 200px;
        }

        .profile-icon {
            font-size: 1.5rem;
            color: #333;
            cursor: pointer;
        }

        .dropdown-item {
            font-size: 1rem;
            color: #333;
        }

        .dropdown-item:hover {
            background-color: #f8f9fa;
        }

        /* Product Section Styling */
        .product-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 30px;
            margin-top: 70px; /* Adjust for navbar */
        }

        .product-image {
            max-width: 500px;
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .product-details {
            max-width: 500px;
            width: 100%;
            padding-left: 30px;
        }

        .product-details h2 {
            font-size: 2rem;
            color: #000;
        }

        .product-details p {
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .product-price {
            font-size: 1.5rem;
            font-weight: bold;
            color: #d9534f;
            margin-bottom: 20px;
        }

        .quantity-selector {
            width: 100px;
            margin-bottom: 20px;
        }

        .btn {
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 8px;
            margin-right: 10px;
        }

        .btn-buy-now {
            background-color: #28a745;
            color: #fff;
        }

        .btn-add-to-cart {
            background-color: #ffc107;
            color: #fff;
        }

        .btn:hover {
            opacity: 0.9;
        }

        /* Other Products Section Styling */
        .other-products {
            padding: 50px 0;
            background-color: #fff;
        }

        .other-products h3 {
            text-align: center;
            margin-bottom: 30px;
        }

        .other-products .product-card {
            margin-bottom: 20px;
        }
        
        /* Ensuring uniform size for product images */
        .other-products .product-card img {
            width: 100%;
            height: 200px; /* Set a fixed height */
            object-fit: cover; /* Ensures the image covers the space without distortion */
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
         }


        .other-products .product-card .product-name {
            font-weight: bold;
            text-align: center;
        }

        /* Link Styling (Black and No Underline) */
        a {
            color: #333 !important;
            text-decoration: none !important;
        }

        a:hover {
            color: #333 !important;
            text-decoration: none !important;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .product-container {
                flex-direction: column;
                text-align: center;
            }

            .product-details {
                padding-left: 0;
                padding-top: 20px;
            }

            .product-image {
                max-width: 80%;
            }

            .navbar-content {
                flex-direction: column;
                align-items: flex-start;
            }

            .search-bar {
                max-width: 250px;
            }

            .btn-search {
                width: 100%;
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>

<!-- Navigation Bar -->
<nav class="navbar">
    <div class="navbar-content">
        <a href="homepage.php">
            <img src="oclocks.png" alt="o'clocks Logo">
        </a>
        <span class="brand-name">o'clocks</span>
        <input class="search-bar form-control" type="text" placeholder="Search products...">
        <!-- Search Button -->
        <button class="btn-search">Search</button>

        <!-- Profile Dropdown -->
        <div class="dropdown">
            <a class="profile-icon dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user-circle"></i> <!-- Profile icon -->
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="#">My Profile</a></li>
                <li><a class="dropdown-item" href="#">My Orders</a></li>
                <li><a class="dropdown-item" href="#">My Messages</a></li>
                <li><a class="dropdown-item" href="#">Switch Accounts</a></li>
                <li><a class="dropdown-item" href="#">Sign Out</a></li>
                <li><a class="dropdown-item" href="aboutus.php">About Us</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Product Section -->
<div class="container">
    <div class="product-container">
        <!-- Product Image -->
        <div>
            <img src="prod1.jpg" alt="Product Image" class="product-image">
        </div>

        <!-- Product Details -->
        <div class="product-details">
            <h2>Santos de Cartier Medium Watch</h2>
            <p class="product-description">Santos de Cartier watch, medium model, mechanical movement with automatic winding 1847 MC. Steel case, 7-sided crown with a synthetic faceted blue spinel, graduated green dial, polished steel sword-shaped hands with luminescent material, sapphire crystal. Steel bracelet with SmartLink adjustment system. Second strap in green alligator skin, with interchangeable steel folding buckle. Both are fitted with the QuickSwitch interchangeable system. Case width: 35.1 mm, thickness: 8.83 mm. Water-resistant up to 10 bar (approx. 100 metres).</p>
            <p class="product-price">$456,774.95</p>

            <!-- Quantity Selector -->
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <select id="quantity" class="form-control quantity-selector">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>

            <!-- Buttons -->
            <div>
                <button class="btn btn-buy-now">Buy Now</button>
                <button class="btn btn-add-to-cart">Add to Cart</button>
            </div>
        </div>
    </div>
</div>

<!-- Other Products Section -->
<div class="other-products">
    <h3>Other Products You May Like</h3>
    <div class="container">
        <div class="row">
            <!-- Product 2 -->
            <div class="col-lg-3 col-md-4 col-sm-6 product-card">
                <a href="product2.php"><img src="prod2.jpg" alt="Product 2" class="img-fluid"></a>
                <div class="product-name">Cartier Baignoire</div>
            </div>

            <!-- Product 3 -->
            <div class="col-lg-3 col-md-4 col-sm-6 product-card">
                <a href="product3.php"><img src="prod3.jpg" alt="Product 3" class="img-fluid"></a>
                <div class="product-name">Cartier Drive de Cartier</div>
            </div>

            <!-- Product 4 -->
            <div class="col-lg-3 col-md-4 col-sm-6 product-card">
                <a href="product4.php"><img src="prods4.jpg" alt="Product 4" class="img-fluid"></a>
                <div class="product-name">Cartier Silver Delux Vintage</div>
            </div>

            <!-- Product 5 -->
            <div class="col-lg-3 col-md-4 col-sm-6 product-card">
                <a href="product5.php"><img src="prod5.jpg" alt="Product 5" class="img-fluid"></a>
                <div class="product-name">Casio Vintage</div>
            </div>

            <!-- Product 6 -->
            <div class="col-lg-3 col-md-4 col-sm-6 product-card">
                <a href="product6.php"><img src="prod6.jpg" alt="Product 6" class="img-fluid"></a>
                <div class="product-name">Rolex Day-Date 40</div>
            </div>

            <!-- Product 7 -->
            <div class="col-lg-3 col-md-4 col-sm-6 product-card">
                <a href="product7.php"><img src="prod7.jpg" alt="Product 7" class="img-fluid"></a>
                <div class="product-name">Rolex Milgauss</div>
            </div>

            <!-- Product 8 -->
            <div class="col-lg-3 col-md-4 col-sm-6 product-card">
                <a href="product8.php"><img src="prod8.jpg" alt="Product 8" class="img-fluid"></a>
                <div class="product-name">Rolex Lady-Datejust</div>
            </div>

            <!-- Product 9 -->
            <div class="col-lg-3 col-md-4 col-sm-6 product-card">
                <a href="product9.php"><img src="prod9.jpg" alt="Product 9" class="img-fluid"></a>
                <div class="product-name">Rolex Oyster Perpetual</div>
            </div>

            <!-- Product 10 -->
            <div class="col-lg-3 col-md-4 col-sm-6 product-card">
                <a href="product10.php"><img src="prods10.jpg" alt="Product 10" class="img-fluid"></a>
                <div class="product-name">Cartier Ronde Louis Cartier</div>
            </div>
        </div>
    </div>
</div>

<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>